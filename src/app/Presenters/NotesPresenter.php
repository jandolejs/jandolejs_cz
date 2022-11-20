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

    public function actionNew() {
        $data = [
            'heading' => $this->getParameter('header'),
            'content' => $this->getParameter('content'),
            'hash' => $this->getParameter('hash') ? $this->getParameter('hash') : substr(md5(time().''), 0, 5),
            'public' => $this->getParameter('public') ? 1:0,
            'user_id' => $this->getUser()->getId(),
        ];

        $note = $this->notesFactory->getTable()->insert($data);
        $hash = $note->hash ?? $note->id;
        $this->redirect('Note:detail', ['id' => $hash]);
    }

    public function actionDefault() {
        $id = $this->getRequest()->getParameter('id');

        $notes = $this->notesFactory->loadNotes(
            $this->getUser(), $id, $id
        );

        $this->getTemplate()->notes = $notes;
    }
}
