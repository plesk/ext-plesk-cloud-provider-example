<?php
// Copyright 1999-2017. Parallels IP Holdings GmbH.

use Modules_PleskCloudProviders_Provider\Dump;
use Modules_PleskCloudProviders_Provider\VpsProviderInterface;

class Modules_PleskCloudProviderExample_Provider implements VpsProviderInterface
{
    /**
    * Run instance by given image id.  
    */
    public function deployDump($imageId)
    {
        /*
        $ip = '10.52.49.78';
        $hostname = 'w10-52-49-78.qa.plesk.ru';
        $password = 'setup';

        $dump = new Dump();
        $dump->ipv4 = [$ip];
        $dump->ipv6 = [];
        $dump->password = $password;
        */
        return $dump_id;
    }

    public function isDumpReady($dump_id)
    {
    }

    /**
     * The method will be called after isDumpRead returns true. 
     * There is make sense to implement this method if dump is needed for some extra preparation like generating admin password
     * or push admin info. 
     * opt = array (
            'admin_info' = array (
                'company' =>,
                'name' => ,
                'phone' =>, 
                'fax'=>, 
                'email' =>,
                'address' =>,
                'city' => 
                'state' => 
                'zip' => 
                'country'=> , 
            )
        )
     * 
     */
    public function prepareDump($dump_id, $opt)
    {
    }


    public function getDumpInfo($dump_id)
    {
         /*
        $ip = '10.52.49.78';
        $hostname = 'w10-52-49-78.qa.plesk.ru';
        $password = 'setup';

        $dump = new Dump();
        $dump->ipv4 = [$ip];
        $dump->ipv6 = [];
        $dump->password = $password;

        return $dump;
        */
    }

    public function destroyDump(Dump $dump)
    {
        return;
    }
}
