<?php
namespace Paypal\Sdk\Models\Products;

/**
 *
 * @author alfon
 *        
 */
class ProductsList
{
    public ?Consumer $consumer;
    
    public ?Merchant $merchant;
    
    public ?ApiCaller $apiCaller;
    
    /** @var string[]|null */
    public ?array $scopes;
    
    /**
     * @param string[]|null $scopes
     */
    public function __construct(
        ) {
    }
    
    public function getConsumer(): ?Consumer
    {
        return $this->consumer;
    }
    
    public function getMerchant(): ?Merchant
    {
        return $this->merchant;
    }
    
    public function getApiCaller(): ?ApiCaller
    {
        return $this->apiCaller;
    }
    
    /**
     * @return string[]|null
     */
    public function getScopes(): ?array
    {
        return $this->scopes;
    }
    
    public function setConsumer(?Consumer $consumer): self
    {
        $this->consumer = $consumer;
        return $this;
    }
    
    public function setMerchant(?Merchant $merchant): self
    {
        $this->merchant = $merchant;
        return $this;
    }
    
    public function setApiCaller(?ApiCaller $apiCaller): self
    {
        $this->apiCaller = $apiCaller;
        return $this;
    }
    
    /**
     * @param string[]|null $scopes
     */
    public function setScopes(?array $scopes): self
    {
        $this->scopes = $scopes;
        return $this;
    }
}

class Consumer
{
    public ?int $accountNumber;
    
    public ?string $merchantId;
    
    public function __construct(?int $accountNumber, ?string $merchantId)
    {
        $this->accountNumber = $accountNumber;
        $this->merchantId = $merchantId;
    }
    
    public function getAccountNumber(): ?int
    {
        return $this->accountNumber;
    }
    
    public function getMerchantId(): ?string
    {
        return $this->merchantId;
    }
    
    public function setAccountNumber(?int $accountNumber): self
    {
        $this->accountNumber = $accountNumber;
        return $this;
    }
    
    public function setMerchantId(?string $merchantId): self
    {
        $this->merchantId = $merchantId;
        return $this;
    }
}

class Merchant
{
    public ?int $accountNumber;
    
    public ?string $merchantId;
    
    public function __construct(?int $accountNumber, ?string $merchantId)
    {
        $this->accountNumber = $accountNumber;
        $this->merchantId = $merchantId;
    }
    
    public function getAccountNumber(): ?int
    {
        return $this->accountNumber;
    }
    
    public function getMerchantId(): ?string
    {
        return $this->merchantId;
    }
    
    public function setAccountNumber(?int $accountNumber): self
    {
        $this->accountNumber = $accountNumber;
        return $this;
    }
    
    public function setMerchantId(?string $merchantId): self
    {
        $this->merchantId = $merchantId;
        return $this;
    }
}


