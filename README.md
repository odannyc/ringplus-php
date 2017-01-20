# ringplus-php
This is a simple Ringplus PHP client. Not an official package.

```php
// An easy ringplus api wrapper :-)
Accounts::all();
```

## Installation
To install use composer.

`composer require odannyc/ringplus-php`

## Usage
Currently this package doesn't include a built Oauth2 service so you'll need to use something else to get the access token from ringplus.

```php
use Ringplus\Configuration\Configuration;
use Ringplus\Api\Accounts;
use Ringplus\Api\Voicemail;
use Ringplus\Api\FluidCall;
use Ringplus\Api\PhoneCalls;
use Ringplus\Api\PhoneTexts;
use Ringplus\Api\PhoneData;
use Ringplus\Api\Users;

// First you need to set your tokens:
Configuration::begin();
Configuration::clientId(TOKEN);
Configuration::redirectUri('https://ringplus.net'); // This should be your own redirect uri
Configuration::clientSecret(TOKEN);
Configuration::accessToken(TOKEN);

// Then you can start playing with it:
// Get an account's voicemail:
$allAccounts = Accounts::all(); // Gets all accounts you have access to
$account = Account::fetch($allAccounts['data']['accounts'][0]['id']); // Gets once specific account
$voicemails = Voicemail::all($account['data']['account']['voicemail_box']['id']); // Gets the voicemails

// Get fluidcall information (Needs an account ID)
$fluidcallInfo = FluidCall::all($allAccounts['data']['accounts'][0]['id']);

// Get phone call history (Needs account ID)
$phoneCalls = PhoneCalls::all($allAccounts['data']['accounts'][0]['id']);

// Get phone text history (Needs account ID)
$phoneTexts = PhoneTexts::all($allAccounts['data']['accounts'][0]['id']);

// Get phone device data (Needs account ID)
$phoneTexts = PhoneData::all($allAccounts['data']['accounts'][0]['id']);

// Get user data
$allUsers = Users::all(); // Gets all users you have access to
$user = Users::fetch($allUsers['data']['users'][0]['id']);

```

## Contributions
If you found this package helpful and would like to contribute, just make a pull request and I'll try and merge it as soon as possible.

Thanks!
