<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeLifecyclePoliciesResponseBody;

use AlibabaCloud\Tea\Model;

class lifecyclePolicies extends Model
{
    /**
     * @description The time when the lifecycle policy was created.
     *
     * The time follows the ISO 8601 standard in the `yyyy-MM-ddTHH:mm:ssZ` format.
     *
     * @example 2019-10-30T10:08:08Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @var bool
     */
    public $enableLifecycle;

    /**
     * @description The ID of the file system.
     *
     * @example 31a8e4****
     *
     * @var string
     */
    public $fileSystemId;

    /**
     * @var string[]
     */
    public $fsetIds;

    /**
     * @description The name of the lifecycle policy.
     *
     * @example lifecyclepolicy_01
     *
     * @var string
     */
    public $lifecyclePolicyName;

    /**
     * @description The management rule that is associated with the lifecycle policy.
     *
     * Valid values:
     *
     *   DEFAULT_ATIME_14: Files that are not accessed in the last 14 days are dumped to the IA storage medium.
     *   DEFAULT_ATIME_30: Files that are not accessed in the last 30 days are dumped to the IA storage medium.
     *   DEFAULT_ATIME_60: Files that are not accessed in the last 60 days are dumped to the IA storage medium.
     *   DEFAULT_ATIME_90: Files that are not accessed in the last 90 days are dumped to the IA storage medium.
     *
     * @example DEFAULT_ATIME_14
     *
     * @var string
     */
    public $lifecycleRuleName;

    /**
     * @var string
     */
    public $lifecycleRuleType;

    /**
     * @description The absolute path of a directory with which the lifecycle policy is associated.
     *
     * @example /pathway/to/folder
     *
     * @var string
     */
    public $path;

    /**
     * @description The absolute paths to multiple directories associated with the lifecycle policy.
     *
     * @var string[]
     */
    public $paths;

    /**
     * @var string
     */
    public $status;

    /**
     * @description The storage type of the data that is dumped to the IA storage medium.
     *
     * Default value: InfrequentAccess (IA).
     *
     * @example InfrequentAccess
     *
     * @var string
     */
    public $storageType;
    protected $_name = [
        'createTime' => 'CreateTime',
        'enableLifecycle' => 'EnableLifecycle',
        'fileSystemId' => 'FileSystemId',
        'fsetIds' => 'FsetIds',
        'lifecyclePolicyName' => 'LifecyclePolicyName',
        'lifecycleRuleName' => 'LifecycleRuleName',
        'lifecycleRuleType' => 'LifecycleRuleType',
        'path' => 'Path',
        'paths' => 'Paths',
        'status' => 'Status',
        'storageType' => 'StorageType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->enableLifecycle) {
            $res['EnableLifecycle'] = $this->enableLifecycle;
        }
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }
        if (null !== $this->fsetIds) {
            $res['FsetIds'] = $this->fsetIds;
        }
        if (null !== $this->lifecyclePolicyName) {
            $res['LifecyclePolicyName'] = $this->lifecyclePolicyName;
        }
        if (null !== $this->lifecycleRuleName) {
            $res['LifecycleRuleName'] = $this->lifecycleRuleName;
        }
        if (null !== $this->lifecycleRuleType) {
            $res['LifecycleRuleType'] = $this->lifecycleRuleType;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->paths) {
            $res['Paths'] = $this->paths;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return lifecyclePolicies
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['EnableLifecycle'])) {
            $model->enableLifecycle = $map['EnableLifecycle'];
        }
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }
        if (isset($map['FsetIds'])) {
            if (!empty($map['FsetIds'])) {
                $model->fsetIds = $map['FsetIds'];
            }
        }
        if (isset($map['LifecyclePolicyName'])) {
            $model->lifecyclePolicyName = $map['LifecyclePolicyName'];
        }
        if (isset($map['LifecycleRuleName'])) {
            $model->lifecycleRuleName = $map['LifecycleRuleName'];
        }
        if (isset($map['LifecycleRuleType'])) {
            $model->lifecycleRuleType = $map['LifecycleRuleType'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['Paths'])) {
            if (!empty($map['Paths'])) {
                $model->paths = $map['Paths'];
            }
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }

        return $model;
    }
}
