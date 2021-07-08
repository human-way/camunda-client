<?php
/**
 * HistoricExternalTaskLogQueryDto
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
 * HistoricExternalTaskLogQueryDto Class Doc Comment
 *
 * @category Class
 * @description A Historic External Task Log instance query which defines a list of Historic External Task Log instances
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class HistoricExternalTaskLogQueryDto implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'HistoricExternalTaskLogQueryDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'log_id' => 'string',
        'external_task_id' => 'string',
        'topic_name' => 'string',
        'worker_id' => 'string',
        'error_message' => 'string',
        'activity_id_in' => 'string[]',
        'activity_instance_id_in' => 'string[]',
        'execution_id_in' => 'string[]',
        'process_instance_id' => 'string',
        'process_definition_id' => 'string',
        'process_definition_key' => 'string',
        'tenant_id_in' => 'string[]',
        'without_tenant_id' => 'bool',
        'priority_lower_than_or_equals' => 'int',
        'priority_higher_than_or_equals' => 'int',
        'creation_log' => 'bool',
        'failure_log' => 'bool',
        'success_log' => 'bool',
        'deletion_log' => 'bool',
        'sorting' => '\OpenAPI\Client\Model\HistoricExternalTaskLogQueryDtoSorting[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'log_id' => null,
        'external_task_id' => null,
        'topic_name' => null,
        'worker_id' => null,
        'error_message' => null,
        'activity_id_in' => null,
        'activity_instance_id_in' => null,
        'execution_id_in' => null,
        'process_instance_id' => null,
        'process_definition_id' => null,
        'process_definition_key' => null,
        'tenant_id_in' => null,
        'without_tenant_id' => null,
        'priority_lower_than_or_equals' => 'int64',
        'priority_higher_than_or_equals' => 'int64',
        'creation_log' => null,
        'failure_log' => null,
        'success_log' => null,
        'deletion_log' => null,
        'sorting' => null
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
        'log_id' => 'logId',
        'external_task_id' => 'externalTaskId',
        'topic_name' => 'topicName',
        'worker_id' => 'workerId',
        'error_message' => 'errorMessage',
        'activity_id_in' => 'activityIdIn',
        'activity_instance_id_in' => 'activityInstanceIdIn',
        'execution_id_in' => 'executionIdIn',
        'process_instance_id' => 'processInstanceId',
        'process_definition_id' => 'processDefinitionId',
        'process_definition_key' => 'processDefinitionKey',
        'tenant_id_in' => 'tenantIdIn',
        'without_tenant_id' => 'withoutTenantId',
        'priority_lower_than_or_equals' => 'priorityLowerThanOrEquals',
        'priority_higher_than_or_equals' => 'priorityHigherThanOrEquals',
        'creation_log' => 'creationLog',
        'failure_log' => 'failureLog',
        'success_log' => 'successLog',
        'deletion_log' => 'deletionLog',
        'sorting' => 'sorting'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'log_id' => 'setLogId',
        'external_task_id' => 'setExternalTaskId',
        'topic_name' => 'setTopicName',
        'worker_id' => 'setWorkerId',
        'error_message' => 'setErrorMessage',
        'activity_id_in' => 'setActivityIdIn',
        'activity_instance_id_in' => 'setActivityInstanceIdIn',
        'execution_id_in' => 'setExecutionIdIn',
        'process_instance_id' => 'setProcessInstanceId',
        'process_definition_id' => 'setProcessDefinitionId',
        'process_definition_key' => 'setProcessDefinitionKey',
        'tenant_id_in' => 'setTenantIdIn',
        'without_tenant_id' => 'setWithoutTenantId',
        'priority_lower_than_or_equals' => 'setPriorityLowerThanOrEquals',
        'priority_higher_than_or_equals' => 'setPriorityHigherThanOrEquals',
        'creation_log' => 'setCreationLog',
        'failure_log' => 'setFailureLog',
        'success_log' => 'setSuccessLog',
        'deletion_log' => 'setDeletionLog',
        'sorting' => 'setSorting'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'log_id' => 'getLogId',
        'external_task_id' => 'getExternalTaskId',
        'topic_name' => 'getTopicName',
        'worker_id' => 'getWorkerId',
        'error_message' => 'getErrorMessage',
        'activity_id_in' => 'getActivityIdIn',
        'activity_instance_id_in' => 'getActivityInstanceIdIn',
        'execution_id_in' => 'getExecutionIdIn',
        'process_instance_id' => 'getProcessInstanceId',
        'process_definition_id' => 'getProcessDefinitionId',
        'process_definition_key' => 'getProcessDefinitionKey',
        'tenant_id_in' => 'getTenantIdIn',
        'without_tenant_id' => 'getWithoutTenantId',
        'priority_lower_than_or_equals' => 'getPriorityLowerThanOrEquals',
        'priority_higher_than_or_equals' => 'getPriorityHigherThanOrEquals',
        'creation_log' => 'getCreationLog',
        'failure_log' => 'getFailureLog',
        'success_log' => 'getSuccessLog',
        'deletion_log' => 'getDeletionLog',
        'sorting' => 'getSorting'
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
        $this->container['log_id'] = $data['log_id'] ?? null;
        $this->container['external_task_id'] = $data['external_task_id'] ?? null;
        $this->container['topic_name'] = $data['topic_name'] ?? null;
        $this->container['worker_id'] = $data['worker_id'] ?? null;
        $this->container['error_message'] = $data['error_message'] ?? null;
        $this->container['activity_id_in'] = $data['activity_id_in'] ?? null;
        $this->container['activity_instance_id_in'] = $data['activity_instance_id_in'] ?? null;
        $this->container['execution_id_in'] = $data['execution_id_in'] ?? null;
        $this->container['process_instance_id'] = $data['process_instance_id'] ?? null;
        $this->container['process_definition_id'] = $data['process_definition_id'] ?? null;
        $this->container['process_definition_key'] = $data['process_definition_key'] ?? null;
        $this->container['tenant_id_in'] = $data['tenant_id_in'] ?? null;
        $this->container['without_tenant_id'] = $data['without_tenant_id'] ?? null;
        $this->container['priority_lower_than_or_equals'] = $data['priority_lower_than_or_equals'] ?? null;
        $this->container['priority_higher_than_or_equals'] = $data['priority_higher_than_or_equals'] ?? null;
        $this->container['creation_log'] = $data['creation_log'] ?? null;
        $this->container['failure_log'] = $data['failure_log'] ?? null;
        $this->container['success_log'] = $data['success_log'] ?? null;
        $this->container['deletion_log'] = $data['deletion_log'] ?? null;
        $this->container['sorting'] = $data['sorting'] ?? null;
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
     * Gets log_id
     *
     * @return string|null
     */
    public function getLogId()
    {
        return $this->container['log_id'];
    }

    /**
     * Sets log_id
     *
     * @param string|null $log_id Filter by historic external task log id.
     *
     * @return self
     */
    public function setLogId($log_id)
    {
        $this->container['log_id'] = $log_id;

        return $this;
    }

    /**
     * Gets external_task_id
     *
     * @return string|null
     */
    public function getExternalTaskId()
    {
        return $this->container['external_task_id'];
    }

    /**
     * Sets external_task_id
     *
     * @param string|null $external_task_id Filter by external task id.
     *
     * @return self
     */
    public function setExternalTaskId($external_task_id)
    {
        $this->container['external_task_id'] = $external_task_id;

        return $this;
    }

    /**
     * Gets topic_name
     *
     * @return string|null
     */
    public function getTopicName()
    {
        return $this->container['topic_name'];
    }

    /**
     * Sets topic_name
     *
     * @param string|null $topic_name Filter by an external task topic.
     *
     * @return self
     */
    public function setTopicName($topic_name)
    {
        $this->container['topic_name'] = $topic_name;

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
     * @param string|null $worker_id Filter by the id of the worker that the task was most recently locked by.
     *
     * @return self
     */
    public function setWorkerId($worker_id)
    {
        $this->container['worker_id'] = $worker_id;

        return $this;
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
     * @param string|null $error_message Filter by external task exception message.
     *
     * @return self
     */
    public function setErrorMessage($error_message)
    {
        $this->container['error_message'] = $error_message;

        return $this;
    }

    /**
     * Gets activity_id_in
     *
     * @return string[]|null
     */
    public function getActivityIdIn()
    {
        return $this->container['activity_id_in'];
    }

    /**
     * Sets activity_id_in
     *
     * @param string[]|null $activity_id_in Only include historic external task logs which belong to one of the passed activity ids.
     *
     * @return self
     */
    public function setActivityIdIn($activity_id_in)
    {
        $this->container['activity_id_in'] = $activity_id_in;

        return $this;
    }

    /**
     * Gets activity_instance_id_in
     *
     * @return string[]|null
     */
    public function getActivityInstanceIdIn()
    {
        return $this->container['activity_instance_id_in'];
    }

    /**
     * Sets activity_instance_id_in
     *
     * @param string[]|null $activity_instance_id_in Only include historic external task logs which belong to one of the passed activity instance ids.
     *
     * @return self
     */
    public function setActivityInstanceIdIn($activity_instance_id_in)
    {
        $this->container['activity_instance_id_in'] = $activity_instance_id_in;

        return $this;
    }

    /**
     * Gets execution_id_in
     *
     * @return string[]|null
     */
    public function getExecutionIdIn()
    {
        return $this->container['execution_id_in'];
    }

    /**
     * Sets execution_id_in
     *
     * @param string[]|null $execution_id_in Only include historic external task logs which belong to one of the passed execution ids.
     *
     * @return self
     */
    public function setExecutionIdIn($execution_id_in)
    {
        $this->container['execution_id_in'] = $execution_id_in;

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
     * @param string|null $process_instance_id Filter by process instance id.
     *
     * @return self
     */
    public function setProcessInstanceId($process_instance_id)
    {
        $this->container['process_instance_id'] = $process_instance_id;

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
     * @param string|null $process_definition_id Filter by process definition id.
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
     * @param string|null $process_definition_key Filter by process definition key.
     *
     * @return self
     */
    public function setProcessDefinitionKey($process_definition_key)
    {
        $this->container['process_definition_key'] = $process_definition_key;

        return $this;
    }

    /**
     * Gets tenant_id_in
     *
     * @return string[]|null
     */
    public function getTenantIdIn()
    {
        return $this->container['tenant_id_in'];
    }

    /**
     * Sets tenant_id_in
     *
     * @param string[]|null $tenant_id_in Only include historic external task log entries which belong to one of the passed and comma-separated tenant ids.
     *
     * @return self
     */
    public function setTenantIdIn($tenant_id_in)
    {
        $this->container['tenant_id_in'] = $tenant_id_in;

        return $this;
    }

    /**
     * Gets without_tenant_id
     *
     * @return bool|null
     */
    public function getWithoutTenantId()
    {
        return $this->container['without_tenant_id'];
    }

    /**
     * Sets without_tenant_id
     *
     * @param bool|null $without_tenant_id Only include historic external task log entries that belong to no tenant. Value may only be `true`, as `false` is the default behavior.
     *
     * @return self
     */
    public function setWithoutTenantId($without_tenant_id)
    {
        $this->container['without_tenant_id'] = $without_tenant_id;

        return $this;
    }

    /**
     * Gets priority_lower_than_or_equals
     *
     * @return int|null
     */
    public function getPriorityLowerThanOrEquals()
    {
        return $this->container['priority_lower_than_or_equals'];
    }

    /**
     * Sets priority_lower_than_or_equals
     *
     * @param int|null $priority_lower_than_or_equals Only include logs for which the associated external task had a priority lower than or equal to the given value. Value must be a valid `long` value.
     *
     * @return self
     */
    public function setPriorityLowerThanOrEquals($priority_lower_than_or_equals)
    {
        $this->container['priority_lower_than_or_equals'] = $priority_lower_than_or_equals;

        return $this;
    }

    /**
     * Gets priority_higher_than_or_equals
     *
     * @return int|null
     */
    public function getPriorityHigherThanOrEquals()
    {
        return $this->container['priority_higher_than_or_equals'];
    }

    /**
     * Sets priority_higher_than_or_equals
     *
     * @param int|null $priority_higher_than_or_equals Only include logs for which the associated external task had a priority higher than or equal to the given value. Value must be a valid `long` value.
     *
     * @return self
     */
    public function setPriorityHigherThanOrEquals($priority_higher_than_or_equals)
    {
        $this->container['priority_higher_than_or_equals'] = $priority_higher_than_or_equals;

        return $this;
    }

    /**
     * Gets creation_log
     *
     * @return bool|null
     */
    public function getCreationLog()
    {
        return $this->container['creation_log'];
    }

    /**
     * Sets creation_log
     *
     * @param bool|null $creation_log Only include creation logs. Value may only be `true`, as `false` is the default behavior.
     *
     * @return self
     */
    public function setCreationLog($creation_log)
    {
        $this->container['creation_log'] = $creation_log;

        return $this;
    }

    /**
     * Gets failure_log
     *
     * @return bool|null
     */
    public function getFailureLog()
    {
        return $this->container['failure_log'];
    }

    /**
     * Sets failure_log
     *
     * @param bool|null $failure_log Only include failure logs. Value may only be `true`, as `false` is the default behavior.
     *
     * @return self
     */
    public function setFailureLog($failure_log)
    {
        $this->container['failure_log'] = $failure_log;

        return $this;
    }

    /**
     * Gets success_log
     *
     * @return bool|null
     */
    public function getSuccessLog()
    {
        return $this->container['success_log'];
    }

    /**
     * Sets success_log
     *
     * @param bool|null $success_log Only include success logs. Value may only be `true`, as `false` is the default behavior.
     *
     * @return self
     */
    public function setSuccessLog($success_log)
    {
        $this->container['success_log'] = $success_log;

        return $this;
    }

    /**
     * Gets deletion_log
     *
     * @return bool|null
     */
    public function getDeletionLog()
    {
        return $this->container['deletion_log'];
    }

    /**
     * Sets deletion_log
     *
     * @param bool|null $deletion_log Only include deletion logs. Value may only be `true`, as `false` is the default behavior.
     *
     * @return self
     */
    public function setDeletionLog($deletion_log)
    {
        $this->container['deletion_log'] = $deletion_log;

        return $this;
    }

    /**
     * Gets sorting
     *
     * @return \OpenAPI\Client\Model\HistoricExternalTaskLogQueryDtoSorting[]|null
     */
    public function getSorting()
    {
        return $this->container['sorting'];
    }

    /**
     * Sets sorting
     *
     * @param \OpenAPI\Client\Model\HistoricExternalTaskLogQueryDtoSorting[]|null $sorting An array of criteria to sort the result by. Each element of the array is                        an object that specifies one ordering. The position in the array                        identifies the rank of an ordering, i.e., whether it is primary, secondary,                        etc. Sorting has no effect for `count` endpoints.
     *
     * @return self
     */
    public function setSorting($sorting)
    {
        $this->container['sorting'] = $sorting;

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

