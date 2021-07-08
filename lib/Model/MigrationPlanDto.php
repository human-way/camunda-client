<?php
/**
 * MigrationPlanDto
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
 * MigrationPlanDto Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class MigrationPlanDto implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MigrationPlanDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'source_process_definition_id' => 'string',
        'target_process_definition_id' => 'string',
        'instructions' => '\OpenAPI\Client\Model\MigrationInstructionDto[]',
        'variables' => 'array<string,\OpenAPI\Client\Model\VariableValueDto>'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'source_process_definition_id' => null,
        'target_process_definition_id' => null,
        'instructions' => null,
        'variables' => null
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
        'source_process_definition_id' => 'sourceProcessDefinitionId',
        'target_process_definition_id' => 'targetProcessDefinitionId',
        'instructions' => 'instructions',
        'variables' => 'variables'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'source_process_definition_id' => 'setSourceProcessDefinitionId',
        'target_process_definition_id' => 'setTargetProcessDefinitionId',
        'instructions' => 'setInstructions',
        'variables' => 'setVariables'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'source_process_definition_id' => 'getSourceProcessDefinitionId',
        'target_process_definition_id' => 'getTargetProcessDefinitionId',
        'instructions' => 'getInstructions',
        'variables' => 'getVariables'
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
        $this->container['source_process_definition_id'] = $data['source_process_definition_id'] ?? null;
        $this->container['target_process_definition_id'] = $data['target_process_definition_id'] ?? null;
        $this->container['instructions'] = $data['instructions'] ?? null;
        $this->container['variables'] = $data['variables'] ?? null;
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
     * Gets source_process_definition_id
     *
     * @return string|null
     */
    public function getSourceProcessDefinitionId()
    {
        return $this->container['source_process_definition_id'];
    }

    /**
     * Sets source_process_definition_id
     *
     * @param string|null $source_process_definition_id The id of the source process definition for the migration.
     *
     * @return self
     */
    public function setSourceProcessDefinitionId($source_process_definition_id)
    {
        $this->container['source_process_definition_id'] = $source_process_definition_id;

        return $this;
    }

    /**
     * Gets target_process_definition_id
     *
     * @return string|null
     */
    public function getTargetProcessDefinitionId()
    {
        return $this->container['target_process_definition_id'];
    }

    /**
     * Sets target_process_definition_id
     *
     * @param string|null $target_process_definition_id The id of the target process definition for the migration.
     *
     * @return self
     */
    public function setTargetProcessDefinitionId($target_process_definition_id)
    {
        $this->container['target_process_definition_id'] = $target_process_definition_id;

        return $this;
    }

    /**
     * Gets instructions
     *
     * @return \OpenAPI\Client\Model\MigrationInstructionDto[]|null
     */
    public function getInstructions()
    {
        return $this->container['instructions'];
    }

    /**
     * Sets instructions
     *
     * @param \OpenAPI\Client\Model\MigrationInstructionDto[]|null $instructions A list of migration instructions which map equal activities. Each migration instruction is a JSON object with the following properties:
     *
     * @return self
     */
    public function setInstructions($instructions)
    {
        $this->container['instructions'] = $instructions;

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
     * @param array<string,\OpenAPI\Client\Model\VariableValueDto>|null $variables A map of variables which will be set into the process instances' scope. Each key is a variable name and each value a JSON variable value object.
     *
     * @return self
     */
    public function setVariables($variables)
    {
        $this->container['variables'] = $variables;

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


