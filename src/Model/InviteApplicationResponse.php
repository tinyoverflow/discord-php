<?php
/**
 * InviteApplicationResponse
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
 * InviteApplicationResponse Class Doc Comment
 *
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class InviteApplicationResponse implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'InviteApplicationResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'id' => 'string',
        'name' => 'string',
        'icon' => 'string',
        'description' => 'string',
        'type' => '\OpenAPI\Client\Model\ApplicationTypes',
        'cover_image' => 'string',
        'primary_sku_id' => '\OpenAPI\Client\Model\UpdateSelfVoiceStateRequestChannelId',
        'bot' => '\OpenAPI\Client\Model\UserResponse',
        'slug' => 'string',
        'guild_id' => '\OpenAPI\Client\Model\UpdateSelfVoiceStateRequestChannelId',
        'rpc_origins' => 'string[]',
        'bot_public' => 'bool',
        'bot_require_code_grant' => 'bool',
        'terms_of_service_url' => 'string',
        'privacy_policy_url' => 'string',
        'custom_install_url' => 'string',
        'install_params' => '\OpenAPI\Client\Model\ApplicationOAuth2ParamsResponse',
        'verify_key' => 'string',
        'flags' => 'int',
        'max_participants' => 'int',
        'tags' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'id' => 'snowflake',
        'name' => null,
        'icon' => null,
        'description' => null,
        'type' => null,
        'cover_image' => null,
        'primary_sku_id' => null,
        'bot' => null,
        'slug' => null,
        'guild_id' => null,
        'rpc_origins' => null,
        'bot_public' => null,
        'bot_require_code_grant' => null,
        'terms_of_service_url' => 'uri',
        'privacy_policy_url' => 'uri',
        'custom_install_url' => 'uri',
        'install_params' => null,
        'verify_key' => null,
        'flags' => 'int32',
        'max_participants' => 'int32',
        'tags' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'id' => false,
		'name' => true,
		'icon' => true,
		'description' => true,
		'type' => true,
		'cover_image' => true,
		'primary_sku_id' => true,
		'bot' => true,
		'slug' => true,
		'guild_id' => true,
		'rpc_origins' => false,
		'bot_public' => true,
		'bot_require_code_grant' => true,
		'terms_of_service_url' => true,
		'privacy_policy_url' => true,
		'custom_install_url' => true,
		'install_params' => true,
		'verify_key' => true,
		'flags' => false,
		'max_participants' => true,
		'tags' => false
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
        'icon' => 'icon',
        'description' => 'description',
        'type' => 'type',
        'cover_image' => 'cover_image',
        'primary_sku_id' => 'primary_sku_id',
        'bot' => 'bot',
        'slug' => 'slug',
        'guild_id' => 'guild_id',
        'rpc_origins' => 'rpc_origins',
        'bot_public' => 'bot_public',
        'bot_require_code_grant' => 'bot_require_code_grant',
        'terms_of_service_url' => 'terms_of_service_url',
        'privacy_policy_url' => 'privacy_policy_url',
        'custom_install_url' => 'custom_install_url',
        'install_params' => 'install_params',
        'verify_key' => 'verify_key',
        'flags' => 'flags',
        'max_participants' => 'max_participants',
        'tags' => 'tags'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'icon' => 'setIcon',
        'description' => 'setDescription',
        'type' => 'setType',
        'cover_image' => 'setCoverImage',
        'primary_sku_id' => 'setPrimarySkuId',
        'bot' => 'setBot',
        'slug' => 'setSlug',
        'guild_id' => 'setGuildId',
        'rpc_origins' => 'setRpcOrigins',
        'bot_public' => 'setBotPublic',
        'bot_require_code_grant' => 'setBotRequireCodeGrant',
        'terms_of_service_url' => 'setTermsOfServiceUrl',
        'privacy_policy_url' => 'setPrivacyPolicyUrl',
        'custom_install_url' => 'setCustomInstallUrl',
        'install_params' => 'setInstallParams',
        'verify_key' => 'setVerifyKey',
        'flags' => 'setFlags',
        'max_participants' => 'setMaxParticipants',
        'tags' => 'setTags'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'icon' => 'getIcon',
        'description' => 'getDescription',
        'type' => 'getType',
        'cover_image' => 'getCoverImage',
        'primary_sku_id' => 'getPrimarySkuId',
        'bot' => 'getBot',
        'slug' => 'getSlug',
        'guild_id' => 'getGuildId',
        'rpc_origins' => 'getRpcOrigins',
        'bot_public' => 'getBotPublic',
        'bot_require_code_grant' => 'getBotRequireCodeGrant',
        'terms_of_service_url' => 'getTermsOfServiceUrl',
        'privacy_policy_url' => 'getPrivacyPolicyUrl',
        'custom_install_url' => 'getCustomInstallUrl',
        'install_params' => 'getInstallParams',
        'verify_key' => 'getVerifyKey',
        'flags' => 'getFlags',
        'max_participants' => 'getMaxParticipants',
        'tags' => 'getTags'
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
        $this->setIfExists('icon', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('cover_image', $data ?? [], null);
        $this->setIfExists('primary_sku_id', $data ?? [], null);
        $this->setIfExists('bot', $data ?? [], null);
        $this->setIfExists('slug', $data ?? [], null);
        $this->setIfExists('guild_id', $data ?? [], null);
        $this->setIfExists('rpc_origins', $data ?? [], null);
        $this->setIfExists('bot_public', $data ?? [], null);
        $this->setIfExists('bot_require_code_grant', $data ?? [], null);
        $this->setIfExists('terms_of_service_url', $data ?? [], null);
        $this->setIfExists('privacy_policy_url', $data ?? [], null);
        $this->setIfExists('custom_install_url', $data ?? [], null);
        $this->setIfExists('install_params', $data ?? [], null);
        $this->setIfExists('verify_key', $data ?? [], null);
        $this->setIfExists('flags', $data ?? [], null);
        $this->setIfExists('max_participants', $data ?? [], null);
        $this->setIfExists('tags', $data ?? [], null);
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
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['verify_key'] === null) {
            $invalidProperties[] = "'verify_key' can't be null";
        }
        if ($this->container['flags'] === null) {
            $invalidProperties[] = "'flags' can't be null";
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
            throw new InvalidArgumentException("invalid value for \$id when calling InviteApplicationResponse., must conform to the pattern /^(0|[1-9][0-9]*)$/.");
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName(): ?string
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
        $this->container['name'] = $name;

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
     * Gets description
     *
     * @return string
     */
    public function getDescription(): ?string
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
     * Gets type
     *
     * @return \OpenAPI\Client\Model\ApplicationTypes|null
     */
    public function getType(): ?\OpenAPI\Client\Model\ApplicationTypes
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \OpenAPI\Client\Model\ApplicationTypes|null $type type
     *
     * @return $this
     */
    public function setType(?\OpenAPI\Client\Model\ApplicationTypes $type): static
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
     * Gets cover_image
     *
     * @return string|null
     */
    public function getCoverImage(): ?string
    {
        return $this->container['cover_image'];
    }

    /**
     * Sets cover_image
     *
     * @param string|null $cover_image cover_image
     *
     * @return $this
     */
    public function setCoverImage(?string $cover_image): static
    {
        if (is_null($cover_image)) {
            array_push($this->openAPINullablesSetToNull, 'cover_image');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('cover_image', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['cover_image'] = $cover_image;

        return $this;
    }

    /**
     * Gets primary_sku_id
     *
     * @return \OpenAPI\Client\Model\UpdateSelfVoiceStateRequestChannelId|null
     */
    public function getPrimarySkuId(): ?\OpenAPI\Client\Model\UpdateSelfVoiceStateRequestChannelId
    {
        return $this->container['primary_sku_id'];
    }

    /**
     * Sets primary_sku_id
     *
     * @param \OpenAPI\Client\Model\UpdateSelfVoiceStateRequestChannelId|null $primary_sku_id primary_sku_id
     *
     * @return $this
     */
    public function setPrimarySkuId(?\OpenAPI\Client\Model\UpdateSelfVoiceStateRequestChannelId $primary_sku_id): static
    {
        if (is_null($primary_sku_id)) {
            array_push($this->openAPINullablesSetToNull, 'primary_sku_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('primary_sku_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['primary_sku_id'] = $primary_sku_id;

        return $this;
    }

    /**
     * Gets bot
     *
     * @return \OpenAPI\Client\Model\UserResponse|null
     */
    public function getBot(): ?\OpenAPI\Client\Model\UserResponse
    {
        return $this->container['bot'];
    }

    /**
     * Sets bot
     *
     * @param \OpenAPI\Client\Model\UserResponse|null $bot bot
     *
     * @return $this
     */
    public function setBot(?\OpenAPI\Client\Model\UserResponse $bot): static
    {
        if (is_null($bot)) {
            array_push($this->openAPINullablesSetToNull, 'bot');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('bot', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['bot'] = $bot;

        return $this;
    }

    /**
     * Gets slug
     *
     * @return string|null
     */
    public function getSlug(): ?string
    {
        return $this->container['slug'];
    }

    /**
     * Sets slug
     *
     * @param string|null $slug slug
     *
     * @return $this
     */
    public function setSlug(?string $slug): static
    {
        if (is_null($slug)) {
            array_push($this->openAPINullablesSetToNull, 'slug');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('slug', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['slug'] = $slug;

        return $this;
    }

    /**
     * Gets guild_id
     *
     * @return \OpenAPI\Client\Model\UpdateSelfVoiceStateRequestChannelId|null
     */
    public function getGuildId(): ?\OpenAPI\Client\Model\UpdateSelfVoiceStateRequestChannelId
    {
        return $this->container['guild_id'];
    }

    /**
     * Sets guild_id
     *
     * @param \OpenAPI\Client\Model\UpdateSelfVoiceStateRequestChannelId|null $guild_id guild_id
     *
     * @return $this
     */
    public function setGuildId(?\OpenAPI\Client\Model\UpdateSelfVoiceStateRequestChannelId $guild_id): static
    {
        if (is_null($guild_id)) {
            array_push($this->openAPINullablesSetToNull, 'guild_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('guild_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['guild_id'] = $guild_id;

        return $this;
    }

    /**
     * Gets rpc_origins
     *
     * @return string[]|null
     */
    public function getRpcOrigins(): ?array
    {
        return $this->container['rpc_origins'];
    }

    /**
     * Sets rpc_origins
     *
     * @param string[]|null $rpc_origins rpc_origins
     *
     * @return $this
     */
    public function setRpcOrigins(?array $rpc_origins): static
    {
        if (is_null($rpc_origins)) {
            throw new InvalidArgumentException('non-nullable rpc_origins cannot be null');
        }
        $this->container['rpc_origins'] = $rpc_origins;

        return $this;
    }

    /**
     * Gets bot_public
     *
     * @return bool|null
     */
    public function getBotPublic(): ?bool
    {
        return $this->container['bot_public'];
    }

    /**
     * Sets bot_public
     *
     * @param bool|null $bot_public bot_public
     *
     * @return $this
     */
    public function setBotPublic(?bool $bot_public): static
    {
        if (is_null($bot_public)) {
            array_push($this->openAPINullablesSetToNull, 'bot_public');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('bot_public', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['bot_public'] = $bot_public;

        return $this;
    }

    /**
     * Gets bot_require_code_grant
     *
     * @return bool|null
     */
    public function getBotRequireCodeGrant(): ?bool
    {
        return $this->container['bot_require_code_grant'];
    }

    /**
     * Sets bot_require_code_grant
     *
     * @param bool|null $bot_require_code_grant bot_require_code_grant
     *
     * @return $this
     */
    public function setBotRequireCodeGrant(?bool $bot_require_code_grant): static
    {
        if (is_null($bot_require_code_grant)) {
            array_push($this->openAPINullablesSetToNull, 'bot_require_code_grant');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('bot_require_code_grant', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['bot_require_code_grant'] = $bot_require_code_grant;

        return $this;
    }

    /**
     * Gets terms_of_service_url
     *
     * @return string|null
     */
    public function getTermsOfServiceUrl(): ?string
    {
        return $this->container['terms_of_service_url'];
    }

    /**
     * Sets terms_of_service_url
     *
     * @param string|null $terms_of_service_url terms_of_service_url
     *
     * @return $this
     */
    public function setTermsOfServiceUrl(?string $terms_of_service_url): static
    {
        if (is_null($terms_of_service_url)) {
            array_push($this->openAPINullablesSetToNull, 'terms_of_service_url');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('terms_of_service_url', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['terms_of_service_url'] = $terms_of_service_url;

        return $this;
    }

    /**
     * Gets privacy_policy_url
     *
     * @return string|null
     */
    public function getPrivacyPolicyUrl(): ?string
    {
        return $this->container['privacy_policy_url'];
    }

    /**
     * Sets privacy_policy_url
     *
     * @param string|null $privacy_policy_url privacy_policy_url
     *
     * @return $this
     */
    public function setPrivacyPolicyUrl(?string $privacy_policy_url): static
    {
        if (is_null($privacy_policy_url)) {
            array_push($this->openAPINullablesSetToNull, 'privacy_policy_url');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('privacy_policy_url', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['privacy_policy_url'] = $privacy_policy_url;

        return $this;
    }

    /**
     * Gets custom_install_url
     *
     * @return string|null
     */
    public function getCustomInstallUrl(): ?string
    {
        return $this->container['custom_install_url'];
    }

    /**
     * Sets custom_install_url
     *
     * @param string|null $custom_install_url custom_install_url
     *
     * @return $this
     */
    public function setCustomInstallUrl(?string $custom_install_url): static
    {
        if (is_null($custom_install_url)) {
            array_push($this->openAPINullablesSetToNull, 'custom_install_url');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('custom_install_url', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['custom_install_url'] = $custom_install_url;

        return $this;
    }

    /**
     * Gets install_params
     *
     * @return \OpenAPI\Client\Model\ApplicationOAuth2ParamsResponse|null
     */
    public function getInstallParams(): ?\OpenAPI\Client\Model\ApplicationOAuth2ParamsResponse
    {
        return $this->container['install_params'];
    }

    /**
     * Sets install_params
     *
     * @param \OpenAPI\Client\Model\ApplicationOAuth2ParamsResponse|null $install_params install_params
     *
     * @return $this
     */
    public function setInstallParams(?\OpenAPI\Client\Model\ApplicationOAuth2ParamsResponse $install_params): static
    {
        if (is_null($install_params)) {
            array_push($this->openAPINullablesSetToNull, 'install_params');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('install_params', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['install_params'] = $install_params;

        return $this;
    }

    /**
     * Gets verify_key
     *
     * @return string
     */
    public function getVerifyKey(): ?string
    {
        return $this->container['verify_key'];
    }

    /**
     * Sets verify_key
     *
     * @param string $verify_key verify_key
     *
     * @return $this
     */
    public function setVerifyKey(?string $verify_key): static
    {
        if (is_null($verify_key)) {
            array_push($this->openAPINullablesSetToNull, 'verify_key');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('verify_key', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['verify_key'] = $verify_key;

        return $this;
    }

    /**
     * Gets flags
     *
     * @return int
     */
    public function getFlags(): int
    {
        return $this->container['flags'];
    }

    /**
     * Sets flags
     *
     * @param int $flags flags
     *
     * @return $this
     */
    public function setFlags(int $flags): static
    {
        if (is_null($flags)) {
            throw new InvalidArgumentException('non-nullable flags cannot be null');
        }
        $this->container['flags'] = $flags;

        return $this;
    }

    /**
     * Gets max_participants
     *
     * @return int|null
     */
    public function getMaxParticipants(): ?int
    {
        return $this->container['max_participants'];
    }

    /**
     * Sets max_participants
     *
     * @param int|null $max_participants max_participants
     *
     * @return $this
     */
    public function setMaxParticipants(?int $max_participants): static
    {
        if (is_null($max_participants)) {
            array_push($this->openAPINullablesSetToNull, 'max_participants');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('max_participants', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['max_participants'] = $max_participants;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return string[]|null
     */
    public function getTags(): ?array
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param string[]|null $tags tags
     *
     * @return $this
     */
    public function setTags(?array $tags): static
    {
        if (is_null($tags)) {
            throw new InvalidArgumentException('non-nullable tags cannot be null');
        }
        $this->container['tags'] = $tags;

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


