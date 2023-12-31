<?php
/**
 * ApplicationCommandResponse
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
 * ApplicationCommandResponse Class Doc Comment
 *
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class ApplicationCommandResponse implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ApplicationCommandResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'id' => 'string',
        'application_id' => 'string',
        'version' => 'string',
        'default_member_permissions' => 'string',
        'type' => '\OpenAPI\Client\Model\ApplicationCommandType',
        'name' => 'string',
        'name_localized' => 'string',
        'name_localizations' => 'array<string,string>',
        'description' => 'string',
        'description_localized' => 'string',
        'description_localizations' => 'array<string,string>',
        'guild_id' => 'string',
        'dm_permission' => 'bool',
        'options' => '\OpenAPI\Client\Model\ApplicationCommandResponseOptionsInner[]',
        'nsfw' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'id' => 'snowflake',
        'application_id' => 'snowflake',
        'version' => 'snowflake',
        'default_member_permissions' => null,
        'type' => null,
        'name' => null,
        'name_localized' => null,
        'name_localizations' => null,
        'description' => null,
        'description_localized' => null,
        'description_localizations' => null,
        'guild_id' => 'snowflake',
        'dm_permission' => null,
        'options' => null,
        'nsfw' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'id' => false,
		'application_id' => false,
		'version' => false,
		'default_member_permissions' => true,
		'type' => true,
		'name' => false,
		'name_localized' => true,
		'name_localizations' => true,
		'description' => false,
		'description_localized' => true,
		'description_localizations' => true,
		'guild_id' => false,
		'dm_permission' => true,
		'options' => false,
		'nsfw' => true
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
        'id' => 'id',
        'application_id' => 'application_id',
        'version' => 'version',
        'default_member_permissions' => 'default_member_permissions',
        'type' => 'type',
        'name' => 'name',
        'name_localized' => 'name_localized',
        'name_localizations' => 'name_localizations',
        'description' => 'description',
        'description_localized' => 'description_localized',
        'description_localizations' => 'description_localizations',
        'guild_id' => 'guild_id',
        'dm_permission' => 'dm_permission',
        'options' => 'options',
        'nsfw' => 'nsfw'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'id' => 'setId',
        'application_id' => 'setApplicationId',
        'version' => 'setVersion',
        'default_member_permissions' => 'setDefaultMemberPermissions',
        'type' => 'setType',
        'name' => 'setName',
        'name_localized' => 'setNameLocalized',
        'name_localizations' => 'setNameLocalizations',
        'description' => 'setDescription',
        'description_localized' => 'setDescriptionLocalized',
        'description_localizations' => 'setDescriptionLocalizations',
        'guild_id' => 'setGuildId',
        'dm_permission' => 'setDmPermission',
        'options' => 'setOptions',
        'nsfw' => 'setNsfw'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'id' => 'getId',
        'application_id' => 'getApplicationId',
        'version' => 'getVersion',
        'default_member_permissions' => 'getDefaultMemberPermissions',
        'type' => 'getType',
        'name' => 'getName',
        'name_localized' => 'getNameLocalized',
        'name_localizations' => 'getNameLocalizations',
        'description' => 'getDescription',
        'description_localized' => 'getDescriptionLocalized',
        'description_localizations' => 'getDescriptionLocalizations',
        'guild_id' => 'getGuildId',
        'dm_permission' => 'getDmPermission',
        'options' => 'getOptions',
        'nsfw' => 'getNsfw'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('application_id', $data ?? [], null);
        $this->setIfExists('version', $data ?? [], null);
        $this->setIfExists('default_member_permissions', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('name_localized', $data ?? [], null);
        $this->setIfExists('name_localizations', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('description_localized', $data ?? [], null);
        $this->setIfExists('description_localizations', $data ?? [], null);
        $this->setIfExists('guild_id', $data ?? [], null);
        $this->setIfExists('dm_permission', $data ?? [], null);
        $this->setIfExists('options', $data ?? [], null);
        $this->setIfExists('nsfw', $data ?? [], null);
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

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if (!preg_match("/^(0|[1-9][0-9]*)$/", $this->container['id'])) {
            $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /^(0|[1-9][0-9]*)$/.";
        }

        if ($this->container['application_id'] === null) {
            $invalidProperties[] = "'application_id' can't be null";
        }
        if (!preg_match("/^(0|[1-9][0-9]*)$/", $this->container['application_id'])) {
            $invalidProperties[] = "invalid value for 'application_id', must be conform to the pattern /^(0|[1-9][0-9]*)$/.";
        }

        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
        }
        if (!preg_match("/^(0|[1-9][0-9]*)$/", $this->container['version'])) {
            $invalidProperties[] = "invalid value for 'version', must be conform to the pattern /^(0|[1-9][0-9]*)$/.";
        }

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if (!is_null($this->container['guild_id']) && !preg_match("/^(0|[1-9][0-9]*)$/", $this->container['guild_id'])) {
            $invalidProperties[] = "invalid value for 'guild_id', must be conform to the pattern /^(0|[1-9][0-9]*)$/.";
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
     * Gets id
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId(string $id): static
    {
        if (is_null($id)) {
            throw new InvalidArgumentException('non-nullable id cannot be null');
        }

        if ((!preg_match("/^(0|[1-9][0-9]*)$/", ObjectSerializer::toString($id)))) {
            throw new InvalidArgumentException("invalid value for \$id when calling ApplicationCommandResponse., must conform to the pattern /^(0|[1-9][0-9]*)$/.");
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets application_id
     *
     * @return string
     */
    public function getApplicationId(): string
    {
        return $this->container['application_id'];
    }

    /**
     * Sets application_id
     *
     * @param string $application_id application_id
     *
     * @return $this
     */
    public function setApplicationId(string $application_id): static
    {
        if (is_null($application_id)) {
            throw new InvalidArgumentException('non-nullable application_id cannot be null');
        }

        if ((!preg_match("/^(0|[1-9][0-9]*)$/", ObjectSerializer::toString($application_id)))) {
            throw new InvalidArgumentException("invalid value for \$application_id when calling ApplicationCommandResponse., must conform to the pattern /^(0|[1-9][0-9]*)$/.");
        }

        $this->container['application_id'] = $application_id;

        return $this;
    }

    /**
     * Gets version
     *
     * @return string
     */
    public function getVersion(): string
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param string $version version
     *
     * @return $this
     */
    public function setVersion(string $version): static
    {
        if (is_null($version)) {
            throw new InvalidArgumentException('non-nullable version cannot be null');
        }

        if ((!preg_match("/^(0|[1-9][0-9]*)$/", ObjectSerializer::toString($version)))) {
            throw new InvalidArgumentException("invalid value for \$version when calling ApplicationCommandResponse., must conform to the pattern /^(0|[1-9][0-9]*)$/.");
        }

        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets default_member_permissions
     *
     * @return string|null
     */
    public function getDefaultMemberPermissions(): ?string
    {
        return $this->container['default_member_permissions'];
    }

    /**
     * Sets default_member_permissions
     *
     * @param string|null $default_member_permissions default_member_permissions
     *
     * @return $this
     */
    public function setDefaultMemberPermissions(?string $default_member_permissions): static
    {
        if (is_null($default_member_permissions)) {
            array_push($this->openAPINullablesSetToNull, 'default_member_permissions');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('default_member_permissions', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['default_member_permissions'] = $default_member_permissions;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \OpenAPI\Client\Model\ApplicationCommandType
     */
    public function getType(): ?\OpenAPI\Client\Model\ApplicationCommandType
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \OpenAPI\Client\Model\ApplicationCommandType $type type
     *
     * @return $this
     */
    public function setType(?\OpenAPI\Client\Model\ApplicationCommandType $type): static
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
     * Gets guild_id
     *
     * @return string|null
     */
    public function getGuildId(): ?string
    {
        return $this->container['guild_id'];
    }

    /**
     * Sets guild_id
     *
     * @param string|null $guild_id guild_id
     *
     * @return $this
     */
    public function setGuildId(?string $guild_id): static
    {
        if (is_null($guild_id)) {
            throw new InvalidArgumentException('non-nullable guild_id cannot be null');
        }

        if ((!preg_match("/^(0|[1-9][0-9]*)$/", ObjectSerializer::toString($guild_id)))) {
            throw new InvalidArgumentException("invalid value for \$guild_id when calling ApplicationCommandResponse., must conform to the pattern /^(0|[1-9][0-9]*)$/.");
        }

        $this->container['guild_id'] = $guild_id;

        return $this;
    }

    /**
     * Gets dm_permission
     *
     * @return bool|null
     */
    public function getDmPermission(): ?bool
    {
        return $this->container['dm_permission'];
    }

    /**
     * Sets dm_permission
     *
     * @param bool|null $dm_permission dm_permission
     *
     * @return $this
     */
    public function setDmPermission(?bool $dm_permission): static
    {
        if (is_null($dm_permission)) {
            array_push($this->openAPINullablesSetToNull, 'dm_permission');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('dm_permission', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['dm_permission'] = $dm_permission;

        return $this;
    }

    /**
     * Gets options
     *
     * @return \OpenAPI\Client\Model\ApplicationCommandResponseOptionsInner[]|null
     */
    public function getOptions(): ?array
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     *
     * @param \OpenAPI\Client\Model\ApplicationCommandResponseOptionsInner[]|null $options options
     *
     * @return $this
     */
    public function setOptions(?array $options): static
    {
        if (is_null($options)) {
            throw new InvalidArgumentException('non-nullable options cannot be null');
        }
        $this->container['options'] = $options;

        return $this;
    }

    /**
     * Gets nsfw
     *
     * @return bool|null
     */
    public function getNsfw(): ?bool
    {
        return $this->container['nsfw'];
    }

    /**
     * Sets nsfw
     *
     * @param bool|null $nsfw nsfw
     *
     * @return $this
     */
    public function setNsfw(?bool $nsfw): static
    {
        if (is_null($nsfw)) {
            array_push($this->openAPINullablesSetToNull, 'nsfw');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('nsfw', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['nsfw'] = $nsfw;

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


