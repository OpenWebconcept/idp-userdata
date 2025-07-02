# OWC IDP UserData

This package provides common `UserData` and `Session` classes for identity provider (IDP) plugins such as DigiD, eHerkenning, and eIDAS.

## Installation

Install via Composer:

```bash
composer require owc/idp-userdata
```

### Example: Providing User Data via IDP-Specific Filters

To provide user data to the session classes, use the IDP-specific WordPress filters in your plugin or theme:

```php
use OWC\IdpUserData\DigiDUserData;

add_filter('owc_digid_is_logged_in', function (bool $isLoggedIn): bool {
    // Your logic to determine if the user is logged in with DigiD
    return true;
});

add_filter('owc_digid_userdata', function (?DigiDUserData $userData): ?DigiDUserData {
    return new DigiDUserData([
        'bsn' => '123456789',
    ]);
});
```

### Example: Providing User Data via Generic Filter (with switch)

You can also use the generic filters and handle multiple IDPs with a switch statement:

```php

use OWC\IdpUserData\DigiDUserData;
use OWC\IdpUserData\eHerkenningUserData;
use OWC\IdpUserData\eIDASUserData;
use OWC\IdpUserData\IdpSession;
use OWC\IdpUserData\Idp;
use OWC\IdpUserData\UserData;


add_filter('owc_idp_is_logged_in', function (bool $isLoggedIn, string $idp): bool {
    switch ($idp) {
        case Idp::DIGID:
            // Your logic for DigiD
            return true;
        case Idp::EHERKENNING:
            // Your logic for eHerkenning
            return false;
        case Idp::EIDAS:
            // Your logic for eIDAS
            return false;
        default:
            return $isLoggedIn;
    }
}, 10, 2);

add_filter('owc_idp_userdata', function (?UserData $userData, string $idp): ?UserData {
    switch ($idp) {
        case Idp::DIGID:
            return new DigiDUserData([
                'bsn' => '123456789',
            ]);
        case Idp::EHERKENNING:
            return new eHerkenningUserData([
                'kvk' => '987654321',
                'rsin' => '123456789',
                'vestigingsnummer' => '001',
                'bsn' => null,
            ]);
        case Idp::EIDAS:
            return new eIDASUserData([
                'bsn' => '555555555',
            ]);
        default:
            return $userData;
    }
}, 10, 2);
```

### Example: Getting User Data

```php
use OWC\IdpUserData\DigiDSession;
use OWC\IdpUserData\DigiDUserData;

if (DigiDSession::isLoggedIn()) {
    $userData = DigiDSession::getUserData();
    if ($userData instanceof DigiDUserData) {
        $bsn = $userData->getBsn();
        // ...
    }
}
```
