<?php
/**
 * HistoricDecisionOutputInstanceDto
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
 * HistoricDecisionOutputInstanceDto Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class HistoricDecisionOutputInstanceDto implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'HistoricDecisionOutputInstanceDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'decision_instance_id' => 'string',
        'clause_id' => 'string',
        'clause_name' => 'string',
        'rule_id' => 'string',
        'rule_order' => 'int',
        'error_message' => 'string',
        'variable_name' => 'string',
        'type' => 'string',
        'create_time' => '\DateTime',
        'removal_time' => '\DateTime',
        'root_process_instance_id' => 'string',
        'value' => 'object',
        'value_info' => 'array<string,object>'
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
        'decision_instance_id' => null,
        'clause_id' => null,
        'clause_name' => null,
        'rule_id' => null,
        'rule_order' => 'int32',
        'error_message' => null,
        'variable_name' => null,
        'type' => null,
        'create_time' => 'date-time',
        'removal_time' => 'date-time',
        'root_process_instance_id' => null,
        'value' => null,
        'value_info' => null
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
        'decision_instance_id' => 'decisionInstanceId',
        'clause_id' => 'clauseId',
        'clause_name' => 'clauseName',
        'rule_id' => 'ruleId',
        'rule_order' => 'ruleOrder',
        'error_message' => 'errorMessage',
        'variable_name' => 'variableName',
        'type' => 'type',
        'create_time' => 'createTime',
        'removal_time' => 'removalTime',
        'root_process_instance_id' => 'rootProcessInstanceId',
        'value' => 'value',
        'value_info' => 'valueInfo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'decision_instance_id' => 'setDecisionInstanceId',
        'clause_id' => 'setClauseId',
        'clause_name' => 'setClauseName',
        'rule_id' => 'setRuleId',
        'rule_order' => 'setRuleOrder',
        'error_message' => 'setErrorMessage',
        'variable_name' => 'setVariableName',
        'type' => 'setType',
        'create_time' => 'setCreateTime',
        'removal_time' => 'setRemovalTime',
        'root_process_instance_id' => 'setRootProcessInstanceId',
        'value' => 'setValue',
        'value_info' => 'setValueInfo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'decision_instance_id' => 'getDecisionInstanceId',
        'clause_id' => 'getClauseId',
        'clause_name' => 'getClauseName',
        'rule_id' => 'getRuleId',
        'rule_order' => 'getRuleOrder',
        'error_message' => 'getErrorMessage',
        'variable_name' => 'getVariableName',
        'type' => 'getType',
        'create_time' => 'getCreateTime',
        'removal_time' => 'getRemovalTime',
        'root_process_instance_id' => 'getRootProcessInstanceId',
        'value' => 'getValue',
        'value_info' => 'getValueInfo'
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
        $this->container['decision_instance_id'] = $data['decision_instance_id'] ?? null;
        $this->container['clause_id'] = $data['clause_id'] ?? null;
        $this->container['clause_name'] = $data['clause_name'] ?? null;
        $this->container['rule_id'] = $data['rule_id'] ?? null;
        $this->container['rule_order'] = $data['rule_order'] ?? null;
        $this->container['error_message'] = $data['error_message'] ?? null;
        $this->container['variable_name'] = $data['variable_name'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['create_time'] = $data['create_time'] ?? null;
        $this->container['removal_time'] = $data['removal_time'] ?? null;
        $this->container['root_process_instance_id'] = $data['root_process_instance_id'] ?? null;
        $this->container['value'] = $data['value'] ?? null;
        $this->container['value_info'] = $data['value_info'] ?? null;
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
     * @param string|null $id The id of the decision output value.
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets decision_instance_id
     *
     * @return string|null
     */
    public function getDecisionInstanceId()
    {
        return $this->container['decision_instance_id'];
    }

    /**
     * Sets decision_instance_id
     *
     * @param string|null $decision_instance_id The id of the decision instance the output value belongs to.
     *
     * @return self
     */
    public function setDecisionInstanceId($decision_instance_id)
    {
        $this->container['decision_instance_id'] = $decision_instance_id;

        return $this;
    }

    /**
     * Gets clause_id
     *
     * @return string|null
     */
    public function getClauseId()
    {
        return $this->container['clause_id'];
    }

    /**
     * Sets clause_id
     *
     * @param string|null $clause_id The id of the clause the output value belongs to.
     *
     * @return self
     */
    public function setClauseId($clause_id)
    {
        $this->container['clause_id'] = $clause_id;

        return $this;
    }

    /**
     * Gets clause_name
     *
     * @return string|null
     */
    public function getClauseName()
    {
        return $this->container['clause_name'];
    }

    /**
     * Sets clause_name
     *
     * @param string|null $clause_name The name of the clause the output value belongs to.
     *
     * @return self
     */
    public function setClauseName($clause_name)
    {
        $this->container['clause_name'] = $clause_name;

        return $this;
    }

    /**
     * Gets rule_id
     *
     * @return string|null
     */
    public function getRuleId()
    {
        return $this->container['rule_id'];
    }

    /**
     * Sets rule_id
     *
     * @param string|null $rule_id The id of the rule the output value belongs to.
     *
     * @return self
     */
    public function setRuleId($rule_id)
    {
        $this->container['rule_id'] = $rule_id;

        return $this;
    }

    /**
     * Gets rule_order
     *
     * @return int|null
     */
    public function getRuleOrder()
    {
        return $this->container['rule_order'];
    }

    /**
     * Sets rule_order
     *
     * @param int|null $rule_order The order of the rule the output value belongs to.
     *
     * @return self
     */
    public function setRuleOrder($rule_order)
    {
        $this->container['rule_order'] = $rule_order;

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
     * @param string|null $error_message An error message in case a Java Serialized Object could not be de-serialized.
     *
     * @return self
     */
    public function setErrorMessage($error_message)
    {
        $this->container['error_message'] = $error_message;

        return $this;
    }

    /**
     * Gets variable_name
     *
     * @return string|null
     */
    public function getVariableName()
    {
        return $this->container['variable_name'];
    }

    /**
     * Sets variable_name
     *
     * @param string|null $variable_name The name of the output variable.
     *
     * @return self
     */
    public function setVariableName($variable_name)
    {
        $this->container['variable_name'] = $variable_name;

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
     * @param string|null $type The value type of the variable.
     *
     * @return self
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets create_time
     *
     * @return \DateTime|null
     */
    public function getCreateTime()
    {
        return $this->container['create_time'];
    }

    /**
     * Sets create_time
     *
     * @param \DateTime|null $create_time The time the variable was inserted.  [Default format](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/) `yyyy-MM-dd'T'HH:mm:ss.SSSZ`.
     *
     * @return self
     */
    public function setCreateTime($create_time)
    {
        $this->container['create_time'] = $create_time;

        return $this;
    }

    /**
     * Gets removal_time
     *
     * @return \DateTime|null
     */
    public function getRemovalTime()
    {
        return $this->container['removal_time'];
    }

    /**
     * Sets removal_time
     *
     * @param \DateTime|null $removal_time The time after which the entry should be removed by the History Cleanup job. [Default format](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/) `yyyy-MM-dd'T'HH:mm:ss.SSSZ`.
     *
     * @return self
     */
    public function setRemovalTime($removal_time)
    {
        $this->container['removal_time'] = $removal_time;

        return $this;
    }

    /**
     * Gets root_process_instance_id
     *
     * @return string|null
     */
    public function getRootProcessInstanceId()
    {
        return $this->container['root_process_instance_id'];
    }

    /**
     * Sets root_process_instance_id
     *
     * @param string|null $root_process_instance_id The process instance id of the root process instance that initiated the process containing this entry.
     *
     * @return self
     */
    public function setRootProcessInstanceId($root_process_instance_id)
    {
        $this->container['root_process_instance_id'] = $root_process_instance_id;

        return $this;
    }

    /**
     * Gets value
     *
     * @return object|null
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param object|null $value The variable's value. Value differs depending on the variable's type and on the `disableCustomObjectDeserialization` parameter.
     *
     * @return self
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets value_info
     *
     * @return array<string,object>|null
     */
    public function getValueInfo()
    {
        return $this->container['value_info'];
    }

    /**
     * Sets value_info
     *
     * @param array<string,object>|null $value_info A JSON object containing additional, value-type-dependent properties.  For variables of type `Object`, the following properties are returned:  * `objectTypeName`: A string representation of the object's type name.  * `serializationDataFormat`: The serialization format used to store the variable.
     *
     * @return self
     */
    public function setValueInfo($value_info)
    {
        $this->container['value_info'] = $value_info;

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


