<?php
/**
 * Copyright © 2025 MageStack. All rights reserved.
 * See COPYING.txt for license details.
 *
 * @author    Amit Biswas <amit.biswas.webdeveloper@gmail.com>
 * @copyright 2025 MageStack
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
declare(strict_types=1);

namespace MageStack\OpenSearchLogger\Logger;

use Monolog\LogRecord;

/**
 * Class SearchExceptionProcessor
 * 
 * @namespace MageStack\OpenSearchLogger\Logger
 */
class SearchExceptionProcessor
{
    /**
     * @param LogRecord $record
     *
     * @return LogRecord
     */
    public function __invoke(LogRecord $record): LogRecord
    {
        $record['extra']['is_search_exception'] = true;

        return $record;
    }
}
