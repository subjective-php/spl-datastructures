<?php
namespace SubjectivePHPTest\Spl\DataStructures;

use SubjectivePHP\Spl\DataStructures\ImmutableArrayObject;
use PHPUnit\Framework\TestCase;

/**
 * Unit tests for the \SubjectivePHP\Spl\DataStructures\ImmutableArrayObject class.
 *
 * @coversDefaultClass \SubjectivePHP\Spl\DataStructures\ImmutableArrayObject
 */
final class ImmutableArrayObjectTest extends TestCase
{
    /**
     * Verify basic behavior of createFromMutable().
     *
     * @test
     * @covers ::createFromMutable
     *
     * @return void
     */
    public function createFromMutable()
    {
        $data = ['a', 'b', 'c'];
        $mutable = new \ArrayObject($data);
        $immutable = ImmutableArrayObject::createFromMutable($mutable);

        $this->assertInstanceOf('\SubjectivePHP\Spl\DataStructures\ImmutableArrayObject', $immutable);
        $this->assertSame($mutable->getArrayCopy(), $immutable->getArrayCopy());
        $this->assertSame($mutable->getFlags(), $immutable->getFlags());
        $this->assertSame($mutable->getIteratorClass(), $immutable->getIteratorClass());
    }

    /**
     * Verify behavior of offsetSet().
     *
     * @test
     * @covers ::offsetSet
     * @expectedException \LogicException
     * @expectedExceptionMessage Attempting to write to an immutable array
     *
     * @return void
     */
    public function offsetSet()
    {
        $immutable = new ImmutableArrayObject(['a', 'b', 'c']);
        $immutable[3] = 'd';
    }

    /**
     * Verify behavior of offsetUnset().
     *
     * @test
     * @covers ::offsetUnset
     * @expectedException \LogicException
     * @expectedExceptionMessage Attempting to write to an immutable array
     *
     * @return void
     */
    public function offsetUnset()
    {
        $immutable = new ImmutableArrayObject(['a', 'b', 'c']);
        unset($immutable[3]);
    }

    /**
     * Verify behavior of append().
     *
     * @test
     * @covers ::append
     * @expectedException \LogicException
     * @expectedExceptionMessage Attempting to write to an immutable array
     *
     * @return void
     */
    public function append()
    {
        $immutable = new ImmutableArrayObject(['a', 'b', 'c']);
        $immutable->append('d');
    }

    /**
     * Verify behavior of exchangeArray().
     *
     * @test
     * @covers ::exchangeArray
     * @expectedException \LogicException
     * @expectedExceptionMessage Attempting to write to an immutable array
     *
     * @return void
     */
    public function exchangeArray()
    {
        $immutable = new ImmutableArrayObject(['a', 'b', 'c']);
        $immutable->exchangeArray(['x', 'y', 'z']);
    }
}
