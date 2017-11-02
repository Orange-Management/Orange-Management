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

namespace Tests\PHPUnit\phpOMS\Account;

require_once __DIR__ . '/../../../../phpOMS/Autoloader.php';

use phpOMS\Account\GroupStatus;

class GroupStatusTest extends \PHPUnit\Framework\TestCase
{
    public function testEnums()
    {
        self::assertEquals(3, count(GroupStatus::getConstants()));
        self::assertEquals(1, GroupStatus::ACTIVE);
        self::assertEquals(2, GroupStatus::INACTIVE);
        self::assertEquals(4, GroupStatus::HIDDEN);
    }
}