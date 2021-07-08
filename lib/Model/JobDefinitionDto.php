<?php
/**
 * JobDefinitionDto
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
 * JobDefinitionDto Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class JobDefinitionDto implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'JobDefinitionDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'process_definition_id' => 'string',
        'process_definition_key' => 'string',
        'activity_id' => 'string',
        'job_type' => 'string',
        'job_configuration' => 'string',
        'overriding_job_priority' => 'int',
        'suspended' => 'bool',
        'tenant_id' => 'string',
        'deployment_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'process_definition_id' => null,
        'process_definition_key' => null,
        'activity_id' => null,
        'job_type' => null,
        'job_configuration' => null,
        'overriding_job_priority' => 'int64',
        'suspended' => null,
        'tenant_id' => null,
        'deployment_id' => null
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
        'id' => 'id',
        'process_definition_id' => 'processDefinitionId',
        'process_definition_key' => 'processDefinitionKey',
        'activity_id' => 'activityId',
        'job_type' => 'jobType',
        'job_configuration' => 'jobConfiguration',
        'overriding_job_priority' => 'overridingJobPriority',
        'suspended' => 'suspended',
        'tenant_id' => 'tenantId',
        'deployment_id' => 'deploymentId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'process_definition_id' => 'setProcessDefinitionId',
        'process_definition_key' => 'setProcessDefinitionKey',
        'activity_id' => 'setActivityId',
        'job_type' => 'setJobType',
        'job_configuration' => 'setJobConfiguration',
        'overriding_job_priority' => 'setOverridingJobPriority',
        'suspended' => 'setSuspended',
        'tenant_id' => 'setTenantId',
        'deployment_id' => 'setDeploymentId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'process_definition_id' => 'getProcessDefinitionId',
        'process_definition_key' => 'getProcessDefinitionKey',
        'activity_id' => 'getActivityId',
        'job_type' => 'getJobType',
        'job_configuration' => 'getJobConfiguration',
        'overriding_job_priority' => 'getOverridingJobPriority',
        'suspended' => 'getSuspended',
        'tenant_id' => 'getTenantId',
        'deployment_id' => 'getDeploymentId'
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['process_definition_id'] = $data['process_definition_id'] ?? null;
        $this->container['process_definition_key'] = $data['process_definition_key'] ?? null;
        $this->container['activity_id'] = $data['activity_id'] ?? null;
        $this->container['job_type'] = $data['job_type'] ?? null;
        $this->container['job_configuration'] = $data['job_configuration'] ?? null;
        $this->container['overriding_job_priority'] = $data['overriding_job_priority'] ?? null;
        $this->container['suspended'] = $data['suspended'] ?? null;
        $this->container['tenant_id'] = $data['tenant_id'] ?? null;
        $this->container['deployment_id'] = $data['deployment_id'] ?? null;
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
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id The id of the job definition.
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
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
     * @param string|null $process_definition_id The id of the process definition this job definition is associated with.
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
     * @param string|null $process_definition_key The key of the process definition this job definition is associated with.
     *
     * @return self
     */
    public function setProcessDefinitionKey($process_definition_key)
    {
        $this->container['process_definition_key'] = $process_definition_key;

        return $this;
    }

    /**
     * Gets activity_id
     *
     * @return string|null
     */
    public function getActivityId()
    {
        return $this->container['activity_id'];
    }

    /**
     * Sets activity_id
     *
     * @param string|null $activity_id The id of the activity this job definition is associated with.
     *
     * @return self
     */
    public function setActivityId($activity_id)
    {
        $this->container['activity_id'] = $activity_id;

        return $this;
    }

    /**
     * Gets job_type
     *
     * @return string|null
     */
    public function getJobType()
    {
        return $this->container['job_type'];
    }

    /**
     * Sets job_type
     *
     * @param string|null $job_type The type of the job which is running for this job definition. See the [User Guide](https://docs.camunda.org/manual/latest/user-guide/process-engine/the-job-executor/#job-creation) for more information about job types.
     *
     * @return self
     */
    public function setJobType($job_type)
    {
        $this->container['job_type'] = $job_type;

        return $this;
    }

    /**
     * Gets job_configuration
     *
     * @return string|null
     */
    public function getJobConfiguration()
    {
        return $this->container['job_configuration'];
    }

    /**
     * Sets job_configuration
     *
     * @param string|null $job_configuration The configuration of a job definition provides details about the jobs which will be created. For example: for timer jobs it is the timer configuration.
     *
     * @return self
     */
    public function setJobConfiguration($job_configuration)
    {
        $this->container['job_configuration'] = $job_configuration;

        return $this;
    }

    /**
     * Gets overriding_job_priority
     *
     * @return int|null
     */
    public function getOverridingJobPriority()
    {
        return $this->container['overriding_job_priority'];
    }

    /**
     * Sets overriding_job_priority
     *
     * @param int|null $overriding_job_priority The execution priority defined for jobs that are created based on this definition. May be `null` when the priority has not been overridden on the job definition level.
     *
     * @return self
     */
    public function setOverridingJobPriority($overriding_job_priority)
    {
        $this->container['overriding_job_priority'] = $overriding_job_priority;

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
     * @param bool|null $suspended Indicates whether this job definition is suspended or not.
     *
     * @return self
     */
    public function setSuspended($suspended)
    {
        $this->container['suspended'] = $suspended;

        return $this;
    }

    /**
     * Gets tenant_id
     *
     * @return string|null
     */
    public function getTenantId()
    {
        return $this->container['tenant_id'];
    }

    /**
     * Sets tenant_id
     *
     * @param string|null $tenant_id The id of the tenant this job definition is associated with.
     *
     * @return self
     */
    public function setTenantId($tenant_id)
    {
        $this->container['tenant_id'] = $tenant_id;

        return $this;
    }

    /**
     * Gets deployment_id
     *
     * @return string|null
     */
    public function getDeploymentId()
    {
        return $this->container['deployment_id'];
    }

    /**
     * Sets deployment_id
     *
     * @param string|null $deployment_id The id of the deployment this job definition is related to. In a deployment-aware setup, this leads to all jobs of the same definition being executed on the same node.
     *
     * @return self
     */
    public function setDeploymentId($deployment_id)
    {
        $this->container['deployment_id'] = $deployment_id;

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

