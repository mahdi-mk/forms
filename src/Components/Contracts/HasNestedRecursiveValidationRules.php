<?php

namespace MahdiMk\Forms\Components\Contracts;

interface HasNestedRecursiveValidationRules
{
    /**
     * @return array<mixed>
     */
    public function getNestedRecursiveValidationRules(): array;
}
