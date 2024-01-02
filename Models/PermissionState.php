<?php
/**
 * Jingga
 *
 * PHP Version 8.1
 *
 * @package   Modules\ResearchDevelopment\Models
 * @copyright Dennis Eichhorn
 * @license   OMS License 2.0
 * @version   1.0.0
 * @link      https://jingga.app
 */
declare(strict_types=1);

namespace Modules\ResearchDevelopment\Models;

use phpOMS\Stdlib\Base\Enum;

/**
 * Permission category enum.
 *
 * @package Modules\ResearchDevelopment\Models
 * @license OMS License 2.0
 * @link    https://jingga.app
 * @since   1.0.0
 */
abstract class PermissionState extends Enum
{
    public const PROJECT = 1;
}
