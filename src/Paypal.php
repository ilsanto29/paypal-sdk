<?php
namespace Paypal\Sdk;

use Paypal\Sdk\Models\PaypalInfo;
use Paypal\Sdk\Response\TokenResponse;
use Paypal\Sdk\Response\OrderResponse;
use Laminas\Hydrator\ClassMethodsHydrator;
use Laminas\Hydrator\Strategy\SerializableStrategy;
use Laminas\Serializer\Adapter\Json;
use Paypal\Sdk\Response\OrderErrorResponse;


/**
 *
 * @author PUTTINI2
 *        
 */
class Paypal
{

    protected ?PaypalInfo $paypalInfo = null;        
    protected ?CurlClient $curlClient = null;
    protected $clientGuzzleHttp = null;
    
    protected $esito = null;
    protected $message = null;
    
    const TOKEN = [
        "url" => "/v1/oauth2/token", 
        "content-type" => "application/x-www-form-urlencoded",
        "method" => "POST"
    ];
    
    const ORDER = [
        "url" => "/v2/checkout/orders",
        "content-type" => "application/json",
        "method" => "POST"
    ];
    
    const ORDERCAPTURE = [
        "url" => "/v2/checkout/orders/%s/capture",
        "content-type" => "application/json",
        "method" => "POST"
    ];
    
    
    
    const CATALOGS_PRODUCTS = [
        "url" => "/v1/catalogs/products",
        "content-type" => "application/json",
        "method" => "POST"
    ];
    
    const CATALOGS_PRODUCTS_LIST = [
        "url" => "/v1/catalogs/products",
        "content-type" => "application/json",
        "method" => "GET"
    ];
    
    
    /**
     * PLANS
     */
    const CREATE_PLAN = [
        "url" => "/v1/billing/plans",
        "content-type" => "application/json",
        "method" => "POST"
    ];

    const PLANS_LIST= [
        "url" => "/v1/billing/plans",
        "content-type" => "application/json",
        "method" => "GET"
    ];
    
    const PLAN_DETAILS= [
        "url" => "/v1/billing/plans/%s",
        "content-type" => "application/json",
        "method" => "GET"
    ];
    
    /**
     * SUBSCRIBE PLAN
     * @param unknown $configFile
     */
    
    const SUBSCRIBE_PLAN= [
        "url" => "/v1/billing/subscriptions",
        "content-type" => "application/json",
        "method" => "POST"
    ];

    const SUBSCRIBE_GET_TRANSACTION = [
        "url" => "/v1/billing/subscriptions/%s/transactions",
        "content-type" => "application/json",
        "method" => "GET"
    ];

    const SUBSCRIBE_GET_DETAILS = [
        "url" => "/v1/billing/subscriptions/%s",
        "content-type" => "application/json",
        "method" => "GET"
    ];
    
    public function __construct($configFile = null)
    {
        if(empty($configFile) || !file_exists($configFile)) {
            throw new \Exception("Verifica di aver indicato il file di configurazione per la classa PaypalSdk");
        }
        $config = $ini = parse_ini_file($configFile, true);        
        if( getenv("APPLICATION_ENV") == "development") {
            $config = array_merge($config["production"], $config["development"]);
        }                
        $hydrator = new ClassMethodsHydrator();    
        $this->paypalInfo = $hydrator->hydrate($config, new PaypalInfo());
        $this->curlClient = new CurlClient();
        
        /**
         * 
         * @var \Paypal\Sdk\Paypal $clientGuzzleHttp
         */
        $this->clientGuzzleHttp = new \GuzzleHttp\Client([
            'base_uri' => $this->paypalInfo->getBaseUrl(),
            'auth' => [
                $this->paypalInfo->getClientId(), $this->paypalInfo->getClientSecret()
            ],
            'defaults'      => [
                'auth'  => [ $this->paypalInfo->getClientId(), $this->paypalInfo->getClientSecret() ],
            ],
        ]);
    }
    
    public function token($data) {
        $arr = self::TOKEN;
        $callMethod = $arr["url"];
        //$this->curlClient->setUsername($this->paypalInfo->getClientId());
        //$this->curlClient->setPassword($this->paypalInfo->getClientSecret());
        $header = [
            'headers' => [
                'Content-Type' => $arr["content-type"],
                'Accept' => 'application/json',                
                'Accept-Language' => 'en_US'
            ],
            'form_params' => $data
        ];          
        /**
         * 
         * @var Ambiguous $body
         */
        try {
            $body = $this->callApi(
                "POST", 
                $callMethod , 
                $header, 
                $data
            );
        } catch(Exception $e) {
            throw $e;  
        }
                
        
        $strategy = new SerializableStrategy(
            new Json()
        );        
        $bodyArr = $strategy->hydrate($body);        
        $hydrator = new ClassMethodsHydrator();
        $tokenResponse = $hydrator->hydrate($bodyArr, new TokenResponse());
        $this->curlClient->setUsername(null);
        $this->setEsito(true);
        $this->setMessage($tokenResponse);
        return $this;
    }
    
    public function getOrderStatus($headers = null, $ordersId = null) {
        $arr = self::ORDER;
        $callMethod = $arr["url"] . "/" . $ordersId;
        try {
            $response = $this->callApi(
                            "GET",
                            $callMethod,                    
                            $headers,
                            null
                        );
        } catch(Exception $e) {
            throw new \RuntimeException($e->getMessage(), $e->getCode());
        }

        if( $response ) {
            $strategy = new SerializableStrategy(
                new Json()
            );            
            $bodyArr = $strategy->hydrate($response);        
            $hydrator = new ClassMethodsHydrator();
            $orderStatusResponse = $hydrator->hydrate($bodyArr, new OrderResponse());
            $this->setMessage($orderStatusResponse);
        }
        return $this;
    }
    
    
    public function orderCapture($headers = null, $ordersId = null) {
        $arr = self::ORDERCAPTURE;
        $callMethod = $arr["url"];
        $callMethod = sprintf($callMethod, $ordersId);
        try {
            $response = $this->callApi(
                    "POST",
                    $callMethod,
                    $headers,
                    null
                );
        } catch(Exception $e) {            
            throw new \RuntimeException($e->getMessage(), $e->getCode());
        }
        if( $response ) {
            $strategy = new SerializableStrategy(
                new Json()
                );
            
            $bodyArr = $strategy->hydrate($response);
            $hydrator = new ClassMethodsHydrator();
            $orderStatusResponse = $hydrator->hydrate($bodyArr, new OrderResponse());
            $this->setMessage($orderStatusResponse);
        }
        
        return $this;
    }
    
    public function __call($functionName, $data) {

        $arr = constant("self::".strtoupper($functionName));        
        $callMethod = $arr["url"];
        if(!empty( $data[3] )) {
            $callMethod = sprintf($callMethod, $data[3] );
        }
        
        if(!empty( $data[2] )) {
            $callMethod .= (strpos($callMethod, '?') ? '&' : '?') . http_build_query($data[2]);
        }
        try {
            $debug = false;
            if( strtoupper($functionName) == "SUBSCRIBE_GET_TRANSACTION") {
                //echo "$functionName $callMethod"; die();
            }
            
            $esito = $this->callApi($arr["method"], $callMethod , $data[0], $data[1], $debug);
        } catch(Exception $e) {            
            throw new \Exception($e);
        }     
        
        if( $esito ) {
            $strategy = new SerializableStrategy(
                new Json()
                );
            
            $bodyArr = $strategy->hydrate($esito);            
            $hydrator = new ClassMethodsHydrator();
            $className = __NAMESPACE__ . "\\Response\\". ucfirst($functionName) . "Response";
            try {
                $response = $hydrator->hydrate($bodyArr, new $className);
            } catch(Exception $e) {
                throw new \Exception($e);
            }   
            $this->setMessage($response);
            $this->setEsito(true);
        }
        return $this;
    }
    
    
    public function callApi(
        $method = "POST",
        $url = NULL,        
        $headers = [],
        $data = NULL,
        $debug = false
        )
        
    {   

        $this->setEsito(false);
        try {
            
            $response = $this->clientGuzzleHttp->request(
                $method,
                $url,
                $headers,
                json_encode($data)
            );  
            $this->setEsito(true);
            if( $debug ) {
                echo "<pre>";
                //print_r( json_decode($response->getBody()->getContents()));
            }
            
        } catch (\GuzzleHttp\Exception\ServerException $e) {
            if ($e->hasResponse()) {
                return response()->json(['msg' => 'Server Error', 'error' => $e->getResponse()], 500);
            }
            return response()->json([
                'msg' => 'Server Error',
                'request' => $e->getRequest(),
                $e->hasResponse() ? $e->getResponse() : ""
            ]);
            
            // return response()->json(['msg' => 'Client Error', 'error' => $e->getRequest()]);
        } catch (\GuzzleHttp\Exception\ClientException $e) {
            if ($e->hasResponse()) {
                $response = json_decode($e->getResponse()->getBody()->getContents(), true);
                $hydrator = new ClassMethodsHydrator();
                $orderErrorResponse = $hydrator->hydrate($response, new OrderErrorResponse());
                $this->setMessage($orderErrorResponse);
                return false;
            }
        }
        catch (\GuzzleHttp\Exception\BadResponseException $e){
            return response()->json(['error' => $e]);
        }   
        $ret = ($response->getBody()->getContents());
        if( $debug ) {
            echo "ok";
            print_r( $ret );
            echo "ok fuori";
            die();
        }
        
        return $ret; 
    }
    
    /**
     * @return multitype:string 
     */
    public function getEsito()
    {
        return $this->esito;
    }

    /**
     * @return multitype:string 
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param multitype:string  $esito
     */
    public function setEsito($esito)
    {
        $this->esito = $esito;
    }

    /**
     * @param multitype:string  $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    
    

}

