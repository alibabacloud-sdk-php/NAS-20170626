<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFileSystemStatisticsResponseBody\fileSystems;

use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFileSystemStatisticsResponseBody\fileSystems\fileSystem\packages;
use AlibabaCloud\Tea\Model;

class fileSystem extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $capacity;

    /**
     * @var int
     */
    public $meteredIASize;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $storageType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $fileSystemType;

    /**
     * @var string
     */
    public $fileSystemId;

    /**
     * @var int
     */
    public $meteredSize;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $expiredTime;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var packages
     */
    public $packages;

    /**
     * @var string
     */
    public $protocolType;
    protected $_name = [
        'status'         => 'Status',
        'capacity'       => 'Capacity',
        'meteredIASize'  => 'MeteredIASize',
        'createTime'     => 'CreateTime',
        'chargeType'     => 'ChargeType',
        'storageType'    => 'StorageType',
        'regionId'       => 'RegionId',
        'fileSystemType' => 'FileSystemType',
        'fileSystemId'   => 'FileSystemId',
        'meteredSize'    => 'MeteredSize',
        'description'    => 'Description',
        'expiredTime'    => 'ExpiredTime',
        'zoneId'         => 'ZoneId',
        'packages'       => 'Packages',
        'protocolType'   => 'ProtocolType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->capacity) {
            $res['Capacity'] = $this->capacity;
        }
        if (null !== $this->meteredIASize) {
            $res['MeteredIASize'] = $this->meteredIASize;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->fileSystemType) {
            $res['FileSystemType'] = $this->fileSystemType;
        }
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }
        if (null !== $this->meteredSize) {
            $res['MeteredSize'] = $this->meteredSize;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->packages) {
            $res['Packages'] = null !== $this->packages ? $this->packages->toMap() : null;
        }
        if (null !== $this->protocolType) {
            $res['ProtocolType'] = $this->protocolType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fileSystem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Capacity'])) {
            $model->capacity = $map['Capacity'];
        }
        if (isset($map['MeteredIASize'])) {
            $model->meteredIASize = $map['MeteredIASize'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['FileSystemType'])) {
            $model->fileSystemType = $map['FileSystemType'];
        }
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }
        if (isset($map['MeteredSize'])) {
            $model->meteredSize = $map['MeteredSize'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['Packages'])) {
            $model->packages = packages::fromMap($map['Packages']);
        }
        if (isset($map['ProtocolType'])) {
            $model->protocolType = $map['ProtocolType'];
        }

        return $model;
    }
}
