<?php

namespace MahdiMk\Forms\Components\Concerns;

use MahdiMk\Forms\ComponentContainer;
use MahdiMk\Forms\Contracts\HasForms;

trait BelongsToContainer
{
    protected ComponentContainer $container;

    public function container(ComponentContainer $container): static
    {
        $this->container = $container;

        return $this;
    }

    public function getContainer(): ComponentContainer
    {
        return $this->container;
    }

    public function getLivewire(): HasForms
    {
        return $this->getContainer()->getLivewire();
    }
}
