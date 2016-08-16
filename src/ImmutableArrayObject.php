<?php

namespace Chadicus\Spl\DataStructures;

/**
 * This class behaves the same as ArrayObject disallowing modifications.
 */
final class ImmutableArrayObject extends \ArrayObject
{
    /**
     * @see \ArrayObject::offsetSet()
     *
     * @param mixed $index  The index being set.
     * @param mixed $newval The new value for the index.
     *
     * @return void
     *
     * @throws \LogicException Always thrown since object is immutable.
     */
    public function offsetSet($index, $newval)
    {
        throw new \LogicException('Attempting to write to an immutable array');
    }

    /**
     * @see \ArrayObject::offsetUnset()
     *
     * @param mixed $index The index being unset.
     *
     * @return void
     *
     * @throws \LogicException Always thrown since object is immutable.
     */
    public function offsetUnset($index)
    {
        throw new \LogicException('Attempting to write to an immutable array');
    }

    /**
     * @see \ArrayObject::append()
     *
     * @param mixed $value The value being appended.
     *
     * @return void
     *
     * @throws \LogicException Always thrown since object is immutable.
     */
    public function append($value)
    {
        throw new \LogicException('Attempting to write to an immutable array');
    }

    /**
     * @see \ArrayObject::exchangeArray()
     *
     * @param mixed $array The new array or object to exchange with the current array.
     *
     * @return void
     *
     * @throws \LogicException Always thrown since object is immutable.
     */
    public function exchangeArray($array)
    {
        throw new \LogicException('Attempting to write to an immutable array');
    }

    /**
     * Creates a new ImmutableArrayObject from the given mutable ArrayObject instance.
     *
     * @param \ArrayObject $arrayObject The mutable array object.
     *
     * @return ImmutableArrayObject
     */
    public static function createFromMutable(\ArrayObject $arrayObject)
    {
        return new static($arrayObject->getArrayCopy(), $arrayObject->getFlags(), $arrayObject->getIteratorClass());
    }
}
