<?php

declare(strict_types=1);

namespace App\Presenters;

use App\Presenter;

/**
 * Class StatisticsPresenter
 * @package App\Presenters
 * @noinspection PhpUnused
 */
class StatisticsPresenter extends Presenter
{

    /**
     * @throws \Nette\Application\AbortException
     */
    public function startup()
    {
        parent::startup();

        $this->permit('statistics');
    }

    /**
     * @throws \Exception
     * @noinspection PhpUnused
     */
    public function renderDefault()
    {
        $this->permit('statistics', 'show');

        $statistics = $this->statistics;

        $this->template->statistics = $statistics->getAllStatisticsTogether();
    }
}
