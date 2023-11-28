<?php
/**
 * ApplicationCommandNumberOptionResponse
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
 * ApplicationCommandNumberOptionResponse Class Doc Comment
 *
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class ApplicationCommandNumberOptionResponse implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ApplicationCommandNumberOptionResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'type' => '\OpenAPI\Client\Model\ApplicationCommandOptionType',
        'name' => 'string',
        'name_localized' => 'string',
        'name_localizations' => 'array<string,string>',
        'description' => 'string',
        'description_localized' => 'string',
        'description_localizations' => 'array<string,string>',
        'required' => 'bool',
        'autocomplete' => 'bool',
        'choices' => '\OpenAPI\Client\Model\ApplicationCommandOptionNumberChoiceResponse[]',
        'min_value' => 'float',
        'max_value' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'type' => null,
        'name' => null,
        'name_localized' => null,
        'name_localizations' => null,
        'description' => null,
        'description_localized' => null,
        'description_localizations' => null,
        'required' => null,
        'autocomplete' => null,
        'choices' => null,
        'min_value' => 'double',
        'max_value' => 'double'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'type' => true,
		'name' => false,
		'name_localized' => true,
		'name_localizations' => true,
		'description' => false,
		'description_localized' => true,
		'description_localizations' => true,
		'required' => true,
		'autocomplete' => true,
		'choices' => false,
		'min_value' => true,
		'max_value' => true
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
        'name_localized' => 'name_localized',
        'name_localizations' => 'name_localizations',
        'description' => 'description',
        'description_localized' => 'description_localized',
        'description_localizations' => 'description_localizations',
        'required' => 'required',
        'autocomplete' => 'autocomplete',
        'choices' => 'choices',
        'min_value' => 'min_value',
        'max_value' => 'max_value'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'type' => 'setType',
        'name' => 'setName',
        'name_localized' => 'setNameLocalized',
        'name_localizations' => 'setNameLocalizations',
        'description' => 'setDescription',
        'description_localized' => 'setDescriptionLocalized',
        'description_localizations' => 'setDescriptionLocalizations',
        'required' => 'setRequired',
        'autocomplete' => 'setAutocomplete',
        'choices' => 'setChoices',
        'min_value' => 'setMinValue',
        'max_value' => 'setMaxValue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'type' => 'getType',
        'name' => 'getName',
        'name_localized' => 'getNameLocalized',
        'name_localizations' => 'getNameLocalizations',
        'description' => 'getDescription',
        'description_localized' => 'getDescriptionLocalized',
        'description_localizations' => 'getDescriptionLocalizations',
        'required' => 'getRequired',
        'autocomplete' => 'getAutocomplete',
        'choices' => 'getChoices',
        'min_value' => 'getMinValue',
        'max_value' => 'getMaxValue'
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
        $this->setIfExists('name_localized', $data ?? [], null);
        $this->setIfExists('name_localizations', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('description_localized', $data ?? [], null);
        $this->setIfExists('description_localizations', $data ?? [], null);
        $this->setIfExists('required', $data ?? [], null);
        $this->setIfExists('autocomplete', $data ?? [], null);
        $this->setIfExists('choices', $data ?? [], null);
        $this->setIfExists('min_value', $data ?? [], null);
        $this->setIfExists('max_value', $data ?? [], null);
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
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
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
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets name_localized
     *
     * @return string|null
     */
    public function getNameLocalized(): ?string
    {
        return $this->container['name_localized'];
    }

    /**
     * Sets name_localized
     *
     * @param string|null $name_localized name_localized
     *
     * @return $this
     */
    public function setNameLocalized(?string $name_localized): static
    {
        if (is_null($name_localized)) {
            array_push($this->openAPINullablesSetToNull, 'name_localized');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('name_localized', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['name_localized'] = $name_localized;

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
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets description_localized
     *
     * @return string|null
     */
    public function getDescriptionLocalized(): ?string
    {
        return $this->container['description_localized'];
    }

    /**
     * Sets description_localized
     *
     * @param string|null $description_localized description_localized
     *
     * @return $this
     */
    public function setDescriptionLocalized(?string $description_localized): static
    {
        if (is_null($description_localized)) {
            array_push($this->openAPINullablesSetToNull, 'description_localized');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('description_localized', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['description_localized'] = $description_localized;

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
     * Gets autocomplete
     *
     * @return bool|null
     */
    public function getAutocomplete(): ?bool
    {
        return $this->container['autocomplete'];
    }

    /**
     * Sets autocomplete
     *
     * @param bool|null $autocomplete autocomplete
     *
     * @return $this
     */
    public function setAutocomplete(?bool $autocomplete): static
    {
        if (is_null($autocomplete)) {
            array_push($this->openAPINullablesSetToNull, 'autocomplete');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('autocomplete', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['autocomplete'] = $autocomplete;

        return $this;
    }

    /**
     * Gets choices
     *
     * @return \OpenAPI\Client\Model\ApplicationCommandOptionNumberChoiceResponse[]|null
     */
    public function getChoices(): ?array
    {
        return $this->container['choices'];
    }

    /**
     * Sets choices
     *
     * @param \OpenAPI\Client\Model\ApplicationCommandOptionNumberChoiceResponse[]|null $choices choices
     *
     * @return $this
     */
    public function setChoices(?array $choices): static
    {
        if (is_null($choices)) {
            throw new InvalidArgumentException('non-nullable choices cannot be null');
        }
        $this->container['choices'] = $choices;

        return $this;
    }

    /**
     * Gets min_value
     *
     * @return float|null
     */
    public function getMinValue(): ?float
    {
        return $this->container['min_value'];
    }

    /**
     * Sets min_value
     *
     * @param float|null $min_value min_value
     *
     * @return $this
     */
    public function setMinValue(?float $min_value): static
    {
        if (is_null($min_value)) {
            array_push($this->openAPINullablesSetToNull, 'min_value');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('min_value', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['min_value'] = $min_value;

        return $this;
    }

    /**
     * Gets max_value
     *
     * @return float|null
     */
    public function getMaxValue(): ?float
    {
        return $this->container['max_value'];
    }

    /**
     * Sets max_value
     *
     * @param float|null $max_value max_value
     *
     * @return $this
     */
    public function setMaxValue(?float $max_value): static
    {
        if (is_null($max_value)) {
            array_push($this->openAPINullablesSetToNull, 'max_value');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('max_value', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['max_value'] = $max_value;

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


