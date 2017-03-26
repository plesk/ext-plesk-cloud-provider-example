<?php
// Copyright 1999-2017. Parallels IP Holdings GmbH.

use Modules_PleskCloudProviders_Provider\Dump;
use Modules_PleskCloudProviders_Provider\VpsProviderInterface;

class Modules_PleskCloudProviderExample_Provider implements VpsProviderInterface
{
    /**
     * @param int $subscriptionId
     * @return string $dumpId
     */
    public function deployDump($subscriptionId)
    {
        // launch deployment here
        return '78';
    }

    /**
     * @param string $dumpId
     * @return bool
     */
    public function isDumpDeployed($dumpId)
    {
        // check if dump is ready for provisioning
        return true;
    }

    /**
     * @param string $dumpId
     */
    public function prepareDump($dumpId)
    {
        // make initial configuration if necessary
    }

    /**
     * @param string $dumpId
     * @return Dump
     */
    public function getDumpInfo($dumpId)
    {
        $ip = "10.52.49.{$dumpId}";
        $hostname = "w10-52-49-{$dumpId}.qa.plesk.ru";
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
