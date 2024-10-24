<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class CancelDataFlowSubTaskRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests.
     *
     * >  If you do not specify this parameter, the system automatically uses the request ID as the client token. The request ID may be different for each request.
     * @example 123e4567-e89b-12d3-a456-42665544****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The ID of the data flow.
     *
     * This parameter is required.
     * @example df-194433a5be31****
     *
     * @var string
     */
    public $dataFlowId;

    /**
     * @description The ID of the data streaming task.
     *
     * This parameter is required.
     * @example subTaskId-370kyfmyknxcyzw****
     *
     * @var string
     */
    public $dataFlowSubTaskId;

    /**
     * @description The ID of the data flow task.
     *
     * This parameter is required.
     * @example task-38aa8e890f45****
     *
     * @var string
     */
    public $dataFlowTaskId;

    /**
     * @description Specifies whether to perform a dry run.
     *
     * Valid values:
     *
     *   true: performs a dry run. The system checks the required parameters, request syntax, service limits, and available Apsara File Storage NAS (NAS) resources. If the request fails the dry run, an error message is returned. If the request passes the dry run, the HTTP status code 200 is returned.
     *   false (default): performs a dry run and sends the request. If the request passes the dry run, a data streaming task is created.
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
     * @example bmcpfs-370lx1ev9ss27o0****
     *
     * @var string
     */
    public $fileSystemId;
    protected $_name = [
        'clientToken'       => 'ClientToken',
        'dataFlowId'        => 'DataFlowId',
        'dataFlowSubTaskId' => 'DataFlowSubTaskId',
        'dataFlowTaskId'    => 'DataFlowTaskId',
        'dryRun'            => 'DryRun',
        'fileSystemId'      => 'FileSystemId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->dataFlowId) {
            $res['DataFlowId'] = $this->dataFlowId;
        }
        if (null !== $this->dataFlowSubTaskId) {
            $res['DataFlowSubTaskId'] = $this->dataFlowSubTaskId;
        }
        if (null !== $this->dataFlowTaskId) {
            $res['DataFlowTaskId'] = $this->dataFlowTaskId;
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
     * @return CancelDataFlowSubTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DataFlowId'])) {
            $model->dataFlowId = $map['DataFlowId'];
        }
        if (isset($map['DataFlowSubTaskId'])) {
            $model->dataFlowSubTaskId = $map['DataFlowSubTaskId'];
        }
        if (isset($map['DataFlowTaskId'])) {
            $model->dataFlowTaskId = $map['DataFlowTaskId'];
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
