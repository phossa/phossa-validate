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
 * ValidatorAwareInterface
 *
 * @package Phossa\Validate
 * @author  Hong Zhang <phossa@126.com>
 * @version 1.0.0
 * @since   1.0.0 added
 */
interface ValidatorAwareInterface
{
    /**
     * Set the validator
     *
     * @param  ValidateInterface $validator
     * @return self
     * @access public
     */
    public function setValidator(ValidateInterface $validator);

    /**
     * Get the validator
     *
     * @return ValidateInterface
     * @access public
     */
    public function getValidator()/*# : ValidateInterface */;
}
