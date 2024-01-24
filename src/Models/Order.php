<?php 
namespace Paypal\Sdk\Models;

class Order
{
	/**
	 * @var string|null
	 */
	public ?string $intent;

	/**
	 * @var PurchaseUnits[]|null
	 */
	public ?array $purchase_units;

	/**
	 * @var ApplicationContext|null
	 */
	public ?ApplicationContext $application_context;

	/**
	 * @return string|null
	 */
	public function getIntent(): ?string
	{
		return $this->intent;
	}

	/**
	 * @return PurchaseUnits[]|null
	 */
	public function getPurchase_units(): ?array
	{
		return $this->purchase_units;
	}

	/**
	 * @return ApplicationContext|null
	 */
	public function getApplication_context(): ?ApplicationContext
	{
		return $this->application_context;
	}

	/**
	 * @param string|null $intent
	 * @return self
	 */
	public function setIntent(?string $intent): self
	{
		$this->intent = $intent;
		return $this;
	}

	/**
	 * @param PurchaseUnits[]|null $purchaseUnits
	 * @return self
	 */
	public function setPurchase_units(?array $purchaseUnits): self
	{
		$this->purchase_units = $purchaseUnits;
		return $this;
	}

	/**
	 * @param ApplicationContext|null $applicationContext
	 * @return self
	 */
	public function setApplication_context(?ApplicationContext $applicationContext): self
	{
		$this->application_context = $applicationContext;
		return $this;
	}

	/**
	 * @param array $data
	 * @return self
	 */
	public static function fromJson(array $data): self
	{
		$instance = new self();
		$instance->setIntent($data['intent'] ?? null);
		$instance->setPurchaseUnits(($data['purchase_units'] ?? null) !== null ? array_map(static function($data) {
			return PurchaseUnits::fromJson($data);
		}, $data['purchase_units']) : null);
		$instance->setApplicationContext(($data['application_context'] ?? null) !== null ? ApplicationContext::fromJson($data['application_context']) : null);
		return $instance;
	}
}





class UnitAmount
{
	/**
	 * @var string|null
	 */
	public ?string $currency_code;

	/**
	 * @var string|null
	 */
	public ?string $value;

	/**
	 * @return string|null
	 */
	public function getCurrency_code(): ?string
	{
		return $this->currency_code;
	}

	/**
	 * @return string|null
	 */
	public function getValue(): ?string
	{
		return $this->value;
	}

	/**
	 * @param string|null $currencyCode
	 * @return self
	 */
	public function setCurrency_code(?string $currencyCode): self
	{
		$this->currency_code = $currencyCode;
		return $this;
	}

	/**
	 * @param string|null $value
	 * @return self
	 */
	public function setValue(?string $value): self
	{
		$this->value = $value;
		return $this;
	}

	/**
	 * @param array $data
	 * @return self
	 */
	public static function fromJson(array $data): self
	{
		$instance = new self();
		$instance->setCurrencyCode($data['currency_code'] ?? null);
		$instance->setValue($data['value'] ?? null);
		return $instance;
	}
}

class Amount
{
	/**
	 * @var string|null
	 */
	public ?string $currency_code;

	/**
	 * @var string|null
	 */
	public ?string $value;

	/**
	 * @var Breakdown|null
	 */
	public ?Breakdown $breakdown;

	/**
	 * @return string|null
	 */
	public function getCurrency_code(): ?string
	{
		return $this->currency_code;
	}

	/**
	 * @return string|null
	 */
	public function getValue(): ?string
	{
		return $this->value;
	}

	/**
	 * @return Breakdown|null
	 */
	public function getBreakdown()
	{
		return $this->breakdown;
	}

	/**
	 * @param string|null $currencyCode
	 * @return self
	 */
	public function setCurrency_code(?string $currencyCode): self
	{
		$this->currency_code = $currencyCode;
		return $this;
	}

	/**
	 * @param string|null $value
	 * @return self
	 */
	public function setValue(?string $value): self
	{
		$this->value = $value;
		return $this;
	}

	/**
	 * @param Breakdown|null $breakdown
	 * @return self
	 */
	public function setBreakdown(?Breakdown $breakdown): self
	{
		$this->breakdown = $breakdown;
		return $this;
	}

}

class Breakdown
{
	/**
	 * @var ItemTotal|null
	 */
	public ?ItemTotal $item_total;

	/**
	 * @return ItemTotal|null
	 */
	public function getItem_total(): ?ItemTotal
	{
		return $this->item_total;
	}

	/**
	 * @param ItemTotal|null $itemTotal
	 * @return self
	 */
	public function setItem_total(?ItemTotal $itemTotal): self
	{
		$this->item_total = $itemTotal;
		return $this;
	}

}

class ItemTotal
{
	/**
	 * @var string|null
	 */
	public ?string $currency_code;

	/**
	 * @var string|null
	 */
	public ?string $value;

	/**
	 * @return string|null
	 */
	public function getCurrency_code(): ?string
	{
		return $this->currency_code;
	}

	/**
	 * @return string|null
	 */
	public function getValue(): ?string
	{
		return $this->value;
	}

	/**
	 * @param string|null $currencyCode
	 * @return self
	 */
	public function setCurrency_code(?string $currencyCode): self
	{
		$this->currency_code = $currencyCode;
		return $this;
	}

	/**
	 * @param string|null $value
	 * @return self
	 */
	public function setValue(?string $value): self
	{
		$this->value = $value;
		return $this;
	}


}

class ApplicationContext
{
	/**
	 * @var string|null
	 */
	public ?string $return_url;

	/**
	 * @var string|null
	 */
	public ?string $cancel_url;

	/**
	 * @return string|null
	 */
	public function getReturn_url(): ?string
	{
		return $this->return_url;
	}

	/**
	 * @return string|null
	 */
	public function getCancel_url(): ?string
	{
		return $this->cancel_url;
	}

	/**
	 * @param string|null $returnUrl
	 * @return self
	 */
	public function setReturn_url(?string $returnUrl): self
	{
		$this->return_url = $returnUrl;
		return $this;
	}

	/**
	 * @param string|null $cancelUrl
	 * @return self
	 */
	public function setCancel_url(?string $cancelUrl): self
	{
		$this->cancel_url = $cancelUrl;
		return $this;
	}


} 