<?php

namespace Hummingbird\Us3\Logger;

use Magento\Framework\Logger\Handler\Base;

class Handler extends Base
{
    protected $loggerType = Logger::INFO;

    protected $fileName = 'var/log/system.log';
}