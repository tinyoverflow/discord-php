<?php
/**
 * ExecuteWebhookRequest
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
 * ExecuteWebhookRequest Class Doc Comment
 *
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class ExecuteWebhookRequest implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'execute_webhook_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'content' => 'mixed',
        'embeds' => 'mixed',
        'allowed_mentions' => '\OpenAPI\Client\Model\MessageAllowedMentionsRequest',
        'components' => 'mixed',
        'attachments' => 'mixed',
        'tts' => 'mixed',
        'flags' => 'mixed',
        'username' => 'mixed',
        'avatar_url' => 'mixed',
        'thread_name' => 'mixed',
        'applied_tags' => 'mixed'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'content' => null,
        'embeds' => null,
        'allowed_mentions' => null,
        'components' => null,
        'attachments' => null,
        'tts' => null,
        'flags' => null,
        'username' => null,
        'avatar_url' => 'uri',
        'thread_name' => null,
        'applied_tags' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'content' => true,
		'embeds' => true,
		'allowed_mentions' => false,
		'components' => true,
		'attachments' => true,
		'tts' => true,
		'flags' => true,
		'username' => true,
		'avatar_url' => true,
		'thread_name' => true,
		'applied_tags' => true
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
        'content' => 'content',
        'embeds' => 'embeds',
        'allowed_mentions' => 'allowed_mentions',
        'components' => 'components',
        'attachments' => 'attachments',
        'tts' => 'tts',
        'flags' => 'flags',
        'username' => 'username',
        'avatar_url' => 'avatar_url',
        'thread_name' => 'thread_name',
        'applied_tags' => 'applied_tags'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'content' => 'setContent',
        'embeds' => 'setEmbeds',
        'allowed_mentions' => 'setAllowedMentions',
        'components' => 'setComponents',
        'attachments' => 'setAttachments',
        'tts' => 'setTts',
        'flags' => 'setFlags',
        'username' => 'setUsername',
        'avatar_url' => 'setAvatarUrl',
        'thread_name' => 'setThreadName',
        'applied_tags' => 'setAppliedTags'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'content' => 'getContent',
        'embeds' => 'getEmbeds',
        'allowed_mentions' => 'getAllowedMentions',
        'components' => 'getComponents',
        'attachments' => 'getAttachments',
        'tts' => 'getTts',
        'flags' => 'getFlags',
        'username' => 'getUsername',
        'avatar_url' => 'getAvatarUrl',
        'thread_name' => 'getThreadName',
        'applied_tags' => 'getAppliedTags'
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
        $this->setIfExists('content', $data ?? [], null);
        $this->setIfExists('embeds', $data ?? [], null);
        $this->setIfExists('allowed_mentions', $data ?? [], null);
        $this->setIfExists('components', $data ?? [], null);
        $this->setIfExists('attachments', $data ?? [], null);
        $this->setIfExists('tts', $data ?? [], null);
        $this->setIfExists('flags', $data ?? [], null);
        $this->setIfExists('username', $data ?? [], null);
        $this->setIfExists('avatar_url', $data ?? [], null);
        $this->setIfExists('thread_name', $data ?? [], null);
        $this->setIfExists('applied_tags', $data ?? [], null);
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

        if (!is_null($this->container['content']) && (mb_strlen($this->container['content']) > 2000)) {
            $invalidProperties[] = "invalid value for 'content', the character length must be smaller than or equal to 2000.";
        }

        if (!is_null($this->container['username']) && (mb_strlen($this->container['username']) > 80)) {
            $invalidProperties[] = "invalid value for 'username', the character length must be smaller than or equal to 80.";
        }

        if (!is_null($this->container['username']) && (mb_strlen($this->container['username']) < 1)) {
            $invalidProperties[] = "invalid value for 'username', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['avatar_url']) && (mb_strlen($this->container['avatar_url']) > 2048)) {
            $invalidProperties[] = "invalid value for 'avatar_url', the character length must be smaller than or equal to 2048.";
        }

        if (!is_null($this->container['thread_name']) && (mb_strlen($this->container['thread_name']) > 100)) {
            $invalidProperties[] = "invalid value for 'thread_name', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['thread_name']) && (mb_strlen($this->container['thread_name']) < 0)) {
            $invalidProperties[] = "invalid value for 'thread_name', the character length must be bigger than or equal to 0.";
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
     * Gets content
     *
     * @return mixed|null
     */
    public function getContent(): mixed
    {
        return $this->container['content'];
    }

    /**
     * Sets content
     *
     * @param mixed|null $content content
     *
     * @return $this
     */
    public function setContent(mixed $content): static
    {
        if (is_null($content)) {
            array_push($this->openAPINullablesSetToNull, 'content');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('content', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($content) && (mb_strlen($content) > 2000)) {
            throw new InvalidArgumentException('invalid length for $content when calling ExecuteWebhookRequest., must be smaller than or equal to 2000.');
        }

        $this->container['content'] = $content;

        return $this;
    }

    /**
     * Gets embeds
     *
     * @return mixed|null
     */
    public function getEmbeds(): mixed
    {
        return $this->container['embeds'];
    }

    /**
     * Sets embeds
     *
     * @param mixed|null $embeds embeds
     *
     * @return $this
     */
    public function setEmbeds(mixed $embeds): static
    {
        if (is_null($embeds)) {
            array_push($this->openAPINullablesSetToNull, 'embeds');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('embeds', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['embeds'] = $embeds;

        return $this;
    }

    /**
     * Gets allowed_mentions
     *
     * @return \OpenAPI\Client\Model\MessageAllowedMentionsRequest|null
     */
    public function getAllowedMentions(): ?\OpenAPI\Client\Model\MessageAllowedMentionsRequest
    {
        return $this->container['allowed_mentions'];
    }

    /**
     * Sets allowed_mentions
     *
     * @param \OpenAPI\Client\Model\MessageAllowedMentionsRequest|null $allowed_mentions allowed_mentions
     *
     * @return $this
     */
    public function setAllowedMentions(?\OpenAPI\Client\Model\MessageAllowedMentionsRequest $allowed_mentions): static
    {
        if (is_null($allowed_mentions)) {
            throw new InvalidArgumentException('non-nullable allowed_mentions cannot be null');
        }
        $this->container['allowed_mentions'] = $allowed_mentions;

        return $this;
    }

    /**
     * Gets components
     *
     * @return mixed|null
     */
    public function getComponents(): mixed
    {
        return $this->container['components'];
    }

    /**
     * Sets components
     *
     * @param mixed|null $components components
     *
     * @return $this
     */
    public function setComponents(mixed $components): static
    {
        if (is_null($components)) {
            array_push($this->openAPINullablesSetToNull, 'components');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('components', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['components'] = $components;

        return $this;
    }

    /**
     * Gets attachments
     *
     * @return mixed|null
     */
    public function getAttachments(): mixed
    {
        return $this->container['attachments'];
    }

    /**
     * Sets attachments
     *
     * @param mixed|null $attachments attachments
     *
     * @return $this
     */
    public function setAttachments(mixed $attachments): static
    {
        if (is_null($attachments)) {
            array_push($this->openAPINullablesSetToNull, 'attachments');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('attachments', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['attachments'] = $attachments;

        return $this;
    }

    /**
     * Gets tts
     *
     * @return mixed|null
     */
    public function getTts(): mixed
    {
        return $this->container['tts'];
    }

    /**
     * Sets tts
     *
     * @param mixed|null $tts tts
     *
     * @return $this
     */
    public function setTts(mixed $tts): static
    {
        if (is_null($tts)) {
            array_push($this->openAPINullablesSetToNull, 'tts');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tts', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['tts'] = $tts;

        return $this;
    }

    /**
     * Gets flags
     *
     * @return mixed|null
     */
    public function getFlags(): mixed
    {
        return $this->container['flags'];
    }

    /**
     * Sets flags
     *
     * @param mixed|null $flags flags
     *
     * @return $this
     */
    public function setFlags(mixed $flags): static
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
     * Gets username
     *
     * @return mixed|null
     */
    public function getUsername(): mixed
    {
        return $this->container['username'];
    }

    /**
     * Sets username
     *
     * @param mixed|null $username username
     *
     * @return $this
     */
    public function setUsername(mixed $username): static
    {
        if (is_null($username)) {
            array_push($this->openAPINullablesSetToNull, 'username');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('username', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($username) && (mb_strlen($username) > 80)) {
            throw new InvalidArgumentException('invalid length for $username when calling ExecuteWebhookRequest., must be smaller than or equal to 80.');
        }
        if (!is_null($username) && (mb_strlen($username) < 1)) {
            throw new InvalidArgumentException('invalid length for $username when calling ExecuteWebhookRequest., must be bigger than or equal to 1.');
        }

        $this->container['username'] = $username;

        return $this;
    }

    /**
     * Gets avatar_url
     *
     * @return mixed|null
     */
    public function getAvatarUrl(): mixed
    {
        return $this->container['avatar_url'];
    }

    /**
     * Sets avatar_url
     *
     * @param mixed|null $avatar_url avatar_url
     *
     * @return $this
     */
    public function setAvatarUrl(mixed $avatar_url): static
    {
        if (is_null($avatar_url)) {
            array_push($this->openAPINullablesSetToNull, 'avatar_url');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('avatar_url', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($avatar_url) && (mb_strlen($avatar_url) > 2048)) {
            throw new InvalidArgumentException('invalid length for $avatar_url when calling ExecuteWebhookRequest., must be smaller than or equal to 2048.');
        }

        $this->container['avatar_url'] = $avatar_url;

        return $this;
    }

    /**
     * Gets thread_name
     *
     * @return mixed|null
     */
    public function getThreadName(): mixed
    {
        return $this->container['thread_name'];
    }

    /**
     * Sets thread_name
     *
     * @param mixed|null $thread_name thread_name
     *
     * @return $this
     */
    public function setThreadName(mixed $thread_name): static
    {
        if (is_null($thread_name)) {
            array_push($this->openAPINullablesSetToNull, 'thread_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('thread_name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($thread_name) && (mb_strlen($thread_name) > 100)) {
            throw new InvalidArgumentException('invalid length for $thread_name when calling ExecuteWebhookRequest., must be smaller than or equal to 100.');
        }
        if (!is_null($thread_name) && (mb_strlen($thread_name) < 0)) {
            throw new InvalidArgumentException('invalid length for $thread_name when calling ExecuteWebhookRequest., must be bigger than or equal to 0.');
        }

        $this->container['thread_name'] = $thread_name;

        return $this;
    }

    /**
     * Gets applied_tags
     *
     * @return mixed|null
     */
    public function getAppliedTags(): mixed
    {
        return $this->container['applied_tags'];
    }

    /**
     * Sets applied_tags
     *
     * @param mixed|null $applied_tags applied_tags
     *
     * @return $this
     */
    public function setAppliedTags(mixed $applied_tags): static
    {
        if (is_null($applied_tags)) {
            array_push($this->openAPINullablesSetToNull, 'applied_tags');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('applied_tags', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['applied_tags'] = $applied_tags;

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

