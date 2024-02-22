<?php
namespace Paypal\Sdk\Models\Products;

/**
 *
 * @author alfon
 *        
 */
class Product
{
    public ?string $name;
    
    public ?string $description;
    
    public ?string $type;
    
    public ?string $category;
    
    public ?string $imageUrl;
    
    public ?string $homeUrl;
    
    public function __construct(
        ) {
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
} 

