<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models\GetPayAsYouGoPriceData;

use AlibabaCloud\Tea\Model;

class moduleList extends Model
{
    /**
     * @var string
     */
    public $config;

    /**
     * @var string
     */
    public $moduleCode;

    /**
     * @var string
     */
    public $priceType;
    protected $_name = [
        'config'     => 'Config',
        'moduleCode' => 'ModuleCode',
        'priceType'  => 'PriceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }
        if (null !== $this->moduleCode) {
            $res['ModuleCode'] = $this->moduleCode;
        }
        if (null !== $this->priceType) {
            $res['PriceType'] = $this->priceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return moduleList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['ModuleCode'])) {
            $model->moduleCode = $map['ModuleCode'];
        }
        if (isset($map['PriceType'])) {
            $model->priceType = $map['PriceType'];
        }

        return $model;
    }
}
