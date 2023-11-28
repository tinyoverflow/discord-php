<?php
/**
 * RichEmbed
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
 * RichEmbed Class Doc Comment
 *
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class RichEmbed implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'RichEmbed';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'type' => 'string',
        'url' => 'string',
        'title' => 'string',
        'color' => 'int',
        'timestamp' => '\DateTime',
        'description' => 'string',
        'author' => '\OpenAPI\Client\Model\RichEmbedAuthor',
        'image' => '\OpenAPI\Client\Model\RichEmbedImage',
        'thumbnail' => '\OpenAPI\Client\Model\RichEmbedThumbnail',
        'footer' => '\OpenAPI\Client\Model\RichEmbedFooter',
        'fields' => '\OpenAPI\Client\Model\RichEmbedField[]',
        'provider' => '\OpenAPI\Client\Model\RichEmbedProvider',
        'video' => '\OpenAPI\Client\Model\RichEmbedVideo'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'type' => null,
        'url' => 'uri',
        'title' => null,
        'color' => null,
        'timestamp' => 'date-time',
        'description' => null,
        'author' => null,
        'image' => null,
        'thumbnail' => null,
        'footer' => null,
        'fields' => null,
        'provider' => null,
        'video' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'type' => true,
		'url' => true,
		'title' => true,
		'color' => true,
		'timestamp' => true,
		'description' => true,
		'author' => true,
		'image' => true,
		'thumbnail' => true,
		'footer' => true,
		'fields' => false,
		'provider' => true,
		'video' => true
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
        'url' => 'url',
        'title' => 'title',
        'color' => 'color',
        'timestamp' => 'timestamp',
        'description' => 'description',
        'author' => 'author',
        'image' => 'image',
        'thumbnail' => 'thumbnail',
        'footer' => 'footer',
        'fields' => 'fields',
        'provider' => 'provider',
        'video' => 'video'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'type' => 'setType',
        'url' => 'setUrl',
        'title' => 'setTitle',
        'color' => 'setColor',
        'timestamp' => 'setTimestamp',
        'description' => 'setDescription',
        'author' => 'setAuthor',
        'image' => 'setImage',
        'thumbnail' => 'setThumbnail',
        'footer' => 'setFooter',
        'fields' => 'setFields',
        'provider' => 'setProvider',
        'video' => 'setVideo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'type' => 'getType',
        'url' => 'getUrl',
        'title' => 'getTitle',
        'color' => 'getColor',
        'timestamp' => 'getTimestamp',
        'description' => 'getDescription',
        'author' => 'getAuthor',
        'image' => 'getImage',
        'thumbnail' => 'getThumbnail',
        'footer' => 'getFooter',
        'fields' => 'getFields',
        'provider' => 'getProvider',
        'video' => 'getVideo'
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
        $this->setIfExists('url', $data ?? [], null);
        $this->setIfExists('title', $data ?? [], null);
        $this->setIfExists('color', $data ?? [], null);
        $this->setIfExists('timestamp', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('author', $data ?? [], null);
        $this->setIfExists('image', $data ?? [], null);
        $this->setIfExists('thumbnail', $data ?? [], null);
        $this->setIfExists('footer', $data ?? [], null);
        $this->setIfExists('fields', $data ?? [], null);
        $this->setIfExists('provider', $data ?? [], null);
        $this->setIfExists('video', $data ?? [], null);
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

        if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) > 152133)) {
            $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 152133.";
        }

        if (!is_null($this->container['url']) && (mb_strlen($this->container['url']) > 2048)) {
            $invalidProperties[] = "invalid value for 'url', the character length must be smaller than or equal to 2048.";
        }

        if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) > 256)) {
            $invalidProperties[] = "invalid value for 'title', the character length must be smaller than or equal to 256.";
        }

        if (!is_null($this->container['color']) && ($this->container['color'] > 16777215)) {
            $invalidProperties[] = "invalid value for 'color', must be smaller than or equal to 16777215.";
        }

        if (!is_null($this->container['color']) && ($this->container['color'] < 0)) {
            $invalidProperties[] = "invalid value for 'color', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 4096)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 4096.";
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
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type type
     *
     * @return $this
     */
    public function setType(?string $type): static
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
        if (!is_null($type) && (mb_strlen($type) > 152133)) {
            throw new InvalidArgumentException('invalid length for $type when calling RichEmbed., must be smaller than or equal to 152133.');
        }

        $this->container['type'] = $type;

        return $this;
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
            throw new InvalidArgumentException('invalid length for $url when calling RichEmbed., must be smaller than or equal to 2048.');
        }

        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title title
     *
     * @return $this
     */
    public function setTitle(?string $title): static
    {
        if (is_null($title)) {
            array_push($this->openAPINullablesSetToNull, 'title');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('title', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($title) && (mb_strlen($title) > 256)) {
            throw new InvalidArgumentException('invalid length for $title when calling RichEmbed., must be smaller than or equal to 256.');
        }

        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets color
     *
     * @return int|null
     */
    public function getColor(): ?int
    {
        return $this->container['color'];
    }

    /**
     * Sets color
     *
     * @param int|null $color color
     *
     * @return $this
     */
    public function setColor(?int $color): static
    {
        if (is_null($color)) {
            array_push($this->openAPINullablesSetToNull, 'color');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('color', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($color) && ($color > 16777215)) {
            throw new InvalidArgumentException('invalid value for $color when calling RichEmbed., must be smaller than or equal to 16777215.');
        }
        if (!is_null($color) && ($color < 0)) {
            throw new InvalidArgumentException('invalid value for $color when calling RichEmbed., must be bigger than or equal to 0.');
        }

        $this->container['color'] = $color;

        return $this;
    }

    /**
     * Gets timestamp
     *
     * @return \DateTime|null
     */
    public function getTimestamp(): ?\DateTime
    {
        return $this->container['timestamp'];
    }

    /**
     * Sets timestamp
     *
     * @param \DateTime|null $timestamp timestamp
     *
     * @return $this
     */
    public function setTimestamp(?\DateTime $timestamp): static
    {
        if (is_null($timestamp)) {
            array_push($this->openAPINullablesSetToNull, 'timestamp');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('timestamp', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['timestamp'] = $timestamp;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description
     *
     * @return $this
     */
    public function setDescription(?string $description): static
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
        if (!is_null($description) && (mb_strlen($description) > 4096)) {
            throw new InvalidArgumentException('invalid length for $description when calling RichEmbed., must be smaller than or equal to 4096.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets author
     *
     * @return \OpenAPI\Client\Model\RichEmbedAuthor|null
     */
    public function getAuthor(): ?\OpenAPI\Client\Model\RichEmbedAuthor
    {
        return $this->container['author'];
    }

    /**
     * Sets author
     *
     * @param \OpenAPI\Client\Model\RichEmbedAuthor|null $author author
     *
     * @return $this
     */
    public function setAuthor(?\OpenAPI\Client\Model\RichEmbedAuthor $author): static
    {
        if (is_null($author)) {
            array_push($this->openAPINullablesSetToNull, 'author');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('author', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['author'] = $author;

        return $this;
    }

    /**
     * Gets image
     *
     * @return \OpenAPI\Client\Model\RichEmbedImage|null
     */
    public function getImage(): ?\OpenAPI\Client\Model\RichEmbedImage
    {
        return $this->container['image'];
    }

    /**
     * Sets image
     *
     * @param \OpenAPI\Client\Model\RichEmbedImage|null $image image
     *
     * @return $this
     */
    public function setImage(?\OpenAPI\Client\Model\RichEmbedImage $image): static
    {
        if (is_null($image)) {
            array_push($this->openAPINullablesSetToNull, 'image');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('image', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['image'] = $image;

        return $this;
    }

    /**
     * Gets thumbnail
     *
     * @return \OpenAPI\Client\Model\RichEmbedThumbnail|null
     */
    public function getThumbnail(): ?\OpenAPI\Client\Model\RichEmbedThumbnail
    {
        return $this->container['thumbnail'];
    }

    /**
     * Sets thumbnail
     *
     * @param \OpenAPI\Client\Model\RichEmbedThumbnail|null $thumbnail thumbnail
     *
     * @return $this
     */
    public function setThumbnail(?\OpenAPI\Client\Model\RichEmbedThumbnail $thumbnail): static
    {
        if (is_null($thumbnail)) {
            array_push($this->openAPINullablesSetToNull, 'thumbnail');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('thumbnail', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['thumbnail'] = $thumbnail;

        return $this;
    }

    /**
     * Gets footer
     *
     * @return \OpenAPI\Client\Model\RichEmbedFooter|null
     */
    public function getFooter(): ?\OpenAPI\Client\Model\RichEmbedFooter
    {
        return $this->container['footer'];
    }

    /**
     * Sets footer
     *
     * @param \OpenAPI\Client\Model\RichEmbedFooter|null $footer footer
     *
     * @return $this
     */
    public function setFooter(?\OpenAPI\Client\Model\RichEmbedFooter $footer): static
    {
        if (is_null($footer)) {
            array_push($this->openAPINullablesSetToNull, 'footer');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('footer', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['footer'] = $footer;

        return $this;
    }

    /**
     * Gets fields
     *
     * @return \OpenAPI\Client\Model\RichEmbedField[]|null
     */
    public function getFields(): ?array
    {
        return $this->container['fields'];
    }

    /**
     * Sets fields
     *
     * @param \OpenAPI\Client\Model\RichEmbedField[]|null $fields fields
     *
     * @return $this
     */
    public function setFields(?array $fields): static
    {
        if (is_null($fields)) {
            throw new InvalidArgumentException('non-nullable fields cannot be null');
        }
        $this->container['fields'] = $fields;

        return $this;
    }

    /**
     * Gets provider
     *
     * @return \OpenAPI\Client\Model\RichEmbedProvider|null
     */
    public function getProvider(): ?\OpenAPI\Client\Model\RichEmbedProvider
    {
        return $this->container['provider'];
    }

    /**
     * Sets provider
     *
     * @param \OpenAPI\Client\Model\RichEmbedProvider|null $provider provider
     *
     * @return $this
     */
    public function setProvider(?\OpenAPI\Client\Model\RichEmbedProvider $provider): static
    {
        if (is_null($provider)) {
            array_push($this->openAPINullablesSetToNull, 'provider');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('provider', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['provider'] = $provider;

        return $this;
    }

    /**
     * Gets video
     *
     * @return \OpenAPI\Client\Model\RichEmbedVideo|null
     */
    public function getVideo(): ?\OpenAPI\Client\Model\RichEmbedVideo
    {
        return $this->container['video'];
    }

    /**
     * Sets video
     *
     * @param \OpenAPI\Client\Model\RichEmbedVideo|null $video video
     *
     * @return $this
     */
    public function setVideo(?\OpenAPI\Client\Model\RichEmbedVideo $video): static
    {
        if (is_null($video)) {
            array_push($this->openAPINullablesSetToNull, 'video');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('video', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['video'] = $video;

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


