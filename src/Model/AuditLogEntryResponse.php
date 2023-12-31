<?php
/**
 * AuditLogEntryResponse
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
 * AuditLogEntryResponse Class Doc Comment
 *
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class AuditLogEntryResponse implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'AuditLogEntryResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'id' => 'string',
        'action_type' => '\OpenAPI\Client\Model\AuditLogActionTypes',
        'user_id' => 'string',
        'target_id' => 'string',
        'changes' => '\OpenAPI\Client\Model\AuditLogObjectChangeResponse[]',
        'options' => 'array<string,string>',
        'reason' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'id' => 'snowflake',
        'action_type' => null,
        'user_id' => 'snowflake',
        'target_id' => 'snowflake',
        'changes' => null,
        'options' => null,
        'reason' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'id' => false,
		'action_type' => true,
		'user_id' => false,
		'target_id' => false,
		'changes' => false,
		'options' => true,
		'reason' => true
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
        'action_type' => 'action_type',
        'user_id' => 'user_id',
        'target_id' => 'target_id',
        'changes' => 'changes',
        'options' => 'options',
        'reason' => 'reason'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'id' => 'setId',
        'action_type' => 'setActionType',
        'user_id' => 'setUserId',
        'target_id' => 'setTargetId',
        'changes' => 'setChanges',
        'options' => 'setOptions',
        'reason' => 'setReason'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'id' => 'getId',
        'action_type' => 'getActionType',
        'user_id' => 'getUserId',
        'target_id' => 'getTargetId',
        'changes' => 'getChanges',
        'options' => 'getOptions',
        'reason' => 'getReason'
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
        $this->setIfExists('action_type', $data ?? [], null);
        $this->setIfExists('user_id', $data ?? [], null);
        $this->setIfExists('target_id', $data ?? [], null);
        $this->setIfExists('changes', $data ?? [], null);
        $this->setIfExists('options', $data ?? [], null);
        $this->setIfExists('reason', $data ?? [], null);
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

        if ($this->container['action_type'] === null) {
            $invalidProperties[] = "'action_type' can't be null";
        }
        if (!is_null($this->container['user_id']) && !preg_match("/^(0|[1-9][0-9]*)$/", $this->container['user_id'])) {
            $invalidProperties[] = "invalid value for 'user_id', must be conform to the pattern /^(0|[1-9][0-9]*)$/.";
        }

        if (!is_null($this->container['target_id']) && !preg_match("/^(0|[1-9][0-9]*)$/", $this->container['target_id'])) {
            $invalidProperties[] = "invalid value for 'target_id', must be conform to the pattern /^(0|[1-9][0-9]*)$/.";
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
            throw new InvalidArgumentException("invalid value for \$id when calling AuditLogEntryResponse., must conform to the pattern /^(0|[1-9][0-9]*)$/.");
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets action_type
     *
     * @return \OpenAPI\Client\Model\AuditLogActionTypes
     */
    public function getActionType(): ?\OpenAPI\Client\Model\AuditLogActionTypes
    {
        return $this->container['action_type'];
    }

    /**
     * Sets action_type
     *
     * @param \OpenAPI\Client\Model\AuditLogActionTypes $action_type action_type
     *
     * @return $this
     */
    public function setActionType(?\OpenAPI\Client\Model\AuditLogActionTypes $action_type): static
    {
        if (is_null($action_type)) {
            array_push($this->openAPINullablesSetToNull, 'action_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('action_type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['action_type'] = $action_type;

        return $this;
    }

    /**
     * Gets user_id
     *
     * @return string|null
     */
    public function getUserId(): ?string
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param string|null $user_id user_id
     *
     * @return $this
     */
    public function setUserId(?string $user_id): static
    {
        if (is_null($user_id)) {
            throw new InvalidArgumentException('non-nullable user_id cannot be null');
        }

        if ((!preg_match("/^(0|[1-9][0-9]*)$/", ObjectSerializer::toString($user_id)))) {
            throw new InvalidArgumentException("invalid value for \$user_id when calling AuditLogEntryResponse., must conform to the pattern /^(0|[1-9][0-9]*)$/.");
        }

        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets target_id
     *
     * @return string|null
     */
    public function getTargetId(): ?string
    {
        return $this->container['target_id'];
    }

    /**
     * Sets target_id
     *
     * @param string|null $target_id target_id
     *
     * @return $this
     */
    public function setTargetId(?string $target_id): static
    {
        if (is_null($target_id)) {
            throw new InvalidArgumentException('non-nullable target_id cannot be null');
        }

        if ((!preg_match("/^(0|[1-9][0-9]*)$/", ObjectSerializer::toString($target_id)))) {
            throw new InvalidArgumentException("invalid value for \$target_id when calling AuditLogEntryResponse., must conform to the pattern /^(0|[1-9][0-9]*)$/.");
        }

        $this->container['target_id'] = $target_id;

        return $this;
    }

    /**
     * Gets changes
     *
     * @return \OpenAPI\Client\Model\AuditLogObjectChangeResponse[]|null
     */
    public function getChanges(): ?array
    {
        return $this->container['changes'];
    }

    /**
     * Sets changes
     *
     * @param \OpenAPI\Client\Model\AuditLogObjectChangeResponse[]|null $changes changes
     *
     * @return $this
     */
    public function setChanges(?array $changes): static
    {
        if (is_null($changes)) {
            throw new InvalidArgumentException('non-nullable changes cannot be null');
        }
        $this->container['changes'] = $changes;

        return $this;
    }

    /**
     * Gets options
     *
     * @return array<string,string>|null
     */
    public function getOptions(): ?array&lt;string,string&gt;
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     *
     * @param array<string,string>|null $options options
     *
     * @return $this
     */
    public function setOptions(?array&lt;string,string&gt; $options): static
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
     * Gets reason
     *
     * @return string|null
     */
    public function getReason(): ?string
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     *
     * @param string|null $reason reason
     *
     * @return $this
     */
    public function setReason(?string $reason): static
    {
        if (is_null($reason)) {
            array_push($this->openAPINullablesSetToNull, 'reason');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('reason', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['reason'] = $reason;

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


