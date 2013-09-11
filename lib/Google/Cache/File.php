<?php

namespace Google\Cache;

require_once __DIR__ . '/../../google-api-php-client/src/Google_Client.php';
require_once __DIR__ . '/../../google-api-php-client/src/cache/Google_FileCache.php';

class File extends \Google_FileCache {}
