<?php

namespace MahdiMk\Forms\Commands\Aliases;

use MahdiMk\Forms\Commands;

class MakeFieldCommand extends Commands\MakeFieldCommand
{
    protected $hidden = true;

    protected $signature = 'forms:field {name} {--F|force}';
}
