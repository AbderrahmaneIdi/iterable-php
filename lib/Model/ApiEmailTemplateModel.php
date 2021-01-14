<?php
/**
 * ApiEmailTemplateModel
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
 * ApiEmailTemplateModel Class Doc Comment
 *
 * @category Class
 * @package  IterableIA\Iterable
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ApiEmailTemplateModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ApiEmailTemplateModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'template_id' => 'int',
'metadata' => '\IterableIA\Iterable\Model\ApiTemplateResponse',
'name' => 'string',
'from_name' => 'string',
'from_email' => 'string',
'reply_to_email' => 'string',
'subject' => 'string',
'preheader_text' => 'string',
'cc_emails' => 'string[]',
'bcc_emails' => 'string[]',
'html' => 'string',
'plain_text' => 'string',
'google_analytics_campaign_name' => 'string',
'link_params' => '\IterableIA\Iterable\Model\LinkParam[]',
'data_feed_id' => 'float',
'data_feed_ids' => 'float[]',
'cache_data_feed' => 'float',
'merge_data_feed_context' => 'float',
'client_template_id' => 'string',
'locale' => '\IterableIA\Iterable\Model\IterableLocale',
'message_type_id' => 'float',
'creator_user_id' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'template_id' => 'int64',
'metadata' => null,
'name' => null,
'from_name' => null,
'from_email' => null,
'reply_to_email' => null,
'subject' => null,
'preheader_text' => null,
'cc_emails' => null,
'bcc_emails' => null,
'html' => null,
'plain_text' => null,
'google_analytics_campaign_name' => null,
'link_params' => null,
'data_feed_id' => null,
'data_feed_ids' => null,
'cache_data_feed' => null,
'merge_data_feed_context' => null,
'client_template_id' => null,
'locale' => null,
'message_type_id' => null,
'creator_user_id' => null    ];

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
        'template_id' => 'templateId',
'metadata' => 'metadata',
'name' => 'name',
'from_name' => 'fromName',
'from_email' => 'fromEmail',
'reply_to_email' => 'replyToEmail',
'subject' => 'subject',
'preheader_text' => 'preheaderText',
'cc_emails' => 'ccEmails',
'bcc_emails' => 'bccEmails',
'html' => 'html',
'plain_text' => 'plainText',
'google_analytics_campaign_name' => 'googleAnalyticsCampaignName',
'link_params' => 'linkParams',
'data_feed_id' => 'dataFeedId',
'data_feed_ids' => 'dataFeedIds',
'cache_data_feed' => 'cacheDataFeed',
'merge_data_feed_context' => 'mergeDataFeedContext',
'client_template_id' => 'clientTemplateId',
'locale' => 'locale',
'message_type_id' => 'messageTypeId',
'creator_user_id' => 'creatorUserId'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'template_id' => 'setTemplateId',
'metadata' => 'setMetadata',
'name' => 'setName',
'from_name' => 'setFromName',
'from_email' => 'setFromEmail',
'reply_to_email' => 'setReplyToEmail',
'subject' => 'setSubject',
'preheader_text' => 'setPreheaderText',
'cc_emails' => 'setCcEmails',
'bcc_emails' => 'setBccEmails',
'html' => 'setHtml',
'plain_text' => 'setPlainText',
'google_analytics_campaign_name' => 'setGoogleAnalyticsCampaignName',
'link_params' => 'setLinkParams',
'data_feed_id' => 'setDataFeedId',
'data_feed_ids' => 'setDataFeedIds',
'cache_data_feed' => 'setCacheDataFeed',
'merge_data_feed_context' => 'setMergeDataFeedContext',
'client_template_id' => 'setClientTemplateId',
'locale' => 'setLocale',
'message_type_id' => 'setMessageTypeId',
'creator_user_id' => 'setCreatorUserId'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'template_id' => 'getTemplateId',
'metadata' => 'getMetadata',
'name' => 'getName',
'from_name' => 'getFromName',
'from_email' => 'getFromEmail',
'reply_to_email' => 'getReplyToEmail',
'subject' => 'getSubject',
'preheader_text' => 'getPreheaderText',
'cc_emails' => 'getCcEmails',
'bcc_emails' => 'getBccEmails',
'html' => 'getHtml',
'plain_text' => 'getPlainText',
'google_analytics_campaign_name' => 'getGoogleAnalyticsCampaignName',
'link_params' => 'getLinkParams',
'data_feed_id' => 'getDataFeedId',
'data_feed_ids' => 'getDataFeedIds',
'cache_data_feed' => 'getCacheDataFeed',
'merge_data_feed_context' => 'getMergeDataFeedContext',
'client_template_id' => 'getClientTemplateId',
'locale' => 'getLocale',
'message_type_id' => 'getMessageTypeId',
'creator_user_id' => 'getCreatorUserId'    ];

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
        $this->container['template_id'] = isset($data['template_id']) ? $data['template_id'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['from_name'] = isset($data['from_name']) ? $data['from_name'] : null;
        $this->container['from_email'] = isset($data['from_email']) ? $data['from_email'] : null;
        $this->container['reply_to_email'] = isset($data['reply_to_email']) ? $data['reply_to_email'] : null;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
        $this->container['preheader_text'] = isset($data['preheader_text']) ? $data['preheader_text'] : null;
        $this->container['cc_emails'] = isset($data['cc_emails']) ? $data['cc_emails'] : null;
        $this->container['bcc_emails'] = isset($data['bcc_emails']) ? $data['bcc_emails'] : null;
        $this->container['html'] = isset($data['html']) ? $data['html'] : null;
        $this->container['plain_text'] = isset($data['plain_text']) ? $data['plain_text'] : null;
        $this->container['google_analytics_campaign_name'] = isset($data['google_analytics_campaign_name']) ? $data['google_analytics_campaign_name'] : null;
        $this->container['link_params'] = isset($data['link_params']) ? $data['link_params'] : null;
        $this->container['data_feed_id'] = isset($data['data_feed_id']) ? $data['data_feed_id'] : null;
        $this->container['data_feed_ids'] = isset($data['data_feed_ids']) ? $data['data_feed_ids'] : null;
        $this->container['cache_data_feed'] = isset($data['cache_data_feed']) ? $data['cache_data_feed'] : null;
        $this->container['merge_data_feed_context'] = isset($data['merge_data_feed_context']) ? $data['merge_data_feed_context'] : null;
        $this->container['client_template_id'] = isset($data['client_template_id']) ? $data['client_template_id'] : null;
        $this->container['locale'] = isset($data['locale']) ? $data['locale'] : null;
        $this->container['message_type_id'] = isset($data['message_type_id']) ? $data['message_type_id'] : null;
        $this->container['creator_user_id'] = isset($data['creator_user_id']) ? $data['creator_user_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['template_id'] === null) {
            $invalidProperties[] = "'template_id' can't be null";
        }
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
     * @param int $template_id Email Template ID
     *
     * @return $this
     */
    public function setTemplateId($template_id)
    {
        $this->container['template_id'] = $template_id;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return \IterableIA\Iterable\Model\ApiTemplateResponse
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param \IterableIA\Iterable\Model\ApiTemplateResponse $metadata metadata
     *
     * @return $this
     */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Name of the template
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets from_name
     *
     * @return string
     */
    public function getFromName()
    {
        return $this->container['from_name'];
    }

    /**
     * Sets from_name
     *
     * @param string $from_name From name
     *
     * @return $this
     */
    public function setFromName($from_name)
    {
        $this->container['from_name'] = $from_name;

        return $this;
    }

    /**
     * Gets from_email
     *
     * @return string
     */
    public function getFromEmail()
    {
        return $this->container['from_email'];
    }

    /**
     * Sets from_email
     *
     * @param string $from_email From email (must be an authorized sender)
     *
     * @return $this
     */
    public function setFromEmail($from_email)
    {
        $this->container['from_email'] = $from_email;

        return $this;
    }

    /**
     * Gets reply_to_email
     *
     * @return string
     */
    public function getReplyToEmail()
    {
        return $this->container['reply_to_email'];
    }

    /**
     * Sets reply_to_email
     *
     * @param string $reply_to_email Reply to email
     *
     * @return $this
     */
    public function setReplyToEmail($reply_to_email)
    {
        $this->container['reply_to_email'] = $reply_to_email;

        return $this;
    }

    /**
     * Gets subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     *
     * @param string $subject Subject
     *
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;

        return $this;
    }

    /**
     * Gets preheader_text
     *
     * @return string
     */
    public function getPreheaderText()
    {
        return $this->container['preheader_text'];
    }

    /**
     * Sets preheader_text
     *
     * @param string $preheader_text Preheader text
     *
     * @return $this
     */
    public function setPreheaderText($preheader_text)
    {
        $this->container['preheader_text'] = $preheader_text;

        return $this;
    }

    /**
     * Gets cc_emails
     *
     * @return string[]
     */
    public function getCcEmails()
    {
        return $this->container['cc_emails'];
    }

    /**
     * Sets cc_emails
     *
     * @param string[] $cc_emails CC emails
     *
     * @return $this
     */
    public function setCcEmails($cc_emails)
    {
        $this->container['cc_emails'] = $cc_emails;

        return $this;
    }

    /**
     * Gets bcc_emails
     *
     * @return string[]
     */
    public function getBccEmails()
    {
        return $this->container['bcc_emails'];
    }

    /**
     * Sets bcc_emails
     *
     * @param string[] $bcc_emails BCC emails
     *
     * @return $this
     */
    public function setBccEmails($bcc_emails)
    {
        $this->container['bcc_emails'] = $bcc_emails;

        return $this;
    }

    /**
     * Gets html
     *
     * @return string
     */
    public function getHtml()
    {
        return $this->container['html'];
    }

    /**
     * Sets html
     *
     * @param string $html HTML contents
     *
     * @return $this
     */
    public function setHtml($html)
    {
        $this->container['html'] = $html;

        return $this;
    }

    /**
     * Gets plain_text
     *
     * @return string
     */
    public function getPlainText()
    {
        return $this->container['plain_text'];
    }

    /**
     * Sets plain_text
     *
     * @param string $plain_text Plain text contents
     *
     * @return $this
     */
    public function setPlainText($plain_text)
    {
        $this->container['plain_text'] = $plain_text;

        return $this;
    }

    /**
     * Gets google_analytics_campaign_name
     *
     * @return string
     */
    public function getGoogleAnalyticsCampaignName()
    {
        return $this->container['google_analytics_campaign_name'];
    }

    /**
     * Sets google_analytics_campaign_name
     *
     * @param string $google_analytics_campaign_name Google analytics utm_campaign value
     *
     * @return $this
     */
    public function setGoogleAnalyticsCampaignName($google_analytics_campaign_name)
    {
        $this->container['google_analytics_campaign_name'] = $google_analytics_campaign_name;

        return $this;
    }

    /**
     * Gets link_params
     *
     * @return \IterableIA\Iterable\Model\LinkParam[]
     */
    public function getLinkParams()
    {
        return $this->container['link_params'];
    }

    /**
     * Sets link_params
     *
     * @param \IterableIA\Iterable\Model\LinkParam[] $link_params Parameters to append to each URL in html contents
     *
     * @return $this
     */
    public function setLinkParams($link_params)
    {
        $this->container['link_params'] = $link_params;

        return $this;
    }

    /**
     * Gets data_feed_id
     *
     * @return float
     */
    public function getDataFeedId()
    {
        return $this->container['data_feed_id'];
    }

    /**
     * Sets data_feed_id
     *
     * @param float $data_feed_id [Deprecated - use dataFeedIds instead] Id for data feed used in template rendering
     *
     * @return $this
     */
    public function setDataFeedId($data_feed_id)
    {
        $this->container['data_feed_id'] = $data_feed_id;

        return $this;
    }

    /**
     * Gets data_feed_ids
     *
     * @return float[]
     */
    public function getDataFeedIds()
    {
        return $this->container['data_feed_ids'];
    }

    /**
     * Sets data_feed_ids
     *
     * @param float[] $data_feed_ids Ids for data feeds used in template rendering
     *
     * @return $this
     */
    public function setDataFeedIds($data_feed_ids)
    {
        $this->container['data_feed_ids'] = $data_feed_ids;

        return $this;
    }

    /**
     * Gets cache_data_feed
     *
     * @return float
     */
    public function getCacheDataFeed()
    {
        return $this->container['cache_data_feed'];
    }

    /**
     * Sets cache_data_feed
     *
     * @param float $cache_data_feed Cache data feed lookups for 1 hour
     *
     * @return $this
     */
    public function setCacheDataFeed($cache_data_feed)
    {
        $this->container['cache_data_feed'] = $cache_data_feed;

        return $this;
    }

    /**
     * Gets merge_data_feed_context
     *
     * @return float
     */
    public function getMergeDataFeedContext()
    {
        return $this->container['merge_data_feed_context'];
    }

    /**
     * Sets merge_data_feed_context
     *
     * @param float $merge_data_feed_context Merge data feed contents into user context, so fields be referenced by {{field}} instead of [[field]]
     *
     * @return $this
     */
    public function setMergeDataFeedContext($merge_data_feed_context)
    {
        $this->container['merge_data_feed_context'] = $merge_data_feed_context;

        return $this;
    }

    /**
     * Gets client_template_id
     *
     * @return string
     */
    public function getClientTemplateId()
    {
        return $this->container['client_template_id'];
    }

    /**
     * Sets client_template_id
     *
     * @param string $client_template_id Client template Id. Used as a secondary key to reference the template
     *
     * @return $this
     */
    public function setClientTemplateId($client_template_id)
    {
        $this->container['client_template_id'] = $client_template_id;

        return $this;
    }

    /**
     * Gets locale
     *
     * @return \IterableIA\Iterable\Model\IterableLocale
     */
    public function getLocale()
    {
        return $this->container['locale'];
    }

    /**
     * Sets locale
     *
     * @param \IterableIA\Iterable\Model\IterableLocale $locale locale
     *
     * @return $this
     */
    public function setLocale($locale)
    {
        $this->container['locale'] = $locale;

        return $this;
    }

    /**
     * Gets message_type_id
     *
     * @return float
     */
    public function getMessageTypeId()
    {
        return $this->container['message_type_id'];
    }

    /**
     * Sets message_type_id
     *
     * @param float $message_type_id Message Type Id
     *
     * @return $this
     */
    public function setMessageTypeId($message_type_id)
    {
        $this->container['message_type_id'] = $message_type_id;

        return $this;
    }

    /**
     * Gets creator_user_id
     *
     * @return string
     */
    public function getCreatorUserId()
    {
        return $this->container['creator_user_id'];
    }

    /**
     * Sets creator_user_id
     *
     * @param string $creator_user_id Creator User Id
     *
     * @return $this
     */
    public function setCreatorUserId($creator_user_id)
    {
        $this->container['creator_user_id'] = $creator_user_id;

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
