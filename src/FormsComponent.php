<?php

namespace MahdiMk\Forms;

use Livewire\Component;

abstract class FormsComponent extends Component implements Contracts\HasForms
{
    use Concerns\InteractsWithForms;
}
