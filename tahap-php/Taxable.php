<?php

interface Taxable
{
    const taxRate = 10;
    public function calculateTax(): float;
}