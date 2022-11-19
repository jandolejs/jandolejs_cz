<?php

declare(strict_types=1);

namespace App\Presenters;

use App\Model\Notes;
use App\Presenter;
use Nette\DI\Attributes\Inject;


final class NotesPresenter extends Presenter
{

    #[Inject] public Notes\Factory $notesFactory;

    public function startup()
    {
        parent::startup();
    }

    public function actionDetail() {
        $this->redirect('Notes:default');
    }

    public function actionDefault() {
        $id = $this->getRequest()->getParameter('id');

        $notes = $this->notesFactory->loadNotes(
            $this->getUser(), $id, $id
        );
        bdump($notes);

        $this->getTemplate()->notes = $notes;
    }
}
