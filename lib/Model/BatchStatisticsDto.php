<?php
/**
 * BatchStatisticsDto
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
 * BatchStatisticsDto Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class BatchStatisticsDto implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BatchStatisticsDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'remaining_jobs' => 'int',
        'completed_jobs' => 'int',
        'failed_jobs' => 'int',
        'id' => 'string',
        'type' => 'string',
        'total_jobs' => 'int',
        'jobs_created' => 'int',
        'batch_jobs_per_seed' => 'int',
        'invocations_per_batch_job' => 'int',
        'seed_job_definition_id' => 'string',
        'monitor_job_definition_id' => 'string',
        'batch_job_definition_id' => 'string',
        'suspended' => 'bool',
        'tenant_id' => 'string',
        'create_user_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'remaining_jobs' => 'int32',
        'completed_jobs' => 'int32',
        'failed_jobs' => 'int32',
        'id' => null,
        'type' => null,
        'total_jobs' => 'int32',
        'jobs_created' => 'int32',
        'batch_jobs_per_seed' => 'int32',
        'invocations_per_batch_job' => 'int32',
        'seed_job_definition_id' => null,
        'monitor_job_definition_id' => null,
        'batch_job_definition_id' => null,
        'suspended' => null,
        'tenant_id' => null,
        'create_user_id' => null
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
        'remaining_jobs' => 'remainingJobs',
        'completed_jobs' => 'completedJobs',
        'failed_jobs' => 'failedJobs',
        'id' => 'id',
        'type' => 'type',
        'total_jobs' => 'totalJobs',
        'jobs_created' => 'jobsCreated',
        'batch_jobs_per_seed' => 'batchJobsPerSeed',
        'invocations_per_batch_job' => 'invocationsPerBatchJob',
        'seed_job_definition_id' => 'seedJobDefinitionId',
        'monitor_job_definition_id' => 'monitorJobDefinitionId',
        'batch_job_definition_id' => 'batchJobDefinitionId',
        'suspended' => 'suspended',
        'tenant_id' => 'tenantId',
        'create_user_id' => 'createUserId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'remaining_jobs' => 'setRemainingJobs',
        'completed_jobs' => 'setCompletedJobs',
        'failed_jobs' => 'setFailedJobs',
        'id' => 'setId',
        'type' => 'setType',
        'total_jobs' => 'setTotalJobs',
        'jobs_created' => 'setJobsCreated',
        'batch_jobs_per_seed' => 'setBatchJobsPerSeed',
        'invocations_per_batch_job' => 'setInvocationsPerBatchJob',
        'seed_job_definition_id' => 'setSeedJobDefinitionId',
        'monitor_job_definition_id' => 'setMonitorJobDefinitionId',
        'batch_job_definition_id' => 'setBatchJobDefinitionId',
        'suspended' => 'setSuspended',
        'tenant_id' => 'setTenantId',
        'create_user_id' => 'setCreateUserId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'remaining_jobs' => 'getRemainingJobs',
        'completed_jobs' => 'getCompletedJobs',
        'failed_jobs' => 'getFailedJobs',
        'id' => 'getId',
        'type' => 'getType',
        'total_jobs' => 'getTotalJobs',
        'jobs_created' => 'getJobsCreated',
        'batch_jobs_per_seed' => 'getBatchJobsPerSeed',
        'invocations_per_batch_job' => 'getInvocationsPerBatchJob',
        'seed_job_definition_id' => 'getSeedJobDefinitionId',
        'monitor_job_definition_id' => 'getMonitorJobDefinitionId',
        'batch_job_definition_id' => 'getBatchJobDefinitionId',
        'suspended' => 'getSuspended',
        'tenant_id' => 'getTenantId',
        'create_user_id' => 'getCreateUserId'
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
        $this->container['remaining_jobs'] = $data['remaining_jobs'] ?? null;
        $this->container['completed_jobs'] = $data['completed_jobs'] ?? null;
        $this->container['failed_jobs'] = $data['failed_jobs'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['total_jobs'] = $data['total_jobs'] ?? null;
        $this->container['jobs_created'] = $data['jobs_created'] ?? null;
        $this->container['batch_jobs_per_seed'] = $data['batch_jobs_per_seed'] ?? null;
        $this->container['invocations_per_batch_job'] = $data['invocations_per_batch_job'] ?? null;
        $this->container['seed_job_definition_id'] = $data['seed_job_definition_id'] ?? null;
        $this->container['monitor_job_definition_id'] = $data['monitor_job_definition_id'] ?? null;
        $this->container['batch_job_definition_id'] = $data['batch_job_definition_id'] ?? null;
        $this->container['suspended'] = $data['suspended'] ?? null;
        $this->container['tenant_id'] = $data['tenant_id'] ?? null;
        $this->container['create_user_id'] = $data['create_user_id'] ?? null;
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
     * Gets remaining_jobs
     *
     * @return int|null
     */
    public function getRemainingJobs()
    {
        return $this->container['remaining_jobs'];
    }

    /**
     * Sets remaining_jobs
     *
     * @param int|null $remaining_jobs The number of remaining batch execution jobs. This does include failed batch execution jobs and batch execution jobs which still have to be created by the seed job.
     *
     * @return self
     */
    public function setRemainingJobs($remaining_jobs)
    {
        $this->container['remaining_jobs'] = $remaining_jobs;

        return $this;
    }

    /**
     * Gets completed_jobs
     *
     * @return int|null
     */
    public function getCompletedJobs()
    {
        return $this->container['completed_jobs'];
    }

    /**
     * Sets completed_jobs
     *
     * @param int|null $completed_jobs The number of completed batch execution jobs. This does include aborted/deleted batch execution jobs.
     *
     * @return self
     */
    public function setCompletedJobs($completed_jobs)
    {
        $this->container['completed_jobs'] = $completed_jobs;

        return $this;
    }

    /**
     * Gets failed_jobs
     *
     * @return int|null
     */
    public function getFailedJobs()
    {
        return $this->container['failed_jobs'];
    }

    /**
     * Sets failed_jobs
     *
     * @param int|null $failed_jobs The number of failed batch execution jobs. This does not include aborted or deleted batch execution jobs.
     *
     * @return self
     */
    public function setFailedJobs($failed_jobs)
    {
        $this->container['failed_jobs'] = $failed_jobs;

        return $this;
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
     * @param string|null $id The id of the batch.
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type The type of the batch. See the [User Guide](https://docs.camunda.org/manual/latest/user-guide/process-engine/batch/#creating-a-batch) for more information about batch types.
     *
     * @return self
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets total_jobs
     *
     * @return int|null
     */
    public function getTotalJobs()
    {
        return $this->container['total_jobs'];
    }

    /**
     * Sets total_jobs
     *
     * @param int|null $total_jobs The total jobs of a batch is the number of batch execution jobs required to complete the batch.
     *
     * @return self
     */
    public function setTotalJobs($total_jobs)
    {
        $this->container['total_jobs'] = $total_jobs;

        return $this;
    }

    /**
     * Gets jobs_created
     *
     * @return int|null
     */
    public function getJobsCreated()
    {
        return $this->container['jobs_created'];
    }

    /**
     * Sets jobs_created
     *
     * @param int|null $jobs_created The number of batch execution jobs already created by the seed job.
     *
     * @return self
     */
    public function setJobsCreated($jobs_created)
    {
        $this->container['jobs_created'] = $jobs_created;

        return $this;
    }

    /**
     * Gets batch_jobs_per_seed
     *
     * @return int|null
     */
    public function getBatchJobsPerSeed()
    {
        return $this->container['batch_jobs_per_seed'];
    }

    /**
     * Sets batch_jobs_per_seed
     *
     * @param int|null $batch_jobs_per_seed The number of batch execution jobs created per seed job invocation. The batch seed job is invoked until it has created all batch execution jobs required by the batch (see `totalJobs` property).
     *
     * @return self
     */
    public function setBatchJobsPerSeed($batch_jobs_per_seed)
    {
        $this->container['batch_jobs_per_seed'] = $batch_jobs_per_seed;

        return $this;
    }

    /**
     * Gets invocations_per_batch_job
     *
     * @return int|null
     */
    public function getInvocationsPerBatchJob()
    {
        return $this->container['invocations_per_batch_job'];
    }

    /**
     * Sets invocations_per_batch_job
     *
     * @param int|null $invocations_per_batch_job Every batch execution job invokes the command executed by the batch `invocationsPerBatchJob` times. E.g., for a process instance migration batch this specifies the number of process instances which are migrated per batch execution job.
     *
     * @return self
     */
    public function setInvocationsPerBatchJob($invocations_per_batch_job)
    {
        $this->container['invocations_per_batch_job'] = $invocations_per_batch_job;

        return $this;
    }

    /**
     * Gets seed_job_definition_id
     *
     * @return string|null
     */
    public function getSeedJobDefinitionId()
    {
        return $this->container['seed_job_definition_id'];
    }

    /**
     * Sets seed_job_definition_id
     *
     * @param string|null $seed_job_definition_id The job definition id for the seed jobs of this batch.
     *
     * @return self
     */
    public function setSeedJobDefinitionId($seed_job_definition_id)
    {
        $this->container['seed_job_definition_id'] = $seed_job_definition_id;

        return $this;
    }

    /**
     * Gets monitor_job_definition_id
     *
     * @return string|null
     */
    public function getMonitorJobDefinitionId()
    {
        return $this->container['monitor_job_definition_id'];
    }

    /**
     * Sets monitor_job_definition_id
     *
     * @param string|null $monitor_job_definition_id The job definition id for the monitor jobs of this batch.
     *
     * @return self
     */
    public function setMonitorJobDefinitionId($monitor_job_definition_id)
    {
        $this->container['monitor_job_definition_id'] = $monitor_job_definition_id;

        return $this;
    }

    /**
     * Gets batch_job_definition_id
     *
     * @return string|null
     */
    public function getBatchJobDefinitionId()
    {
        return $this->container['batch_job_definition_id'];
    }

    /**
     * Sets batch_job_definition_id
     *
     * @param string|null $batch_job_definition_id The job definition id for the batch execution jobs of this batch.
     *
     * @return self
     */
    public function setBatchJobDefinitionId($batch_job_definition_id)
    {
        $this->container['batch_job_definition_id'] = $batch_job_definition_id;

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
     * @param bool|null $suspended Indicates whether this batch is suspended or not.
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
     * @param string|null $tenant_id The tenant id of the batch.
     *
     * @return self
     */
    public function setTenantId($tenant_id)
    {
        $this->container['tenant_id'] = $tenant_id;

        return $this;
    }

    /**
     * Gets create_user_id
     *
     * @return string|null
     */
    public function getCreateUserId()
    {
        return $this->container['create_user_id'];
    }

    /**
     * Sets create_user_id
     *
     * @param string|null $create_user_id The id of the user that created the batch.
     *
     * @return self
     */
    public function setCreateUserId($create_user_id)
    {
        $this->container['create_user_id'] = $create_user_id;

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


