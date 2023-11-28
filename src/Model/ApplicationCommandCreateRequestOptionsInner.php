<?php
/**
 * ApplicationCommandCreateRequestOptionsInner
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
 * ApplicationCommandCreateRequestOptionsInner Class Doc Comment
 *
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class ApplicationCommandCreateRequestOptionsInner implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ApplicationCommandCreateRequest_options_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'type' => '\OpenAPI\Client\Model\ApplicationCommandOptionType',
        'name' => 'mixed',
        'name_localizations' => 'array<string,mixed>',
        'description' => 'mixed',
        'description_localizations' => 'array<string,mixed>',
        'required' => 'mixed',
        'channel_types' => 'mixed',
        'autocomplete' => 'mixed',
        'choices' => 'mixed',
        'min_value' => 'mixed',
        'max_value' => 'mixed',
        'min_length' => 'mixed',
        'max_length' => 'mixed',
        'options' => 'mixed'
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
        'required' => null,
        'channel_types' => null,
        'autocomplete' => null,
        'choices' => null,
        'min_value' => 'double',
        'max_value' => 'double',
        'min_length' => null,
        'max_length' => null,
        'options' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'type' => true,
		'name' => true,
		'name_localizations' => true,
		'description' => true,
		'description_localizations' => true,
		'required' => true,
		'channel_types' => true,
		'autocomplete' => true,
		'choices' => true,
		'min_value' => true,
		'max_value' => true,
		'min_length' => true,
		'max_length' => true,
		'options' => true
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
        'required' => 'required',
        'channel_types' => 'channel_types',
        'autocomplete' => 'autocomplete',
        'choices' => 'choices',
        'min_value' => 'min_value',
        'max_value' => 'max_value',
        'min_length' => 'min_length',
        'max_length' => 'max_length',
        'options' => 'options'
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
        'required' => 'setRequired',
        'channel_types' => 'setChannelTypes',
        'autocomplete' => 'setAutocomplete',
        'choices' => 'setChoices',
        'min_value' => 'setMinValue',
        'max_value' => 'setMaxValue',
        'min_length' => 'setMinLength',
        'max_length' => 'setMaxLength',
        'options' => 'setOptions'
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
        'required' => 'getRequired',
        'channel_types' => 'getChannelTypes',
        'autocomplete' => 'getAutocomplete',
        'choices' => 'getChoices',
        'min_value' => 'getMinValue',
        'max_value' => 'getMaxValue',
        'min_length' => 'getMinLength',
        'max_length' => 'getMaxLength',
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
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('name_localizations', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('description_localizations', $data ?? [], null);
        $this->setIfExists('required', $data ?? [], null);
        $this->setIfExists('channel_types', $data ?? [], null);
        $this->setIfExists('autocomplete', $data ?? [], null);
        $this->setIfExists('choices', $data ?? [], null);
        $this->setIfExists('min_value', $data ?? [], null);
        $this->setIfExists('max_value', $data ?? [], null);
        $this->setIfExists('min_length', $data ?? [], null);
        $this->setIfExists('max_length', $data ?? [], null);
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

        if (!is_null($this->container['min_length']) && ($this->container['min_length'] > 6000)) {
            $invalidProperties[] = "invalid value for 'min_length', must be smaller than or equal to 6000.";
        }

        if (!is_null($this->container['min_length']) && ($this->container['min_length'] < 0)) {
            $invalidProperties[] = "invalid value for 'min_length', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['max_length']) && ($this->container['max_length'] > 6000)) {
            $invalidProperties[] = "invalid value for 'max_length', must be smaller than or equal to 6000.";
        }

        if (!is_null($this->container['max_length']) && ($this->container['max_length'] < 1)) {
            $invalidProperties[] = "invalid value for 'max_length', must be bigger than or equal to 1.";
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
     * @return mixed
     */
    public function getName(): mixed
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param mixed $name name
     *
     * @return $this
     */
    public function setName(mixed $name): static
    {
        if (is_null($name)) {
            array_push($this->openAPINullablesSetToNull, 'name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($name) && (mb_strlen($name) > 32)) {
            throw new InvalidArgumentException('invalid length for $name when calling ApplicationCommandCreateRequestOptionsInner., must be smaller than or equal to 32.');
        }
        if (!is_null($name) && (mb_strlen($name) < 1)) {
            throw new InvalidArgumentException('invalid length for $name when calling ApplicationCommandCreateRequestOptionsInner., must be bigger than or equal to 1.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets name_localizations
     *
     * @return array<string,mixed>|null
     */
    public function getNameLocalizations(): ?array&lt;string,mixed&gt;
    {
        return $this->container['name_localizations'];
    }

    /**
     * Sets name_localizations
     *
     * @param array<string,mixed>|null $name_localizations name_localizations
     *
     * @return $this
     */
    public function setNameLocalizations(?array&lt;string,mixed&gt; $name_localizations): static
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
            throw new InvalidArgumentException('invalid value for $name_localizations when calling ApplicationCommandCreateRequestOptionsInner., number of items must be less than or equal to 33.');
        }
        $this->container['name_localizations'] = $name_localizations;

        return $this;
    }

    /**
     * Gets description
     *
     * @return mixed
     */
    public function getDescription(): mixed
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param mixed $description description
     *
     * @return $this
     */
    public function setDescription(mixed $description): static
    {
        if (is_null($description)) {
            array_push($this->openAPINullablesSetToNull, 'description');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('description', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($description) && (mb_strlen($description) > 100)) {
            throw new InvalidArgumentException('invalid length for $description when calling ApplicationCommandCreateRequestOptionsInner., must be smaller than or equal to 100.');
        }
        if (!is_null($description) && (mb_strlen($description) < 1)) {
            throw new InvalidArgumentException('invalid length for $description when calling ApplicationCommandCreateRequestOptionsInner., must be bigger than or equal to 1.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets description_localizations
     *
     * @return array<string,mixed>|null
     */
    public function getDescriptionLocalizations(): ?array&lt;string,mixed&gt;
    {
        return $this->container['description_localizations'];
    }

    /**
     * Sets description_localizations
     *
     * @param array<string,mixed>|null $description_localizations description_localizations
     *
     * @return $this
     */
    public function setDescriptionLocalizations(?array&lt;string,mixed&gt; $description_localizations): static
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
            throw new InvalidArgumentException('invalid value for $description_localizations when calling ApplicationCommandCreateRequestOptionsInner., number of items must be less than or equal to 33.');
        }
        $this->container['description_localizations'] = $description_localizations;

        return $this;
    }

    /**
     * Gets required
     *
     * @return mixed|null
     */
    public function getRequired(): mixed
    {
        return $this->container['required'];
    }

    /**
     * Sets required
     *
     * @param mixed|null $required required
     *
     * @return $this
     */
    public function setRequired(mixed $required): static
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
     * Gets channel_types
     *
     * @return mixed|null
     */
    public function getChannelTypes(): mixed
    {
        return $this->container['channel_types'];
    }

    /**
     * Sets channel_types
     *
     * @param mixed|null $channel_types channel_types
     *
     * @return $this
     */
    public function setChannelTypes(mixed $channel_types): static
    {
        if (is_null($channel_types)) {
            array_push($this->openAPINullablesSetToNull, 'channel_types');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('channel_types', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['channel_types'] = $channel_types;

        return $this;
    }

    /**
     * Gets autocomplete
     *
     * @return mixed|null
     */
    public function getAutocomplete(): mixed
    {
        return $this->container['autocomplete'];
    }

    /**
     * Sets autocomplete
     *
     * @param mixed|null $autocomplete autocomplete
     *
     * @return $this
     */
    public function setAutocomplete(mixed $autocomplete): static
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
     * @return mixed|null
     */
    public function getChoices(): mixed
    {
        return $this->container['choices'];
    }

    /**
     * Sets choices
     *
     * @param mixed|null $choices choices
     *
     * @return $this
     */
    public function setChoices(mixed $choices): static
    {
        if (is_null($choices)) {
            array_push($this->openAPINullablesSetToNull, 'choices');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('choices', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['choices'] = $choices;

        return $this;
    }

    /**
     * Gets min_value
     *
     * @return mixed|null
     */
    public function getMinValue(): mixed
    {
        return $this->container['min_value'];
    }

    /**
     * Sets min_value
     *
     * @param mixed|null $min_value min_value
     *
     * @return $this
     */
    public function setMinValue(mixed $min_value): static
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
     * @return mixed|null
     */
    public function getMaxValue(): mixed
    {
        return $this->container['max_value'];
    }

    /**
     * Sets max_value
     *
     * @param mixed|null $max_value max_value
     *
     * @return $this
     */
    public function setMaxValue(mixed $max_value): static
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
     * Gets min_length
     *
     * @return mixed|null
     */
    public function getMinLength(): mixed
    {
        return $this->container['min_length'];
    }

    /**
     * Sets min_length
     *
     * @param mixed|null $min_length min_length
     *
     * @return $this
     */
    public function setMinLength(mixed $min_length): static
    {
        if (is_null($min_length)) {
            array_push($this->openAPINullablesSetToNull, 'min_length');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('min_length', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($min_length) && ($min_length > 6000)) {
            throw new InvalidArgumentException('invalid value for $min_length when calling ApplicationCommandCreateRequestOptionsInner., must be smaller than or equal to 6000.');
        }
        if (!is_null($min_length) && ($min_length < 0)) {
            throw new InvalidArgumentException('invalid value for $min_length when calling ApplicationCommandCreateRequestOptionsInner., must be bigger than or equal to 0.');
        }

        $this->container['min_length'] = $min_length;

        return $this;
    }

    /**
     * Gets max_length
     *
     * @return mixed|null
     */
    public function getMaxLength(): mixed
    {
        return $this->container['max_length'];
    }

    /**
     * Sets max_length
     *
     * @param mixed|null $max_length max_length
     *
     * @return $this
     */
    public function setMaxLength(mixed $max_length): static
    {
        if (is_null($max_length)) {
            array_push($this->openAPINullablesSetToNull, 'max_length');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('max_length', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($max_length) && ($max_length > 6000)) {
            throw new InvalidArgumentException('invalid value for $max_length when calling ApplicationCommandCreateRequestOptionsInner., must be smaller than or equal to 6000.');
        }
        if (!is_null($max_length) && ($max_length < 1)) {
            throw new InvalidArgumentException('invalid value for $max_length when calling ApplicationCommandCreateRequestOptionsInner., must be bigger than or equal to 1.');
        }

        $this->container['max_length'] = $max_length;

        return $this;
    }

    /**
     * Gets options
     *
     * @return mixed|null
     */
    public function getOptions(): mixed
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     *
     * @param mixed|null $options options
     *
     * @return $this
     */
    public function setOptions(mixed $options): static
    {
        if (is_null($options)) {
            array_push($this->openAPINullablesSetToNull, 'options');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('options', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
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

