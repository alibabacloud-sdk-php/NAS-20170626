<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class ModifyDataFlowAutoRefreshRequest extends Model
{
    /**
     * @description The automatic update interval. CPFS checks whether data is updated in the directory at the interval. If data is updated, CPFS runs an AutoRefresh task. Unit: minutes.
     *
     * Valid values: 5 to 526600. Default value: 10.
     * @example 10
     *
     * @var int
     */
    public $autoRefreshInterval;

    /**
     * @description The automatic update policy. CPFS imports data updates in the Object Storage Service (OSS) bucket to the CPFS file system based on this policy. Valid values:
     *
     *   None: CPFS does not automatically import data updates in the OSS bucket to the CPFS file system. You can import the data updates by using a dataflow task.
     *   ImportChanged: CPFS automatically imports data updates in the OSS bucket to the CPFS file system.
     *
     * @example None
     *
     * @var string
     */
    public $autoRefreshPolicy;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests.
     *
     * >  If you do not specify this parameter, the system automatically uses the request ID as the client token. The value of RequestId may be different for each API request.
     * @example 123e4567-e89b-12d3-a456-42665544****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The dataflow ID.
     *
     * This parameter is required.
     * @example dfid-194433a5be31****
     *
     * @var string
     */
    public $dataFlowId;

    /**
     * @description Specifies whether to perform a dry run.
     *
     * Valid values:
     *
     *   true: performs a dry run. The system checks the required parameters, request syntax, limits, and available NAS resources. If the request fails the dry run, an error message is returned. If the request passes the dry run, the HTTP status code 200 is returned. No value is returned for the FileSystemId parameter.
     *   false (default): performs a dry run and sends the request. If the request passes the dry run, a file system is created.
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The ID of the file system.
     *
     * This parameter is required.
     * @example cpfs-099394bd928c****
     *
     * @var string
     */
    public $fileSystemId;
    protected $_name = [
        'autoRefreshInterval' => 'AutoRefreshInterval',
        'autoRefreshPolicy'   => 'AutoRefreshPolicy',
        'clientToken'         => 'ClientToken',
        'dataFlowId'          => 'DataFlowId',
        'dryRun'              => 'DryRun',
        'fileSystemId'        => 'FileSystemId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoRefreshInterval) {
            $res['AutoRefreshInterval'] = $this->autoRefreshInterval;
        }
        if (null !== $this->autoRefreshPolicy) {
            $res['AutoRefreshPolicy'] = $this->autoRefreshPolicy;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->dataFlowId) {
            $res['DataFlowId'] = $this->dataFlowId;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDataFlowAutoRefreshRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoRefreshInterval'])) {
            $model->autoRefreshInterval = $map['AutoRefreshInterval'];
        }
        if (isset($map['AutoRefreshPolicy'])) {
            $model->autoRefreshPolicy = $map['AutoRefreshPolicy'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DataFlowId'])) {
            $model->dataFlowId = $map['DataFlowId'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }

        return $model;
    }
}
