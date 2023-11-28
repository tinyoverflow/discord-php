<?php
/**
 * ApplicationCommandRoleOption
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
 * ApplicationCommandRoleOption Class Doc Comment
 *
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class ApplicationCommandRoleOption implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ApplicationCommandRoleOption';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'type' => '\OpenAPI\Client\Model\ApplicationCommandOptionType',
        'name' => 'string',
        'name_localizations' => 'array<string,string>',
        'description' => 'string',
        'description_localizations' => 'array<string,string>',
        'required' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'type' => null,
        'name' => null,
        'name_localizations' => null,
        'description' => null,
        'description_localizations' => null,
        'required' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'type' => true,
		'name' => false,
		'name_localizations' => true,
		'description' => false,
		'description_localizations' => true,
		'required' => true
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
        'name' => 'name',
        'name_localizations' => 'name_localizations',
        'description' => 'description',
        'description_localizations' => 'description_localizations',
        'required' => 'required'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'type' => 'setType',
        'name' => 'setName',
        'name_localizations' => 'setNameLocalizations',
        'description' => 'setDescription',
        'description_localizations' => 'setDescriptionLocalizations',
        'required' => 'setRequired'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'type' => 'getType',
        'name' => 'getName',
        'name_localizations' => 'getNameLocalizations',
        'description' => 'getDescription',
        'description_localizations' => 'getDescriptionLocalizations',
        'required' => 'getRequired'
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
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('name_localizations', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('description_localizations', $data ?? [], null);
        $this->setIfExists('required', $data ?? [], null);
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
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) > 32)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 32.";
        }

        if ((mb_strlen($this->container['name']) < 1)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['name_localizations']) && (count($this->container['name_localizations']) > 33)) {
            $invalidProperties[] = "invalid value for 'name_localizations', number of items must be less than or equal to 33.";
        }

        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ((mb_strlen($this->container['description']) > 100)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 100.";
        }

        if ((mb_strlen($this->container['description']) < 1)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['description_localizations']) && (count($this->container['description_localizations']) > 33)) {
            $invalidProperties[] = "invalid value for 'description_localizations', number of items must be less than or equal to 33.";
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
     * @return \OpenAPI\Client\Model\ApplicationCommandOptionType
     */
    public function getType(): ?\OpenAPI\Client\Model\ApplicationCommandOptionType
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \OpenAPI\Client\Model\ApplicationCommandOptionType $type type
     *
     * @return $this
     */
    public function setType(?\OpenAPI\Client\Model\ApplicationCommandOptionType $type): static
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
     * Gets name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName(string $name): static
    {
        if (is_null($name)) {
            throw new InvalidArgumentException('non-nullable name cannot be null');
        }
        if ((mb_strlen($name) > 32)) {
            throw new InvalidArgumentException('invalid length for $name when calling ApplicationCommandRoleOption., must be smaller than or equal to 32.');
        }
        if ((mb_strlen($name) < 1)) {
            throw new InvalidArgumentException('invalid length for $name when calling ApplicationCommandRoleOption., must be bigger than or equal to 1.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets name_localizations
     *
     * @return array<string,string>|null
     */
    public function getNameLocalizations(): ?array&lt;string,string&gt;
    {
        return $this->container['name_localizations'];
    }

    /**
     * Sets name_localizations
     *
     * @param array<string,string>|null $name_localizations name_localizations
     *
     * @return $this
     */
    public function setNameLocalizations(?array&lt;string,string&gt; $name_localizations): static
    {
        if (is_null($name_localizations)) {
            array_push($this->openAPINullablesSetToNull, 'name_localizations');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('name_localizations', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($name_localizations) && (count($name_localizations) > 33)) {
            throw new InvalidArgumentException('invalid value for $name_localizations when calling ApplicationCommandRoleOption., number of items must be less than or equal to 33.');
        }
        $this->container['name_localizations'] = $name_localizations;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription(string $description): static
    {
        if (is_null($description)) {
            throw new InvalidArgumentException('non-nullable description cannot be null');
        }
        if ((mb_strlen($description) > 100)) {
            throw new InvalidArgumentException('invalid length for $description when calling ApplicationCommandRoleOption., must be smaller than or equal to 100.');
        }
        if ((mb_strlen($description) < 1)) {
            throw new InvalidArgumentException('invalid length for $description when calling ApplicationCommandRoleOption., must be bigger than or equal to 1.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets description_localizations
     *
     * @return array<string,string>|null
     */
    public function getDescriptionLocalizations(): ?array&lt;string,string&gt;
    {
        return $this->container['description_localizations'];
    }

    /**
     * Sets description_localizations
     *
     * @param array<string,string>|null $description_localizations description_localizations
     *
     * @return $this
     */
    public function setDescriptionLocalizations(?array&lt;string,string&gt; $description_localizations): static
    {
        if (is_null($description_localizations)) {
            array_push($this->openAPINullablesSetToNull, 'description_localizations');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('description_localizations', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($description_localizations) && (count($description_localizations) > 33)) {
            throw new InvalidArgumentException('invalid value for $description_localizations when calling ApplicationCommandRoleOption., number of items must be less than or equal to 33.');
        }
        $this->container['description_localizations'] = $description_localizations;

        return $this;
    }

    /**
     * Gets required
     *
     * @return bool|null
     */
    public function getRequired(): ?bool
    {
        return $this->container['required'];
    }

    /**
     * Sets required
     *
     * @param bool|null $required required
     *
     * @return $this
     */
    public function setRequired(?bool $required): static
    {
        if (is_null($required)) {
            array_push($this->openAPINullablesSetToNull, 'required');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('required', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['required'] = $required;

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


