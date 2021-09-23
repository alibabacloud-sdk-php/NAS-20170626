<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFileSystemsResponseBody\fileSystems\fileSystem\mountTargets\mountTarget\clientMasterNodes;

use AlibabaCloud\Tea\Model;

class clientMasterNode extends Model
{
    /**
     * @var string
     */
    public $ecsIp;

    /**
     * @var string
     */
    public $ecsId;

    /**
     * @var string
     */
    public $defaultPasswd;
    protected $_name = [
        'ecsIp'         => 'EcsIp',
        'ecsId'         => 'EcsId',
        'defaultPasswd' => 'DefaultPasswd',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ecsIp) {
            $res['EcsIp'] = $this->ecsIp;
        }
        if (null !== $this->ecsId) {
            $res['EcsId'] = $this->ecsId;
        }
        if (null !== $this->defaultPasswd) {
            $res['DefaultPasswd'] = $this->defaultPasswd;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clientMasterNode
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EcsIp'])) {
            $model->ecsIp = $map['EcsIp'];
        }
        if (isset($map['EcsId'])) {
            $model->ecsId = $map['EcsId'];
        }
        if (isset($map['DefaultPasswd'])) {
            $model->defaultPasswd = $map['DefaultPasswd'];
        }

        return $model;
    }
}
