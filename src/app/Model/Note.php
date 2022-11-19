<?php

declare(strict_types=1);

namespace App\Model;


use Nette\Database\Table\ActiveRow;
use Nette\SmartObject;

class Note
{
    use SmartObject;

    private int $id;
    private ActiveRow $row;

    public function __construct(int $id, ActiveRow $row)
    {
        $this->id  = $id;
        $this->row = $row;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getHeading(): string
    {
        return $this->row->heading ?? '-- Note --';
    }

    public function getHash(): string
    {
        return $this->row->hash ?? '';
    }

    public function getContent(): string
    {
        return $this->row->content ?? '-- Note is empty --';
    }

}
