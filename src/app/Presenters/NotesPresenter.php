<?php

declare(strict_types=1);

namespace App\Presenters;

use App\Presenter;
use JetBrains\PhpStorm\NoReturn;
use Nette;
use Nette\Application\UI\Form;

final class NotesPresenter extends Presenter
{
    public function createComponentNewNote(): Form
    {
        $form = new Form();

        $form->addText("head")->setRequired()->setHtmlAttribute("placeholder", "Note header...");
        $form->addTextArea("body")->setHtmlAttribute("placeholder", "Note body...");;

        $form->addSubmit("createNewNote", "Create");
        $form->onSuccess[] = [$this, 'create'];

        return $form;
    }

    public function create(): void
    {
        try {
            $head = $this->request->getPost()['head'];
            $body = $this->request->getPost()['body'];

            $this->flashMessage("Note $head created: " . Nette\Utils\Strings::truncate($body, 80, "..."), "success");
        } catch (\Exception $e) {
            $this->flashMessage("Creating note failed: ". $e->getMessage(), "danger");
        }
        $this->redirect("Notes:");
    }

    #[NoReturn] public function actionRemove(): void
    {
        $this->redirect("Notes:");
    }
}
