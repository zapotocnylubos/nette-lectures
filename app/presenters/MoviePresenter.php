<?php

namespace App\Presenters;


class MoviePresenter extends \Nette\Application\UI\Presenter
{
    function renderDetail($id){
        $this->template->movieId = $id;
    }
}