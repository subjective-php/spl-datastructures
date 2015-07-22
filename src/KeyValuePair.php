<?php
namespace Chadicus\Spl\DataStructures;

/**
 * Defines an immutable key/value pair.
 */
class KeyValuePair
{
    /**
     * The key in the key/value pair.
     *
     * @var mixed
     */
    private $key;

    /**
     * The value in the key/value pair.
     *
     * @var mixed
     */
    private $value;

    /**
     * Construct a new KeyValuePair.
     *
     * @param mixed $key   The key of the pair.
     * @param mixed $value The value of the pair.
     */
    public function __construct($key, $value)
    {
        $this->key = $key;
        $this->value = $value;
    }

    /**
     * Gets the key in the key/value pair.
     *
     * @return mixed
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Gets the value in the key/value pair.
     *
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets the key in the key/value pair.
     *
     * @param mixed $key The new key.
     *
     * @return KeyValuePair
     */
    public function setKey($key)
    {
        $this->key = $key;
        return $this;
    }

    /**
     * Sets the value in the key/value pair.
     *
     * @param mixed $value The new value.
     *
     * @return mixed
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }
}
