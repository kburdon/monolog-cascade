<?php
/**
 * This file is part of the Monolog Cascade package.
 *
 * (c) Raphael Antonmattei <rantonmattei@theorchard.com>
 * (c) The Orchard
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Cascade\Tests\Fixtures;

/**
 * Class SampleClass
 *
 * @author Raphael Antonmattei <rantonmattei@theorchard.com>
 */
class SampleClass
{
    /**
     * Some mandatory member
     * @var mixed
     */
    private $mandatory;

    /**
     * Optional member A
     * @var mixed
     */
    private $optionalA;

    /**
     * Optional member A
     * @var mixed
     */
    public $optionalB;

    /**
     * Optional member X
     * @var mixed
     */
    private $optionalX;

    /**
     * Optional member Y
     * @var mixed
     */
    public $optionalY;

    /**
     * Hello member
     * @var mixed
     */
    private $hello;

    /**
     * There member
     * @var mixed
     */
    private $there;

    /**
     * Constructor
     *
     * @param mixed $mandatory Some mandatory param
     * @param string $optionalA Some optional param
     * @param string $optionalB Some other optional param
     */
    public function __construct(
        $mandatory,
        $optionalA = 'AAA',
        $optionalB = 'BBB'
    ) {
        $this->setMandatory($mandatory);
    }

    /**
     * Set the mandatory property
     *
     * @param mixed $mandatory Some value
     */
    public function setMandatory($mandatory)
    {
        $this->mandatory = $mandatory;
    }

    /**
     * Function that sets the optionalA member
     *
     * @param  mixed $value some value
     */
    public function optionalA($value)
    {
        $this->optionalA = $value;
    }

    /**
     * Function that sets the optionalX member
     *
     * @param  mixed $value some value
     */
    public function optionalX($value)
    {
        $this->optionalX = $value;
    }

    /**
     * Function that sets the hello member
     *
     * @param  mixed $value some value
     */
    public function setHello($value)
    {
        $this->hello = $value;
    }

    /**
     * Function that sets the there member
     *
     * @param  mixed $value some value
     */
    public function setThere($value)
    {
        $this->there = $value;
    }
}
