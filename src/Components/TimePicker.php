<?php

namespace MahdiMk\Forms\Components;

class TimePicker extends DateTimePicker
{
    public function hasDate(): bool
    {
        return false;
    }
}
