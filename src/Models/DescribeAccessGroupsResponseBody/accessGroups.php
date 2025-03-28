<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeAccessGroupsResponseBody;

use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeAccessGroupsResponseBody\accessGroups\accessGroup;
use AlibabaCloud\Tea\Model;

class accessGroups extends Model
{
    /**
     * @var accessGroup[]
     */
    public $accessGroup;
    protected $_name = [
        'accessGroup' => 'AccessGroup',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessGroup) {
            $res['AccessGroup'] = [];
            if (null !== $this->accessGroup && \is_array($this->accessGroup)) {
                $n = 0;
                foreach ($this->accessGroup as $item) {
                    $res['AccessGroup'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return accessGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessGroup'])) {
            if (!empty($map['AccessGroup'])) {
                $model->accessGroup = [];
                $n = 0;
                foreach ($map['AccessGroup'] as $item) {
                    $model->accessGroup[$n++] = null !== $item ? accessGroup::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
