<?php
/**
 * UpdateThreadRequestPartial
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
 * UpdateThreadRequestPartial Class Doc Comment
 *
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class UpdateThreadRequestPartial implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'UpdateThreadRequestPartial';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'name' => 'string',
        'archived' => 'bool',
        'locked' => 'bool',
        'invitable' => 'bool',
        'auto_archive_duration' => '\OpenAPI\Client\Model\ThreadAutoArchiveDuration',
        'rate_limit_per_user' => 'int',
        'flags' => 'int',
        'applied_tags' => 'string[]',
        'bitrate' => 'int',
        'user_limit' => 'int',
        'rtc_region' => 'string',
        'video_quality_mode' => '\OpenAPI\Client\Model\VideoQualityModes'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'name' => null,
        'archived' => null,
        'locked' => null,
        'invitable' => null,
        'auto_archive_duration' => null,
        'rate_limit_per_user' => null,
        'flags' => null,
        'applied_tags' => 'snowflake',
        'bitrate' => 'int32',
        'user_limit' => null,
        'rtc_region' => null,
        'video_quality_mode' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'name' => true,
		'archived' => true,
		'locked' => true,
		'invitable' => true,
		'auto_archive_duration' => true,
		'rate_limit_per_user' => true,
		'flags' => true,
		'applied_tags' => false,
		'bitrate' => true,
		'user_limit' => true,
		'rtc_region' => true,
		'video_quality_mode' => true
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
        'name' => 'name',
        'archived' => 'archived',
        'locked' => 'locked',
        'invitable' => 'invitable',
        'auto_archive_duration' => 'auto_archive_duration',
        'rate_limit_per_user' => 'rate_limit_per_user',
        'flags' => 'flags',
        'applied_tags' => 'applied_tags',
        'bitrate' => 'bitrate',
        'user_limit' => 'user_limit',
        'rtc_region' => 'rtc_region',
        'video_quality_mode' => 'video_quality_mode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'name' => 'setName',
        'archived' => 'setArchived',
        'locked' => 'setLocked',
        'invitable' => 'setInvitable',
        'auto_archive_duration' => 'setAutoArchiveDuration',
        'rate_limit_per_user' => 'setRateLimitPerUser',
        'flags' => 'setFlags',
        'applied_tags' => 'setAppliedTags',
        'bitrate' => 'setBitrate',
        'user_limit' => 'setUserLimit',
        'rtc_region' => 'setRtcRegion',
        'video_quality_mode' => 'setVideoQualityMode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'name' => 'getName',
        'archived' => 'getArchived',
        'locked' => 'getLocked',
        'invitable' => 'getInvitable',
        'auto_archive_duration' => 'getAutoArchiveDuration',
        'rate_limit_per_user' => 'getRateLimitPerUser',
        'flags' => 'getFlags',
        'applied_tags' => 'getAppliedTags',
        'bitrate' => 'getBitrate',
        'user_limit' => 'getUserLimit',
        'rtc_region' => 'getRtcRegion',
        'video_quality_mode' => 'getVideoQualityMode'
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
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('archived', $data ?? [], null);
        $this->setIfExists('locked', $data ?? [], null);
        $this->setIfExists('invitable', $data ?? [], null);
        $this->setIfExists('auto_archive_duration', $data ?? [], null);
        $this->setIfExists('rate_limit_per_user', $data ?? [], null);
        $this->setIfExists('flags', $data ?? [], null);
        $this->setIfExists('applied_tags', $data ?? [], null);
        $this->setIfExists('bitrate', $data ?? [], null);
        $this->setIfExists('user_limit', $data ?? [], null);
        $this->setIfExists('rtc_region', $data ?? [], null);
        $this->setIfExists('video_quality_mode', $data ?? [], null);
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

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 100)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['rate_limit_per_user']) && ($this->container['rate_limit_per_user'] > 21600)) {
            $invalidProperties[] = "invalid value for 'rate_limit_per_user', must be smaller than or equal to 21600.";
        }

        if (!is_null($this->container['rate_limit_per_user']) && ($this->container['rate_limit_per_user'] < 0)) {
            $invalidProperties[] = "invalid value for 'rate_limit_per_user', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['bitrate']) && ($this->container['bitrate'] < 8000)) {
            $invalidProperties[] = "invalid value for 'bitrate', must be bigger than or equal to 8000.";
        }

        if (!is_null($this->container['user_limit']) && ($this->container['user_limit'] > 99)) {
            $invalidProperties[] = "invalid value for 'user_limit', must be smaller than or equal to 99.";
        }

        if (!is_null($this->container['user_limit']) && ($this->container['user_limit'] < 0)) {
            $invalidProperties[] = "invalid value for 'user_limit', must be bigger than or equal to 0.";
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
     * Gets name
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return $this
     */
    public function setName(?string $name): static
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
        if (!is_null($name) && (mb_strlen($name) > 100)) {
            throw new InvalidArgumentException('invalid length for $name when calling UpdateThreadRequestPartial., must be smaller than or equal to 100.');
        }
        if (!is_null($name) && (mb_strlen($name) < 0)) {
            throw new InvalidArgumentException('invalid length for $name when calling UpdateThreadRequestPartial., must be bigger than or equal to 0.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets archived
     *
     * @return bool|null
     */
    public function getArchived(): ?bool
    {
        return $this->container['archived'];
    }

    /**
     * Sets archived
     *
     * @param bool|null $archived archived
     *
     * @return $this
     */
    public function setArchived(?bool $archived): static
    {
        if (is_null($archived)) {
            array_push($this->openAPINullablesSetToNull, 'archived');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('archived', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['archived'] = $archived;

        return $this;
    }

    /**
     * Gets locked
     *
     * @return bool|null
     */
    public function getLocked(): ?bool
    {
        return $this->container['locked'];
    }

    /**
     * Sets locked
     *
     * @param bool|null $locked locked
     *
     * @return $this
     */
    public function setLocked(?bool $locked): static
    {
        if (is_null($locked)) {
            array_push($this->openAPINullablesSetToNull, 'locked');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('locked', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['locked'] = $locked;

        return $this;
    }

    /**
     * Gets invitable
     *
     * @return bool|null
     */
    public function getInvitable(): ?bool
    {
        return $this->container['invitable'];
    }

    /**
     * Sets invitable
     *
     * @param bool|null $invitable invitable
     *
     * @return $this
     */
    public function setInvitable(?bool $invitable): static
    {
        if (is_null($invitable)) {
            array_push($this->openAPINullablesSetToNull, 'invitable');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('invitable', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['invitable'] = $invitable;

        return $this;
    }

    /**
     * Gets auto_archive_duration
     *
     * @return \OpenAPI\Client\Model\ThreadAutoArchiveDuration|null
     */
    public function getAutoArchiveDuration(): ?\OpenAPI\Client\Model\ThreadAutoArchiveDuration
    {
        return $this->container['auto_archive_duration'];
    }

    /**
     * Sets auto_archive_duration
     *
     * @param \OpenAPI\Client\Model\ThreadAutoArchiveDuration|null $auto_archive_duration auto_archive_duration
     *
     * @return $this
     */
    public function setAutoArchiveDuration(?\OpenAPI\Client\Model\ThreadAutoArchiveDuration $auto_archive_duration): static
    {
        if (is_null($auto_archive_duration)) {
            array_push($this->openAPINullablesSetToNull, 'auto_archive_duration');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('auto_archive_duration', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['auto_archive_duration'] = $auto_archive_duration;

        return $this;
    }

    /**
     * Gets rate_limit_per_user
     *
     * @return int|null
     */
    public function getRateLimitPerUser(): ?int
    {
        return $this->container['rate_limit_per_user'];
    }

    /**
     * Sets rate_limit_per_user
     *
     * @param int|null $rate_limit_per_user rate_limit_per_user
     *
     * @return $this
     */
    public function setRateLimitPerUser(?int $rate_limit_per_user): static
    {
        if (is_null($rate_limit_per_user)) {
            array_push($this->openAPINullablesSetToNull, 'rate_limit_per_user');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('rate_limit_per_user', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($rate_limit_per_user) && ($rate_limit_per_user > 21600)) {
            throw new InvalidArgumentException('invalid value for $rate_limit_per_user when calling UpdateThreadRequestPartial., must be smaller than or equal to 21600.');
        }
        if (!is_null($rate_limit_per_user) && ($rate_limit_per_user < 0)) {
            throw new InvalidArgumentException('invalid value for $rate_limit_per_user when calling UpdateThreadRequestPartial., must be bigger than or equal to 0.');
        }

        $this->container['rate_limit_per_user'] = $rate_limit_per_user;

        return $this;
    }

    /**
     * Gets flags
     *
     * @return int|null
     */
    public function getFlags(): ?int
    {
        return $this->container['flags'];
    }

    /**
     * Sets flags
     *
     * @param int|null $flags flags
     *
     * @return $this
     */
    public function setFlags(?int $flags): static
    {
        if (is_null($flags)) {
            array_push($this->openAPINullablesSetToNull, 'flags');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('flags', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['flags'] = $flags;

        return $this;
    }

    /**
     * Gets applied_tags
     *
     * @return string[]|null
     */
    public function getAppliedTags(): ?array
    {
        return $this->container['applied_tags'];
    }

    /**
     * Sets applied_tags
     *
     * @param string[]|null $applied_tags applied_tags
     *
     * @return $this
     */
    public function setAppliedTags(?array $applied_tags): static
    {
        if (is_null($applied_tags)) {
            throw new InvalidArgumentException('non-nullable applied_tags cannot be null');
        }
        $this->container['applied_tags'] = $applied_tags;

        return $this;
    }

    /**
     * Gets bitrate
     *
     * @return int|null
     */
    public function getBitrate(): ?int
    {
        return $this->container['bitrate'];
    }

    /**
     * Sets bitrate
     *
     * @param int|null $bitrate bitrate
     *
     * @return $this
     */
    public function setBitrate(?int $bitrate): static
    {
        if (is_null($bitrate)) {
            array_push($this->openAPINullablesSetToNull, 'bitrate');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('bitrate', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($bitrate) && ($bitrate < 8000)) {
            throw new InvalidArgumentException('invalid value for $bitrate when calling UpdateThreadRequestPartial., must be bigger than or equal to 8000.');
        }

        $this->container['bitrate'] = $bitrate;

        return $this;
    }

    /**
     * Gets user_limit
     *
     * @return int|null
     */
    public function getUserLimit(): ?int
    {
        return $this->container['user_limit'];
    }

    /**
     * Sets user_limit
     *
     * @param int|null $user_limit user_limit
     *
     * @return $this
     */
    public function setUserLimit(?int $user_limit): static
    {
        if (is_null($user_limit)) {
            array_push($this->openAPINullablesSetToNull, 'user_limit');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('user_limit', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($user_limit) && ($user_limit > 99)) {
            throw new InvalidArgumentException('invalid value for $user_limit when calling UpdateThreadRequestPartial., must be smaller than or equal to 99.');
        }
        if (!is_null($user_limit) && ($user_limit < 0)) {
            throw new InvalidArgumentException('invalid value for $user_limit when calling UpdateThreadRequestPartial., must be bigger than or equal to 0.');
        }

        $this->container['user_limit'] = $user_limit;

        return $this;
    }

    /**
     * Gets rtc_region
     *
     * @return string|null
     */
    public function getRtcRegion(): ?string
    {
        return $this->container['rtc_region'];
    }

    /**
     * Sets rtc_region
     *
     * @param string|null $rtc_region rtc_region
     *
     * @return $this
     */
    public function setRtcRegion(?string $rtc_region): static
    {
        if (is_null($rtc_region)) {
            array_push($this->openAPINullablesSetToNull, 'rtc_region');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('rtc_region', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['rtc_region'] = $rtc_region;

        return $this;
    }

    /**
     * Gets video_quality_mode
     *
     * @return \OpenAPI\Client\Model\VideoQualityModes|null
     */
    public function getVideoQualityMode(): ?\OpenAPI\Client\Model\VideoQualityModes
    {
        return $this->container['video_quality_mode'];
    }

    /**
     * Sets video_quality_mode
     *
     * @param \OpenAPI\Client\Model\VideoQualityModes|null $video_quality_mode video_quality_mode
     *
     * @return $this
     */
    public function setVideoQualityMode(?\OpenAPI\Client\Model\VideoQualityModes $video_quality_mode): static
    {
        if (is_null($video_quality_mode)) {
            array_push($this->openAPINullablesSetToNull, 'video_quality_mode');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('video_quality_mode', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['video_quality_mode'] = $video_quality_mode;

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

