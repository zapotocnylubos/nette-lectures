<?php

namespace App\Forms;

use Nette\Utils\Html;

class ExampleForm
{
    public function render()
    {
        return Html::el('form')->render();
    }
}