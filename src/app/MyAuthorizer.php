<?php


namespace App;

use Nette\Security\Authorizator;

/**
 * Class MyAuthorizer
 * @package App
 * @noinspection PhpUnused
 */
class MyAuthorizer implements Authorizator
{

    const PERMISSIONS = [
        'user' => [
            'github'  => [
                'pulls'
            ],
        ],
    ];

    public function isAllowed($role, $resource, $privilege): bool
    {
        if ($role === 'admin') return TRUE;

        if (isset(self::PERMISSIONS[$role])) {
            if (isset(self::PERMISSIONS[$role][$resource])) {

                // no privilege wanted
                if (empty($privilege)) return TRUE;

                // privilege exists
                if (in_array($privilege, self::PERMISSIONS[$role][$resource]))
                    return TRUE;
            }
        }

        return FALSE;
    }
}