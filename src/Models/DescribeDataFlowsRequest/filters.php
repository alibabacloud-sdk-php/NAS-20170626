<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeDataFlowsRequest;

use AlibabaCloud\Tea\Model;

class filters extends Model
{
    /**
     * @description The filter name. Valid values:
     *
     *   DataFlowIds: filters data flows by data flow ID.
     *   FsetIds: filters data flows by fileset ID.
     *   FileSystemPath: filters data flows based on the path of a fileset in a CPFS file system.
     *   SourceStorage: filters data flows based on the access path of the source storage.
     *   ThroughputList: filters data flows based on data flow throughput.
     *   Description: filters data flows based on the fileset description.
     *   Status: filters data flows based on data flow status.
     *
     * @example FsetIds
     *
     * @var string
     */
    public $key;

    /**
     * @description The filter value. This parameter does not support wildcards.
     *
     *   If Key is set to DataFlowIds, set Value to a data flow ID or a part of the data flow ID. You can specify a data flow ID or a group of data flow IDs. You can specify a maximum of 10 data flow IDs. Example: `dfid-12345678` or `dfid-12345678,dfid-12345679`.
     *   If Key is set to FsetIds, set Value to a fileset ID or a part of the fileset ID. You can specify a fileset ID or a group of fileset IDs. You can specify a maximum of 10 fileset IDs. Example: `fset-12345678` or `fset-12345678,fset-12345679`.
     *   If Key is set to FileSystemPath, set Value to the path or a part of the path of a fileset in a CPFS file system. The value of the parameter must be 1 to 1,024 characters in length.
     *   If Key is set to SourceStorage, set Value to the access path or a part of the access path of the source storage. The path can be up to 1,024 characters in length.
     *   If Key is set to ThroughputList, set Value to the data flow throughput. Combined query is supported.
     *   If Key is set to Description, set Value to a data flow description or a part of the data flow description.
     *   If Key is set to Status, set Value to the data flow status.
     *   If Key is set to SourceStoragePath, set Value to the access path or a part of the access path of the source storage. The path can be up to 1,024 characters in length.
     *
     * @example FsetIds
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
