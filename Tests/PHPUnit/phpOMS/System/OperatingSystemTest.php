<?php
/**
 * Orange Management
 *
 * PHP Version 7.1
 *
 * @category   TBD
 * @package    TBD
 * @author     OMS Development Team <dev@oms.com>
 * @copyright  Dennis Eichhorn
 * @license    OMS License 1.0
 * @version    1.0.0
 * @link       http://orange-management.com
 */

namespace Tests\PHPUnit\phpOMS\System;

require_once __DIR__ . '/../../../../phpOMS/Autoloader.php';

use phpOMS\System\OperatingSystem;
use phpOMS\System\SystemType;

class OperatingSystemTest extends \PHPUnit\Framework\TestCase
{
    public function testSystem()
    {
        self::assertNotEquals(SystemType::UNKNOWN, OperatingSystem::getSystem());
    }
}