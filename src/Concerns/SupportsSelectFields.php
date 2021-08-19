<?php

namespace Filament\Forms\Concerns;

use Filament\Forms\Components\Select;

trait SupportsSelectFields
{
    public function getSelectSearchResults(string $statePath, string $query): array
    {
        foreach ($this->getComponents() as $component) {
            if ($component instanceof Select && $component->getStatePath() === $statePath) {
                return $component->getSearchResults($query);
            }

            foreach ($component->getChildComponentContainers() as $container) {
                if ($results = $container->getSelectSearchResults($statePath, $query)) {
                    return $results;
                }
            }
        }

        return [];
    }
}
