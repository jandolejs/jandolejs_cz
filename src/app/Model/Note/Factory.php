<?php

declare(strict_types=1);

namespace App\Model\Note;

use Nette\Database\Explorer;

class Factory extends \App\DatabaseObject
{

    protected string $table = 'notes';

    public function __construct(Explorer $database)
    {
        parent::__construct($database, $this->table);
    }
}
