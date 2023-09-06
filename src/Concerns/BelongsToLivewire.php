<?php

namespace MahdiMk\Forms\Concerns;

use MahdiMk\Forms\Contracts\HasForms;

trait BelongsToLivewire
{
    protected HasForms $livewire;

    public function livewire(HasForms $livewire): static
    {
        $this->livewire = $livewire;

        return $this;
    }

    public function getLivewire(): HasForms
    {
        return $this->livewire;
    }
}
