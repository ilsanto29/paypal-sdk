<?php
namespace Paypal\Sdk\Response;

/**
 *
 * @author alfon
 *        
 */
class OrderErrorResponse
{
    /**
     * @var string|null
     */
    public ?string $name;
    
    /**
     * @var details[]|null
     */
    public ?array $details;
    
    /**
     * @var string|null
     */
    public ?string $message;
    
    /**
     * @var string|null
     */
    public ?string $debug_id;
    
    /**
     * @var links[]|null
     */
    public ?array $links;
    
    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    
    /**
     * @return details[]|null
     */
    public function getDetails(): ?array
    {
        return $this->details;
    }
    
    /**
     * @return string|null
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }
    
    /**
     * @return string|null
     */
    public function getDebugId(): ?string
    {
        return $this->debug_id;
    }
    
    /**
     * @return links[]|null
     */
    public function getLinks(): ?array
    {
        return $this->links;
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
     * @param details[]|null $details
     * @return self
     */
    public function setDetails(?array $details): self
    {
        $this->details = $details;
        return $this;
    }
    
    /**
     * @param string|null $message
     * @return self
     */
    public function setMessage(?string $message): self
    {
        $this->message = $message;
        return $this;
    }
    
    /**
     * @param string|null $debug_id
     * @return self
     */
    public function setDebugId(?string $debug_id): self
    {
        $this->debug_id = $debug_id;
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
        $instance->setName($data['name'] ?? null);
        $instance->setDetails(($data['details'] ?? null) !== null ? array_map(static function($data) {
            return details::fromJson($data);
        }, $data['details']) : null);
            $instance->setMessage($data['message'] ?? null);
            $instance->setDebugId($data['debug_id'] ?? null);
            $instance->setLinks(($data['links'] ?? null) !== null ? array_map(static function($data) {
                return links::fromJson($data);
            }, $data['links']) : null);
                return $instance;
    }
}

class details
{
    /**
     * @var string|null
     */
    public ?string $issue;
    
    /**
     * @var string|null
     */
    public ?string $description;
    
    /**
     * @return string|null
     */
    public function getIssue(): ?string
    {
        return $this->issue;
    }
    
    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    
    /**
     * @param string|null $issue
     * @return self
     */
    public function setIssue(?string $issue): self
    {
        $this->issue = $issue;
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
        $instance->setIssue($data['issue'] ?? null);
        $instance->setDescription($data['description'] ?? null);
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
