<?php
namespace Paypal\Sdk\Models;

class Items
{
	/**
	 * @var string|null
	 */
	public ?string $name;

	/**
	 * @var string|null
	 */
	public ?string $description;

	/**
	 * @var string|null
	 */
	public ?string $quantity;

	/**
	 * @var UnitAmount|null
	 */
	public ?UnitAmount $unit_amount;

	/**
	 * @return string|null
	 */
	public function getName(): ?string
	{
		return $this->name;
	}

	/**
	 * @return string|null
	 */
	public function getDescription(): ?string
	{
		return $this->description;
	}

	/**
	 * @return string|null
	 */
	public function getQuantity(): ?string
	{
		return $this->quantity;
	}

	/**
	 * @return UnitAmount|null
	 */
	public function getUnit_amount(): ?UnitAmount
	{
		return $this->unit_amount;
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
	 * @param string|null $description
	 * @return self
	 */
	public function setDescription(?string $description): self
	{
		$this->description = $description;
		return $this;
	}

	/**
	 * @param string|null $quantity
	 * @return self
	 */
	public function setQuantity(?string $quantity): self
	{
		$this->quantity = $quantity;
		return $this;
	}

	/**
	 * @param UnitAmount|null $unitAmount
	 * @return self
	 */
	public function setUnit_amount(?UnitAmount $unitAmount): self
	{
		$this->unit_amount = $unitAmount;
		return $this;
	}

}
