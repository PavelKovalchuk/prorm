<?php

abstract class ProRMSession
{
    const VAR_PREFIX = 'pro_';

    public static function init()
    {
        if (!session_id()) {
            session_start();
        }
    }

    public static function setFlash($name, $value)
    {
        $_SESSION[self::VAR_PREFIX . $name] = $value;
    }

    public static function getFlash($name, $default = null)
    {
        $value = isset($_SESSION[self::VAR_PREFIX . $name])
            ? $_SESSION[self::VAR_PREFIX . $name]
            : $default;

        self::unsetFlash($name);

        return $value;
    }

    public static function unsetFlash($name)
    {
        unset($_SESSION[self::VAR_PREFIX . $name]);
    }
}