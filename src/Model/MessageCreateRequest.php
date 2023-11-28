<?php
/**
 * MessageCreateRequest
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
 * MessageCreateRequest Class Doc Comment
 *
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class MessageCreateRequest implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'MessageCreateRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'content' => 'string',
        'embeds' => '\OpenAPI\Client\Model\RichEmbed[]',
        'allowed_mentions' => '\OpenAPI\Client\Model\MessageAllowedMentionsRequest',
        'sticker_ids' => 'string[]',
        'components' => '\OpenAPI\Client\Model\BaseCreateMessageCreateRequestComponentsInner[]',
        'flags' => 'int',
        'attachments' => '\OpenAPI\Client\Model\MessageAttachmentRequest[]',
        'message_reference' => '\OpenAPI\Client\Model\ReplyMessageReferenceRequest',
        'nonce' => '\OpenAPI\Client\Model\BasicMessageResponseNonce',
        'tts' => 'bool'
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
        'sticker_ids' => 'snowflake',
        'components' => null,
        'flags' => null,
        'attachments' => null,
        'message_reference' => null,
        'nonce' => null,
        'tts' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'content' => true,
		'embeds' => false,
		'allowed_mentions' => true,
		'sticker_ids' => false,
		'components' => false,
		'flags' => true,
		'attachments' => false,
		'message_reference' => true,
		'nonce' => true,
		'tts' => true
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
        'sticker_ids' => 'sticker_ids',
        'components' => 'components',
        'flags' => 'flags',
        'attachments' => 'attachments',
        'message_reference' => 'message_reference',
        'nonce' => 'nonce',
        'tts' => 'tts'
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
        'sticker_ids' => 'setStickerIds',
        'components' => 'setComponents',
        'flags' => 'setFlags',
        'attachments' => 'setAttachments',
        'message_reference' => 'setMessageReference',
        'nonce' => 'setNonce',
        'tts' => 'setTts'
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
        'sticker_ids' => 'getStickerIds',
        'components' => 'getComponents',
        'flags' => 'getFlags',
        'attachments' => 'getAttachments',
        'message_reference' => 'getMessageReference',
        'nonce' => 'getNonce',
        'tts' => 'getTts'
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
        $this->setIfExists('sticker_ids', $data ?? [], null);
        $this->setIfExists('components', $data ?? [], null);
        $this->setIfExists('flags', $data ?? [], null);
        $this->setIfExists('attachments', $data ?? [], null);
        $this->setIfExists('message_reference', $data ?? [], null);
        $this->setIfExists('nonce', $data ?? [], null);
        $this->setIfExists('tts', $data ?? [], null);
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

        if (!is_null($this->container['content']) && (mb_strlen($this->container['content']) > 4000)) {
            $invalidProperties[] = "invalid value for 'content', the character length must be smaller than or equal to 4000.";
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
     * @return string|null
     */
    public function getContent(): ?string
    {
        return $this->container['content'];
    }

    /**
     * Sets content
     *
     * @param string|null $content content
     *
     * @return $this
     */
    public function setContent(?string $content): static
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
        if (!is_null($content) && (mb_strlen($content) > 4000)) {
            throw new InvalidArgumentException('invalid length for $content when calling MessageCreateRequest., must be smaller than or equal to 4000.');
        }

        $this->container['content'] = $content;

        return $this;
    }

    /**
     * Gets embeds
     *
     * @return \OpenAPI\Client\Model\RichEmbed[]|null
     */
    public function getEmbeds(): ?array
    {
        return $this->container['embeds'];
    }

    /**
     * Sets embeds
     *
     * @param \OpenAPI\Client\Model\RichEmbed[]|null $embeds embeds
     *
     * @return $this
     */
    public function setEmbeds(?array $embeds): static
    {
        if (is_null($embeds)) {
            throw new InvalidArgumentException('non-nullable embeds cannot be null');
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
            array_push($this->openAPINullablesSetToNull, 'allowed_mentions');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('allowed_mentions', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['allowed_mentions'] = $allowed_mentions;

        return $this;
    }

    /**
     * Gets sticker_ids
     *
     * @return string[]|null
     */
    public function getStickerIds(): ?array
    {
        return $this->container['sticker_ids'];
    }

    /**
     * Sets sticker_ids
     *
     * @param string[]|null $sticker_ids sticker_ids
     *
     * @return $this
     */
    public function setStickerIds(?array $sticker_ids): static
    {
        if (is_null($sticker_ids)) {
            throw new InvalidArgumentException('non-nullable sticker_ids cannot be null');
        }
        $this->container['sticker_ids'] = $sticker_ids;

        return $this;
    }

    /**
     * Gets components
     *
     * @return \OpenAPI\Client\Model\BaseCreateMessageCreateRequestComponentsInner[]|null
     */
    public function getComponents(): ?array
    {
        return $this->container['components'];
    }

    /**
     * Sets components
     *
     * @param \OpenAPI\Client\Model\BaseCreateMessageCreateRequestComponentsInner[]|null $components components
     *
     * @return $this
     */
    public function setComponents(?array $components): static
    {
        if (is_null($components)) {
            throw new InvalidArgumentException('non-nullable components cannot be null');
        }
        $this->container['components'] = $components;

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
     * Gets attachments
     *
     * @return \OpenAPI\Client\Model\MessageAttachmentRequest[]|null
     */
    public function getAttachments(): ?array
    {
        return $this->container['attachments'];
    }

    /**
     * Sets attachments
     *
     * @param \OpenAPI\Client\Model\MessageAttachmentRequest[]|null $attachments attachments
     *
     * @return $this
     */
    public function setAttachments(?array $attachments): static
    {
        if (is_null($attachments)) {
            throw new InvalidArgumentException('non-nullable attachments cannot be null');
        }
        $this->container['attachments'] = $attachments;

        return $this;
    }

    /**
     * Gets message_reference
     *
     * @return \OpenAPI\Client\Model\ReplyMessageReferenceRequest|null
     */
    public function getMessageReference(): ?\OpenAPI\Client\Model\ReplyMessageReferenceRequest
    {
        return $this->container['message_reference'];
    }

    /**
     * Sets message_reference
     *
     * @param \OpenAPI\Client\Model\ReplyMessageReferenceRequest|null $message_reference message_reference
     *
     * @return $this
     */
    public function setMessageReference(?\OpenAPI\Client\Model\ReplyMessageReferenceRequest $message_reference): static
    {
        if (is_null($message_reference)) {
            array_push($this->openAPINullablesSetToNull, 'message_reference');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('message_reference', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['message_reference'] = $message_reference;

        return $this;
    }

    /**
     * Gets nonce
     *
     * @return \OpenAPI\Client\Model\BasicMessageResponseNonce|null
     */
    public function getNonce(): ?\OpenAPI\Client\Model\BasicMessageResponseNonce
    {
        return $this->container['nonce'];
    }

    /**
     * Sets nonce
     *
     * @param \OpenAPI\Client\Model\BasicMessageResponseNonce|null $nonce nonce
     *
     * @return $this
     */
    public function setNonce(?\OpenAPI\Client\Model\BasicMessageResponseNonce $nonce): static
    {
        if (is_null($nonce)) {
            array_push($this->openAPINullablesSetToNull, 'nonce');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('nonce', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['nonce'] = $nonce;

        return $this;
    }

    /**
     * Gets tts
     *
     * @return bool|null
     */
    public function getTts(): ?bool
    {
        return $this->container['tts'];
    }

    /**
     * Sets tts
     *
     * @param bool|null $tts tts
     *
     * @return $this
     */
    public function setTts(?bool $tts): static
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


