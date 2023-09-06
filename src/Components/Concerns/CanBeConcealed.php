<?php

namespace MahdiMk\Forms\Components\Concerns;

use MahdiMk\Forms\Components\Component;
use MahdiMk\Forms\Components\Contracts\CanConcealComponents;

trait CanBeConcealed
{
    protected Component | bool | null $cachedConcealingComponent = null;

    public function getConcealingComponent(): ?Component
    {
        if (filled($this->cachedConcealingComponent)) {
            return $this->cachedConcealingComponent ?: null;
        }

        $parentComponent = $this->getContainer()->getParentComponent();

        if (! $parentComponent) {
            $this->cachedConcealingComponent = false;
        } elseif ($parentComponent instanceof CanConcealComponents && $parentComponent->canConcealComponents()) {
            $this->cachedConcealingComponent = $parentComponent;
        } else {
            $this->cachedConcealingComponent = $parentComponent->getConcealingComponent();
        }

        return $this->cachedConcealingComponent ?: null;
    }

    public function isConcealed(): bool
    {
        return (bool) $this->getConcealingComponent();
    }
}
