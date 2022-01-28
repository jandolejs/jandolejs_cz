<?php


namespace App\Model;


use App\Configuration;
use JetBrains\PhpStorm\ArrayShape;
use Nette\Database\Explorer;
use Nette\Database\Table\Selection;
use Nette\Security\User;

class Statistics
{

    private Explorer $database;
    private int|null $userId;

    public function __construct(Explorer $database, User $user)
    {
        $this->database = $database;
        $this->userId   = $user->getId();
    }

    public function create(string $type, string $action, $value)
    {
        $this->getTable()->insert([
            'type'    => $type,
            'action'  => $action,
            'value'   => (string)$value,
            'user_id' => $this->userId,
        ]);
    }

    public function visit(string $url, string $type = 'default')
    {
        $this->create('url', $type, $url);
    }

    #[ArrayShape(['this' => "array", 'last' => 'array'])]
    public function getAllStatisticsTogether(): array
    {
        return [
            'this' => $this->getStatistic(0),
            'last' => $this->getStatistic(-1),
        ];
    }

    private function getTable(): Selection
    {
        return clone $this->database->table(Configuration::get('statistics/table'));
    }

    private function getStatistic(?int $month = null): array
    {
        $where = array();

        if ($month !== null) {
            $where[] = [
                'date LIKE' => date('Y-m', strtotime("first day of $month month")) . '%',
            ];
        }

        $fetched = $this->getTable()->where($where)->order('date DESC');
        $fetched = $fetched->group("value");

        return $fetched->fetchAll() ?? [];
    }
}
