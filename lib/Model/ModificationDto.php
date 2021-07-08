<?php
/**
 * ModificationDto
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
 * ModificationDto Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ModificationDto implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ModificationDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'process_definition_id' => 'string',
        'skip_custom_listeners' => 'bool',
        'skip_io_mappings' => 'bool',
        'process_instance_ids' => 'string[]',
        'process_instance_query' => '\OpenAPI\Client\Model\ProcessInstanceQueryDto',
        'instructions' => '\OpenAPI\Client\Model\MultipleProcessInstanceModificationInstructionDto[]',
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
        'process_definition_id' => null,
        'skip_custom_listeners' => null,
        'skip_io_mappings' => null,
        'process_instance_ids' => null,
        'process_instance_query' => null,
        'instructions' => null,
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
        'process_definition_id' => 'processDefinitionId',
        'skip_custom_listeners' => 'skipCustomListeners',
        'skip_io_mappings' => 'skipIoMappings',
        'process_instance_ids' => 'processInstanceIds',
        'process_instance_query' => 'processInstanceQuery',
        'instructions' => 'instructions',
        'annotation' => 'annotation'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'process_definition_id' => 'setProcessDefinitionId',
        'skip_custom_listeners' => 'setSkipCustomListeners',
        'skip_io_mappings' => 'setSkipIoMappings',
        'process_instance_ids' => 'setProcessInstanceIds',
        'process_instance_query' => 'setProcessInstanceQuery',
        'instructions' => 'setInstructions',
        'annotation' => 'setAnnotation'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'process_definition_id' => 'getProcessDefinitionId',
        'skip_custom_listeners' => 'getSkipCustomListeners',
        'skip_io_mappings' => 'getSkipIoMappings',
        'process_instance_ids' => 'getProcessInstanceIds',
        'process_instance_query' => 'getProcessInstanceQuery',
        'instructions' => 'getInstructions',
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
        $this->container['process_definition_id'] = $data['process_definition_id'] ?? null;
        $this->container['skip_custom_listeners'] = $data['skip_custom_listeners'] ?? null;
        $this->container['skip_io_mappings'] = $data['skip_io_mappings'] ?? null;
        $this->container['process_instance_ids'] = $data['process_instance_ids'] ?? null;
        $this->container['process_instance_query'] = $data['process_instance_query'] ?? null;
        $this->container['instructions'] = $data['instructions'] ?? null;
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
     * @param string|null $process_definition_id The id of the process definition for the modification
     *
     * @return self
     */
    public function setProcessDefinitionId($process_definition_id)
    {
        $this->container['process_definition_id'] = $process_definition_id;

        return $this;
    }

    /**
     * Gets skip_custom_listeners
     *
     * @return bool|null
     */
    public function getSkipCustomListeners()
    {
        return $this->container['skip_custom_listeners'];
    }

    /**
     * Sets skip_custom_listeners
     *
     * @param bool|null $skip_custom_listeners Skip execution listener invocation for activities that are started or ended as part of this request.
     *
     * @return self
     */
    public function setSkipCustomListeners($skip_custom_listeners)
    {
        $this->container['skip_custom_listeners'] = $skip_custom_listeners;

        return $this;
    }

    /**
     * Gets skip_io_mappings
     *
     * @return bool|null
     */
    public function getSkipIoMappings()
    {
        return $this->container['skip_io_mappings'];
    }

    /**
     * Sets skip_io_mappings
     *
     * @param bool|null $skip_io_mappings Skip execution of [input/output variable mappings](https://docs.camunda.org/manual/latest/user-guide/process-engine/variables/#input-output-variable-mapping) for activities that are started or ended as part of this request.
     *
     * @return self
     */
    public function setSkipIoMappings($skip_io_mappings)
    {
        $this->container['skip_io_mappings'] = $skip_io_mappings;

        return $this;
    }

    /**
     * Gets process_instance_ids
     *
     * @return string[]|null
     */
    public function getProcessInstanceIds()
    {
        return $this->container['process_instance_ids'];
    }

    /**
     * Sets process_instance_ids
     *
     * @param string[]|null $process_instance_ids A list of process instance ids to modify.
     *
     * @return self
     */
    public function setProcessInstanceIds($process_instance_ids)
    {
        $this->container['process_instance_ids'] = $process_instance_ids;

        return $this;
    }

    /**
     * Gets process_instance_query
     *
     * @return \OpenAPI\Client\Model\ProcessInstanceQueryDto|null
     */
    public function getProcessInstanceQuery()
    {
        return $this->container['process_instance_query'];
    }

    /**
     * Sets process_instance_query
     *
     * @param \OpenAPI\Client\Model\ProcessInstanceQueryDto|null $process_instance_query process_instance_query
     *
     * @return self
     */
    public function setProcessInstanceQuery($process_instance_query)
    {
        $this->container['process_instance_query'] = $process_instance_query;

        return $this;
    }

    /**
     * Gets instructions
     *
     * @return \OpenAPI\Client\Model\MultipleProcessInstanceModificationInstructionDto[]|null
     */
    public function getInstructions()
    {
        return $this->container['instructions'];
    }

    /**
     * Sets instructions
     *
     * @param \OpenAPI\Client\Model\MultipleProcessInstanceModificationInstructionDto[]|null $instructions An array of modification instructions. The instructions are executed in the order they are in.
     *
     * @return self
     */
    public function setInstructions($instructions)
    {
        $this->container['instructions'] = $instructions;

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
     * @param string|null $annotation An arbitrary text annotation set by a user for auditing reasons.
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


