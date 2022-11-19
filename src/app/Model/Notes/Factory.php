<?php

declare(strict_types=1);

namespace App\Model\Notes;

use App\Model\Note;
use Nette\Database\Explorer;
use Nette\Security\User;

class Factory extends \App\DatabaseObject
{

    protected string $table = 'notes';
    private array $notes = [];

    public function __construct(Explorer $database)
    {
        parent::__construct($database, $this->table);
    }

    /**
     * @return Note[]
     */
    public function loadNotes(
        ?User $user = null,
              $ids = [],
              $hashes = [],
    ): array
    {
        $userId = 0;
        if ($user && $user->getId()) {
            $userId = $user->getId();
        }

        $select = $this->getTable()
            ->where('visible = 1')
            ->whereOr([
                'user_id' => [$userId],
                'id' => $ids ?? '%never%',
                'hash' => $hashes ?? '%never%',
                'public' => 1,
            ])
        ;

        return $select->fetchAll() ?? [];
    }

    public function load(int $id): Note
    {
        // cache releases
        if (!isset($this->notes[$id])) {
            $row = $this->getTable()->get($id);
            $release = new Note($id, $row);
            $this->notes[$id] = $release;
        }

        // return release
        return $this->notes[$id];
    }

    public function loadByHash(string $hash): ?Note
    {
        $note = $this->getTable()
            ->where('hash = ?', $hash)
            ->fetch();

        if ($note && $note->id) {
            return new Note($note->id, $note);
        }

        return null;
    }

    public function loadById($id): ?Note
    {
        $note = $this->getTable()
            ->where('id = ?', $id)
            ->fetch();

        if ($note && $note->id) {
            return new Note($note->id, $note);
        }

        return null;
    }

    public function getByHash(string $hash): array
    {
        $ids = array();

        $this->getTable()
            ->where('hash = ?', $hash)
            ->select('id')
            ->fetch();

        return $ids;
    }

    public function getPublic(): array
    {
        $ids = array();

        $data = $this->getTable()
            ->where('public = ?', 1)
            ->select('id')
            ->fetchAll();

        if ($data) {
            foreach ($data as $row) {
                $ids[] = $row->id;
            }
        }

        return $ids;
    }

    public function getById(int $id): array
    {
        $ids = array();

        $data = $this->getTable()
            ->where('id = ?', $id)
            ->select('id')
            ->fetch();

        return $ids;
    }

    public function getByUser(User $user): array
    {
        $ids = array();

        $data = $this->getTable()
            ->where('user_id = ?', $user->getId())
            ->select('id')
            ->fetchAll();

        foreach ($data as $row) {
            $ids[] = $row->id;
        }

        return $ids;
    }
}
