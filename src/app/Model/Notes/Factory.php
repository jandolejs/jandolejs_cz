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
              $ids = null,
              $hashes = null,
    ): array
    {
        $result = array();

        if ($user && $user->getId()) {
            $result += $this->getByUser($user);
        }

        if ($ids && !is_array($ids)) {
            $ids = array($ids);
        }
        if ($ids) {
            foreach ($ids as $id) {
                $result += $this->getById($id);
            }
        }

        if ($hashes && !is_array($hashes)) {
            $hashes = array($hashes);
        }
        if ($hashes) {
            foreach ($hashes as $hash) {
                $result += $this->getByHash($hash);
            }
        }

        $result = array_unique($result);

        $notes = array();
        foreach ($result as $id) {
            $notes[$id] = $this->load($id);
        }

        return $notes;
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

    public function getById(int $id): array
    {
        $ids = array();

        $this->getTable()
            ->where('id = ?', $id)
            ->select('id')
            ->fetchAll();

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
