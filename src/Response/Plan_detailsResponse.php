<?php
namespace Paypal\Sdk\Response;
use Laminas\Hydrator\ClassMethodsHydrator;
/**
 *
 * @author alfon
 *        
 */
class Plan_detailsResponse
{
    public ?string $id;
    
    public ?string $productId;
    
    public ?string $name;
    
    public ?string $description;
    
    public ?string $status;
    
    /** @var BillingCycles[]|null */
    public ?array $billingCycles;
    
    public ?Taxes $taxes;
    
    public ?string $createTime;
    
    public ?string $updateTime;
    
    /** @var Links[]|null */
    public ?array $links;
    
    /**
     * @param BillingCycles[]|null $billingCycles
     * @param Links[]|null $links
     */
    public function __construct(
        ?string $id = NULL,
        ?string $productId = NULL,
        ?string $name = NULL,
        ?string $description = NULL,
        ?string $status = NULL,
        ?array $billingCycles = NULL,
        ?Taxes $taxes = NULL,
        ?string $createTime = NULL,
        ?string $updateTime = NULL,
        ?array $links = []
        ) {
            $this->id = $id;
            $this->productId = $productId;
            $this->name = $name;
            $this->description = $description;
            $this->status = $status;
            $this->billingCycles = $billingCycles;
            $this->taxes = $taxes;
            $this->createTime = $createTime;
            $this->updateTime = $updateTime;
            $this->links = $links;
    }
    
    public function getId(): ?string
    {
        return $this->id;
    }
    
    public function getProductId(): ?string
    {
        return $this->productId;
    }
    
    public function getName(): ?string
    {
        return $this->name;
    }
    
    public function getDescription(): ?string
    {
        return $this->description;
    }
    
    public function getStatus(): ?string
    {
        return $this->status;
    }
    
    /**
     * @return BillingCycles[]|null
     */
    public function getBillingCycles(): ?array
    {
        return $this->billingCycles;
    }
    
    public function getTaxes(): ?Taxes
    {
        return $this->taxes;
    }
    
    public function getCreateTime(): ?string
    {
        return $this->createTime;
    }
    
    public function getUpdateTime(): ?string
    {
        return $this->updateTime;
    }
    
    /**
     * @return Links[]|null
     */
    public function getLinks(): ?array
    {
        return $this->links;
    }
    
    public function setId(?string $id): self
    {
        $this->id = $id;
        return $this;
    }
    
    public function setProductId(?string $productId): self
    {
        $this->productId = $productId;
        return $this;
    }
    
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }
    
    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }
    
    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }
    
    /**
     * @param BillingCycles[]|null $billingCycles
     */
    public function setBillingCycles(?array $billingCycles): self
    {
        $this->billingCycles = $billingCycles;
        return $this;
    }
    
    public function setTaxes($taxes): self
    {
        $hydrator = new ClassMethodsHydrator();
        $taxes = $hydrator->hydrate($taxes, new Taxes(NULL, NULL));
        
        $this->taxes = $taxes;
        return $this;
    }
    
    public function setCreateTime(?string $createTime): self
    {
        $this->createTime = $createTime;
        return $this;
    }
    
    public function setUpdateTime(?string $updateTime): self
    {
        $this->updateTime = $updateTime;
        return $this;
    }
    
    /**
     * @param Links[]|null $links
     */
    public function setLinks(?array $links): self
    {
        $this->links = $links;
        return $this;
    }
}

class BillingCycles
{
    public ?Frequency $frequency;
    
    public ?string $tenureType;
    
    public ?int $sequence;
    
    public ?int $totalCycles;
    
    public ?PricingScheme $pricingScheme;
    
    public function __construct(
        ?Frequency $frequency,
        ?string $tenureType,
        ?int $sequence,
        ?int $totalCycles,
        ?PricingScheme $pricingScheme
        ) {
            $this->frequency = $frequency;
            $this->tenureType = $tenureType;
            $this->sequence = $sequence;
            $this->totalCycles = $totalCycles;
            $this->pricingScheme = $pricingScheme;
    }
    
    public function getFrequency(): ?Frequency
    {
        return $this->frequency;
    }
    
    public function getTenureType(): ?string
    {
        return $this->tenureType;
    }
    
    public function getSequence(): ?int
    {
        return $this->sequence;
    }
    
    public function getTotalCycles(): ?int
    {
        return $this->totalCycles;
    }
    
    public function getPricingScheme(): ?PricingScheme
    {
        return $this->pricingScheme;
    }
    
    public function setFrequency(?Frequency $frequency): self
    {
        $this->frequency = $frequency;
        return $this;
    }
    
    public function setTenureType(?string $tenureType): self
    {
        $this->tenureType = $tenureType;
        return $this;
    }
    
    public function setSequence(?int $sequence): self
    {
        $this->sequence = $sequence;
        return $this;
    }
    
    public function setTotalCycles(?int $totalCycles): self
    {
        $this->totalCycles = $totalCycles;
        return $this;
    }
    
    public function setPricingScheme(?PricingScheme $pricingScheme): self
    {
        $this->pricingScheme = $pricingScheme;
        return $this;
    }
}

class Frequency
{
    public ?string $intervalUnit;
    
    public ?int $intervalCount;
    
    public function __construct(?string $intervalUnit, ?int $intervalCount)
    {
        $this->intervalUnit = $intervalUnit;
        $this->intervalCount = $intervalCount;
    }
    
    public function getIntervalUnit(): ?string
    {
        return $this->intervalUnit;
    }
    
    public function getIntervalCount(): ?int
    {
        return $this->intervalCount;
    }
    
    public function setIntervalUnit(?string $intervalUnit): self
    {
        $this->intervalUnit = $intervalUnit;
        return $this;
    }
    
    public function setIntervalCount(?int $intervalCount): self
    {
        $this->intervalCount = $intervalCount;
        return $this;
    }
}

class PricingScheme
{
    public ?FixedPrice $fixedPrice;
    
    public ?int $version;
    
    public ?string $createTime;
    
    public ?string $updateTime;
    
    public ?string $status;
    
    public function __construct(
        ?FixedPrice $fixedPrice,
        ?int $version,
        ?string $createTime,
        ?string $updateTime,
        ?string $status
        ) {
            $this->fixedPrice = $fixedPrice;
            $this->version = $version;
            $this->createTime = $createTime;
            $this->updateTime = $updateTime;
            $this->status = $status;
    }
    
    public function getFixedPrice(): ?FixedPrice
    {
        return $this->fixedPrice;
    }
    
    public function getVersion(): ?int
    {
        return $this->version;
    }
    
    public function getCreateTime(): ?string
    {
        return $this->createTime;
    }
    
    public function getUpdateTime(): ?string
    {
        return $this->updateTime;
    }
    
    public function getStatus(): ?string
    {
        return $this->status;
    }
    
    public function setFixedPrice(?FixedPrice $fixedPrice): self
    {
        $this->fixedPrice = $fixedPrice;
        return $this;
    }
    
    public function setVersion(?int $version): self
    {
        $this->version = $version;
        return $this;
    }
    
    public function setCreateTime(?string $createTime): self
    {
        $this->createTime = $createTime;
        return $this;
    }
    
    public function setUpdateTime(?string $updateTime): self
    {
        $this->updateTime = $updateTime;
        return $this;
    }
    
    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }
}

class FixedPrice
{
    public ?string $currencyCode;
    
    public ?string $value;
    
    public function __construct(?string $currencyCode, ?string $value)
    {
        $this->currencyCode = $currencyCode;
        $this->value = $value;
    }
    
    public function getCurrencyCode(): ?string
    {
        return $this->currencyCode;
    }
    
    public function getValue(): ?string
    {
        return $this->value;
    }
    
    public function setCurrencyCode(?string $currencyCode): self
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }
    
    public function setValue(?string $value): self
    {
        $this->value = $value;
        return $this;
    }
}

class Taxes
{
    public ?string $percentage;
    
    public ?bool $inclusive;
    
    public function __construct(?string $percentage, ?bool $inclusive)
    {
        $this->percentage = $percentage;
        $this->inclusive = $inclusive;
    }
    
    public function getPercentage(): ?string
    {
        return $this->percentage;
    }
    
    public function getInclusive(): ?bool
    {
        return $this->inclusive;
    }
    
    public function setPercentage(?string $percentage): self
    {
        $this->percentage = $percentage;
        return $this;
    }
    
    public function setInclusive(?bool $inclusive): self
    {
        $this->inclusive = $inclusive;
        return $this;
    }
}

class Links
{
    public ?string $href;
    
    public ?string $rel;
    
    public ?string $method;
    
    public function __construct(
        ?string $href,
        ?string $rel,
        ?string $method
        ) {
            $this->href = $href;
            $this->rel = $rel;
            $this->method = $method;
    }
    
    public function getHref(): ?string
    {
        return $this->href;
    }
    
    public function getRel(): ?string
    {
        return $this->rel;
    }
    
    public function getMethod(): ?string
    {
        return $this->method;
    }
    
    public function setHref(?string $href): self
    {
        $this->href = $href;
        return $this;
    }
    
    public function setRel(?string $rel): self
    {
        $this->rel = $rel;
        return $this;
    }
    
    public function setMethod(?string $method): self
    {
        $this->method = $method;
        return $this;
    }
}

