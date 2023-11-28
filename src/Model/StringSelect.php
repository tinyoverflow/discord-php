<?php
/**
 * StringSelect
 *
 * PHP version 8.1
 *
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Discord HTTP API (Preview)
 *
 * Preview of the Discord v10 HTTP API specification. See https://discord.com/developers/docs for more details.
 *
 * The version of the OpenAPI document: 10
 * @generated Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.2.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use ArrayAccess;
use JsonSerializable;
use InvalidArgumentException;
use ReturnTypeWillChange;
use OpenAPI\Client\ObjectSerializer;

/**
 * StringSelect Class Doc Comment
 *
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class StringSelect implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'StringSelect';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'type' => '\OpenAPI\Client\Model\MessageComponentTypes',
        'custom_id' => 'string',
        'placeholder' => 'string',
        'min_values' => 'int',
        'max_values' => 'int',
        'disabled' => 'bool',
        'options' => '\OpenAPI\Client\Model\SelectOption[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'type' => null,
        'custom_id' => null,
        'placeholder' => null,
        'min_values' => null,
        'max_values' => null,
        'disabled' => null,
        'options' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'type' => true,
		'custom_id' => false,
		'placeholder' => true,
		'min_values' => true,
		'max_values' => true,
		'disabled' => true,
		'options' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var array<string, bool>
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array<string, string>
     */
    public static function openAPITypes(): array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array<string, string>
     */
    public static function openAPIFormats(): array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array<string, bool>
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return array<string, bool>
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param array<string, bool> $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var array<string, string>
     */
    protected static array $attributeMap = [
        'type' => 'type',
        'custom_id' => 'custom_id',
        'placeholder' => 'placeholder',
        'min_values' => 'min_values',
        'max_values' => 'max_values',
        'disabled' => 'disabled',
        'options' => 'options'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'type' => 'setType',
        'custom_id' => 'setCustomId',
        'placeholder' => 'setPlaceholder',
        'min_values' => 'setMinValues',
        'max_values' => 'setMaxValues',
        'disabled' => 'setDisabled',
        'options' => 'setOptions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'type' => 'getType',
        'custom_id' => 'getCustomId',
        'placeholder' => 'getPlaceholder',
        'min_values' => 'getMinValues',
        'max_values' => 'getMaxValues',
        'disabled' => 'getDisabled',
        'options' => 'getOptions'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array<string, string>
     */
    public static function attributeMap(): array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array<string, string>
     */
    public static function setters(): array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array<string, string>
     */
    public static function getters(): array
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName(): string
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var array
     */
    protected array $container = [];

    /**
     * Constructor
     *
     * @param array $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('custom_id', $data ?? [], null);
        $this->setIfExists('placeholder', $data ?? [], null);
        $this->setIfExists('min_values', $data ?? [], null);
        $this->setIfExists('max_values', $data ?? [], null);
        $this->setIfExists('disabled', $data ?? [], null);
        $this->setIfExists('options', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, mixed $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return string[] invalid properties with reasons
     */
    public function listInvalidProperties(): array
    {
        $invalidProperties = [];

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['custom_id'] === null) {
            $invalidProperties[] = "'custom_id' can't be null";
        }
        if ((mb_strlen($this->container['custom_id']) > 100)) {
            $invalidProperties[] = "invalid value for 'custom_id', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['placeholder']) && (mb_strlen($this->container['placeholder']) > 150)) {
            $invalidProperties[] = "invalid value for 'placeholder', the character length must be smaller than or equal to 150.";
        }

        if (!is_null($this->container['min_values']) && ($this->container['min_values'] > 25)) {
            $invalidProperties[] = "invalid value for 'min_values', must be smaller than or equal to 25.";
        }

        if (!is_null($this->container['min_values']) && ($this->container['min_values'] < 0)) {
            $invalidProperties[] = "invalid value for 'min_values', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['max_values']) && ($this->container['max_values'] > 25)) {
            $invalidProperties[] = "invalid value for 'max_values', must be smaller than or equal to 25.";
        }

        if (!is_null($this->container['max_values']) && ($this->container['max_values'] < 1)) {
            $invalidProperties[] = "invalid value for 'max_values', must be bigger than or equal to 1.";
        }

        if ($this->container['options'] === null) {
            $invalidProperties[] = "'options' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid(): bool
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets type
     *
     * @return \OpenAPI\Client\Model\MessageComponentTypes
     */
    public function getType(): ?\OpenAPI\Client\Model\MessageComponentTypes
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \OpenAPI\Client\Model\MessageComponentTypes $type type
     *
     * @return $this
     */
    public function setType(?\OpenAPI\Client\Model\MessageComponentTypes $type): static
    {
        if (is_null($type)) {
            array_push($this->openAPINullablesSetToNull, 'type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets custom_id
     *
     * @return string
     */
    public function getCustomId(): string
    {
        return $this->container['custom_id'];
    }

    /**
     * Sets custom_id
     *
     * @param string $custom_id custom_id
     *
     * @return $this
     */
    public function setCustomId(string $custom_id): static
    {
        if (is_null($custom_id)) {
            throw new InvalidArgumentException('non-nullable custom_id cannot be null');
        }
        if ((mb_strlen($custom_id) > 100)) {
            throw new InvalidArgumentException('invalid length for $custom_id when calling StringSelect., must be smaller than or equal to 100.');
        }

        $this->container['custom_id'] = $custom_id;

        return $this;
    }

    /**
     * Gets placeholder
     *
     * @return string|null
     */
    public function getPlaceholder(): ?string
    {
        return $this->container['placeholder'];
    }

    /**
     * Sets placeholder
     *
     * @param string|null $placeholder placeholder
     *
     * @return $this
     */
    public function setPlaceholder(?string $placeholder): static
    {
        if (is_null($placeholder)) {
            array_push($this->openAPINullablesSetToNull, 'placeholder');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('placeholder', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($placeholder) && (mb_strlen($placeholder) > 150)) {
            throw new InvalidArgumentException('invalid length for $placeholder when calling StringSelect., must be smaller than or equal to 150.');
        }

        $this->container['placeholder'] = $placeholder;

        return $this;
    }

    /**
     * Gets min_values
     *
     * @return int|null
     */
    public function getMinValues(): ?int
    {
        return $this->container['min_values'];
    }

    /**
     * Sets min_values
     *
     * @param int|null $min_values min_values
     *
     * @return $this
     */
    public function setMinValues(?int $min_values): static
    {
        if (is_null($min_values)) {
            array_push($this->openAPINullablesSetToNull, 'min_values');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('min_values', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($min_values) && ($min_values > 25)) {
            throw new InvalidArgumentException('invalid value for $min_values when calling StringSelect., must be smaller than or equal to 25.');
        }
        if (!is_null($min_values) && ($min_values < 0)) {
            throw new InvalidArgumentException('invalid value for $min_values when calling StringSelect., must be bigger than or equal to 0.');
        }

        $this->container['min_values'] = $min_values;

        return $this;
    }

    /**
     * Gets max_values
     *
     * @return int|null
     */
    public function getMaxValues(): ?int
    {
        return $this->container['max_values'];
    }

    /**
     * Sets max_values
     *
     * @param int|null $max_values max_values
     *
     * @return $this
     */
    public function setMaxValues(?int $max_values): static
    {
        if (is_null($max_values)) {
            array_push($this->openAPINullablesSetToNull, 'max_values');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('max_values', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($max_values) && ($max_values > 25)) {
            throw new InvalidArgumentException('invalid value for $max_values when calling StringSelect., must be smaller than or equal to 25.');
        }
        if (!is_null($max_values) && ($max_values < 1)) {
            throw new InvalidArgumentException('invalid value for $max_values when calling StringSelect., must be bigger than or equal to 1.');
        }

        $this->container['max_values'] = $max_values;

        return $this;
    }

    /**
     * Gets disabled
     *
     * @return bool|null
     */
    public function getDisabled(): ?bool
    {
        return $this->container['disabled'];
    }

    /**
     * Sets disabled
     *
     * @param bool|null $disabled disabled
     *
     * @return $this
     */
    public function setDisabled(?bool $disabled): static
    {
        if (is_null($disabled)) {
            array_push($this->openAPINullablesSetToNull, 'disabled');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('disabled', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['disabled'] = $disabled;

        return $this;
    }

    /**
     * Gets options
     *
     * @return \OpenAPI\Client\Model\SelectOption[]
     */
    public function getOptions(): array
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     *
     * @param \OpenAPI\Client\Model\SelectOption[] $options options
     *
     * @return $this
     */
    public function setOptions(array $options): static
    {
        if (is_null($options)) {
            throw new InvalidArgumentException('non-nullable options cannot be null');
        }
        $this->container['options'] = $options;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists(mixed $offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[ReturnTypeWillChange]
    public function offsetGet(mixed $offset): mixed
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet(mixed $offset, mixed $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset(mixed $offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[ReturnTypeWillChange]
    public function jsonSerialize(): mixed
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString(): string
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue(): string
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


