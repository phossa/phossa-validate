<?php
/**
 * Phossa Project
 *
 * PHP version 5.4
 *
 * @category  Package
 * @package   Phossa\Validate
 * @author    Hong Zhang <phossa@126.com>
 * @copyright 2015 phossa.com
 * @license   http://mit-license.org/ MIT License
 * @link      http://www.phossa.com/
 */
/*# declare(strict_types=1); */

namespace Phossa\Validate\Message;

use Phossa\Shared\Message\MessageAbstract;

/**
 * Message class for Phossa\Validate
 *
 * @package Phossa\Validate
 * @author  Hong Zhang <phossa@126.com>
 * @see     \Phossa\Shared\Message\MessageAbstract
 * @version 1.0.0
 * @since   1.0.0 added
 */
class Message extends MessageAbstract
{
    /**#@+
     * @var   int
     */

    /**
     * Validate position "%s" unknown
     */
    const SQL_UNKNOWN_POS           = 1605051116;

    /**#@-*/

    /**
     * {@inheritdoc}
     */
    protected static $messages = [
    ];
}
