<?php
// Copyright 1999-2017. Parallels IP Holdings GmbH.

use Modules_PleskCloudProviders_Provider\Dump;
use Modules_PleskCloudProviders_Provider\VpsProviderInterface;

class Modules_PleskCloudProviderExample_Provider implements VpsProviderInterface
{
    public function deployDump()
    {
        $ip = '10.52.49.78';
        $hostname = 'w10-52-49-78.qa.plesk.ru';
        $password = 'setup';

        $dump = new Dump();
        $dump->ipv4 = [$ip];
        $dump->ipv6 = [];
        $dump->password = $password;
        return $dump;
    }

    public function destroyDump(Dump $dump)
    {
        return;
    }
}
