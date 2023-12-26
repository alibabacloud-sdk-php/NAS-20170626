<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class DeleteAutoSnapshotPolicyRequest extends Model
{
    /**
     * @description The ID of the automatic snapshot policy.
     *
     * You can call the [DescribeAutoSnapshotPolicies](~~126583~~) operation to view available automatic snapshot policies.
     * @example sp-extreme-233e6****
     *
     * @var string
     */
    public $autoSnapshotPolicyId;
    protected $_name = [
        'autoSnapshotPolicyId' => 'AutoSnapshotPolicyId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoSnapshotPolicyId) {
            $res['AutoSnapshotPolicyId'] = $this->autoSnapshotPolicyId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteAutoSnapshotPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoSnapshotPolicyId'])) {
            $model->autoSnapshotPolicyId = $map['AutoSnapshotPolicyId'];
        }

        return $model;
    }
}
