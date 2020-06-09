<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class ApplyAutoSnapshotPolicyRequest extends Model {
    protected $_name = [
        'autoSnapshotPolicyId' => 'AutoSnapshotPolicyId',
        'fileSystemIds' => 'FileSystemIds',
    ];
    public function validate() {
        Model::validateRequired('autoSnapshotPolicyId', $this->autoSnapshotPolicyId, true);
        Model::validateRequired('fileSystemIds', $this->fileSystemIds, true);
    }
    public function toMap() {
        $res = [];
        $res['AutoSnapshotPolicyId'] = $this->autoSnapshotPolicyId;
        $res['FileSystemIds'] = $this->fileSystemIds;
        return $res;
    }
    /**
     * @param array $map
     * @return ApplyAutoSnapshotPolicyRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['AutoSnapshotPolicyId'])){
            $model->autoSnapshotPolicyId = $map['AutoSnapshotPolicyId'];
        }
        if(isset($map['FileSystemIds'])){
            $model->fileSystemIds = $map['FileSystemIds'];
        }
        return $model;
    }
    /**
     * @description autoSnapshotPolicyId
     * @var string
     */
    public $autoSnapshotPolicyId;

    /**
     * @description volumes
     * @var string
     */
    public $fileSystemIds;

}
