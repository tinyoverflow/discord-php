<?php
/**
 * RichEmbedVideo
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
 * RichEmbedVideo Class Doc Comment
 *
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class RichEmbedVideo implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'RichEmbedVideo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'url' => 'string',
        'width' => 'int',
        'height' => 'int',
        'placeholder' => 'string',
        'placeholder_version' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'url' => 'uri',
        'width' => null,
        'height' => null,
        'placeholder' => null,
        'placeholder_version' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'url' => true,
		'width' => true,
		'height' => true,
		'placeholder' => true,
		'placeholder_version' => true
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
        'url' => 'url',
        'width' => 'width',
        'height' => 'height',
        'placeholder' => 'placeholder',
        'placeholder_version' => 'placeholder_version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'url' => 'setUrl',
        'width' => 'setWidth',
        'height' => 'setHeight',
        'placeholder' => 'setPlaceholder',
        'placeholder_version' => 'setPlaceholderVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'url' => 'getUrl',
        'width' => 'getWidth',
        'height' => 'getHeight',
        'placeholder' => 'getPlaceholder',
        'placeholder_version' => 'getPlaceholderVersion'
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
        $this->setIfExists('url', $data ?? [], null);
        $this->setIfExists('width', $data ?? [], null);
        $this->setIfExists('height', $data ?? [], null);
        $this->setIfExists('placeholder', $data ?? [], null);
        $this->setIfExists('placeholder_version', $data ?? [], null);
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

        if (!is_null($this->container['url']) && (mb_strlen($this->container['url']) > 2048)) {
            $invalidProperties[] = "invalid value for 'url', the character length must be smaller than or equal to 2048.";
        }

        if (!is_null($this->container['placeholder']) && (mb_strlen($this->container['placeholder']) > 64)) {
            $invalidProperties[] = "invalid value for 'placeholder', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['placeholder_version']) && ($this->container['placeholder_version'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'placeholder_version', must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['placeholder_version']) && ($this->container['placeholder_version'] < 0)) {
            $invalidProperties[] = "invalid value for 'placeholder_version', must be bigger than or equal to 0.";
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
     * Gets url
     *
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string|null $url url
     *
     * @return $this
     */
    public function setUrl(?string $url): static
    {
        if (is_null($url)) {
            array_push($this->openAPINullablesSetToNull, 'url');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('url', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($url) && (mb_strlen($url) > 2048)) {
            throw new InvalidArgumentException('invalid length for $url when calling RichEmbedVideo., must be smaller than or equal to 2048.');
        }

        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets width
     *
     * @return int|null
     */
    public function getWidth(): ?int
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     *
     * @param int|null $width width
     *
     * @return $this
     */
    public function setWidth(?int $width): static
    {
        if (is_null($width)) {
            array_push($this->openAPINullablesSetToNull, 'width');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('width', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['width'] = $width;

        return $this;
    }

    /**
     * Gets height
     *
     * @return int|null
     */
    public function getHeight(): ?int
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     *
     * @param int|null $height height
     *
     * @return $this
     */
    public function setHeight(?int $height): static
    {
        if (is_null($height)) {
            array_push($this->openAPINullablesSetToNull, 'height');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('height', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['height'] = $height;

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
        if (!is_null($placeholder) && (mb_strlen($placeholder) > 64)) {
            throw new InvalidArgumentException('invalid length for $placeholder when calling RichEmbedVideo., must be smaller than or equal to 64.');
        }

        $this->container['placeholder'] = $placeholder;

        return $this;
    }

    /**
     * Gets placeholder_version
     *
     * @return int|null
     */
    public function getPlaceholderVersion(): ?int
    {
        return $this->container['placeholder_version'];
    }

    /**
     * Sets placeholder_version
     *
     * @param int|null $placeholder_version placeholder_version
     *
     * @return $this
     */
    public function setPlaceholderVersion(?int $placeholder_version): static
    {
        if (is_null($placeholder_version)) {
            array_push($this->openAPINullablesSetToNull, 'placeholder_version');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('placeholder_version', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($placeholder_version) && ($placeholder_version > 2147483647)) {
            throw new InvalidArgumentException('invalid value for $placeholder_version when calling RichEmbedVideo., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($placeholder_version) && ($placeholder_version < 0)) {
            throw new InvalidArgumentException('invalid value for $placeholder_version when calling RichEmbedVideo., must be bigger than or equal to 0.');
        }

        $this->container['placeholder_version'] = $placeholder_version;

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


