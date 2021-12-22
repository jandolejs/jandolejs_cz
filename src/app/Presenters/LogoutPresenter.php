<?php

declare(strict_types=1);

namespace App\Presenters;

use Nette;


final class LogoutPresenter extends Nette\Application\UI\Presenter
{
    public function startup() {
        parent::startup();
        $this->getUser()->logout();
        $this->redirect('Homepage:');
    }
}
