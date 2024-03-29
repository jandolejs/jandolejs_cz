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

    public function actionDelete() {
        $hash = $this->getParameter('id');

        if (empty($hash)) {
            $this->flashMessage("ID of note is missing (/note/id/a1b2c3)", 'danger');
            $this->redirect('Notes:default');
        }

        if (!$this->getUser()->isLoggedIn()) {
            $this->flashMessage('You must be logged in', 'danger');
            $this->redirect("Notes:default");
        }

        $note = $this->notesFactory->loadByHash($hash);

        if ($note) {
            $note->update(['visible' => 0]);
            $this->flashMessage("Note '" . htmlspecialchars($hash) . "' was deleted", 'success');
        } else {
            $this->flashMessage("Note '" . htmlspecialchars($hash) . "' was not found", 'danger');
        }
        $this->redirect("Notes:default");
    }

    public function actionNew() {

        $data = [
            'heading' => $this->getParameter('header'),
            'content' => $this->getParameter('content'),
            'hash' => $this->getParameter('hash') ? $this->getParameter('hash') : substr(md5(time().''), 0, 5),
            'public' => $this->getParameter('public') ? 1:0,
            'user_id' => $this->getUser()->getId(),
        ];

        if ($hash = $this->getParameter('hash')) {
            $exists = $this->notesFactory->loadByHash($hash);
            if ($exists && $exists->id) {
                $this->flashMessage('This hash already exists', 'warning');
                $this->redirect('Notes:default', $data + ['modal' => '1', 'modalError' => 'Hash already exists']);
            }
        }

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
        $this->getTemplate()->request = $this->getRequest();
    }
}
