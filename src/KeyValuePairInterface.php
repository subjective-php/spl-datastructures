<?php
namespace SubjectivePHP\Spl\DataStructures;

/**
 * Defines a key/value pair interface.
 */
interface KeyValuePairInterface
{
    /**
     * Gets the key in the key/value pair.
     *
     * @return mixed
     */
    public function getKey();

    /**
     * Gets the value in the key/value pair.
     *
     * @return mixed
     */
    public function getValue();
}
