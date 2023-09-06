<?php

namespace MahdiMk\Forms\Components\Actions\Concerns;

use MahdiMk\Forms\Components\Component;
use MahdiMk\Forms\Contracts\HasForms;

trait BelongsToComponent
{
    protected Component $component;

    public function component(Component $component): static
    {
        $this->component = $component;

        return $this;
    }

    public function getComponent(): Component
    {
        return $this->component;
    }

    public function getLivewire(): HasForms
    {
        return $this->getComponent()->getLivewire();
    }
}
