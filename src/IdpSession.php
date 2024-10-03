<?php

declare(strict_types=1);

namespace OWC\IdpUserData;

abstract class IdpSession
{
    abstract protected static function get_idp(): string;

    public static function isLoggedIn(): bool
    {
        $isLoggedIn = apply_filters('owc_idp_is_logged_in', false, static::get_idp());

        return apply_filters('owc_' . static::get_idp() . '_is_logged_in', $isLoggedIn);
    }

    protected static function getUserData(): ?UserDataInterface
    {
        $userData = apply_filters('owc_idp_userdata', null, static::get_idp());

        return apply_filters('owc_' . static::get_idp() . '_userdata', $userData);
    }
}
