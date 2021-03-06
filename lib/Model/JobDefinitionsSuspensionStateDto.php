<?php
/**
 * JobDefinitionsSuspensionStateDto
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
 * JobDefinitionsSuspensionStateDto Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class JobDefinitionsSuspensionStateDto implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'JobDefinitionsSuspensionStateDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'process_definition_id' => 'string',
        'process_definition_key' => 'string',
        'process_definition_tenant_id' => 'string',
        'process_definition_without_tenant_id' => 'string',
        'include_jobs' => 'bool',
        'execution_date' => 'string',
        'suspended' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'process_definition_id' => null,
        'process_definition_key' => null,
        'process_definition_tenant_id' => null,
        'process_definition_without_tenant_id' => null,
        'include_jobs' => null,
        'execution_date' => null,
        'suspended' => null
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
        'process_definition_id' => 'processDefinitionId',
        'process_definition_key' => 'processDefinitionKey',
        'process_definition_tenant_id' => 'processDefinitionTenantId',
        'process_definition_without_tenant_id' => 'processDefinitionWithoutTenantId',
        'include_jobs' => 'includeJobs',
        'execution_date' => 'executionDate',
        'suspended' => 'suspended'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'process_definition_id' => 'setProcessDefinitionId',
        'process_definition_key' => 'setProcessDefinitionKey',
        'process_definition_tenant_id' => 'setProcessDefinitionTenantId',
        'process_definition_without_tenant_id' => 'setProcessDefinitionWithoutTenantId',
        'include_jobs' => 'setIncludeJobs',
        'execution_date' => 'setExecutionDate',
        'suspended' => 'setSuspended'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'process_definition_id' => 'getProcessDefinitionId',
        'process_definition_key' => 'getProcessDefinitionKey',
        'process_definition_tenant_id' => 'getProcessDefinitionTenantId',
        'process_definition_without_tenant_id' => 'getProcessDefinitionWithoutTenantId',
        'include_jobs' => 'getIncludeJobs',
        'execution_date' => 'getExecutionDate',
        'suspended' => 'getSuspended'
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
        $this->container['process_definition_id'] = $data['process_definition_id'] ?? null;
        $this->container['process_definition_key'] = $data['process_definition_key'] ?? null;
        $this->container['process_definition_tenant_id'] = $data['process_definition_tenant_id'] ?? null;
        $this->container['process_definition_without_tenant_id'] = $data['process_definition_without_tenant_id'] ?? null;
        $this->container['include_jobs'] = $data['include_jobs'] ?? null;
        $this->container['execution_date'] = $data['execution_date'] ?? null;
        $this->container['suspended'] = $data['suspended'] ?? null;
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
     * Gets process_definition_id
     *
     * @return string|null
     */
    public function getProcessDefinitionId()
    {
        return $this->container['process_definition_id'];
    }

    /**
     * Sets process_definition_id
     *
     * @param string|null $process_definition_id The process definition id of the job definitions to activate or suspend.
     *
     * @return self
     */
    public function setProcessDefinitionId($process_definition_id)
    {
        $this->container['process_definition_id'] = $process_definition_id;

        return $this;
    }

    /**
     * Gets process_definition_key
     *
     * @return string|null
     */
    public function getProcessDefinitionKey()
    {
        return $this->container['process_definition_key'];
    }

    /**
     * Sets process_definition_key
     *
     * @param string|null $process_definition_key The process definition key of the job definitions to activate or suspend.
     *
     * @return self
     */
    public function setProcessDefinitionKey($process_definition_key)
    {
        $this->container['process_definition_key'] = $process_definition_key;

        return $this;
    }

    /**
     * Gets process_definition_tenant_id
     *
     * @return string|null
     */
    public function getProcessDefinitionTenantId()
    {
        return $this->container['process_definition_tenant_id'];
    }

    /**
     * Sets process_definition_tenant_id
     *
     * @param string|null $process_definition_tenant_id Only activate or suspend job definitions of a process definition which belongs to a tenant with the given id.  Note that this parameter will only be considered  in combination with `processDefinitionKey`.
     *
     * @return self
     */
    public function setProcessDefinitionTenantId($process_definition_tenant_id)
    {
        $this->container['process_definition_tenant_id'] = $process_definition_tenant_id;

        return $this;
    }

    /**
     * Gets process_definition_without_tenant_id
     *
     * @return string|null
     */
    public function getProcessDefinitionWithoutTenantId()
    {
        return $this->container['process_definition_without_tenant_id'];
    }

    /**
     * Sets process_definition_without_tenant_id
     *
     * @param string|null $process_definition_without_tenant_id Only activate or suspend job definitions of a process definition which belongs to no tenant. Value may only be `true`, as `false` is the default behavior.  Note that this parameter will only be considered  in combination with `processDefinitionKey`.
     *
     * @return self
     */
    public function setProcessDefinitionWithoutTenantId($process_definition_without_tenant_id)
    {
        $this->container['process_definition_without_tenant_id'] = $process_definition_without_tenant_id;

        return $this;
    }

    /**
     * Gets include_jobs
     *
     * @return bool|null
     */
    public function getIncludeJobs()
    {
        return $this->container['include_jobs'];
    }

    /**
     * Sets include_jobs
     *
     * @param bool|null $include_jobs A `Boolean` value which indicates whether to activate or suspend also all jobs of the referenced job definitions. When the value is set to `true`, all jobs of the provided job definitions will be activated or suspended and when the value is set to `false`, the suspension state of all jobs of the provided job definitions will not be updated.
     *
     * @return self
     */
    public function setIncludeJobs($include_jobs)
    {
        $this->container['include_jobs'] = $include_jobs;

        return $this;
    }

    /**
     * Gets execution_date
     *
     * @return string|null
     */
    public function getExecutionDate()
    {
        return $this->container['execution_date'];
    }

    /**
     * Sets execution_date
     *
     * @param string|null $execution_date The date on which the referenced job definitions will be activated or suspended. If null, the suspension state of the given job definitions is updated immediately. By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the date must have the format `yyyy-MM- dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.000+0200`.
     *
     * @return self
     */
    public function setExecutionDate($execution_date)
    {
        $this->container['execution_date'] = $execution_date;

        return $this;
    }

    /**
     * Gets suspended
     *
     * @return bool|null
     */
    public function getSuspended()
    {
        return $this->container['suspended'];
    }

    /**
     * Sets suspended
     *
     * @param bool|null $suspended A Boolean value which indicates whether to activate or suspend a given instance  (e.g. process instance, job, job definition, or batch). When the value is set to true,  the given instance will be suspended and when the value is set to false,  the given instance will be activated.
     *
     * @return self
     */
    public function setSuspended($suspended)
    {
        $this->container['suspended'] = $suspended;

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


