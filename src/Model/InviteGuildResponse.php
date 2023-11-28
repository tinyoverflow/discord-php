<?php
/**
 * InviteGuildResponse
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
 * InviteGuildResponse Class Doc Comment
 *
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class InviteGuildResponse implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'InviteGuildResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'id' => 'string',
        'name' => 'string',
        'splash' => 'string',
        'banner' => 'string',
        'description' => 'string',
        'icon' => 'string',
        'features' => '\OpenAPI\Client\Model\GuildFeatures[]',
        'verification_level' => '\OpenAPI\Client\Model\VerificationLevels',
        'vanity_url_code' => 'string',
        'nsfw_level' => '\OpenAPI\Client\Model\GuildNSFWContentLevel',
        'nsfw' => 'bool',
        'premium_subscription_count' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'id' => 'snowflake',
        'name' => null,
        'splash' => null,
        'banner' => null,
        'description' => null,
        'icon' => null,
        'features' => null,
        'verification_level' => null,
        'vanity_url_code' => null,
        'nsfw_level' => null,
        'nsfw' => null,
        'premium_subscription_count' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'id' => false,
		'name' => false,
		'splash' => true,
		'banner' => true,
		'description' => true,
		'icon' => true,
		'features' => false,
		'verification_level' => true,
		'vanity_url_code' => true,
		'nsfw_level' => true,
		'nsfw' => true,
		'premium_subscription_count' => true
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
        'name' => 'name',
        'splash' => 'splash',
        'banner' => 'banner',
        'description' => 'description',
        'icon' => 'icon',
        'features' => 'features',
        'verification_level' => 'verification_level',
        'vanity_url_code' => 'vanity_url_code',
        'nsfw_level' => 'nsfw_level',
        'nsfw' => 'nsfw',
        'premium_subscription_count' => 'premium_subscription_count'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'splash' => 'setSplash',
        'banner' => 'setBanner',
        'description' => 'setDescription',
        'icon' => 'setIcon',
        'features' => 'setFeatures',
        'verification_level' => 'setVerificationLevel',
        'vanity_url_code' => 'setVanityUrlCode',
        'nsfw_level' => 'setNsfwLevel',
        'nsfw' => 'setNsfw',
        'premium_subscription_count' => 'setPremiumSubscriptionCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'splash' => 'getSplash',
        'banner' => 'getBanner',
        'description' => 'getDescription',
        'icon' => 'getIcon',
        'features' => 'getFeatures',
        'verification_level' => 'getVerificationLevel',
        'vanity_url_code' => 'getVanityUrlCode',
        'nsfw_level' => 'getNsfwLevel',
        'nsfw' => 'getNsfw',
        'premium_subscription_count' => 'getPremiumSubscriptionCount'
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
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('splash', $data ?? [], null);
        $this->setIfExists('banner', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('icon', $data ?? [], null);
        $this->setIfExists('features', $data ?? [], null);
        $this->setIfExists('verification_level', $data ?? [], null);
        $this->setIfExists('vanity_url_code', $data ?? [], null);
        $this->setIfExists('nsfw_level', $data ?? [], null);
        $this->setIfExists('nsfw', $data ?? [], null);
        $this->setIfExists('premium_subscription_count', $data ?? [], null);
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

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['features'] === null) {
            $invalidProperties[] = "'features' can't be null";
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
            throw new InvalidArgumentException("invalid value for \$id when calling InviteGuildResponse., must conform to the pattern /^(0|[1-9][0-9]*)$/.");
        }

        $this->container['id'] = $id;

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
     * Gets splash
     *
     * @return string|null
     */
    public function getSplash(): ?string
    {
        return $this->container['splash'];
    }

    /**
     * Sets splash
     *
     * @param string|null $splash splash
     *
     * @return $this
     */
    public function setSplash(?string $splash): static
    {
        if (is_null($splash)) {
            array_push($this->openAPINullablesSetToNull, 'splash');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('splash', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['splash'] = $splash;

        return $this;
    }

    /**
     * Gets banner
     *
     * @return string|null
     */
    public function getBanner(): ?string
    {
        return $this->container['banner'];
    }

    /**
     * Sets banner
     *
     * @param string|null $banner banner
     *
     * @return $this
     */
    public function setBanner(?string $banner): static
    {
        if (is_null($banner)) {
            array_push($this->openAPINullablesSetToNull, 'banner');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('banner', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['banner'] = $banner;

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
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets icon
     *
     * @return string|null
     */
    public function getIcon(): ?string
    {
        return $this->container['icon'];
    }

    /**
     * Sets icon
     *
     * @param string|null $icon icon
     *
     * @return $this
     */
    public function setIcon(?string $icon): static
    {
        if (is_null($icon)) {
            array_push($this->openAPINullablesSetToNull, 'icon');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('icon', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['icon'] = $icon;

        return $this;
    }

    /**
     * Gets features
     *
     * @return \OpenAPI\Client\Model\GuildFeatures[]
     */
    public function getFeatures(): array
    {
        return $this->container['features'];
    }

    /**
     * Sets features
     *
     * @param \OpenAPI\Client\Model\GuildFeatures[] $features features
     *
     * @return $this
     */
    public function setFeatures(array $features): static
    {
        if (is_null($features)) {
            throw new InvalidArgumentException('non-nullable features cannot be null');
        }
        $this->container['features'] = $features;

        return $this;
    }

    /**
     * Gets verification_level
     *
     * @return \OpenAPI\Client\Model\VerificationLevels|null
     */
    public function getVerificationLevel(): ?\OpenAPI\Client\Model\VerificationLevels
    {
        return $this->container['verification_level'];
    }

    /**
     * Sets verification_level
     *
     * @param \OpenAPI\Client\Model\VerificationLevels|null $verification_level verification_level
     *
     * @return $this
     */
    public function setVerificationLevel(?\OpenAPI\Client\Model\VerificationLevels $verification_level): static
    {
        if (is_null($verification_level)) {
            array_push($this->openAPINullablesSetToNull, 'verification_level');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('verification_level', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['verification_level'] = $verification_level;

        return $this;
    }

    /**
     * Gets vanity_url_code
     *
     * @return string|null
     */
    public function getVanityUrlCode(): ?string
    {
        return $this->container['vanity_url_code'];
    }

    /**
     * Sets vanity_url_code
     *
     * @param string|null $vanity_url_code vanity_url_code
     *
     * @return $this
     */
    public function setVanityUrlCode(?string $vanity_url_code): static
    {
        if (is_null($vanity_url_code)) {
            array_push($this->openAPINullablesSetToNull, 'vanity_url_code');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('vanity_url_code', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['vanity_url_code'] = $vanity_url_code;

        return $this;
    }

    /**
     * Gets nsfw_level
     *
     * @return \OpenAPI\Client\Model\GuildNSFWContentLevel|null
     */
    public function getNsfwLevel(): ?\OpenAPI\Client\Model\GuildNSFWContentLevel
    {
        return $this->container['nsfw_level'];
    }

    /**
     * Sets nsfw_level
     *
     * @param \OpenAPI\Client\Model\GuildNSFWContentLevel|null $nsfw_level nsfw_level
     *
     * @return $this
     */
    public function setNsfwLevel(?\OpenAPI\Client\Model\GuildNSFWContentLevel $nsfw_level): static
    {
        if (is_null($nsfw_level)) {
            array_push($this->openAPINullablesSetToNull, 'nsfw_level');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('nsfw_level', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['nsfw_level'] = $nsfw_level;

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
     * Gets premium_subscription_count
     *
     * @return int|null
     */
    public function getPremiumSubscriptionCount(): ?int
    {
        return $this->container['premium_subscription_count'];
    }

    /**
     * Sets premium_subscription_count
     *
     * @param int|null $premium_subscription_count premium_subscription_count
     *
     * @return $this
     */
    public function setPremiumSubscriptionCount(?int $premium_subscription_count): static
    {
        if (is_null($premium_subscription_count)) {
            array_push($this->openAPINullablesSetToNull, 'premium_subscription_count');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('premium_subscription_count', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['premium_subscription_count'] = $premium_subscription_count;

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

