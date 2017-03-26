<?php
// Copyright 1999-2017. Parallels IP Holdings GmbH.

use Modules_PleskCloudProviders_Provider\Dump;
use Modules_PleskCloudProviders_Provider\VpsProviderInterface;

class Modules_PleskCloudProviderExample_Provider implements VpsProviderInterface
{
    /**
     * @param int $subscriptionId
     * @param array $additionalInfo
     * @return string $dumpId
     */
    public function deployDump($subscriptionId, $additionalInfo)
    {
        \pm_Log::debug('launch deployment');
        \pm_Log::vardump($additionalInfo['admin'], 'admin: ');
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
     * @param array $additionalInfo
     */
    public function prepareDump($dumpId, $additionalInfo)
    {
        \pm_Log::debug('make initial configuration');
        \pm_Log::vardump($additionalInfo['admin'], 'admin: ');
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

    /**
     * @param string $dumpId
     */
    public function destroyDump($dumpId)
    {
        \pm_Log::debug("destroy dump with ID {$dumpId}");
        // destroy dump
    }
}
