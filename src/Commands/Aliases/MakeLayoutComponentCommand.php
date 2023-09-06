<?php

namespace MahdiMk\Forms\Commands\Aliases;

use MahdiMk\Forms\Commands;

class MakeLayoutComponentCommand extends Commands\MakeLayoutComponentCommand
{
    protected $hidden = true;

    protected $signature = 'forms:layout {name} {--F|force}';
}
