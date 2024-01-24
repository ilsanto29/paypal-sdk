<?php
namespace Paypal\Sdk;

/**
 *
 * @author alfon
 *        
 */
class CurlClient
{

    protected $curl = null;
    
    protected $username = null;
    protected $password = null;
    
    // TODO - Insert your code here

    /**
     */
    public function __construct()
    {        
        // TODO - Insert your code here
    }
    
    
    
    public function callApi(
        $method = "POST",
        $url = NULL,
        $contentType = "application/json",
        $data = NULL,
        $header = [] 
    )
    {
        try {
            $response = $this->clientGuzzleHttp->request(
                $method,
                $url,
                [
                    'headers' => $headers
                ]
                );
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
                return $orderErrorResponse;
            }
        }
        catch (\GuzzleHttp\Exception\BadResponseException $e){
            return response()->json(['error' => $e]);
        }        
    }
    
    /**
     * 
     * @param string $method
     * @param string $url
     * @param string $contentType
     * @param array $data
     * @param string $token
     * @return string|boolean
     */
    public function callAPI2(
        $method = "POST", 
        $url = NULL, 
        $contentType = "application/json", 
        $data = NULL, 
        $header = [] )
    {
        $headersResponse = [];
        $this->curl = curl_init();
        $headers = [];
        if( !empty($contentType)) {
            $headers = [
                "Content-Type: $contentType"                
            ];
        }
        if( !empty( $header ) ) {
            $headers = array_merge($headers, $header);
        }
        switch ($method){
            case "POST":
                curl_setopt($this->curl, CURLOPT_POST, 1);
                if ($data) {                   
                    $fields_string = http_build_query((array)$data);
                    curl_setopt($this->curl, CURLOPT_POSTFIELDS, $fields_string);                    
                }
                break;
            case "POSTJSON":
                curl_setopt($this->curl, CURLOPT_POST, 1);
                if ($data) {
                    $fields_string = json_encode((array)$data);
                    curl_setopt($this->curl, CURLOPT_POSTFIELDS, $fields_string);
                }
                break;                
            case "PUT":
                curl_setopt($this->curl, CURLOPT_CUSTOMREQUEST, "PUT");
                if ($data)
                    curl_setopt($this->curl, CURLOPT_POSTFIELDS, $data);
                    break;
            default:
                curl_setopt($this->curl, CURLOPT_POST, 0);
                if ($data)
                    $url = sprintf("%s?%s", $url, http_build_query($data));                    
        }
        
        if( !empty( $this->getUsername() ) ) {
            curl_setopt($this->curl, CURLOPT_USERPWD, $this->getUsername() . ":" . $this->getPassword());
        }
        curl_setopt($this->curl, CURLOPT_URL, $url);
        curl_setopt($this->curl, CURLOPT_HEADER, 0);
        curl_setopt($this->curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($this->curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($this->curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($this->curl, CURLOPT_VERBOSE, 1);
        curl_setopt($this->curl, CURLOPT_FAILONERROR, true);
        // this function is called by curl for each header received
        $result = curl_exec($this->curl);        
        if(!$result){
            $error_code = curl_errno($this->curl);
            $error_msg = curl_error($this->curl);            
        }        
        $this->closeCurl();
        if( !empty($error_code)) {
            print_r( $result );
            //throw new \RuntimeException("Errore esecuzione curl: $error_msg", $error_code );
        }
        return $result;
    }
    
    public function closeCurl() {
        curl_close($this->curl);
    }
    
    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    
    
}

