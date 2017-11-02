<?php
/**
 * Orange Management
 *
 * PHP Version 7.1
 *
 * @category   TBD
 * @package    TBD
 * @copyright  Dennis Eichhorn
 * @license    OMS License 1.0
 * @version    1.0.0
 * @link       http://orange-management.com
 */
declare(strict_types = 1);

namespace phpOMS\Utils\IO;

interface IODatabaseMapper
{
    public function addSource(string $source);

    public function setSources(array $sources);

    public function setLineBuffer(int $buffer);

    public function insert();
}