<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Dara\Model;

class CancelDataFlowAutoRefreshRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;
    /**
     * @var string
     */
    public $dataFlowId;
    /**
     * @var bool
     */
    public $dryRun;
    /**
     * @var string
     */
    public $fileSystemId;
    /**
     * @var string
     */
    public $refreshPath;
    protected $_name = [
        'clientToken'  => 'ClientToken',
        'dataFlowId'   => 'DataFlowId',
        'dryRun'       => 'DryRun',
        'fileSystemId' => 'FileSystemId',
        'refreshPath'  => 'RefreshPath',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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

        if (null !== $this->refreshPath) {
            $res['RefreshPath'] = $this->refreshPath;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
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

        if (isset($map['RefreshPath'])) {
            $model->refreshPath = $map['RefreshPath'];
        }

        return $model;
    }
}
