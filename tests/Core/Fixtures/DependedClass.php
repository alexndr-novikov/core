<?php
/**
 * Spiral Framework.
 *
 * @license   MIT
 * @author    Anton Titov (Wolfy-J)
 */

namespace Spiral\Core\Tests\Fixtures;

class DependedClass
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var SampleClass
     */
    private $sample;

    /**
     * @param string      $name
     * @param SampleClass $sample
     */
    public function __construct(string $name, SampleClass $sample)
    {
        $this->name = $name;
        $this->sample = $sample;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return SampleClass
     */
    public function getSample()
    {
        return $this->sample;
    }
}