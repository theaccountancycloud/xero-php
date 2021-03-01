<?php

namespace XeroPHP\Models\Assets\AssetType;

use XeroPHP\Remote;

class BookDepreciationDetail extends Remote\Model
{
    /**
     * When an asset is disposed, this will be the sell price minus 
     * the purchase price if a profit was made.
     *
     * @property float currentCapitalGain
     */
    
    /**
     * When an asset is disposed, this will be the lowest one of sell
     * price or purchase price, minus the current book value.
     *
     * @property float currentGainLoss
     */
    
    /**
     * YYYY-MM-DD.
     *
     * @property \DateTimeInterface depreciationStartDate
     */
    
    /**
     * The value of the asset you want to depreciate, if this is less 
     * than the cost of the asset.
     *
     * @property float costLimit
     */
    
    /**
     * The value of the asset remaining when you've fully depreciated it.
     *
     * @property float residualValue
     */
    
    /**
     * All depreciation prior to the current financial year.
     *
     * @property float priorAccumDepreciationAmount
     */
    
    /**
     * All depreciation occurring in the current financial year.
     *
     * @property float currentAccumDepreciationAmount
     */

    /**
     * Get the resource uri of the class (Contacts) etc.
     *
     * @return string
     */
    public static function getResourceURI()
    {
        return 'BookDepreciationDetail';
    }

    /**
     * Get the root node name.  Just the unqualified classname.
     *
     * @return string
     */
    public static function getRootNodeName()
    {
        return 'BookDepreciationDetail';
    }

    /**
     * Get the guid property.
     *
     * @return string
     */
    public static function getGUIDProperty()
    {
        return '';
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
            'currentCapitalGain' => [false, self::PROPERTY_TYPE_FLOAT, null, false, false],
            'currentGainLoss' => [false, self::PROPERTY_TYPE_FLOAT, null, false, false],
            'depreciationStartDate' => [false, self::PROPERTY_TYPE_DATE, '\\DateTimeInterface', false, false],
            'costLimit' => [false, self::PROPERTY_TYPE_FLOAT, null, false, false],
            'residualValue' => [false, self::PROPERTY_TYPE_FLOAT, null, false, false],
            'priorAccumDepreciationAmount' => [false, self::PROPERTY_TYPE_FLOAT, null, false, false],
            'currentAccumDepreciationAmount' => [false, self::PROPERTY_TYPE_FLOAT, null, false, false]
        ];
    }

    public static function isPageable()
    {
        return false;
    }
}
