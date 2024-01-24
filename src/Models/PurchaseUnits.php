<?php
namespace Paypal\Sdk\Models;

/**
 *
 * @author alfon
 *        
 */
class PurchaseUnits
{
    /**
     * @var string|null
     */
    
    public ?string $reference_id;
    
    /**
     * @var string|null
     */
    
    public ?string $invoice_id;
    
    /**
     * @var string|null
     */
    public ?string $description;
    
    /**
     * @var string|null
     */
    
    public ?string $custom_id;
    
    /**
     * @var string|null
     */
    public ?string $soft_descriptor;
    
    
    /**
     * @var Items[]|null
     */
    public ?array $items;
    
    /**
     * @var Amount|null
     */
    public ?Amount $amount;
    
    /**
     * @return Items[]|null
     */
    public function getItems(): ?array
    {
        return $this->items;
    }
    
    /**
     * @return Amount|null
     */
    public function getAmount(): ?Amount
    {
        return $this->amount;
    }
    
    /**
     * @param Items[]|null $items
     * @return self
     */
    public function setItems(?array $items): self
    {
        $this->items = $items;
        return $this;
    }
    
    /**
     * @param Amount|null $amount
     * @return self
     */
    public function setAmount(?Amount $amount): self
    {
        $this->amount = $amount;
        return $this;
    }
    /**
     * @return Ambigous <string, NULL>
     */
    public function getReference_id()
    {
        return $this->reference_id;
    }

    /**
     * @return Ambigous <string, NULL>
     */
    public function getInvoice_id()
    {
        return $this->invoice_id;
    }

    /**
     * @return Ambigous <string, NULL>
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return Ambigous <string, NULL>
     */
    public function getCustom_id()
    {
        return $this->custom_id;
    }

    /**
     * @return Ambigous <string, NULL>
     */
    public function getSoft_descriptor()
    {
        return $this->soft_descriptor;
    }

    /**
     * @param Ambigous <string, NULL> $reference_id
     */
    public function setReference_id($reference_id)
    {
        $this->reference_id = $reference_id;
    }

    /**
     * @param Ambigous <string, NULL> $invoice_id
     */
    public function setInvoice_id($invoice_id)
    {
        $this->invoice_id = $invoice_id;
    }

    /**
     * @param Ambigous <string, NULL> $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @param Ambigous <string, NULL> $custom_id
     */
    public function setCustom_id($custom_id)
    {
        $this->custom_id = $custom_id;
    }

    /**
     * @param Ambigous <string, NULL> $soft_descriptor
     */
    public function setSoft_descriptor($soft_descriptor)
    {
        $this->soft_descriptor = $soft_descriptor;
    }

    

}
