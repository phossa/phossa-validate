<?php
/**
 * Phossa Project
 *
 * PHP version 5.4
 *
 * @category  Library
 * @package   Phossa\Validate
 * @copyright 2015 phossa.com
 * @license   http://mit-license.org/ MIT License
 * @link      http://www.phossa.com/
 */
/*# declare(strict_types=1); */

namespace Phossa\Validate;

/**
 * ValidateInterface
 *
 * @package Phossa\Validate
 * @author  Hong Zhang <phossa@126.com>
 * @version 1.0.0
 * @since   1.0.0 added
 */
interface ValidateInterface
{
    /**
     * Validate a target(scalar/array/object etc.) base on the ruleset
     *
     * @param  mixed $target target to validate
     * @param  array $ruleSet
     * @return bool
     * @access public
     */
    public function validate($target, array $ruleSet)/*# : bool */;

    /**
     * Get the latest validation error
     *
     * @return array
     * @access public
     */
    public function getError()/*# : array */;
}
