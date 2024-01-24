<?php
namespace Paypal\Sdk\Response;

/**
 *
 * @author alfon
 *        
 */
class OrderResponse
{
    /**
     * @var string|null
     */
    public ?string $id;
    
    /**
     * @var string|null
     */
    public ?string $intent;
    
    /**
     * @var string|null
     */
    public ?string $status;
    
    /**
     * @var purchase_units[]|null
     */
    public ?array $purchase_units;
    
    /**
     * @var string|null
     */
    public ?string $create_time;
    
    /**
     * @var links[]|null
     */
    public ?array $links;
    
    /**
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    
    /**
     * @return string|null
     */
    public function getIntent(): ?string
    {
        return $this->intent;
    }
    
    /**
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }
    
    /**
     * @return purchase_units[]|null
     */
    public function getPurchaseUnits(): ?array
    {
        return $this->purchase_units;
    }
    
    /**
     * @return string|null
     */
    public function getCreateTime(): ?string
    {
        return $this->create_time;
    }
    
    /**
     * @return links[]|null
     */
    public function getLinks(): ?array
    {
        return $this->links;
    }
    
    /**
     * @param string|null $id
     * @return self
     */
    public function setId(?string $id): self
    {
        $this->id = $id;
        return $this;
    }
    
    /**
     * @param string|null $intent
     * @return self
     */
    public function setIntent(?string $intent): self
    {
        $this->intent = $intent;
        return $this;
    }
    
    /**
     * @param string|null $status
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }
    
    /**
     * @param purchase_units[]|null $purchase_units
     * @return self
     */
    public function setPurchaseUnits(?array $purchase_units): self
    {
        $this->purchase_units = $purchase_units;
        return $this;
    }
    
    /**
     * @param string|null $create_time
     * @return self
     */
    public function setCreateTime(?string $create_time): self
    {
        $this->create_time = $create_time;
        return $this;
    }
    
    /**
     * @param links[]|null $links
     * @return self
     */
    public function setLinks(?array $links): self
    {
        $this->links = $links;
        return $this;
    }
    
    /**
     * @param array $data
     * @return self
     */
    public static function fromJson(array $data): self
    {
        $instance = new self();
        $instance->setId($data['id'] ?? null);
        $instance->setIntent($data['intent'] ?? null);
        $instance->setStatus($data['status'] ?? null);
        $instance->setPurchaseUnits(($data['purchase_units'] ?? null) !== null ? array_map(static function($data) {
            return purchase_units::fromJson($data);
        }, $data['purchase_units']) : null);
            $instance->setCreateTime($data['create_time'] ?? null);
            $instance->setLinks(($data['links'] ?? null) !== null ? array_map(static function($data) {
                return links::fromJson($data);
            }, $data['links']) : null);
                return $instance;
    }
}

class purchase_units
{
    /**
     * @var string|null
     */
    public ?string $reference_id;
    
    /**
     * @var amount|null
     */
    public ?amount $amount;
    
    /**
     * @var payee|null
     */
    public ?payee $payee;
    
    /**
     * @var items[]|null
     */
    public ?array $items;
    
    /**
     * @return string|null
     */
    public function getReferenceId(): ?string
    {
        return $this->reference_id;
    }
    
    /**
     * @return amount|null
     */
    public function getAmount(): ?amount
    {
        return $this->amount;
    }
    
    /**
     * @return payee|null
     */
    public function getPayee(): ?payee
    {
        return $this->payee;
    }
    
    /**
     * @return items[]|null
     */
    public function getItems(): ?array
    {
        return $this->items;
    }
    
    /**
     * @param string|null $reference_id
     * @return self
     */
    public function setReferenceId(?string $reference_id): self
    {
        $this->reference_id = $reference_id;
        return $this;
    }
    
    /**
     * @param amount|null $amount
     * @return self
     */
    public function setAmount(?amount $amount): self
    {
        $this->amount = $amount;
        return $this;
    }
    
    /**
     * @param payee|null $payee
     * @return self
     */
    public function setPayee(?payee $payee): self
    {
        $this->payee = $payee;
        return $this;
    }
    
    /**
     * @param items[]|null $items
     * @return self
     */
    public function setItems(?array $items): self
    {
        $this->items = $items;
        return $this;
    }
    
    /**
     * @param array $data
     * @return self
     */
    public static function fromJson(array $data): self
    {
        $instance = new self();
        $instance->setReferenceId($data['reference_id'] ?? null);
        $instance->setAmount(($data['amount'] ?? null) !== null ? amount::fromJson($data['amount']) : null);
        $instance->setPayee(($data['payee'] ?? null) !== null ? payee::fromJson($data['payee']) : null);
        $instance->setItems(($data['items'] ?? null) !== null ? array_map(static function($data) {
            return items::fromJson($data);
        }, $data['items']) : null);
            return $instance;
    }
}

class amount
{
    /**
     * @var string|null
     */
    public ?string $currency_code;
    
    /**
     * @var string|null
     */
    public ?string $value;
    
    /**
     * @var breakdown|null
     */
    public ?breakdown $breakdown;
    
    /**
     * @return string|null
     */
    public function getCurrencyCode(): ?string
    {
        return $this->currency_code;
    }
    
    /**
     * @return string|null
     */
    public function getValue(): ?string
    {
        return $this->value;
    }
    
    /**
     * @return breakdown|null
     */
    public function getBreakdown(): ?breakdown
    {
        return $this->breakdown;
    }
    
    /**
     * @param string|null $currency_code
     * @return self
     */
    public function setCurrencyCode(?string $currency_code): self
    {
        $this->currency_code = $currency_code;
        return $this;
    }
    
    /**
     * @param string|null $value
     * @return self
     */
    public function setValue(?string $value): self
    {
        $this->value = $value;
        return $this;
    }
    
    /**
     * @param breakdown|null $breakdown
     * @return self
     */
    public function setBreakdown(?breakdown $breakdown): self
    {
        $this->breakdown = $breakdown;
        return $this;
    }
    
    /**
     * @param array $data
     * @return self
     */
    public static function fromJson(array $data): self
    {
        $instance = new self();
        $instance->setCurrencyCode($data['currency_code'] ?? null);
        $instance->setValue($data['value'] ?? null);
        $instance->setBreakdown(($data['breakdown'] ?? null) !== null ? breakdown::fromJson($data['breakdown']) : null);
        return $instance;
    }
}

class breakdown
{
    /**
     * @var item_total|null
     */
    public ?item_total $item_total;
    
    /**
     * @return item_total|null
     */
    public function getItemTotal(): ?item_total
    {
        return $this->item_total;
    }
    
    /**
     * @param item_total|null $item_total
     * @return self
     */
    public function setItemTotal(?item_total $item_total): self
    {
        $this->item_total = $item_total;
        return $this;
    }
    
    /**
     * @param array $data
     * @return self
     */
    public static function fromJson(array $data): self
    {
        $instance = new self();
        $instance->setItemTotal(($data['item_total'] ?? null) !== null ? item_total::fromJson($data['item_total']) : null);
        return $instance;
    }
}

class item_total
{
    /**
     * @var string|null
     */
    public ?string $currency_code;
    
    /**
     * @var string|null
     */
    public ?string $value;
    
    /**
     * @return string|null
     */
    public function getCurrencyCode(): ?string
    {
        return $this->currency_code;
    }
    
    /**
     * @return string|null
     */
    public function getValue(): ?string
    {
        return $this->value;
    }
    
    /**
     * @param string|null $currency_code
     * @return self
     */
    public function setCurrencyCode(?string $currency_code): self
    {
        $this->currency_code = $currency_code;
        return $this;
    }
    
    /**
     * @param string|null $value
     * @return self
     */
    public function setValue(?string $value): self
    {
        $this->value = $value;
        return $this;
    }
    
    /**
     * @param array $data
     * @return self
     */
    public static function fromJson(array $data): self
    {
        $instance = new self();
        $instance->setCurrencyCode($data['currency_code'] ?? null);
        $instance->setValue($data['value'] ?? null);
        return $instance;
    }
}

class payee
{
    /**
     * @var string|null
     */
    public ?string $email_address;
    
    /**
     * @var string|null
     */
    public ?string $merchant_id;
    
    /**
     * @return string|null
     */
    public function getEmailAddress(): ?string
    {
        return $this->email_address;
    }
    
    /**
     * @return string|null
     */
    public function getMerchantId(): ?string
    {
        return $this->merchant_id;
    }
    
    /**
     * @param string|null $email_address
     * @return self
     */
    public function setEmailAddress(?string $email_address): self
    {
        $this->email_address = $email_address;
        return $this;
    }
    
    /**
     * @param string|null $merchant_id
     * @return self
     */
    public function setMerchantId(?string $merchant_id): self
    {
        $this->merchant_id = $merchant_id;
        return $this;
    }
    
    /**
     * @param array $data
     * @return self
     */
    public static function fromJson(array $data): self
    {
        $instance = new self();
        $instance->setEmailAddress($data['email_address'] ?? null);
        $instance->setMerchantId($data['merchant_id'] ?? null);
        return $instance;
    }
}

class items
{
    /**
     * @var string|null
     */
    public ?string $name;
    
    /**
     * @var unit_amount|null
     */
    public ?unit_amount $unit_amount;
    
    /**
     * @var string|null
     */
    public ?string $quantity;
    
    /**
     * @var string|null
     */
    public ?string $description;
    
    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    
    /**
     * @return unit_amount|null
     */
    public function getUnitAmount(): ?unit_amount
    {
        return $this->unit_amount;
    }
    
    /**
     * @return string|null
     */
    public function getQuantity(): ?string
    {
        return $this->quantity;
    }
    
    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    
    /**
     * @param string|null $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }
    
    /**
     * @param unit_amount|null $unit_amount
     * @return self
     */
    public function setUnitAmount(?unit_amount $unit_amount): self
    {
        $this->unit_amount = $unit_amount;
        return $this;
    }
    
    /**
     * @param string|null $quantity
     * @return self
     */
    public function setQuantity(?string $quantity): self
    {
        $this->quantity = $quantity;
        return $this;
    }
    
    /**
     * @param string|null $description
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }
    
    /**
     * @param array $data
     * @return self
     */
    public static function fromJson(array $data): self
    {
        $instance = new self();
        $instance->setName($data['name'] ?? null);
        $instance->setUnitAmount(($data['unit_amount'] ?? null) !== null ? unit_amount::fromJson($data['unit_amount']) : null);
        $instance->setQuantity($data['quantity'] ?? null);
        $instance->setDescription($data['description'] ?? null);
        return $instance;
    }
}

class unit_amount
{
    /**
     * @var string|null
     */
    public ?string $currency_code;
    
    /**
     * @var string|null
     */
    public ?string $value;
    
    /**
     * @return string|null
     */
    public function getCurrencyCode(): ?string
    {
        return $this->currency_code;
    }
    
    /**
     * @return string|null
     */
    public function getValue(): ?string
    {
        return $this->value;
    }
    
    /**
     * @param string|null $currency_code
     * @return self
     */
    public function setCurrencyCode(?string $currency_code): self
    {
        $this->currency_code = $currency_code;
        return $this;
    }
    
    /**
     * @param string|null $value
     * @return self
     */
    public function setValue(?string $value): self
    {
        $this->value = $value;
        return $this;
    }
    
    /**
     * @param array $data
     * @return self
     */
    public static function fromJson(array $data): self
    {
        $instance = new self();
        $instance->setCurrencyCode($data['currency_code'] ?? null);
        $instance->setValue($data['value'] ?? null);
        return $instance;
    }
}

class links
{
    /**
     * @var string|null
     */
    public ?string $href;
    
    /**
     * @var string|null
     */
    public ?string $rel;
    
    /**
     * @var string|null
     */
    public ?string $method;
    
    /**
     * @return string|null
     */
    public function getHref(): ?string
    {
        return $this->href;
    }
    
    /**
     * @return string|null
     */
    public function getRel(): ?string
    {
        return $this->rel;
    }
    
    /**
     * @return string|null
     */
    public function getMethod(): ?string
    {
        return $this->method;
    }
    
    /**
     * @param string|null $href
     * @return self
     */
    public function setHref(?string $href): self
    {
        $this->href = $href;
        return $this;
    }
    
    /**
     * @param string|null $rel
     * @return self
     */
    public function setRel(?string $rel): self
    {
        $this->rel = $rel;
        return $this;
    }
    
    /**
     * @param string|null $method
     * @return self
     */
    public function setMethod(?string $method): self
    {
        $this->method = $method;
        return $this;
    }
    
    /**
     * @param array $data
     * @return self
     */
    public static function fromJson(array $data): self
    {
        $instance = new self();
        $instance->setHref($data['href'] ?? null);
        $instance->setRel($data['rel'] ?? null);
        $instance->setMethod($data['method'] ?? null);
        return $instance;
    }
} 