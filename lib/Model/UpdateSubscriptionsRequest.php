<?php
/**
 * UpdateSubscriptionsRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  IterableIA\Iterable
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Iterable API
 *
 * Iterable API
 *
 * OpenAPI spec version: 1.0.0
 * Contact: idihya@webpick.info
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.23
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace IterableIA\Iterable\Model;

use \ArrayAccess;
use \IterableIA\Iterable\ObjectSerializer;

/**
 * UpdateSubscriptionsRequest Class Doc Comment
 *
 * @category Class
 * @package  IterableIA\Iterable
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UpdateSubscriptionsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UpdateSubscriptionsRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'email' => 'string',
'user_id' => 'string',
'email_list_ids' => 'int[]',
'unsubscribed_channel_ids' => 'int[]',
'unsubscribed_message_type_ids' => 'int[]',
'campaign_id' => 'int',
'template_id' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'email' => null,
'user_id' => null,
'email_list_ids' => 'int64',
'unsubscribed_channel_ids' => 'int64',
'unsubscribed_message_type_ids' => 'int64',
'campaign_id' => 'int64',
'template_id' => 'int64'    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'email' => 'email',
'user_id' => 'userId',
'email_list_ids' => 'emailListIds',
'unsubscribed_channel_ids' => 'unsubscribedChannelIds',
'unsubscribed_message_type_ids' => 'unsubscribedMessageTypeIds',
'campaign_id' => 'campaignId',
'template_id' => 'templateId'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'email' => 'setEmail',
'user_id' => 'setUserId',
'email_list_ids' => 'setEmailListIds',
'unsubscribed_channel_ids' => 'setUnsubscribedChannelIds',
'unsubscribed_message_type_ids' => 'setUnsubscribedMessageTypeIds',
'campaign_id' => 'setCampaignId',
'template_id' => 'setTemplateId'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'email' => 'getEmail',
'user_id' => 'getUserId',
'email_list_ids' => 'getEmailListIds',
'unsubscribed_channel_ids' => 'getUnsubscribedChannelIds',
'unsubscribed_message_type_ids' => 'getUnsubscribedMessageTypeIds',
'campaign_id' => 'getCampaignId',
'template_id' => 'getTemplateId'    ];

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
        return self::$swaggerModelName;
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
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['email_list_ids'] = isset($data['email_list_ids']) ? $data['email_list_ids'] : null;
        $this->container['unsubscribed_channel_ids'] = isset($data['unsubscribed_channel_ids']) ? $data['unsubscribed_channel_ids'] : null;
        $this->container['unsubscribed_message_type_ids'] = isset($data['unsubscribed_message_type_ids']) ? $data['unsubscribed_message_type_ids'] : null;
        $this->container['campaign_id'] = isset($data['campaign_id']) ? $data['campaign_id'] : null;
        $this->container['template_id'] = isset($data['template_id']) ? $data['template_id'] : null;
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
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets user_id
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param string $user_id user_id
     *
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets email_list_ids
     *
     * @return int[]
     */
    public function getEmailListIds()
    {
        return $this->container['email_list_ids'];
    }

    /**
     * Sets email_list_ids
     *
     * @param int[] $email_list_ids Lists that a user is subscribed to
     *
     * @return $this
     */
    public function setEmailListIds($email_list_ids)
    {
        $this->container['email_list_ids'] = $email_list_ids;

        return $this;
    }

    /**
     * Gets unsubscribed_channel_ids
     *
     * @return int[]
     */
    public function getUnsubscribedChannelIds()
    {
        return $this->container['unsubscribed_channel_ids'];
    }

    /**
     * Sets unsubscribed_channel_ids
     *
     * @param int[] $unsubscribed_channel_ids Email channel ids to unsubscribe from
     *
     * @return $this
     */
    public function setUnsubscribedChannelIds($unsubscribed_channel_ids)
    {
        $this->container['unsubscribed_channel_ids'] = $unsubscribed_channel_ids;

        return $this;
    }

    /**
     * Gets unsubscribed_message_type_ids
     *
     * @return int[]
     */
    public function getUnsubscribedMessageTypeIds()
    {
        return $this->container['unsubscribed_message_type_ids'];
    }

    /**
     * Sets unsubscribed_message_type_ids
     *
     * @param int[] $unsubscribed_message_type_ids Individual message type ids to unsubscribe. This will not unsubscribe from the associated channel.
     *
     * @return $this
     */
    public function setUnsubscribedMessageTypeIds($unsubscribed_message_type_ids)
    {
        $this->container['unsubscribed_message_type_ids'] = $unsubscribed_message_type_ids;

        return $this;
    }

    /**
     * Gets campaign_id
     *
     * @return int
     */
    public function getCampaignId()
    {
        return $this->container['campaign_id'];
    }

    /**
     * Sets campaign_id
     *
     * @param int $campaign_id Campaign to attribute unsubscribes
     *
     * @return $this
     */
    public function setCampaignId($campaign_id)
    {
        $this->container['campaign_id'] = $campaign_id;

        return $this;
    }

    /**
     * Gets template_id
     *
     * @return int
     */
    public function getTemplateId()
    {
        return $this->container['template_id'];
    }

    /**
     * Sets template_id
     *
     * @param int $template_id Template to attribute unsubscribes
     *
     * @return $this
     */
    public function setTemplateId($template_id)
    {
        $this->container['template_id'] = $template_id;

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
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
