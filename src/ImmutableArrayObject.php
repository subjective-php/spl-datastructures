<?php

namespace Chadicus\Spl\DataStructures;

/**
 * This class behaves the same as ArrayObject disallowing modifications.
 */
final class ImmutableArrayObject extends \ArrayObject
{
    /**
     * @see \ArrayObject::offsetSet
     *
     * @throws \LogicException
     */
    public function offsetSet($index, $newval)
    {
        throw new \LogicException('Attempting to write to an immutable array');
    }

    /**
     * @see \ArrayObject::offsetUnset
     *
     * @throws \LogicException
     */
    public function offsetUnset($index)
    {
        throw new \LogicException('Attempting to write to an immutable array');
    }

    /**
     * @see \ArrayObject::append
     *
     * @throws \LogicException
     */
    public function append($value)
    {
        throw new \LogicException('Attempting to write to an immutable array');
    }

    /**
     * @see \ArrayObject::exchangeArray
     *
     * @throws \LogicException
     */
    public function exchangeArray($array)
    {
        throw new \LogicException('Attempting to write to an immutable array');
    }

    /**
     * Creates a new ImmutableArrayObject from the given mutable ArrayObject instance.
     *
     * @param \ArrayObject The mutable array object.
     *
     * @return ImmutableArrayObject
     */
    public static function createFromMutable(\ArrayObject $arrayObject)
    {
        return new static($arrayObject->getArrayCopy(), $arrayObject->getFlags(), $arrayObject->getIteratorClass());
    }
}
