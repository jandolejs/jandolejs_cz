<?php

declare(strict_types=1);

namespace App\Presenters;

use App\Model\Notes;
use App\Presenter;
use Nette\DI\Attributes\Inject;


final class NotePresenter extends Presenter
{

    #[Inject] public Notes\Factory $noteFactory;

    public function startup()
    {
        parent::startup();
    }

    public function actionDefault() {
        $this->redirect('Homepage:default');
    }

    public function actionDetail() {
        $hash = $this->getParameter('id');

        if (empty($hash)) {
            $this->flashMessage("ID of note is missing (/note/id/a1b2c3)", 'danger');
            $this->redirect('Notes:default');
        }

        $note = $this->noteFactory->loadByHash($hash);
        if (!$note) {
            $note = $this->noteFactory->loadById($hash);
            // nacteni pres id neni povoleno pokud neni public
            if ($note && !$note->public) {
                $this->flashMessage('Note is not accessible by ID. Use hash!', 'danger');
                $this->redirect("Notes:default");
            }
        }

        if ($note) {
            $this->template->note = $note;
        } else {
            $this->flashMessage("Note '" . htmlspecialchars($hash) . "' was not found", 'danger');
            $this->redirect("Notes:default");
        }
    }
}
