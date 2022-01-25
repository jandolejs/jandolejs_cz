<?php

declare(strict_types=1);

namespace App\Presenters;

use App\Presenter;
use Nette;


final class LogoutPresenter extends Presenter
{
    public function startup() {
        parent::startup();
        $this->getUser()->logout();
        $this->redirect('Homepage:');
    }
}
