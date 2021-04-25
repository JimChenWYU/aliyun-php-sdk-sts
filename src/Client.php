<?php

namespace JimChen\AliyunSts;

use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Sts\Sts;

/**
 * Class Client
 *
 * @mixin \AlibabaCloud\Sts\V20150401\StsApiResolver
 */
class Client
{
    /**
     * @var \AlibabaCloud\Client\Clients\AccessKeyClient
     */
    protected $kernel;

    /**
     * @param string $accessKeyId
     * @param string $accessKeySecret
     * @param string $regionId
     * @param string $clientName
     * @param false $debug
     * @param int   $connectionTimeout
     * @param int   $timeout
     * @param array $cert
     * @param array $options
     * @throws \AlibabaCloud\Client\Exception\ClientException
     */
    public function __construct(
        $accessKeyId,
        $accessKeySecret,
        $regionId,
        $clientName,
        $debug = false,
        $connectionTimeout = 20,
        $timeout = 20,
        $cert = [],
        $options = []
    )
    {
        $this->kernel = AlibabaCloud::accessKeyClient($accessKeyId, $accessKeySecret)
            ->regionId($regionId)
            ->connectTimeout($connectionTimeout)
            ->timeout($timeout)
            ->name($clientName)
            ->debug($debug)
            ->cert($cert)
            ->options($options);
    }

    /**
     * @return \AlibabaCloud\Client\Clients\AccessKeyClient
     */
    public function getKernel()
    {
        return $this->kernel;
    }

    /**
     * @param string $method
     * @param array $arguments
     * @return mixed
     */
    public function __call($method, $arguments)
    {
        return call_user_func_array([Sts::v20150401(), $method], $arguments);
    }
}
