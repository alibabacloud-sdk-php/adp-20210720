<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models;

use AlibabaCloud\SDK\Adp\V20210720\Models\ListProductInstancesRequest\options;
use AlibabaCloud\Tea\Model;

class ListProductInstancesRequest extends Model
{
    /**
     * @example b8ec63af-7859-4464-9cff-xxx
     *
     * @var string
     */
    public $envUID;

    /**
     * @var options
     */
    public $options;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNum;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example a38eaad7-d1e7-4395-8d8a-xxx
     *
     * @var string
     */
    public $productVersionUID;
    protected $_name = [
        'envUID'            => 'envUID',
        'options'           => 'options',
        'pageNum'           => 'pageNum',
        'pageSize'          => 'pageSize',
        'productVersionUID' => 'productVersionUID',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->envUID) {
            $res['envUID'] = $this->envUID;
        }
        if (null !== $this->options) {
            $res['options'] = null !== $this->options ? $this->options->toMap() : null;
        }
        if (null !== $this->pageNum) {
            $res['pageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->productVersionUID) {
            $res['productVersionUID'] = $this->productVersionUID;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListProductInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['envUID'])) {
            $model->envUID = $map['envUID'];
        }
        if (isset($map['options'])) {
            $model->options = options::fromMap($map['options']);
        }
        if (isset($map['pageNum'])) {
            $model->pageNum = $map['pageNum'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['productVersionUID'])) {
            $model->productVersionUID = $map['productVersionUID'];
        }

        return $model;
    }
}
