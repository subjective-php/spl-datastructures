<?php

namespace SubjectivePHP\Spl\DataStructures;

/**
 * Defines the interface for Bad data structures.
 */
interface BagInterface extends CollectionInterface
{
    /**
     * Adds a new element to the bag.
     *
     * @param mixed $element The element to add.
     *
     * @return BagInterface
     */
    public function add($element) : BagInterface;

    /**
     * Removes a random element from the bag.
     *
     * @return mixed
     *
     * @throws \RuntimeException Thrown if remove is called on an empty bag.
     */
    public function remove();
}
