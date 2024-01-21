<?php
namespace Paypal\Sdk;

use Paypal\Sdk\Models\PaypalInfo;
use Laminas\Hydrator;



/**
 *
 * @author PUTTINI2
 *        
 */
class Paypal
{

    protected ?PaypalInfo $paypalInfo = null;        
    protected ?CurlClient $curlClient = null;
    
    const TOKEN = [
        "url" => "/v1/oauth2/token", 
        "content-type" => "application/x-www-form-urlencoded"        
    ];
    
    public function __construct($configFile = null)
    {
        if(empty($configFile)) {
            throw new \Exception("Verifica di aver indicato il file di configurazione per la classa PaypalSdk");
        }
        $config = $ini = parse_ini_file($configFile, true);        
        if( getenv("APPLICATION_ENV") == "development") {
            $config = array_merge($config["production"], $config["development"]);
        }                
        $hydrator = new Hydrator\ClassMethodsHydrator();        
        $this->paypalInfo = $hydrator->hydrate($config, new PaypalInfo());
        $this->curlClient = new CurlClient();        
    }
    
    public function __call($functionName, $data) {
        $arr = constant("self::".strtoupper($functionName));
        $callMethod = $this->paypalInfo->getBaseUrl(). $arr["url"];
        if( $functionName == "token") {
            $this->curlClient->setUsername($this->paypalInfo->getClientId());
            $this->curlClient->setPassword($this->paypalInfo->getClientSecret());
        }
        $esito = $this->curlClient->callAPI("POST", $callMethod , $arr["content-type"], $data[0]);
        echo "<pre>";
        print_r( $esito);
    }
    

}

