<?php

namespace App\Presenters;

use App\Forms\ExampleForm;


class HomepagePresenter extends \Nette\Application\UI\Presenter
{
    /** @var ExampleForm @inject */
    public $formFactory;

    public function renderDefault()
    {
        $this->template->form = $this->formFactory->render();
    }
}
