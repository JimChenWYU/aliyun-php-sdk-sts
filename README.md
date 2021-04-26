# aliyun-php-sdk-sts

阿里云STS SDK

## Requirements

- PHP 5.5+

## Installing

```shell
$ composer require "jimchen/aliyun-php-sdk-sts:^2.0"
```

## Usage

```php
use JimChen\AliyunSts\Client;
$client = new Client(
        $accessKeyId,
        $accessKeySecret,
        $regionId,
        $clientName,
        $debug,
        $connectionTimeout,
        $timeout,
        $cert,
        $options
);

$result = $client->assumeRole()
    ->client($clientName)
    ->withRoleArn($roleArn)
    ->withRoleSessionName($roleSessionName)
    ->withDurationSeconds($durationSeconds)
    ->request();

$result->isSuccess();
```

### In Laravel

```bash
$ php artisan vendor:publish --provider='JimChen\AliyunSts\LaravelProvider'
```

```php
$result = app('aliyun.sts')->assumeRole()
    ->client($clientName)
    ->withRoleArn($roleArn)
    ->withRoleSessionName($roleSessionName)
    ->withDurationSeconds($durationSeconds)
    ->request();

$result->isSuccess();
```

> for more api usage, see [https://github.com/aliyun/openapi-sdk-php](https://github.com/aliyun/openapi-sdk-php)

## License

Apache License 2.0