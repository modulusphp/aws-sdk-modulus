<?php

namespace Modulus\Aws\Services\CloudWatch;

use Modulus\Aws\Mocks\AWSConfig;
use Modulus\Hibernate\Logging\Driver;
use Aws\CloudWatchLogs\CloudWatchLogsClient;

class MonologDriver extends Driver
{
  use AWSConfig;

  /**
   * Create AWS cloud watch client
   *
   * @return CloudWatchLogsClient
   */
  private function getAWSClient() : CloudWatchLogsClient
  {
    return new CloudWatchLogsClient([
      'region' => $this->getAWSRegion(),
      'version' => $this->getAWSVersion(),
      'credentials' => [
        'key' => $this->getAWSKey(),
        'secret' => $this->getAWSSecret()
      ]
    ]);
  }
}