<?php

declare(strict_types=1);

namespace App\Presenters;

use App\Presenter;
use JetBrains\PhpStorm\NoReturn;
use Nette;
use Nette\Application\UI\Form;


final class LoginPresenter extends Presenter
{
    public function createComponentLoginForm(): Form
    {
        $form = new Form;
        $form->addText('username', 'Username:')
            ->setRequired('Please enter your username.');

        $form->addPassword('password', 'Password:')
            ->setRequired('Please enter your password.');

        $form->addSubmit('send', 'Sign in');

        $form->onSuccess[] = [$this, 'loginFormSent'];
        return $form;
    }

    #[NoReturn] public function loginFormSent(Form $form, $data): void
    {
        try
        {
            $this->getUser()->login($data->username, $data->password);
            $this->flashMessage("Logged in", "success");

            $this->redirect('Homepage:');
        }
        catch (Nette\Security\AuthenticationException $e)
        {
            $msg = match ($e->getCode()) {
                Nette\Security\Authenticator::IDENTITY_NOT_FOUND => "User not found!",
                Nette\Security\Authenticator::INVALID_CREDENTIAL => "Password is wrong!",
                default => "Login failed!",
            };

            $this->flashMessage($msg, "danger");
            $this->redirect('this');
        }
    }
}
