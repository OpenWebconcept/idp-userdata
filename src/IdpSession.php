<?php

declare(strict_types=1);

namespace OWC\IdpUserData;

abstract class IdpSession
{
    abstract protected static function get_idp(): string;

    /**
     * Returns the session slot identifier.
     * Empty string means the primary session and '2' means the partner/second login session.
     */
    protected static function get_slot(): string
    {
        return '';
    }

    public static function isPartnerSession(): bool
    {
        return static::get_slot() === '2';
    }

    public static function isPartnerLoggedIn(): bool
    {
        $isLoggedIn = apply_filters('owc_idp_is_logged_in', false, static::get_idp(), '2');

        return apply_filters('owc_' . static::get_idp() . '_is_logged_in_2', $isLoggedIn);
    }

    public static function isLoggedIn(): bool
    {
        $slot         = static::get_slot();
        $filterSuffix = $slot !== '' ? '_' . $slot : '';

        $isLoggedIn = apply_filters('owc_idp_is_logged_in', false, static::get_idp(), $slot);

        return apply_filters('owc_' . static::get_idp() . '_is_logged_in' . $filterSuffix, $isLoggedIn);
    }

    protected static function getUserData(): ?UserData
    {
        $slot         = static::get_slot();
        $filterSuffix = $slot !== '' ? '_' . $slot : '';

        $userData = apply_filters('owc_idp_userdata', null, static::get_idp(), $slot);

        return apply_filters('owc_' . static::get_idp() . '_userdata' . $filterSuffix, $userData);
    }
}
