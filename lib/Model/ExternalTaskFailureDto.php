<?php
/**
 * ExternalTaskFailureDto
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Camunda Platform REST API
 *
 * OpenApi Spec for Camunda Platform REST API.
 *
 * The version of the OpenAPI document: 7.16.0-alpha2
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * ExternalTaskFailureDto Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ExternalTaskFailureDto implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ExternalTaskFailureDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'error_message' => 'string',
        'error_details' => 'string',
        'retries' => 'int',
        'retry_timeout' => 'int',
        'variables' => 'array<string,\OpenAPI\Client\Model\VariableValueDto>',
        'local_variables' => 'array<string,\OpenAPI\Client\Model\VariableValueDto>',
        'worker_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'error_message' => null,
        'error_details' => null,
        'retries' => 'int32',
        'retry_timeout' => 'int64',
        'variables' => null,
        'local_variables' => null,
        'worker_id' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'error_message' => 'errorMessage',
        'error_details' => 'errorDetails',
        'retries' => 'retries',
        'retry_timeout' => 'retryTimeout',
        'variables' => 'variables',
        'local_variables' => 'localVariables',
        'worker_id' => 'workerId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'error_message' => 'setErrorMessage',
        'error_details' => 'setErrorDetails',
        'retries' => 'setRetries',
        'retry_timeout' => 'setRetryTimeout',
        'variables' => 'setVariables',
        'local_variables' => 'setLocalVariables',
        'worker_id' => 'setWorkerId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'error_message' => 'getErrorMessage',
        'error_details' => 'getErrorDetails',
        'retries' => 'getRetries',
        'retry_timeout' => 'getRetryTimeout',
        'variables' => 'getVariables',
        'local_variables' => 'getLocalVariables',
        'worker_id' => 'getWorkerId'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['error_message'] = $data['error_message'] ?? null;
        $this->container['error_details'] = $data['error_details'] ?? null;
        $this->container['retries'] = $data['retries'] ?? null;
        $this->container['retry_timeout'] = $data['retry_timeout'] ?? null;
        $this->container['variables'] = $data['variables'] ?? null;
        $this->container['local_variables'] = $data['local_variables'] ?? null;
        $this->container['worker_id'] = $data['worker_id'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets error_message
     *
     * @return string|null
     */
    public function getErrorMessage()
    {
        return $this->container['error_message'];
    }

    /**
     * Sets error_message
     *
     * @param string|null $error_message An message indicating the reason of the failure.
     *
     * @return self
     */
    public function setErrorMessage($error_message)
    {
        $this->container['error_message'] = $error_message;

        return $this;
    }

    /**
     * Gets error_details
     *
     * @return string|null
     */
    public function getErrorDetails()
    {
        return $this->container['error_details'];
    }

    /**
     * Sets error_details
     *
     * @param string|null $error_details A detailed error description.
     *
     * @return self
     */
    public function setErrorDetails($error_details)
    {
        $this->container['error_details'] = $error_details;

        return $this;
    }

    /**
     * Gets retries
     *
     * @return int|null
     */
    public function getRetries()
    {
        return $this->container['retries'];
    }

    /**
     * Sets retries
     *
     * @param int|null $retries A number of how often the task should be retried. Must be >= 0. If this is 0, an incident is created and the task cannot be fetched anymore unless the retries are increased again. The incident's message is set to the `errorMessage` parameter.
     *
     * @return self
     */
    public function setRetries($retries)
    {
        $this->container['retries'] = $retries;

        return $this;
    }

    /**
     * Gets retry_timeout
     *
     * @return int|null
     */
    public function getRetryTimeout()
    {
        return $this->container['retry_timeout'];
    }

    /**
     * Sets retry_timeout
     *
     * @param int|null $retry_timeout A timeout in milliseconds before the external task becomes available again for fetching. Must be >= 0.
     *
     * @return self
     */
    public function setRetryTimeout($retry_timeout)
    {
        $this->container['retry_timeout'] = $retry_timeout;

        return $this;
    }

    /**
     * Gets variables
     *
     * @return array<string,\OpenAPI\Client\Model\VariableValueDto>|null
     */
    public function getVariables()
    {
        return $this->container['variables'];
    }

    /**
     * Sets variables
     *
     * @param array<string,\OpenAPI\Client\Model\VariableValueDto>|null $variables A JSON object containing variable key-value pairs. Each key is a variable name and each value a JSON variable value object with the following properties:
     *
     * @return self
     */
    public function setVariables($variables)
    {
        $this->container['variables'] = $variables;

        return $this;
    }

    /**
     * Gets local_variables
     *
     * @return array<string,\OpenAPI\Client\Model\VariableValueDto>|null
     */
    public function getLocalVariables()
    {
        return $this->container['local_variables'];
    }

    /**
     * Sets local_variables
     *
     * @param array<string,\OpenAPI\Client\Model\VariableValueDto>|null $local_variables A JSON object containing local variable key-value pairs. Local variables are set only in the scope of external task. Each key is a variable name and each value a JSON variable value object with the following properties:
     *
     * @return self
     */
    public function setLocalVariables($local_variables)
    {
        $this->container['local_variables'] = $local_variables;

        return $this;
    }

    /**
     * Gets worker_id
     *
     * @return string|null
     */
    public function getWorkerId()
    {
        return $this->container['worker_id'];
    }

    /**
     * Sets worker_id
     *
     * @param string|null $worker_id **Mandatory.** The ID of the worker who is performing the operation on the external task. If the task is already locked, must match the id of the worker who has most recently locked the task.
     *
     * @return self
     */
    public function setWorkerId($worker_id)
    {
        $this->container['worker_id'] = $worker_id;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
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
    public function offsetGet($offset)
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
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
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
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
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
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


