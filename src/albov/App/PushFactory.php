<?php

/**
 * Created by PhpStorm.
 * User: albo-vieira
 * Date: 21/06/16
 * Time: 22:42
 */
namespace albov\App;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Stream;

class PushFactory
{
    const ANDROID = 'android';
    const IOS = 'ios';

    public static function getInstance($os){
        if($os == self::ANDROID){
            return new GcmPushNotification();
        }
        else if($os== self::IOS){

        }
    }

}