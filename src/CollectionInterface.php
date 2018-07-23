<?php

namespace SubjectivePHP\Spl\DataStructures;

/**
 * Iterface for collection objects.
 */
interface CollectionInterface extends \Iterator, \Countable
{
    /**
     * Checks whether the collection is empty.
     *
     * @return boolean
     */
    public function isEmpty() : bool;

    /**
     * Clears the collection of all elements.
     *
     * @return CollectionInterface
     */
    public function clear() : CollectionInterface;
}
