<?php

declare(strict_types=1);

namespace App\Presenters;

use App\Presenter;
use Exception;
use JetBrains\PhpStorm\NoReturn;
use Nette\Application\AbortException;

/**
 * Class StatisticsPresenter
 * @package App\Presenters
 * @noinspection PhpUnused
 */
class ToolsPresenter extends Presenter
{

    /**
     * @throws AbortException
     */
    public function startup()
    {
        parent::startup();

        $this->permit('tools');
    }

    /**
     * @throws Exception
     * @noinspection PhpUnused
     */
    public function renderDefault()
    {
        $this->permit('tools', 'show');
    }

    /**
     * @throws AbortException
     */
    public function actionFlushCache($type) {
        $this->permit('tools', 'flush');

        switch ($type) {
            case 'all':
                $this->delete('/var/www/html/temp/cache');
                break;
            case 'latte':
                $this->delete('/var/www/html/temp/cache/latte');
                break;
        }

        $this->redirect('Tools:');
    }

    private function delete($dir) {
        if (!is_dir($dir)) {
            unlink($dir);
        }

        foreach (scandir($dir) as $item) {
            if ($item == '.' || $item == '..') {
                continue;
            }
            $this->delete($dir . DIRECTORY_SEPARATOR . $item);
        }

        rmdir($dir);
    }
}
