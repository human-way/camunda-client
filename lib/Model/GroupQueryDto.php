<?php
/**
 * GroupQueryDto
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
 * GroupQueryDto Class Doc Comment
 *
 * @category Class
 * @description A group instance query which defines a list of group instances
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class GroupQueryDto implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GroupQueryDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'id_in' => 'string[]',
        'name' => 'string',
        'name_like' => 'string',
        'type' => 'string',
        'member' => 'string',
        'member_of_tenant' => 'string',
        'sorting' => '\OpenAPI\Client\Model\GroupQueryDtoSorting[]'
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
        'id_in' => null,
        'name' => null,
        'name_like' => null,
        'type' => null,
        'member' => null,
        'member_of_tenant' => null,
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
        'id' => 'id',
        'id_in' => 'idIn',
        'name' => 'name',
        'name_like' => 'nameLike',
        'type' => 'type',
        'member' => 'member',
        'member_of_tenant' => 'memberOfTenant',
        'sorting' => 'sorting'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'id_in' => 'setIdIn',
        'name' => 'setName',
        'name_like' => 'setNameLike',
        'type' => 'setType',
        'member' => 'setMember',
        'member_of_tenant' => 'setMemberOfTenant',
        'sorting' => 'setSorting'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'id_in' => 'getIdIn',
        'name' => 'getName',
        'name_like' => 'getNameLike',
        'type' => 'getType',
        'member' => 'getMember',
        'member_of_tenant' => 'getMemberOfTenant',
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['id_in'] = $data['id_in'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['name_like'] = $data['name_like'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['member'] = $data['member'] ?? null;
        $this->container['member_of_tenant'] = $data['member_of_tenant'] ?? null;
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
     * @param string|null $id Filter by the id of the group.
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets id_in
     *
     * @return string[]|null
     */
    public function getIdIn()
    {
        return $this->container['id_in'];
    }

    /**
     * Sets id_in
     *
     * @param string[]|null $id_in Filter by a JSON string array of group ids.
     *
     * @return self
     */
    public function setIdIn($id_in)
    {
        $this->container['id_in'] = $id_in;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name Filter by the name of the group.
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets name_like
     *
     * @return string|null
     */
    public function getNameLike()
    {
        return $this->container['name_like'];
    }

    /**
     * Sets name_like
     *
     * @param string|null $name_like Filter by the name that the parameter is a substring of.
     *
     * @return self
     */
    public function setNameLike($name_like)
    {
        $this->container['name_like'] = $name_like;

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
     * @param string|null $type Filter by the type of the group.
     *
     * @return self
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets member
     *
     * @return string|null
     */
    public function getMember()
    {
        return $this->container['member'];
    }

    /**
     * Sets member
     *
     * @param string|null $member Only retrieve groups where the given user id is a member of.
     *
     * @return self
     */
    public function setMember($member)
    {
        $this->container['member'] = $member;

        return $this;
    }

    /**
     * Gets member_of_tenant
     *
     * @return string|null
     */
    public function getMemberOfTenant()
    {
        return $this->container['member_of_tenant'];
    }

    /**
     * Sets member_of_tenant
     *
     * @param string|null $member_of_tenant Only retrieve groups which are members of the given tenant.
     *
     * @return self
     */
    public function setMemberOfTenant($member_of_tenant)
    {
        $this->container['member_of_tenant'] = $member_of_tenant;

        return $this;
    }

    /**
     * Gets sorting
     *
     * @return \OpenAPI\Client\Model\GroupQueryDtoSorting[]|null
     */
    public function getSorting()
    {
        return $this->container['sorting'];
    }

    /**
     * Sets sorting
     *
     * @param \OpenAPI\Client\Model\GroupQueryDtoSorting[]|null $sorting Apply sorting of the result
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


