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
 * ValidatorAwareTrait
 *
 * @package Phossa\Validate
 * @author  Hong Zhang <phossa@126.com>
 * @version 1.0.0
 * @since   1.0.0 added
 */
trait ValidatorAwareTrait
{
    /**
     * validator
     *
     * @var    ValidateInterface
     * @access protected
     */
    protected $validator;

    /**
     * {@inheritDoc}
     */
    public function setValidator(ValidateInterface $validator)
    {
        $this->validator = $validator;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getValidator()/*# : ValidateInterface */
    {
        return $this->validator;
    }
}
