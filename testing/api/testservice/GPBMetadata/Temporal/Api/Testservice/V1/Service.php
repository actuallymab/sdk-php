<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: temporal/api/testservice/v1/service.proto

namespace GPBMetadata\Temporal\Api\Testservice\V1;

class Service
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Temporal\Api\Testservice\V1\RequestResponse::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
)temporal/api/testservice/v1/service.prototemporal.api.testservice.v1google/protobuf/empty.proto2�
TestService�
LockTimeSkipping4.temporal.api.testservice.v1.LockTimeSkippingRequest5.temporal.api.testservice.v1.LockTimeSkippingResponse" �
UnlockTimeSkipping6.temporal.api.testservice.v1.UnlockTimeSkippingRequest7.temporal.api.testservice.v1.UnlockTimeSkippingResponse" `
Sleep).temporal.api.testservice.v1.SleepRequest*.temporal.api.testservice.v1.SleepResponse" j

SleepUntil..temporal.api.testservice.v1.SleepUntilRequest*.temporal.api.testservice.v1.SleepResponse" v
UnlockTimeSkippingWithSleep).temporal.api.testservice.v1.SleepRequest*.temporal.api.testservice.v1.SleepResponse" _
GetCurrentTime.google.protobuf.Empty3.temporal.api.testservice.v1.GetCurrentTimeResponse" B�
io.temporal.api.testservice.v1BServiceProtoPZ-go.temporal.io/api/testservice/v1;testservice�Temporalio.Api.TestService.V1� Temporalio::Api::TestService::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

