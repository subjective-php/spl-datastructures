<?php

namespace SubjectivePHP\Spl\DataStructures;

/**
 * Unordered bag collection.
 */
final class Bag implements BagInterface, \JsonSerializable
{
    /**
     * @var array
     */
    private $elements = [];

    /**
     * @var integer
     */
    private $position;

    /**
     * Adds a new element to the bag.
     *
     * @param mixed $element The element to add.
     *
     * @return BagInterface
     */
    public function add($element) : BagInterface
    {
        array_unshift($this->elements, $element);
        shuffle($this->elements);
        return $this;
    }

    /**
     * Removes a random element from the bag.
     *
     * @return mixed
     *
     * @throws \RuntimeException Thrown if remove is called on an empty bag.
     */
    public function remove()
    {
        if (empty($this->elements)) {
            throw new \RuntimeException('Bag is empty');
        }

        return array_pop($this->elements);
    }

    /**
     * Returns true if the bag contains no elements.
     *
     * @return boolean
     */
    public function isEmpty() : bool
    {
        return empty($this->elements);
    }

    /**
     * @see \Iterator::rewind()
     *
     * @return void
     */
    public function rewind()
    {
        $this->position = 0;
        shuffle($this->elements);
    }

    /**
     * @see \Iterator::current()
     *
     * @return mixed
     */
    public function current()
    {
        return $this->elements[$this->position];
    }

    /**
     * @see \Iterator::key()
     *
     * @return integer
     */
    public function key() : int
    {
        return $this->position;
    }

    /**
     * @see \Iterator::next()
     *
     * @return void
     */
    public function next()
    {
        ++$this->position;
    }

    /**
     * @see \Iterator::valid()
     *
     * @return boolean
     */
    public function valid() : bool
    {
        return isset($this->elements[$this->position]);
    }

    /**
     * @see \JsonSerializable::jsonSerialize()
     *
     * @return array
     */
    public function jsonSerialize() : array
    {
        return $this->elements;
    }

    /**
     * @see \Countable::count()
     *
     * @return integer
     */
    public function count() : int
    {
        return count($this->elements);
    }

    /**
     * @see CollectionInterface::clear()
     *
     * @return CollectionInterface
     */
    public function clear() : CollectionInterface
    {
        $this->elements = [];
        return $this;
    }
}
