# SSL Labs API PHP-Port
This PHP library provides basic access to the SSL Labs API.
It's build upon the official [API documentation](https://github.com/ssllabs/ssllabs-scan/blob/stable/ssllabs-api-docs.md).

[![Build Status](https://api.travis-ci.org/andyftw/ssllabs-php.svg)](https://travis-ci.org/andyftw/ssllabs-php)
[![Latest Stable Version](https://poser.pugx.org/andyftw/ssllabs-php/v/stable.svg)](https://packagist.org/packages/andyftw/ssllabs-php)
[![License](https://poser.pugx.org/andyftw/ssllabs-php/license.svg)](https://packagist.org/packages/andyftw/ssllabs-php)

```PHP
<?php

require_once 'vendor/autoload.php';

$api = new \Andyftw\SSLLabs\Api();

try {
  $info = $api->info();
  echo $info->getStatus();
} catch (\Andyftw\SSLLabs\Exception\ApiException $e) {
  echo $e->getMessage() . ' @ ' . $e->getCall();
}

```
## Methods
### info()
[Check SSL Labs availability](https://github.com/ssllabs/ssllabs-scan/blob/stable/ssllabs-api-docs.md#info)

### analyze()
[Invoke assessment and check progress](https://github.com/ssllabs/ssllabs-scan/blob/stable/ssllabs-api-docs.md#invoke-assessment-and-check-progress)

### getEndpointData()
[Retrieve detailed endpoint information](https://github.com/ssllabs/ssllabs-scan/blob/stable/ssllabs-api-docs.md#retrieve-detailed-endpoint-information)

### getStatusCodes()
[Retrieve known status codes](https://github.com/ssllabs/ssllabs-scan/blob/stable/ssllabs-api-docs.md#retrieve-known-status-codes)

### getRootCertsRaw()
[Retrieve root certificates](https://github.com/ssllabs/ssllabs-scan/blob/stable/ssllabs-api-docs.md#retrieve-root-certificates)
