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
     * @param Transactions[] $transactions
     * @param Links[] $links
     */
    public function __construct()
    {
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
    
    public function __construct(
        string $id,
        string $status,
        string $payerEmail,
        PayerName $payerName,
        AmountWithBreakdown $amountWithBreakdown,
        string $time
        ) {
            $this->id = $id;
            $this->status = $status;
            $this->payerEmail = $payerEmail;
            $this->payerName = $payerName;
            $this->amountWithBreakdown = $amountWithBreakdown;
            $this->time = $time;
    }
}

class PayerName
{
    public string $givenName;
    public string $surname;
    
    public function __construct(string $givenName, string $surname)
    {
        $this->givenName = $givenName;
        $this->surname = $surname;
    }
}

class AmountWithBreakdown
{
    public GrossAmount $grossAmount;
    public FeeAmount $feeAmount;
    public NetAmount $netAmount;
    
    public function __construct(
        GrossAmount $grossAmount,
        FeeAmount $feeAmount,
        NetAmount $netAmount
        ) {
            $this->grossAmount = $grossAmount;
            $this->feeAmount = $feeAmount;
            $this->netAmount = $netAmount;
    }
}

class GrossAmount
{
    public string $currencyCode;
    public string $value;
    
    public function __construct(string $currencyCode, string $value)
    {
        $this->currencyCode = $currencyCode;
        $this->value = $value;
    }
}

class FeeAmount
{
    public string $currencyCode;
    public string $value;
    
    public function __construct(string $currencyCode, string $value)
    {
        $this->currencyCode = $currencyCode;
        $this->value = $value;
    }
}

class NetAmount
{
    public string $currencyCode;
    public string $value;
    
    public function __construct(string $currencyCode, string $value)
    {
        $this->currencyCode = $currencyCode;
        $this->value = $value;
    }
}

class Links
{
    public string $href;
    public string $rel;
    public string $method;
    
    public function __construct(
        string $href,
        string $rel,
        string $method
        ) {
            $this->href = $href;
            $this->rel = $rel;
            $this->method = $method;
    }
}