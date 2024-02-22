<?php
namespace Paypal\Sdk\Response;

/**
 *
 * @author alfon
 *        
 */
class Catalogs_productsResponse
{
    public ?string $id;
    
    public ?string $name;
    
    public ?string $description;
    
    public ?string $type;
    
    public ?string $category;
    
    public ?string $imageUrl;
    
    public ?string $homeUrl;
    
    public ?string $createTime;
    
    public ?string $updateTime;
    
    /** @var Links[]|null */
    public ?array $links;
    
    /**
     * @param Links[]|null $links
     */
    public function __construct(
        ) {
    }
    
    public function getId(): ?string
    {
        return $this->id;
    }
    
    public function getName(): ?string
    {
        return $this->name;
    }
    
    public function getDescription(): ?string
    {
        return $this->description;
    }
    
    public function getType(): ?string
    {
        return $this->type;
    }
    
    public function getCategory(): ?string
    {
        return $this->category;
    }
    
    public function getImageUrl(): ?string
    {
        return $this->imageUrl;
    }
    
    public function getHomeUrl(): ?string
    {
        return $this->homeUrl;
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
    
    public function setType(?string $type): self
    {
        $this->type = $type;
        return $this;
    }
    
    public function setCategory(?string $category): self
    {
        $this->category = $category;
        return $this;
    }
    
    public function setImageUrl(?string $imageUrl): self
    {
        $this->imageUrl = $imageUrl;
        return $this;
    }
    
    public function setHomeUrl(?string $homeUrl): self
    {
        $this->homeUrl = $homeUrl;
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
