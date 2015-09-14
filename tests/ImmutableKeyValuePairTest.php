<?php
namespace ChadicusTest\Spl\DataStructures;

use Chadicus\Spl\DataStructures\ImmutableKeyValuePair;

/**
 * Unit tests for the \Chadicus\Spl\DataStructures\ImmutableKeyValuePair class.
 *
 * @coversDefaultClass \Chadicus\Spl\DataStructures\ImmutableKeyValuePair
 */
final class ImmutableKeyValuePairTest extends \PHPUnit_Framework_TestCase
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
}
