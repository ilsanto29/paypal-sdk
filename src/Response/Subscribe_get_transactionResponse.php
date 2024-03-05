<?php
namespace Paypal\Sdk\Response;

/**
 *
 * @author alfon
 *        
 */
class Subscribe_get_transactionResponse
{
    /** @var Transactions[] */
    public array $transactions;
    /** @var Links[] */
    public array $links;
    
    /**
     * @return Transactions[]
     */
    public function getTransactions(): array
    {
        return $this->transactions;
    }
    
    /**
     * @return Links[]
     */
    public function getLinks(): array
    {
        return $this->links;
    }
    
    /**
     * @param Transactions[] $transactions
     */
    public function setTransactions(array $transactions): self
    {
        $this->transactions = $transactions;
        return $this;
    }
    
    /**
     * @param Links[] $links
     */
    public function setLinks(array $links): self
    {
        $this->links = $links;
        return $this;
    }
}

class Transactions
{
    public string $id;
    public string $status;
    public string $payerEmail;
    public PayerName $payerName;
    public AmountWithBreakdown $amountWithBreakdown;
    public string $time;
    
    public function getId(): string
    {
        return $this->id;
    }
    
    public function getStatus(): string
    {
        return $this->status;
    }
    
    public function getPayerEmail(): string
    {
        return $this->payerEmail;
    }
    
    public function getPayerName(): PayerName
    {
        return $this->payerName;
    }
    
    public function getAmountWithBreakdown(): AmountWithBreakdown
    {
        return $this->amountWithBreakdown;
    }
    
    public function getTime(): string
    {
        return $this->time;
    }
    
    public function setId(string $id): self
    {
        $this->id = $id;
        return $this;
    }
    
    public function setStatus(string $status): self
    {
        $this->status = $status;
        return $this;
    }
    
    public function setPayerEmail(string $payerEmail): self
    {
        $this->payerEmail = $payerEmail;
        return $this;
    }
    
    public function setPayerName(PayerName $payerName): self
    {
        $this->payerName = $payerName;
        return $this;
    }
    
    public function setAmountWithBreakdown(AmountWithBreakdown $amountWithBreakdown): self
    {
        $this->amountWithBreakdown = $amountWithBreakdown;
        return $this;
    }
    
    public function setTime(string $time): self
    {
        $this->time = $time;
        return $this;
    }
}

class PayerName
{
    public string $givenName;
    public string $surname;
    
    public function getGivenName(): string
    {
        return $this->givenName;
    }
    
    public function getSurname(): string
    {
        return $this->surname;
    }
    
    public function setGivenName(string $givenName): self
    {
        $this->givenName = $givenName;
        return $this;
    }
    
    public function setSurname(string $surname): self
    {
        $this->surname = $surname;
        return $this;
    }
}

class AmountWithBreakdown
{
    public GrossAmount $grossAmount;
    public FeeAmount $feeAmount;
    public NetAmount $netAmount;
    
    public function getGrossAmount(): GrossAmount
    {
        return $this->grossAmount;
    }
    
    public function getFeeAmount(): FeeAmount
    {
        return $this->feeAmount;
    }
    
    public function getNetAmount(): NetAmount
    {
        return $this->netAmount;
    }
    
    public function setGrossAmount(GrossAmount $grossAmount): self
    {
        $this->grossAmount = $grossAmount;
        return $this;
    }
    
    public function setFeeAmount(FeeAmount $feeAmount): self
    {
        $this->feeAmount = $feeAmount;
        return $this;
    }
    
    public function setNetAmount(NetAmount $netAmount): self
    {
        $this->netAmount = $netAmount;
        return $this;
    }
}

class GrossAmount
{
    public string $currencyCode;
    public string $value;
    
    public function getCurrencyCode(): string
    {
        return $this->currencyCode;
    }
    
    public function getValue(): string
    {
        return $this->value;
    }
    
    public function setCurrencyCode(string $currencyCode): self
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }
    
    public function setValue(string $value): self
    {
        $this->value = $value;
        return $this;
    }
}

class FeeAmount
{
    public string $currencyCode;
    public string $value;
    
    public function getCurrencyCode(): string
    {
        return $this->currencyCode;
    }
    
    public function getValue(): string
    {
        return $this->value;
    }
    
    public function setCurrencyCode(string $currencyCode): self
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }
    
    public function setValue(string $value): self
    {
        $this->value = $value;
        return $this;
    }
}

class NetAmount
{
    public string $currencyCode;
    public string $value;
    
    public function getCurrencyCode(): string
    {
        return $this->currencyCode;
    }
    
    public function getValue(): string
    {
        return $this->value;
    }
    
    public function setCurrencyCode(string $currencyCode): self
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }
    
    public function setValue(string $value): self
    {
        $this->value = $value;
        return $this;
    }
}

class Links
{
    public string $href;
    public string $rel;
    public string $method;
    
    public function getHref(): string
    {
        return $this->href;
    }
    
    public function getRel(): string
    {
        return $this->rel;
    }
    
    public function getMethod(): string
    {
        return $this->method;
    }
    
    public function setHref(string $href): self
    {
        $this->href = $href;
        return $this;
    }
    
    public function setRel(string $rel): self
    {
        $this->rel = $rel;
        return $this;
    }
    
    public function setMethod(string $method): self
    {
        $this->method = $method;
        return $this;
    }
}