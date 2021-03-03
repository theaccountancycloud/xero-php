<?php

namespace XeroPHP\Models\Assets;

use XeroPHP\Remote;
use XeroPHP\Models\Assets\AssetType\BookDepreciationSetting;
use XeroPHP\Models\Assets\AssetType\BookDepreciationDetail;
use XeroPHP\Traits\HasJsonRequestTrait;

class Asset extends Remote\Model
{
    use HasJsonRequestTrait;

    /**
     * The Xero-generated Id for the asset.
     *
     * @property string assetId
     */
    
    /**
     * The name of the asset.
     *
     * @property string assetName
     */
    
    /**
     * The number of the asset.
     *
     * @property string assetNumber
     */
    
    /**
     * The date the asset was purchased YYYY-MM-DD.
     *
     * @property \DateTimeInterface purchaseDate
     */
    
    /**
     * The purchase price of the asset.
     *
     * @property float purchasePrice
     */
    
    /**
     * The price the asset was disposed at.
     *
     * @property float disposalPrice
     */

    /**
     * The date the asset was disposed.
     *
     * @property \DateTimeInterface disposalDate
     */

    /**
     * See Asset Status Codes.
     *
     * @property string assetStatus
     */

    /**
     * The date the asset’s warranty expires (if needed) YYYY-MM-DD.
     *
     * @property \DateTimeInterface warrantyExpiryDate
     */

    /**
     * The asset's serial number.
     *
     * @property string serialNumber
     */
    
    /**
     * See Book Depreciation Settings.
     *
     * @property BookDepreciationSetting bookDepreciationSetting
     */
    
    /**
     * See Book Depreciation Detail.
     *
     * @property BookDepreciationDetail bookDepreciationDetail
     */
    
    /**
     * Boolean to indicate whether depreciation can be rolled back for this asset individually. 
     * This is true if it doesn't have 'legacy' journal entries and if there is no lock period 
     * that would prevent this asset from rolling back.
     *
     * @property boolean canRollBack
     */
    
    /**
     * The accounting value of the asset.
     *
     * @property float accountingBookValue
     */

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
    public function getassetId()
    {
        return $this->_data['assetId'];
    }

    /**
     * @return string
     */
    public function getassetName()
    {
        return $this->_data['assetName'];
    }

    /**
     * @param string $value
     *
     * @return Asset
     */
    public function setassetName($value)
    {
        $this->propertyUpdated('assetName', $value);
        $this->_data['assetName'] = $value;

        return $this;
    }

    /**
     * @return string
     */
    public function getassetNumber()
    {
        return $this->_data['assetNumber'];
    }

    /**
     * @param string $value
     *
     * @return Asset
     */
    public function setassetNumber($value)
    {
        $this->propertyUpdated('assetNumber', $value);
        $this->_data['assetNumber'] = $value;

        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getpurchaseDate()
    {
        return $this->_data['purchaseDate'];
    }

    /**
     * @param \DateTimeInterface $value
     *
     * @return Asset
     */
    public function setpurchaseDate($value)
    {
        $this->propertyUpdated('purchaseDate', $value);
        $this->_data['purchaseDate'] = $value;

        return $this;
    }

    /**
     * @return float
     */
    public function getpurchasePrice()
    {
        return $this->_data['purchasePrice'];
    }

    /**
     * @param float $value
     *
     * @return Asset
     */
    public function setpurchasePrice($value)
    {
        $this->propertyUpdated('purchasePrice', $value);
        $this->_data['purchasePrice'] = $value;

        return $this;
    }

    /**
     * @return float
     */
    public function getdisposalPrice()
    {
        return $this->_data['disposalPrice'];
    }

    /**
     * @return \DateTimeInterface
     */
    public function getdisposalDate()
    {
        return $this->_data['disposalDate'];
    }

    /**
     * @return string
     */
    public function getassetStatus()
    {
        return $this->_data['assetStatus'];
    }

    /**
     * @param string $value
     *
     * @return Asset
     */
    public function setassetStatus($value)
    {
        $this->propertyUpdated('assetStatus', $value);
        $this->_data['assetStatus'] = $value;

        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getwarrantyExpiryDate()
    {
        return $this->_data['warrantyExpiryDate'];
    }

    /**
     * @param \DateTimeInterface $value
     *
     * @return Asset
     */
    public function setwarrantyExpiryDate($value)
    {
        $this->propertyUpdated('warrantyExpiryDate', $value);
        $this->_data['warrantyExpiryDate'] = $value;

        return $this;
    }

    /**
     * @return string
     */
    public function getserialNumber()
    {
        return $this->_data['serialNumber'];
    }

    /**
     * @param string $value
     *
     * @return Asset
     */
    public function setserialNumber($value)
    {
        $this->propertyUpdated('serialNumber', $value);
        $this->_data['serialNumber'] = $value;

        return $this;
    }

    /**
     * @return BookDepreciationDetail
     */
    public function getbookDepreciationDetail()
    {
        return $this->_data['bookDepreciationDetail'];
    }

    /**
     * @return BookDepreciationSetting
     */
    public function getbookDepreciationSetting()
    {
        return $this->_data['bookDepreciationSetting'];
    }
}