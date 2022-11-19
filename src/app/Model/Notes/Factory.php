<?php

declare(strict_types=1);

namespace App\Model\Notes;

use Nette\Database\Explorer;
use Nette\Database\Table\ActiveRow;
use Nette\Security\User;

class Factory extends \App\DatabaseObject
{

    protected string $table = 'notes';

    public function __construct(Explorer $database)
    {
        parent::__construct($database, $this->table);
    }

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

    public function loadByHash(string $hash): ?ActiveRow
    {
        return $this->getTable()
            ->where('hash = ?', $hash)
            ->fetch();
    }

    public function loadById($id): ?ActiveRow
    {
        return $this->getTable()
            ->where('id = ?', $id)
            ->fetch();
    }
}
