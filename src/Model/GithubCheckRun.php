<?php
/**
 * GithubCheckRun
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
 * GithubCheckRun Class Doc Comment
 *
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class GithubCheckRun implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'GithubCheckRun';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'conclusion' => 'string',
        'name' => 'string',
        'html_url' => 'string',
        'check_suite' => '\OpenAPI\Client\Model\GithubCheckSuite',
        'details_url' => 'string',
        'output' => '\OpenAPI\Client\Model\GithubCheckRunOutput',
        'pull_requests' => '\OpenAPI\Client\Model\GithubCheckPullRequest[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'conclusion' => null,
        'name' => null,
        'html_url' => 'uri',
        'check_suite' => null,
        'details_url' => 'uri',
        'output' => null,
        'pull_requests' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'conclusion' => true,
		'name' => false,
		'html_url' => false,
		'check_suite' => false,
		'details_url' => true,
		'output' => true,
		'pull_requests' => false
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
        'conclusion' => 'conclusion',
        'name' => 'name',
        'html_url' => 'html_url',
        'check_suite' => 'check_suite',
        'details_url' => 'details_url',
        'output' => 'output',
        'pull_requests' => 'pull_requests'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'conclusion' => 'setConclusion',
        'name' => 'setName',
        'html_url' => 'setHtmlUrl',
        'check_suite' => 'setCheckSuite',
        'details_url' => 'setDetailsUrl',
        'output' => 'setOutput',
        'pull_requests' => 'setPullRequests'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'conclusion' => 'getConclusion',
        'name' => 'getName',
        'html_url' => 'getHtmlUrl',
        'check_suite' => 'getCheckSuite',
        'details_url' => 'getDetailsUrl',
        'output' => 'getOutput',
        'pull_requests' => 'getPullRequests'
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
        $this->setIfExists('conclusion', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('html_url', $data ?? [], null);
        $this->setIfExists('check_suite', $data ?? [], null);
        $this->setIfExists('details_url', $data ?? [], null);
        $this->setIfExists('output', $data ?? [], null);
        $this->setIfExists('pull_requests', $data ?? [], null);
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

        if (!is_null($this->container['conclusion']) && (mb_strlen($this->container['conclusion']) > 152133)) {
            $invalidProperties[] = "invalid value for 'conclusion', the character length must be smaller than or equal to 152133.";
        }

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) > 152133)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 152133.";
        }

        if ($this->container['html_url'] === null) {
            $invalidProperties[] = "'html_url' can't be null";
        }
        if ((mb_strlen($this->container['html_url']) > 2048)) {
            $invalidProperties[] = "invalid value for 'html_url', the character length must be smaller than or equal to 2048.";
        }

        if ($this->container['check_suite'] === null) {
            $invalidProperties[] = "'check_suite' can't be null";
        }
        if (!is_null($this->container['details_url']) && (mb_strlen($this->container['details_url']) > 2048)) {
            $invalidProperties[] = "invalid value for 'details_url', the character length must be smaller than or equal to 2048.";
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
     * Gets conclusion
     *
     * @return string|null
     */
    public function getConclusion(): ?string
    {
        return $this->container['conclusion'];
    }

    /**
     * Sets conclusion
     *
     * @param string|null $conclusion conclusion
     *
     * @return $this
     */
    public function setConclusion(?string $conclusion): static
    {
        if (is_null($conclusion)) {
            array_push($this->openAPINullablesSetToNull, 'conclusion');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('conclusion', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($conclusion) && (mb_strlen($conclusion) > 152133)) {
            throw new InvalidArgumentException('invalid length for $conclusion when calling GithubCheckRun., must be smaller than or equal to 152133.');
        }

        $this->container['conclusion'] = $conclusion;

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
        if ((mb_strlen($name) > 152133)) {
            throw new InvalidArgumentException('invalid length for $name when calling GithubCheckRun., must be smaller than or equal to 152133.');
        }

        $this->container['name'] = $name;

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
            throw new InvalidArgumentException('invalid length for $html_url when calling GithubCheckRun., must be smaller than or equal to 2048.');
        }

        $this->container['html_url'] = $html_url;

        return $this;
    }

    /**
     * Gets check_suite
     *
     * @return \OpenAPI\Client\Model\GithubCheckSuite
     */
    public function getCheckSuite(): \OpenAPI\Client\Model\GithubCheckSuite
    {
        return $this->container['check_suite'];
    }

    /**
     * Sets check_suite
     *
     * @param \OpenAPI\Client\Model\GithubCheckSuite $check_suite check_suite
     *
     * @return $this
     */
    public function setCheckSuite(\OpenAPI\Client\Model\GithubCheckSuite $check_suite): static
    {
        if (is_null($check_suite)) {
            throw new InvalidArgumentException('non-nullable check_suite cannot be null');
        }
        $this->container['check_suite'] = $check_suite;

        return $this;
    }

    /**
     * Gets details_url
     *
     * @return string|null
     */
    public function getDetailsUrl(): ?string
    {
        return $this->container['details_url'];
    }

    /**
     * Sets details_url
     *
     * @param string|null $details_url details_url
     *
     * @return $this
     */
    public function setDetailsUrl(?string $details_url): static
    {
        if (is_null($details_url)) {
            array_push($this->openAPINullablesSetToNull, 'details_url');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('details_url', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($details_url) && (mb_strlen($details_url) > 2048)) {
            throw new InvalidArgumentException('invalid length for $details_url when calling GithubCheckRun., must be smaller than or equal to 2048.');
        }

        $this->container['details_url'] = $details_url;

        return $this;
    }

    /**
     * Gets output
     *
     * @return \OpenAPI\Client\Model\GithubCheckRunOutput|null
     */
    public function getOutput(): ?\OpenAPI\Client\Model\GithubCheckRunOutput
    {
        return $this->container['output'];
    }

    /**
     * Sets output
     *
     * @param \OpenAPI\Client\Model\GithubCheckRunOutput|null $output output
     *
     * @return $this
     */
    public function setOutput(?\OpenAPI\Client\Model\GithubCheckRunOutput $output): static
    {
        if (is_null($output)) {
            array_push($this->openAPINullablesSetToNull, 'output');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('output', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['output'] = $output;

        return $this;
    }

    /**
     * Gets pull_requests
     *
     * @return \OpenAPI\Client\Model\GithubCheckPullRequest[]|null
     */
    public function getPullRequests(): ?array
    {
        return $this->container['pull_requests'];
    }

    /**
     * Sets pull_requests
     *
     * @param \OpenAPI\Client\Model\GithubCheckPullRequest[]|null $pull_requests pull_requests
     *
     * @return $this
     */
    public function setPullRequests(?array $pull_requests): static
    {
        if (is_null($pull_requests)) {
            throw new InvalidArgumentException('non-nullable pull_requests cannot be null');
        }
        $this->container['pull_requests'] = $pull_requests;

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


