<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models\Resource;

use AlibabaCloud\Tea\Model;

class storage extends Model
{
    /**
     * @var int
     */
    public $required;
    protected $_name = [
        'required' => 'required',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->required) {
            $res['required'] = $this->required;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return storage
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['required'])) {
            $model->required = $map['required'];
        }

        return $model;
    }
}
