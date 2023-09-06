<?php

namespace Filament\Forms\Components\Concerns;

trait HasComponentType
{
    protected string $componentType;

    public function componentType(string $componentType): static
    {
        $this->componentType = $componentType;

        return $this;
    }

    public function getComponentType(): string
    {
        return $this->componentType;
    }
}
