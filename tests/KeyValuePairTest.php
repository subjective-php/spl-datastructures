<?php
namespace ChadicusTest\Spl\DataStructures;

use Chadicus\Spl\DataStructures\KeyValuePair;

/**
 * Unit tests for the \Chadicus\Spl\DataStructures\KeyValuePair class.
 *
 * @coversDefaultClass \Chadicus\Spl\DataStructures\KeyValuePair
 */
final class KeyValuePairTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Verify basic behavior of KeyValuePair class.
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
        $pair = new KeyValuePair($key, $value);
        $this->assertSame($key, $pair->getKey());
        $this->assertSame($value, $pair->getValue());
    }

    /**
     * Verify basic behavior of setValue().
     *
     * @test
     * @covers ::__construct
     * @covers ::setValue
     * @covers ::getValue
     *
     * @return void
     */
    public function setValue()
    {
        $key = new \StdClass();
        $value = new \Exception();
        $pair = new KeyValuePair($key, $value);
        $this->assertSame($value, $pair->getValue());
        $newValue = new \Exception();
        $this->assertSame($pair, $pair->setValue($newValue));
        $this->assertNotSame($value, $pair->getValue());
        $this->assertSame($newValue, $pair->getValue());
    }

    /**
     * Verify basic behavior of setKey().
     *
     * @test
     * @covers ::__construct
     * @covers ::setKey
     * @covers ::getKey
     *
     * @return void
     */
    public function setKey()
    {
        $key = new \StdClass();
        $value = new \Exception();
        $pair = new KeyValuePair($key, $value);
        $this->assertSame($key, $pair->getKey());
        $newKey = new \Exception();
        $this->assertSame($pair, $pair->setKey($newKey));
        $this->assertNotSame($key, $pair->getKey());
        $this->assertSame($newKey, $pair->getKey());
    }
}
