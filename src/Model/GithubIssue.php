<?php
/**
 * GithubIssue
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
 * GithubIssue Class Doc Comment
 *
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class GithubIssue implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'GithubIssue';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'id' => 'int',
        'number' => 'int',
        'html_url' => 'string',
        'user' => '\OpenAPI\Client\Model\GithubUser',
        'title' => 'string',
        'body' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'id' => null,
        'number' => null,
        'html_url' => 'uri',
        'user' => null,
        'title' => null,
        'body' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'id' => false,
		'number' => false,
		'html_url' => false,
		'user' => false,
		'title' => false,
		'body' => true
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
        'number' => 'number',
        'html_url' => 'html_url',
        'user' => 'user',
        'title' => 'title',
        'body' => 'body'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'id' => 'setId',
        'number' => 'setNumber',
        'html_url' => 'setHtmlUrl',
        'user' => 'setUser',
        'title' => 'setTitle',
        'body' => 'setBody'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'id' => 'getId',
        'number' => 'getNumber',
        'html_url' => 'getHtmlUrl',
        'user' => 'getUser',
        'title' => 'getTitle',
        'body' => 'getBody'
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
        $this->setIfExists('number', $data ?? [], null);
        $this->setIfExists('html_url', $data ?? [], null);
        $this->setIfExists('user', $data ?? [], null);
        $this->setIfExists('title', $data ?? [], null);
        $this->setIfExists('body', $data ?? [], null);
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
        if ($this->container['number'] === null) {
            $invalidProperties[] = "'number' can't be null";
        }
        if ($this->container['html_url'] === null) {
            $invalidProperties[] = "'html_url' can't be null";
        }
        if ((mb_strlen($this->container['html_url']) > 2048)) {
            $invalidProperties[] = "invalid value for 'html_url', the character length must be smaller than or equal to 2048.";
        }

        if ($this->container['user'] === null) {
            $invalidProperties[] = "'user' can't be null";
        }
        if ($this->container['title'] === null) {
            $invalidProperties[] = "'title' can't be null";
        }
        if ((mb_strlen($this->container['title']) > 152133)) {
            $invalidProperties[] = "invalid value for 'title', the character length must be smaller than or equal to 152133.";
        }

        if (!is_null($this->container['body']) && (mb_strlen($this->container['body']) > 152133)) {
            $invalidProperties[] = "invalid value for 'body', the character length must be smaller than or equal to 152133.";
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
     * @return int
     */
    public function getId(): int
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return $this
     */
    public function setId(int $id): static
    {
        if (is_null($id)) {
            throw new InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets number
     *
     * @return int
     */
    public function getNumber(): int
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param int $number number
     *
     * @return $this
     */
    public function setNumber(int $number): static
    {
        if (is_null($number)) {
            throw new InvalidArgumentException('non-nullable number cannot be null');
        }
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets html_url
     *
     * @return string
     */
    public function getHtmlUrl(): string
    {
        return $this->container['html_url'];
    }

    /**
     * Sets html_url
     *
     * @param string $html_url html_url
     *
     * @return $this
     */
    public function setHtmlUrl(string $html_url): static
    {
        if (is_null($html_url)) {
            throw new InvalidArgumentException('non-nullable html_url cannot be null');
        }
        if ((mb_strlen($html_url) > 2048)) {
            throw new InvalidArgumentException('invalid length for $html_url when calling GithubIssue., must be smaller than or equal to 2048.');
        }

        $this->container['html_url'] = $html_url;

        return $this;
    }

    /**
     * Gets user
     *
     * @return \OpenAPI\Client\Model\GithubUser
     */
    public function getUser(): \OpenAPI\Client\Model\GithubUser
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param \OpenAPI\Client\Model\GithubUser $user user
     *
     * @return $this
     */
    public function setUser(\OpenAPI\Client\Model\GithubUser $user): static
    {
        if (is_null($user)) {
            throw new InvalidArgumentException('non-nullable user cannot be null');
        }
        $this->container['user'] = $user;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle(): string
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title title
     *
     * @return $this
     */
    public function setTitle(string $title): static
    {
        if (is_null($title)) {
            throw new InvalidArgumentException('non-nullable title cannot be null');
        }
        if ((mb_strlen($title) > 152133)) {
            throw new InvalidArgumentException('invalid length for $title when calling GithubIssue., must be smaller than or equal to 152133.');
        }

        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets body
     *
     * @return string|null
     */
    public function getBody(): ?string
    {
        return $this->container['body'];
    }

    /**
     * Sets body
     *
     * @param string|null $body body
     *
     * @return $this
     */
    public function setBody(?string $body): static
    {
        if (is_null($body)) {
            array_push($this->openAPINullablesSetToNull, 'body');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('body', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($body) && (mb_strlen($body) > 152133)) {
            throw new InvalidArgumentException('invalid length for $body when calling GithubIssue., must be smaller than or equal to 152133.');
        }

        $this->container['body'] = $body;

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


