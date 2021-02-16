<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFileSystemStatisticsResponseBody\fileSystems;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFileSystemStatisticsResponseBody\fileSystemStatistics;
use AlibabaCloud\Tea\Model;

class DescribeFileSystemStatisticsResponseBody extends Model
{
    /**
     * @var fileSystems
     */
    public $fileSystems;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var fileSystemStatistics
     */
    public $fileSystemStatistics;
    protected $_name = [
        'fileSystems'          => 'FileSystems',
        'totalCount'           => 'TotalCount',
        'requestId'            => 'RequestId',
        'pageSize'             => 'PageSize',
        'pageNumber'           => 'PageNumber',
        'fileSystemStatistics' => 'FileSystemStatistics',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileSystems) {
            $res['FileSystems'] = null !== $this->fileSystems ? $this->fileSystems->toMap() : null;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->fileSystemStatistics) {
            $res['FileSystemStatistics'] = null !== $this->fileSystemStatistics ? $this->fileSystemStatistics->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeFileSystemStatisticsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileSystems'])) {
            $model->fileSystems = fileSystems::fromMap($map['FileSystems']);
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['FileSystemStatistics'])) {
            $model->fileSystemStatistics = fileSystemStatistics::fromMap($map['FileSystemStatistics']);
        }

        return $model;
    }
}
