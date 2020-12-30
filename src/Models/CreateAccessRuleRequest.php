<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class CreateAccessRuleRequest extends Model
{
    /**
     * @var string
     */
    public $accessGroupName;

    /**
     * @var string
     */
    public $sourceCidrIp;

    /**
     * @var string
     */
    public $RWAccessType;

    /**
     * @var string
     */
    public $userAccessType;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $fileSystemType;

    /**
     * @var string
     */
    public $ipv6SourceCidrIp;
    protected $_name = [
        'accessGroupName'  => 'AccessGroupName',
        'sourceCidrIp'     => 'SourceCidrIp',
        'RWAccessType'     => 'RWAccessType',
        'userAccessType'   => 'UserAccessType',
        'priority'         => 'Priority',
        'fileSystemType'   => 'FileSystemType',
        'ipv6SourceCidrIp' => 'Ipv6SourceCidrIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessGroupName) {
            $res['AccessGroupName'] = $this->accessGroupName;
        }
        if (null !== $this->sourceCidrIp) {
            $res['SourceCidrIp'] = $this->sourceCidrIp;
        }
        if (null !== $this->RWAccessType) {
            $res['RWAccessType'] = $this->RWAccessType;
        }
        if (null !== $this->userAccessType) {
            $res['UserAccessType'] = $this->userAccessType;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->fileSystemType) {
            $res['FileSystemType'] = $this->fileSystemType;
        }
        if (null !== $this->ipv6SourceCidrIp) {
            $res['Ipv6SourceCidrIp'] = $this->ipv6SourceCidrIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAccessRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessGroupName'])) {
            $model->accessGroupName = $map['AccessGroupName'];
        }
        if (isset($map['SourceCidrIp'])) {
            $model->sourceCidrIp = $map['SourceCidrIp'];
        }
        if (isset($map['RWAccessType'])) {
            $model->RWAccessType = $map['RWAccessType'];
        }
        if (isset($map['UserAccessType'])) {
            $model->userAccessType = $map['UserAccessType'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['FileSystemType'])) {
            $model->fileSystemType = $map['FileSystemType'];
        }
        if (isset($map['Ipv6SourceCidrIp'])) {
            $model->ipv6SourceCidrIp = $map['Ipv6SourceCidrIp'];
        }

        return $model;
    }
}
