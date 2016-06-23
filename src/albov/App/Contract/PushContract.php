<?php

/**
 * Created by PhpStorm.
 * User: albo-vieira
 * Date: 23/06/16
 * Time: 11:49
 */
namespace albov\App\Contract;

interface PushContract
{
    public function push();
    public static function headers();
    public function dataToSend($token, array $options);
}