<?php
namespace Paypal\Sdk\Models\Subscriptions;

/**
 *
 * @author alfon
 *        
 */
class CreateSubscribe
{
    public ?string $plan_id;
    
    public ?string $start_time;
    
    public ?string $quantity;
    
    public ?ShippingAmount $shipping_amount;
    
    public ?Subscriber $subscriber;
    
    public ?ApplicationContext $application_context;
    
    public function __construct(
        ?string $plan_id = null,
        ?string $start_time = null,
        ?string $quantity = null,
        ?ShippingAmount $shipping_amount = null,
        ?Subscriber $subscriber = null,
        ?ApplicationContext $application_context = null
        ) {
            $this->plan_id = $plan_id;
            $this->start_time = $start_time;
            $this->quantity = $quantity;
            $this->shipping_amount = $shipping_amount;
            $this->subscriber = $subscriber;
            $this->application_context = $application_context;
    }
    
    public function getPlanId(): ?string
    {
        return $this->plan_id;
    }
    
    public function getStartTime(): ?string
    {
        return $this->start_time;
    }
    
    public function getQuantity(): ?string
    {
        return $this->quantity;
    }
    
    public function getShippingAmount(): ?ShippingAmount
    {
        return $this->shipping_amount;
    }
    
    public function getSubscriber(): ?Subscriber
    {
        return $this->subscriber;
    }
    
    public function getApplicationContext(): ?ApplicationContext
    {
        return $this->application_context;
    }
    
    public function setPlanId(?string $plan_id): self
    {
        $this->plan_id = $plan_id;
        return $this;
    }
    
    public function setStartTime(?string $start_time): self
    {
        $this->start_time = $start_time;
        return $this;
    }
    
    public function setQuantity(?string $quantity): self
    {
        $this->quantity = $quantity;
        return $this;
    }
    
    public function setShippingAmount(?ShippingAmount $shipping_amount): self
    {
        $this->shipping_amount = $shipping_amount;
        return $this;
    }
    
    public function setSubscriber(?Subscriber $subscriber): self
    {
        $this->subscriber = $subscriber;
        return $this;
    }
    
    public function setApplicationContext(?ApplicationContext $application_context): self
    {
        $this->application_context = $application_context;
        return $this;
    }
}

class ShippingAmount
{
    public ?string $currency_code;
    
    public ?string $value;
    
    public function __construct(?string $currency_code, ?string $value)
    {
        $this->currency_code = $currency_code;
        $this->value = $value;
    }
    
    public function getCurrencyCode(): ?string
    {
        return $this->currency_code;
    }
    
    public function getValue(): ?string
    {
        return $this->value;
    }
    
    public function setCurrencyCode(?string $currency_code): self
    {
        $this->currency_code = $currency_code;
        return $this;
    }
    
    public function setValue(?string $value): self
    {
        $this->value = $value;
        return $this;
    }
}

class Subscriber
{
    public ?Name $name;
    
    public ?string $email_address;
    
    public ?ShippingAddress $shipping_address;
    
    public function __construct(
        ?Name $name,
        ?string $email_address,
        ?ShippingAddress $shipping_address
        ) {
            $this->name = $name;
            $this->email_address = $email_address;
            $this->shipping_address = $shipping_address;
    }
    
    public function getName(): ?Name
    {
        return $this->name;
    }
    
    public function getEmailAddress(): ?string
    {
        return $this->email_address;
    }
    
    public function getShippingAddress(): ?ShippingAddress
    {
        return $this->shipping_address;
    }
    
    public function setName(?Name $name): self
    {
        $this->name = $name;
        return $this;
    }
    
    public function setEmailAddress(?string $email_address): self
    {
        $this->email_address = $email_address;
        return $this;
    }
    
    public function setShippingAddress(?ShippingAddress $shipping_address): self
    {
        $this->shipping_address = $shipping_address;
        return $this;
    }
}

class Name
{
    public ?string $given_name;
    
    public ?string $surname;
    
    public function __construct(?string $given_name, ?string $surname)
    {
        $this->given_name = $given_name;
        $this->surname = $surname;
    }
    
    public function getGivenName(): ?string
    {
        return $this->given_name;
    }
    
    public function getSurname(): ?string
    {
        return $this->surname;
    }
    
    public function setGivenName(?string $given_name): self
    {
        $this->given_name = $given_name;
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
    public ?Name2 $name;
    
    public ?Address $address;
    
    public function __construct(?Name2 $name = NULL, ?Address $address = NULL)
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
    
    public function setName(?Name2 $name): self
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

class Name2
{
    public ?string $full_name;
    
    public function __construct(?string $full_name)
    {
        $this->full_name = $full_name;
    }
    
    public function getFullName(): ?string
    {
        return $this->full_name;
    }
    
    public function setFullName(?string $full_name): self
    {
        $this->full_name = $full_name;
        return $this;
    }
}

class Address
{
    public ?string $address_line_1;
    
    public ?string $address_line_2;
    
    public ?string $admin_area_2;
    
    public ?string $admin_area_1;
    
    public ?string $postal_code;
    
    public ?string $country_code;
    
    public function __construct(
        ?string $address_line_1,
        ?string $address_line_2,
        ?string $admin_area_2,
        ?string $admin_area_1,
        ?string $postal_code,
        ?string $country_code
        ) {
            $this->address_line_1 = $address_line_1;
            $this->address_line_2 = $address_line_2;
            $this->admin_area_2 = $admin_area_2;
            $this->admin_area_1 = $admin_area_1;
            $this->postal_code = $postal_code;
            $this->country_code = $country_code;
    }
    
    public function getAddressLine_1(): ?string
    {
        return $this->address_line_1;
    }
    
    public function getAddressLine_2(): ?string
    {
        return $this->address_line_2;
    }
    
    public function getAdminArea_2(): ?string
    {
        return $this->admin_area_2;
    }
    
    public function getAdminArea_1(): ?string
    {
        return $this->admin_area_1;
    }
    
    public function getPostalCode(): ?string
    {
        return $this->postal_code;
    }
    
    public function getCountryCode(): ?string
    {
        return $this->country_code;
    }
    
    public function setAddressLine_1(?string $address_line_1): self
    {
        $this->address_line_1 = $address_line_1;
        return $this;
    }
    
    public function setAddressLine_2(?string $address_line_2): self
    {
        $this->address_line_2 = $address_line_2;
        return $this;
    }
    
    public function setAdminArea_2(?string $admin_area_2): self
    {
        $this->admin_area_2 = $admin_area_2;
        return $this;
    }
    
    public function setAdminArea_1(?string $admin_area_1): self
    {
        $this->admin_area_1 = $admin_area_1;
        return $this;
    }
    
    public function setPostalCode(?string $postal_code): self
    {
        $this->postal_code = $postal_code;
        return $this;
    }
    
    public function setCountryCode(?string $country_code): self
    {
        $this->country_code = $country_code;
        return $this;
    }
}

class ApplicationContext
{
    public ?string $brand_name;
    
    public ?string $locale;
    
    public ?string $shipping_preference;
    
    public ?string $user_action;
    
    public ?PaymentMethod $payment_method;
    
    public ?string $return_url;
    
    public ?string $cancel_url;
    
    public function __construct(
        ?string $brand_name,
        ?string $locale,
        ?string $shipping_preference,
        ?string $user_action,
        ?PaymentMethod $payment_method,
        ?string $return_url,
        ?string $cancel_url
        ) {
            $this->brand_name = $brand_name;
            $this->locale = $locale;
            $this->shipping_preference = $shipping_preference;
            $this->user_action = $user_action;
            $this->payment_method = $payment_method;
            $this->return_url = $return_url;
            $this->cancel_url = $cancel_url;
    }
    
    public function getBrandName(): ?string
    {
        return $this->brand_name;
    }
    
    public function getLocale(): ?string
    {
        return $this->locale;
    }
    
    public function getShippingPreference(): ?string
    {
        return $this->shipping_preference;
    }
    
    public function getUserAction(): ?string
    {
        return $this->user_action;
    }
    
    public function getPaymentMethod(): ?PaymentMethod
    {
        return $this->payment_method;
    }
    
    public function getReturnUrl(): ?string
    {
        return $this->return_url;
    }
    
    public function getCancelUrl(): ?string
    {
        return $this->cancel_url;
    }
    
    public function setBrandName(?string $brand_name): self
    {
        $this->brand_name = $brand_name;
        return $this;
    }
    
    public function setLocale(?string $locale): self
    {
        $this->locale = $locale;
        return $this;
    }
    
    public function setShippingPreference(?string $shipping_preference): self
    {
        $this->shipping_preference = $shipping_preference;
        return $this;
    }
    
    public function setUserAction(?string $user_action): self
    {
        $this->user_action = $user_action;
        return $this;
    }
    
    public function setPaymentMethod(?PaymentMethod $payment_method): self
    {
        $this->payment_method = $payment_method;
        return $this;
    }
    
    public function setReturnUrl(?string $return_url): self
    {
        $this->return_url = $return_url;
        return $this;
    }
    
    public function setCancelUrl(?string $cancel_url): self
    {
        $this->cancel_url = $cancel_url;
        return $this;
    }
}

class PaymentMethod
{
    public ?string $payer_selected;
    
    public ?string $payee_preferred;
    
    public function __construct(?string $payer_selected, ?string $payee_preferred)
    {
        $this->payer_selected = $payer_selected;
        $this->payee_preferred = $payee_preferred;
    }
    
    public function getPayerSelected(): ?string
    {
        return $this->payer_selected;
    }
    
    public function getPayeePreferred(): ?string
    {
        return $this->payee_preferred;
    }
    
    public function setPayerSelected(?string $payer_selected): self
    {
        $this->payer_selected = $payer_selected;
        return $this;
    }
    
    public function setPayeePreferred(?string $payee_preferred): self
    {
        $this->payee_preferred = $payee_preferred;
        return $this;
    }
}
