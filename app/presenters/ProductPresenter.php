<?php

namespace App\Presenters;


class ProductPresenter extends \Nette\Application\UI\Presenter
{
    function renderDetail($id){
        $this->template->productId = $id;
    }
}