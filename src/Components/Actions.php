<?php

namespace MahdiMk\Forms\Components;

use Closure;
use MahdiMk\Forms\Components\Actions\Action;
use Filament\Support\Concerns\HasAlignment;
use Filament\Support\Concerns\HasVerticalAlignment;

class Actions extends Component
{
    use HasAlignment;
    use HasVerticalAlignment;

    protected string $view = 'filament-forms::components.actions';

    protected bool | Closure $isFullWidth = false;

    /**
     * @param  array<Action>  $actions
     */
    final public function __construct(array $actions)
    {
        $this->actions($actions);
    }

    /**
     * @param  array<Action>  $actions
     */
    public static function make(array $actions): static
    {
        return app(static::class, ['actions' => $actions]);
    }

    /**
     * @param  array<Action>  $actions
     */
    public function actions(array $actions): static
    {
        $this->childComponents(array_map(
            fn (Action $action): Component => $action->toFormComponent(),
            $actions,
        ));

        return $this;
    }

    public function fullWidth(bool | Closure $isFullWidth = true): static
    {
        $this->isFullWidth = $isFullWidth;

        return $this;
    }

    public function isFullWidth(): bool
    {
        return (bool) $this->evaluate($this->isFullWidth);
    }
}
