<?php
namespace Paypal\Sdk\Response;

/**
 *
 * @author alfon
 *        
 */
class Subscribe_planResponse
{
    public ?string $id;
    
    public ?string $status;
    
    public ?string $statusUpdateTime;
    
    public ?string $planId;
    
    public ?bool $planOverridden;
    
    public ?string $startTime;
    
    public ?string $quantity;
    
    public ?ShippingAmount $shippingAmount;
    
    public ?Subscriber $subscriber;
    
    public ?string $createTime;
    
    /** @var Links[]|null */
    public ?array $links;
    
    /**
     * @param Links[]|null $links
     */
    public function __construct(
        ?string $id = null,
        ?string $status  = null,
        ?string $statusUpdateTime  = null,
        ?string $planId  = null,
        ?bool $planOverridden  = null,
        ?string $startTime  = null,
        ?string $quantity  = null,
        ?ShippingAmount $shippingAmount  = null,
        ?Subscriber $subscriber  = null,
        ?string $createTime  = null,
        ?array $links  = []
        ) {
            $this->id = $id;
            $this->status = $status;
            $this->statusUpdateTime = $statusUpdateTime;
            $this->planId = $planId;
            $this->planOverridden = $planOverridden;
            $this->startTime = $startTime;
            $this->quantity = $quantity;
            $this->shippingAmount = $shippingAmount;
            $this->subscriber = $subscriber;
            $this->createTime = $createTime;
            $this->links = $links;
    }
    
    public function getId(): ?string
    {
        return $this->id;
    }
    
    public function getStatus(): ?string
    {
        return $this->status;
    }
    
    public function getStatusUpdateTime(): ?string
    {
        return $this->statusUpdateTime;
    }
    
    public function getPlanId(): ?string
    {
        return $this->planId;
    }
    
    public function getPlanOverridden(): ?bool
    {
        return $this->planOverridden;
    }
    
    public function getStartTime(): ?string
    {
        return $this->startTime;
    }
    
    public function getQuantity(): ?string
    {
        return $this->quantity;
    }
    
    public function getShippingAmount(): ?ShippingAmount
    {
        return $this->shippingAmount;
    }
    
    public function getSubscriber(): ?Subscriber
    {
        return $this->subscriber;
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
    
    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }
    
    public function setStatusUpdateTime(?string $statusUpdateTime): self
    {
        $this->statusUpdateTime = $statusUpdateTime;
        return $this;
    }
    
    public function setPlanId(?string $planId): self
    {
        $this->planId = $planId;
        return $this;
    }
    
    public function setPlanOverridden(?bool $planOverridden): self
    {
        $this->planOverridden = $planOverridden;
        return $this;
    }
    
    public function setStartTime(?string $startTime): self
    {
        $this->startTime = $startTime;
        return $this;
    }
    
    public function setQuantity(?string $quantity): self
    {
        $this->quantity = $quantity;
        return $this;
    }
    
    public function setShippingAmount(?ShippingAmount $shippingAmount): self
    {
        $this->shippingAmount = $shippingAmount;
        return $this;
    }
    
    public function setSubscriber(?Subscriber $subscriber): self
    {
        $hydrator = new ClassMethodsHydrator();
        $subscriber = $hydrator->hydrate($subscriber, new Subscriber());
        
        $this->subscriber = $subscriber;
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



class Subscriber
{
    public ?Name2 $name;
    
    public ?string $emailAddress;
    
    public ?string $payerId;
    
    public ?ShippingAddress $shippingAddress;
    
    public function __construct(
        ?Name2 $name = null,
        ?string $emailAddress = null,
        ?string $payerId = null,
        ?ShippingAddress $shippingAddress = null
        ) {
            $this->name = $name;
            $this->emailAddress = $emailAddress;
            $this->payerId = $payerId;
            $this->shippingAddress = $shippingAddress;
    }
    
    public function getName(): ?Name
    {
        return $this->name;
    }
    
    public function getEmailAddress(): ?string
    {
        return $this->emailAddress;
    }
    
    public function getPayerId(): ?string
    {
        return $this->payerId;
    }
    
    public function getShippingAddress(): ?ShippingAddress
    {
        return $this->shippingAddress;
    }
    
    public function setName(?Name2 $name): self
    {
        $this->name = $name;
        return $this;
    }
    
    public function setEmailAddress(?string $emailAddress): self
    {
        $this->emailAddress = $emailAddress;
        return $this;
    }
    
    public function setPayerId(?string $payerId): self
    {
        $this->payerId = $payerId;
        return $this;
    }
    
    public function setShippingAddress(?ShippingAddress $shippingAddress): self
    {
        $this->shippingAddress = $shippingAddress;
        return $this;
    }
}

class Name2
{
    public ?string $givenName;
    
    public ?string $surname;
    
    public function __construct(?string $givenName, ?string $surname)
    {
        $this->givenName = $givenName;
        $this->surname = $surname;
    }
    
    public function getGivenName(): ?string
    {
        return $this->givenName;
    }
    
    public function getSurname(): ?string
    {
        return $this->surname;
    }
    
    public function setGivenName(?string $givenName): self
    {
        $this->givenName = $givenName;
        return $this;
    }
    
    public function setSurname(?string $surname): self
    {
        $this->surname = $surname;
        return $this;
    }
}

class ShippingAddress
{
    public ?Name $name;
    
    public ?Address $address;
    
    public function __construct(?Name $name, ?Address $address)
    {
        $this->name = $name;
        $this->address = $address;
    }
    
    public function getName(): ?Name
    {
        return $this->name;
    }
    
    public function getAddress(): ?Address
    {
        return $this->address;
    }
    
    public function setName(?Name $name): self
    {
        $this->name = $name;
        return $this;
    }
    
    public function setAddress(?Address $address): self
    {
        $this->address = $address;
        return $this;
    }
}

class Name
{
    public ?string $fullName;
    
    public function __construct(?string $fullName)
    {
        $this->fullName = $fullName;
    }
    
    public function getFullName(): ?string
    {
        return $this->fullName;
    }
    
    public function setFullName(?string $fullName): self
    {
        $this->fullName = $fullName;
        return $this;
    }
}

class Address
{
    public ?string $addressLine_1;
    
    public ?string $addressLine_2;
    
    public ?string $adminArea_2;
    
    public ?string $adminArea_1;
    
    public ?string $postalCode;
    
    public ?string $countryCode;
    
    public function __construct(
        ?string $addressLine_1,
        ?string $addressLine_2,
        ?string $adminArea_2,
        ?string $adminArea_1,
        ?string $postalCode,
        ?string $countryCode
        ) {
            $this->addressLine_1 = $addressLine_1;
            $this->addressLine_2 = $addressLine_2;
            $this->adminArea_2 = $adminArea_2;
            $this->adminArea_1 = $adminArea_1;
            $this->postalCode = $postalCode;
            $this->countryCode = $countryCode;
    }
    
    public function getAddressLine_1(): ?string
    {
        return $this->addressLine_1;
    }
    
    public function getAddressLine_2(): ?string
    {
        return $this->addressLine_2;
    }
    
    public function getAdminArea_2(): ?string
    {
        return $this->adminArea_2;
    }
    
    public function getAdminArea_1(): ?string
    {
        return $this->adminArea_1;
    }
    
    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }
    
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }
    
    public function setAddressLine_1(?string $addressLine_1): self
    {
        $this->addressLine_1 = $addressLine_1;
        return $this;
    }
    
    public function setAddressLine_2(?string $addressLine_2): self
    {
        $this->addressLine_2 = $addressLine_2;
        return $this;
    }
    
    public function setAdminArea_2(?string $adminArea_2): self
    {
        $this->adminArea_2 = $adminArea_2;
        return $this;
    }
    
    public function setAdminArea_1(?string $adminArea_1): self
    {
        $this->adminArea_1 = $adminArea_1;
        return $this;
    }
    
    public function setPostalCode(?string $postalCode): self
    {
        $this->postalCode = $postalCode;
        return $this;
    }
    
    public function setCountryCode(?string $countryCode): self
    {
        $this->countryCode = $countryCode;
        return $this;
    }
}

class Links
{
    public ?string $href;
    
    public ?string $rel;
    
    public ?string $method;
    
    public function __construct(
        ?string $href = null,
        ?string $rel = null,
        ?string $method = null
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
