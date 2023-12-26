<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeDataFlowTasksRequest;

use AlibabaCloud\Tea\Model;

class filters extends Model
{
    /**
     * @description *
     *
     * @example DataFlowIds
     *
     * @var string
     */
    public $key;

    /**
     * @description *   ````
     *   ````
     *
     *   ``
     *   ``
     *   ``
     *   ``
     *   ``
     *   ``
     *
     * @example dfid-12345678
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'key'   => 'Key',
        'value' => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return filters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
