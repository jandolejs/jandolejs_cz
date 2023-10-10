<?php

declare(strict_types=1);

namespace App\Presenters;

use App\Presenter;
use Exception;
use Tracy\Debugger;
use JetBrains\PhpStorm\NoReturn;
use Nette\Application\AbortException;

/**
 * Class StatisticsPresenter
 * @package App\Presenters
 * @noinspection PhpUnused
 */
class PaymentPresenter extends Presenter
{

    /**
     * @throws AbortException
     */
    public function startup()
    {
        parent::startup();

        Debugger::log(json_encode($_SERVER));
        $this::redirectUrl("https://kimisek.cz/");
    }
}
