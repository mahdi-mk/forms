<?php

namespace MahdiMk\Forms\Components\Contracts;

use MahdiMk\Forms\Components\Actions\Action;

interface HasAffixActions
{
    /**
     * @return array<Action>
     */
    public function getPrefixActions(): array;

    /**
     * @return array<Action>
     */
    public function getSuffixActions(): array;
}
