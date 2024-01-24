<?php
namespace Paypal\Sdk\Response;
class TokenResponse
{
	/**
	 * @var string|null
	 */
	public ?string $scope;

	/**
	 * @var string|null
	 */
	public ?string $accessToken;

	/**
	 * @var string|null
	 */
	public ?string $tokenType;

	/**
	 * @var string|null
	 */
	public ?string $appId;

	/**
	 * @var int|null
	 */
	public ?int $expiresIn;

	/**
	 * @var string[]|null
	 */
	public ?array $supportedAuthnSchemes;

	/**
	 * @var string|null
	 */
	public ?string $nonce;

	/**
	 * @var ClientMetadata|null
	 */
	public $clientMetadata;


	/**
	 * @return string|null
	 */
	public function getScope(): ?string
	{
		return $this->scope;
	}

	/**
	 * @return string|null
	 */
	public function getAccessToken(): ?string
	{
		return $this->accessToken;
	}

	/**
	 * @return string|null
	 */
	public function getTokenType(): ?string
	{
		return $this->tokenType;
	}

	/**
	 * @return string|null
	 */
	public function getAppId(): ?string
	{
		return $this->appId;
	}

	/**
	 * @return int|null
	 */
	public function getExpiresIn(): ?int
	{
		return $this->expiresIn;
	}

	/**
	 * @return string[]|null
	 */
	public function getSupportedAuthnSchemes(): ?array
	{
		return $this->supportedAuthnSchemes;
	}

	/**
	 * @return string|null
	 */
	public function getNonce(): ?string
	{
		return $this->nonce;
	}

	/**
	 * @return ClientMetadata|null
	 */
	public function getClientMetadata(): ?ClientMetadata
	{
		return $this->clientMetadata;
	}
    /**
     * @param Ambigous <string, NULL> $scope
     */
    public function setScope($scope)
    {
        $this->scope = $scope;
    }

    /**
     * @param Ambigous <string, NULL> $accessToken
     */
    public function setAccessToken($accessToken)
    {
        $this->accessToken = $accessToken;
    }

    /**
     * @param Ambigous <string, NULL> $tokenType
     */
    public function setTokenType($tokenType)
    {
        $this->tokenType = $tokenType;
    }

    /**
     * @param Ambigous <string, NULL> $appId
     */
    public function setAppId($appId)
    {
        $this->appId = $appId;
    }

    /**
     * @param Ambigous <number, NULL> $expiresIn
     */
    public function setExpiresIn($expiresIn)
    {
        $this->expiresIn = $expiresIn;
    }

    /**
     * @param Ambigous <multitype:string , NULL> $supportedAuthnSchemes
     */
    public function setSupportedAuthnSchemes($supportedAuthnSchemes)
    {
        $this->supportedAuthnSchemes = $supportedAuthnSchemes;
    }

    /**
     * @param Ambigous <string, NULL> $nonce
     */
    public function setNonce($nonce)
    {
        $this->nonce = $nonce;
    }

    /**
     * @param  ClientMetadata $clientMetadata
     * @return TokenResponse
     */
    public function setClientMetadata($clientMetadata)
    {
        $this->clientMetadata = $clientMetadata;
        return $this;
    }

	
	
	
	
}

