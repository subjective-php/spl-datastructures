<?php
namespace SubjectivePHPTest\Spl\DataStructures;

use SubjectivePHP\Spl\DataStructures\ImmutableKeyValuePair;
use PHPUnit\Framework\TestCase;

/**
 * Unit tests for the \SubjectivePHP\Spl\DataStructures\ImmutableKeyValuePair class.
 *
 * @coversDefaultClass \SubjectivePHP\Spl\DataStructures\ImmutableKeyValuePair
 */
final class ImmutableKeyValuePairTest extends TestCase
{
    /**
     * Verify basic behavior of ImmutableKeyValuePair class.
     *
     * @test
     * @covers ::__construct
     * @covers ::getValue
     * @covers ::getKey
     *
     * @return void
     */
    public function basicUsage()
    {
        $key = new \StdClass();
        $value = new \Exception();
        $pair = new ImmutableKeyValuePair($key, $value);
        $this->assertSame($key, $pair->getKey());
        $this->assertSame($value, $pair->getValue());
    }

    /**
     * Verify basic behavior of __clone().
     *
     * @test
     * @covers ::__clone
     *
     * @return void
     */
    public function cloneObject()
    {
        $key = new \DateTime();
        $value = (object)['foo' => 'bar'];
        $pair = new ImmutableKeyValuePair($key, $value);

        $clone = clone $pair;

        $this->assertNotSame($key, $clone->getKey());
        $this->assertNotSame($value, $clone->getValue());
    }
}
