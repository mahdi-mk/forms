<?php

namespace MahdiMk\Forms\Components\Contracts;

use MahdiMk\Forms\Components\Actions\Action;

interface HasHintActions
{
    /**
     * @return array<Action>
     */
    public function getHintActions(): array;
}
