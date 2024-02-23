<?php
namespace Paypal\Sdk\Models\Plans;

/**
 *
 * @author alfon
 *        
 */
class CreatePlan
{
    public ?string $product_id;
    
    public ?string $name;
    
    public ?string $description;
    
    public ?string $status;
    
    /** @var BillingCycles[]|null */
    public ?array $billing_cycles;
    
    public ?PaymentPreferences $payment_preferences;
    
    public ?Taxes $taxes;
    
    /**
     * @param BillingCycles[]|null $billing_cycles
     */
    public function __construct(
        ?string $product_id,
        ?string $name,
        ?string $description,
        ?string $status,
        ?array $billing_cycles,
        ?PaymentPreferences $payment_preferences,
        ?Taxes $taxes
        ) {
            $this->product_id = $product_id;
            $this->name = $name;
            $this->description = $description;
            $this->status = $status;
            $this->billing_cycles = $billing_cycles;
            $this->payment_preferences = $payment_preferences;
            $this->taxes = $taxes;
    }
    
    public function getProductId(): ?string
    {
        return $this->product_id;
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
        return $this->billing_cycles;
    }
    
    public function getPaymentPreferences(): ?PaymentPreferences
    {
        return $this->payment_preferences;
    }
    
    public function getTaxes(): ?Taxes
    {
        return $this->taxes;
    }
    
    public function setProductId(?string $product_id): self
    {
        $this->product_id = $product_id;
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
     * @param BillingCycles[]|null $billing_cycles
     */
    public function setBillingCycles(?array $billing_cycles): self
    {
        $this->billing_cycles = $billing_cycles;
        return $this;
    }
    
    public function setPaymentPreferences(?PaymentPreferences $payment_preferences): self
    {
        $this->payment_preferences = $payment_preferences;
        return $this;
    }
    
    public function setTaxes(?Taxes $taxes): self
    {
        $this->taxes = $taxes;
        return $this;
    }
}

class BillingCycles
{
    public ?Frequency $frequency;
    
    public ?string $tenure_type;
    
    public ?int $sequence;
    
    public ?int $total_cycles;
    
    public ?PricingScheme $pricing_scheme;
    
    public function __construct(
        ?Frequency $frequency,
        ?string $tenure_type,
        ?int $sequence,
        ?int $total_cycles,
        ?PricingScheme $pricing_scheme
        ) {
            $this->frequency = $frequency;
            $this->tenure_type = $tenure_type;
            $this->sequence = $sequence;
            $this->total_cycles = $total_cycles;
            $this->pricing_scheme = $pricing_scheme;
    }
    
    public function getFrequency(): ?Frequency
    {
        return $this->frequency;
    }
    
    public function getTenureType(): ?string
    {
        return $this->tenure_type;
    }
    
    public function getSequence(): ?int
    {
        return $this->sequence;
    }
    
    public function getTotalCycles(): ?int
    {
        return $this->total_cycles;
    }
    
    public function getPricingScheme(): ?PricingScheme
    {
        return $this->pricing_scheme;
    }
    
    public function setFrequency(?Frequency $frequency): self
    {
        $this->frequency = $frequency;
        return $this;
    }
    
    public function setTenureType(?string $tenure_type): self
    {
        $this->tenure_type = $tenure_type;
        return $this;
    }
    
    public function setSequence(?int $sequence): self
    {
        $this->sequence = $sequence;
        return $this;
    }
    
    public function setTotalCycles(?int $total_cycles): self
    {
        $this->total_cycles = $total_cycles;
        return $this;
    }
    
    public function setPricingScheme(?PricingScheme $pricing_scheme): self
    {
        $this->pricing_scheme = $pricing_scheme;
        return $this;
    }
}

class Frequency
{
    public ?string $interval_unit;
    
    public ?int $interval_count;
    
    public function __construct(?string $interval_unit, ?int $interval_count)
    {
        $this->interval_unit = $interval_unit;
        $this->interval_count = $interval_count;
    }
    
    public function getIntervalUnit(): ?string
    {
        return $this->interval_unit;
    }
    
    public function getIntervalCount(): ?int
    {
        return $this->interval_count;
    }
    
    public function setIntervalUnit(?string $interval_unit): self
    {
        $this->interval_unit = $interval_unit;
        return $this;
    }
    
    public function setIntervalCount(?int $interval_count): self
    {
        $this->interval_count = $interval_count;
        return $this;
    }
}

class PricingScheme
{
    public ?FixedPrice $fixed_price;
    
    public function __construct(?FixedPrice $fixed_price)
    {
        $this->fixed_price = $fixed_price;
    }
    
    public function getFixedPrice(): ?FixedPrice
    {
        return $this->fixed_price;
    }
    
    public function setFixedPrice(?FixedPrice $fixed_price): self
    {
        $this->fixed_price = $fixed_price;
        return $this;
    }
}

class FixedPrice
{
    public ?string $value;
    
    public ?string $currency_code;
    
    public function __construct(?string $value, ?string $currency_code)
    {
        $this->value = $value;
        $this->currency_code = $currency_code;
    }
    
    public function getValue(): ?string
    {
        return $this->value;
    }
    
    public function getCurrencyCode(): ?string
    {
        return $this->currency_code;
    }
    
    public function setValue(?string $value): self
    {
        $this->value = $value;
        return $this;
    }
    
    public function setCurrencyCode(?string $currency_code): self
    {
        $this->currency_code = $currency_code;
        return $this;
    }
}

class PaymentPreferences
{
    public ?bool $auto_bill_outstanding;
    
    public ?SetupFee $setup_fee;
    
    public ?string $setup_fee_failure_action;
    
    public ?int $payment_failure_threshold;
    
    public function __construct(
        ?bool $auto_bill_outstanding,
        ?SetupFee $setup_fee,
        ?string $setup_fee_failure_action,
        ?int $payment_failure_threshold
        ) {
            $this->auto_bill_outstanding = $auto_bill_outstanding;
            $this->setup_fee = $setup_fee;
            $this->setup_fee_failure_action = $setup_fee_failure_action;
            $this->payment_failure_threshold = $payment_failure_threshold;
    }
    
    public function getAutoBillOutstanding(): ?bool
    {
        return $this->auto_bill_outstanding;
    }
    
    public function getSetupFee(): ?SetupFee
    {
        return $this->setup_fee;
    }
    
    public function getSetupFeeFailureAction(): ?string
    {
        return $this->setup_fee_failure_action;
    }
    
    public function getPaymentFailureThreshold(): ?int
    {
        return $this->payment_failure_threshold;
    }
    
    public function setAutoBillOutstanding(?bool $auto_bill_outstanding): self
    {
        $this->auto_bill_outstanding = $auto_bill_outstanding;
        return $this;
    }
    
    public function setSetupFee(?SetupFee $setup_fee): self
    {
        $this->setup_fee = $setup_fee;
        return $this;
    }
    
    public function setSetupFeeFailureAction(?string $setup_fee_failure_action): self
    {
        $this->setup_fee_failure_action = $setup_fee_failure_action;
        return $this;
    }
    
    public function setPaymentFailureThreshold(?int $payment_failure_threshold): self
    {
        $this->payment_failure_threshold = $payment_failure_threshold;
        return $this;
    }
}

class SetupFee
{
    public ?string $value;
    
    public ?string $currency_code;
    
    public function __construct(?string $value, ?string $currency_code)
    {
        $this->value = $value;
        $this->currency_code = $currency_code;
    }
    
    public function getValue(): ?string
    {
        return $this->value;
    }
    
    public function getCurrencyCode(): ?string
    {
        return $this->currency_code;
    }
    
    public function setValue(?string $value): self
    {
        $this->value = $value;
        return $this;
    }
    
    public function setCurrencyCode(?string $currency_code): self
    {
        $this->currency_code = $currency_code;
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

