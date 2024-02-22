<?php
namespace Paypal\Sdk\Response;

/**
 *
 * @author alfon
 *        
 */
class Catalogs_products_listResponse
{

    public ?int $totalItems;
    
    public ?int $totalPages;
    
    /** @var Products[]|null */
    public ?array $products;
    
    /** @var Links[]|null */
    public ?array $links;
    
    /**
     * @param Products[]|null $products
     * @param Links[]|null $links
     */
    public function __construct(
        ) {
    }
    
    public function getTotalItems(): ?int
    {
        return $this->totalItems;
    }
    
    public function getTotalPages(): ?int
    {
        return $this->totalPages;
    }
    
    /**
     * @return Products[]|null
     */
    public function getProducts(): ?array
    {
        return $this->products;
    }
    
    /**
     * @return Links[]|null
     */
    public function getLinks(): ?array
    {
        return $this->links;
    }
    
    public function setTotalItems(?int $totalItems): self
    {
        $this->totalItems = $totalItems;
        return $this;
    }
    
    public function setTotalPages(?int $totalPages): self
    {
        $this->totalPages = $totalPages;
        return $this;
    }
    
    /**
     * @param Products[]|null $products
     */
    public function setProducts(?array $products): self
    {
        $this->products = $products;
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

class Products
{
    public ?string $id;
    
    public ?string $name;
    
    public ?string $description;
    
    public ?string $createTime;
    
    /** @var Links[]|null */
    public ?array $links;
    
    /**
     * @param Links[]|null $links
     */
    public function __construct(
        ?string $id,
        ?string $name,
        ?string $description,
        ?string $createTime,
        ?array $links
        ) {
            $this->id = $id;
            $this->name = $name;
            $this->description = $description;
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
    
    public function getDescription(): ?string
    {
        return $this->description;
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
    
    public function setDescription(?string $description): self
    {
        $this->description = $description;
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

        ) {

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



