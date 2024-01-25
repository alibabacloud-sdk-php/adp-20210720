<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models;

use AlibabaCloud\SDK\Adp\V20210720\Models\GetPayAsYouGoPriceData\moduleList;
use AlibabaCloud\Tea\Model;

class GetPayAsYouGoPriceData extends Model
{
    /**
     * @var moduleList[]
     */
    public $moduleList;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var string
     */
    public $productType;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $subscriptionType;
    protected $_name = [
        'moduleList'       => 'ModuleList',
        'ownerId'          => 'OwnerId',
        'productCode'      => 'ProductCode',
        'productType'      => 'ProductType',
        'region'           => 'Region',
        'subscriptionType' => 'SubscriptionType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->moduleList) {
            $res['ModuleList'] = [];
            if (null !== $this->moduleList && \is_array($this->moduleList)) {
                $n = 0;
                foreach ($this->moduleList as $item) {
                    $res['ModuleList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->subscriptionType) {
            $res['SubscriptionType'] = $this->subscriptionType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPayAsYouGoPriceData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ModuleList'])) {
            if (!empty($map['ModuleList'])) {
                $model->moduleList = [];
                $n                 = 0;
                foreach ($map['ModuleList'] as $item) {
                    $model->moduleList[$n++] = null !== $item ? moduleList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['SubscriptionType'])) {
            $model->subscriptionType = $map['SubscriptionType'];
        }

        return $model;
    }
}
