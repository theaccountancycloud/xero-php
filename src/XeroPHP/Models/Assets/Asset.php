<?php

namespace XeroPHP\Models\Assets;

use XeroPHP\Remote;
use XeroPHP\Models\Assets\AssetType\BookDepreciationSetting;

use XeroPHP\Traits\HasJsonRequestTrait;

class Asset extends Remote\Model
{
    use HasJsonRequestTrait;

    /**
     * Get the resource uri of the class (Contacts) etc.
     *
     * @return string
     */
    public static function getResourceURI()
    {
        return 'Assets';
    }

    /**
     * Get the root node name.  Just the unqualified classname.
     *
     * @return string
     */
    public static function getRootNodeName()
    {
        return 'Asset';
    }

    /**
     * Get the guid property.
     *
     * @return string
     */
    public static function getGUIDProperty()
    {
        return 'assetId';
    }

    /**
     * Get the stem of the API (core.xro) etc.
     *
     * @return string|null
     */
    public static function getAPIStem()
    {
        return Remote\URL::API_ASSET;
    }

    /**
     * Get the supported methods.
     */
    public static function getSupportedMethods()
    {
        return [
            Remote\Request::METHOD_GET,
            Remote\Request::METHOD_POST,
        ];
    }

    /**
     * Get the properties of the object.  Indexed by constants
     *  [0] - Mandatory
     *  [1] - Type
     *  [2] - PHP type
     *  [3] - Is an Array
     *  [4] - Saves directly.
     *
     * @return array
     */
    public static function getProperties()
    {
        return [
            'assetId' => [false, self::PROPERTY_TYPE_GUID, null, false, false],
            'assetName' => [true, self::PROPERTY_TYPE_STRING, null, false, false],
            'assetNumber' => [true, self::PROPERTY_TYPE_STRING, null, false, false],
            'purchaseDate' => [false, self::PROPERTY_TYPE_DATE, '\\DateTimeInterface', false, false],
            'purchasePrice' => [false, self::PROPERTY_TYPE_FLOAT, null, false, false],
            'disposalPrice' => [false, self::PROPERTY_TYPE_FLOAT, null, false, false],
            'disposalDate' => [false, self::PROPERTY_TYPE_DATE, '\\DateTimeInterface', false, false],
            'assetStatus' => [false, self::PROPERTY_TYPE_STRING, null, false, false],
            'warrantyExpiryDate' => [false, self::PROPERTY_TYPE_DATE, '\\DateTimeInterface', false, false],
            'serialNumber' => [false, self::PROPERTY_TYPE_STRING, null, false, false],
            'bookDepreciationSetting' => [false, self::PROPERTY_TYPE_OBJECT, 'Assets\\AssetType\\BookDepreciationSetting', false, false],
            'bookDepreciationDetail' => [false, self::PROPERTY_TYPE_OBJECT, 'Assets\\AssetType\\BookDepreciationDetail', false, false],
            'canRollback' => [false, self::PROPERTY_TYPE_BOOLEAN, null, false, false],
            'accountingBookValue' => [false, self::PROPERTY_TYPE_FLOAT, null, false, false]
        ];
    }

    public static function isPageable()
    {
        return true;
    }

    /**
     * @return string
     */
    public function getAssetName()
    {
        return $this->_data['assetName'];
    }

    /**
     * @param string $value
     *
     * @return AssetType
     */
    public function setAssetName($value)
    {
        $this->propertyUpdated('assetName', $value);
        $this->_data['assetName'] = $value;

        return $this;
    }

    /**
     * @return string
     */
    public function getAssetId()
    {
        return $this->_data['assetId'];
    }

    /**
     * @param string $value
     *
     * @return AssetType
     */
    public function setAssetId($value)
    {
        $this->propertyUpdated('assetId', $value);
        $this->_data['assetId'] = $value;

        return $this;
    }
}