<?php
namespace Paypal\Sdk\Response;

/**
 *
 * @author alfon
 *        
 */
class Plans_listResponse
{
    /** @var Plans[]|null */
    public ?array $plans;
    
    /** @var Links[]|null */
    public ?array $links;
    
    /**
     * @param Plans[]|null $plans
     * @param Links[]|null $links
     */
    public function __construct(?array $plans = NULL, ?array $links = NULL)
    {
        $this->plans = $plans;
        $this->links = $links;
    }
    
    /**
     * @return Plans[]|null
     */
    public function getPlans(): ?array
    {
        return $this->plans;
    }
    
    /**
     * @return Links[]|null
     */
    public function getLinks(): ?array
    {
        return $this->links;
    }
    
    /**
     * @param Plans[]|null $plans
     */
    public function setPlans(?array $plans): self
    {
        $this->plans = $plans;
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

class Plans
{
    public ?string $id;
    
    public ?string $name;
    
    public ?string $status;
    
    public ?string $description;
    
    public ?string $usageType;
    
    public ?string $createTime;
    
    /** @var Links[]|null */
    public ?array $links;
    
    /**
     * @param Links[]|null $links
     */
    public function __construct(
        ?string $id = NULL,
        ?string $name = NULL,
        ?string $status = NULL,
        ?string $description = NULL,
        ?string $usageType = NULL,
        ?string $createTime = NULL,
        ?array $links
        ) {
            $this->id = $id;
            $this->name = $name;
            $this->status = $status;
            $this->description = $description;
            $this->usageType = $usageType;
            $this->createTime = $createTime;
            $this->links = $links;
    }
    
    public function getId(): ?string
    {
        return $this->id;
    }
    
    public function getName(): ?string
    {
        return $this->name;
    }
    
    public function getStatus(): ?string
    {
        return $this->status;
    }
    
    public function getDescription(): ?string
    {
        return $this->description;
    }
    
    public function getUsageType(): ?string
    {
        return $this->usageType;
    }
    
    public function getCreateTime(): ?string
    {
        return $this->createTime;
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
    
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }
    
    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }
    
    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }
    
    public function setUsageType(?string $usageType): self
    {
        $this->usageType = $usageType;
        return $this;
    }
    
    public function setCreateTime(?string $createTime): self
    {
        $this->createTime = $createTime;
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

