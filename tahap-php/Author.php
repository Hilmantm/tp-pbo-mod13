<?php

class Author implements Taxable
{

    private string $name;
    private float $royalti;

    /**
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }


    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return float
     */
    public function getRoyalti(): float
    {
        return $this->royalti;
    }

    /**
     * @param float $royalti
     */
    public function setRoyalti(float $royalti): void
    {
        $this->royalti = $royalti;
    }

    public function calculateTax(): float
    {
        return self::taxRate * $this->getRoyalti();
    }
}