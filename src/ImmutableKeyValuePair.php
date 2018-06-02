<?php
namespace SubjectivePHP\Spl\DataStructures;

/**
 * Defines an immutable key/value pair.
 */
final class ImmutableKeyValuePair implements KeyValuePairInterface
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
     * Ensures deep copy when cloning.
     *
     * @return void
     */
    public function __clone()
    {
        $this->key = is_object($this->key) ? clone $this->key : $this->key;
        $this->value = is_object($this->value) ? clone $this->value : $this->value;
    }
}
