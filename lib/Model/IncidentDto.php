<?php
/**
 * IncidentDto
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
 * The version of the OpenAPI document: 7.15.0
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
 * IncidentDto Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class IncidentDto implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'IncidentDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'process_definition_id' => 'string',
        'process_instance_id' => 'string',
        'execution_id' => 'string',
        'incident_timestamp' => '\DateTime',
        'incident_type' => 'string',
        'activity_id' => 'string',
        'failed_activity_id' => 'string',
        'cause_incident_id' => 'string',
        'root_cause_incident_id' => 'string',
        'configuration' => 'string',
        'tenant_id' => 'string',
        'incident_message' => 'string',
        'job_definition_id' => 'string',
        'annotation' => 'string'
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
        'process_instance_id' => null,
        'execution_id' => null,
        'incident_timestamp' => 'date-time',
        'incident_type' => null,
        'activity_id' => null,
        'failed_activity_id' => null,
        'cause_incident_id' => null,
        'root_cause_incident_id' => null,
        'configuration' => null,
        'tenant_id' => null,
        'incident_message' => null,
        'job_definition_id' => null,
        'annotation' => null
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
        'process_instance_id' => 'processInstanceId',
        'execution_id' => 'executionId',
        'incident_timestamp' => 'incidentTimestamp',
        'incident_type' => 'incidentType',
        'activity_id' => 'activityId',
        'failed_activity_id' => 'failedActivityId',
        'cause_incident_id' => 'causeIncidentId',
        'root_cause_incident_id' => 'rootCauseIncidentId',
        'configuration' => 'configuration',
        'tenant_id' => 'tenantId',
        'incident_message' => 'incidentMessage',
        'job_definition_id' => 'jobDefinitionId',
        'annotation' => 'annotation'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'process_definition_id' => 'setProcessDefinitionId',
        'process_instance_id' => 'setProcessInstanceId',
        'execution_id' => 'setExecutionId',
        'incident_timestamp' => 'setIncidentTimestamp',
        'incident_type' => 'setIncidentType',
        'activity_id' => 'setActivityId',
        'failed_activity_id' => 'setFailedActivityId',
        'cause_incident_id' => 'setCauseIncidentId',
        'root_cause_incident_id' => 'setRootCauseIncidentId',
        'configuration' => 'setConfiguration',
        'tenant_id' => 'setTenantId',
        'incident_message' => 'setIncidentMessage',
        'job_definition_id' => 'setJobDefinitionId',
        'annotation' => 'setAnnotation'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'process_definition_id' => 'getProcessDefinitionId',
        'process_instance_id' => 'getProcessInstanceId',
        'execution_id' => 'getExecutionId',
        'incident_timestamp' => 'getIncidentTimestamp',
        'incident_type' => 'getIncidentType',
        'activity_id' => 'getActivityId',
        'failed_activity_id' => 'getFailedActivityId',
        'cause_incident_id' => 'getCauseIncidentId',
        'root_cause_incident_id' => 'getRootCauseIncidentId',
        'configuration' => 'getConfiguration',
        'tenant_id' => 'getTenantId',
        'incident_message' => 'getIncidentMessage',
        'job_definition_id' => 'getJobDefinitionId',
        'annotation' => 'getAnnotation'
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
        $this->container['process_instance_id'] = $data['process_instance_id'] ?? null;
        $this->container['execution_id'] = $data['execution_id'] ?? null;
        $this->container['incident_timestamp'] = $data['incident_timestamp'] ?? null;
        $this->container['incident_type'] = $data['incident_type'] ?? null;
        $this->container['activity_id'] = $data['activity_id'] ?? null;
        $this->container['failed_activity_id'] = $data['failed_activity_id'] ?? null;
        $this->container['cause_incident_id'] = $data['cause_incident_id'] ?? null;
        $this->container['root_cause_incident_id'] = $data['root_cause_incident_id'] ?? null;
        $this->container['configuration'] = $data['configuration'] ?? null;
        $this->container['tenant_id'] = $data['tenant_id'] ?? null;
        $this->container['incident_message'] = $data['incident_message'] ?? null;
        $this->container['job_definition_id'] = $data['job_definition_id'] ?? null;
        $this->container['annotation'] = $data['annotation'] ?? null;
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
     * @param string|null $id The id of the incident.
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
     * @param string|null $process_definition_id The id of the process definition this incident is associated with.
     *
     * @return self
     */
    public function setProcessDefinitionId($process_definition_id)
    {
        $this->container['process_definition_id'] = $process_definition_id;

        return $this;
    }

    /**
     * Gets process_instance_id
     *
     * @return string|null
     */
    public function getProcessInstanceId()
    {
        return $this->container['process_instance_id'];
    }

    /**
     * Sets process_instance_id
     *
     * @param string|null $process_instance_id The id of the process instance this incident is associated with.
     *
     * @return self
     */
    public function setProcessInstanceId($process_instance_id)
    {
        $this->container['process_instance_id'] = $process_instance_id;

        return $this;
    }

    /**
     * Gets execution_id
     *
     * @return string|null
     */
    public function getExecutionId()
    {
        return $this->container['execution_id'];
    }

    /**
     * Sets execution_id
     *
     * @param string|null $execution_id The id of the execution this incident is associated with.
     *
     * @return self
     */
    public function setExecutionId($execution_id)
    {
        $this->container['execution_id'] = $execution_id;

        return $this;
    }

    /**
     * Gets incident_timestamp
     *
     * @return \DateTime|null
     */
    public function getIncidentTimestamp()
    {
        return $this->container['incident_timestamp'];
    }

    /**
     * Sets incident_timestamp
     *
     * @param \DateTime|null $incident_timestamp The time this incident happened. By [default](https://docs.camunda.org/manual/7.15/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.000+0200`.
     *
     * @return self
     */
    public function setIncidentTimestamp($incident_timestamp)
    {
        $this->container['incident_timestamp'] = $incident_timestamp;

        return $this;
    }

    /**
     * Gets incident_type
     *
     * @return string|null
     */
    public function getIncidentType()
    {
        return $this->container['incident_type'];
    }

    /**
     * Sets incident_type
     *
     * @param string|null $incident_type The type of incident, for example: `failedJobs` will be returned in case of an incident which identified a failed job during the execution of a process instance. See the [User Guide](https://docs.camunda.org/manual/7.15/user-guide/process-engine/incidents/#incident-types) for a list of incident types.
     *
     * @return self
     */
    public function setIncidentType($incident_type)
    {
        $this->container['incident_type'] = $incident_type;

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
     * @param string|null $activity_id The id of the activity this incident is associated with.
     *
     * @return self
     */
    public function setActivityId($activity_id)
    {
        $this->container['activity_id'] = $activity_id;

        return $this;
    }

    /**
     * Gets failed_activity_id
     *
     * @return string|null
     */
    public function getFailedActivityId()
    {
        return $this->container['failed_activity_id'];
    }

    /**
     * Sets failed_activity_id
     *
     * @param string|null $failed_activity_id The id of the activity on which the last exception occurred.
     *
     * @return self
     */
    public function setFailedActivityId($failed_activity_id)
    {
        $this->container['failed_activity_id'] = $failed_activity_id;

        return $this;
    }

    /**
     * Gets cause_incident_id
     *
     * @return string|null
     */
    public function getCauseIncidentId()
    {
        return $this->container['cause_incident_id'];
    }

    /**
     * Sets cause_incident_id
     *
     * @param string|null $cause_incident_id The id of the associated cause incident which has been triggered.
     *
     * @return self
     */
    public function setCauseIncidentId($cause_incident_id)
    {
        $this->container['cause_incident_id'] = $cause_incident_id;

        return $this;
    }

    /**
     * Gets root_cause_incident_id
     *
     * @return string|null
     */
    public function getRootCauseIncidentId()
    {
        return $this->container['root_cause_incident_id'];
    }

    /**
     * Sets root_cause_incident_id
     *
     * @param string|null $root_cause_incident_id The id of the associated root cause incident which has been triggered.
     *
     * @return self
     */
    public function setRootCauseIncidentId($root_cause_incident_id)
    {
        $this->container['root_cause_incident_id'] = $root_cause_incident_id;

        return $this;
    }

    /**
     * Gets configuration
     *
     * @return string|null
     */
    public function getConfiguration()
    {
        return $this->container['configuration'];
    }

    /**
     * Sets configuration
     *
     * @param string|null $configuration The payload of this incident.
     *
     * @return self
     */
    public function setConfiguration($configuration)
    {
        $this->container['configuration'] = $configuration;

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
     * @param string|null $tenant_id The id of the tenant this incident is associated with.
     *
     * @return self
     */
    public function setTenantId($tenant_id)
    {
        $this->container['tenant_id'] = $tenant_id;

        return $this;
    }

    /**
     * Gets incident_message
     *
     * @return string|null
     */
    public function getIncidentMessage()
    {
        return $this->container['incident_message'];
    }

    /**
     * Sets incident_message
     *
     * @param string|null $incident_message The message of this incident.
     *
     * @return self
     */
    public function setIncidentMessage($incident_message)
    {
        $this->container['incident_message'] = $incident_message;

        return $this;
    }

    /**
     * Gets job_definition_id
     *
     * @return string|null
     */
    public function getJobDefinitionId()
    {
        return $this->container['job_definition_id'];
    }

    /**
     * Sets job_definition_id
     *
     * @param string|null $job_definition_id The job definition id the incident is associated with.
     *
     * @return self
     */
    public function setJobDefinitionId($job_definition_id)
    {
        $this->container['job_definition_id'] = $job_definition_id;

        return $this;
    }

    /**
     * Gets annotation
     *
     * @return string|null
     */
    public function getAnnotation()
    {
        return $this->container['annotation'];
    }

    /**
     * Sets annotation
     *
     * @param string|null $annotation The annotation set to the incident.
     *
     * @return self
     */
    public function setAnnotation($annotation)
    {
        $this->container['annotation'] = $annotation;

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

