<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Waterandair\AuthGrpc;

/**
 */
class AuthClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * 获取信息
     * @param \Waterandair\AuthGrpc\PBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetInfo(\Waterandair\AuthGrpc\PBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/waterandair.authGrpc.Auth/GetInfo',
        $argument,
        ['\Waterandair\AuthGrpc\Response', 'decode'],
        $metadata, $options);
    }

}
