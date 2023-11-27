<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Mna\V20210119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetVendorHardware请求参数结构体
 *
 * @method integer getPageNumber() 获取页码
 * @method void setPageNumber(integer $PageNumber) 设置页码
 * @method integer getPageSize() 获取页面数量
 * @method void setPageSize(integer $PageSize) 设置页面数量
 * @method string getKeyword() 获取关键字
 * @method void setKeyword(string $Keyword) 设置关键字
 * @method integer getStatus() 获取激活状态，
空：全部；
1:待激活；
2:已激活；
 * @method void setStatus(integer $Status) 设置激活状态，
空：全部；
1:待激活；
2:已激活；
 */
class GetVendorHardwareRequest extends AbstractModel
{
    /**
     * @var integer 页码
     */
    public $PageNumber;

    /**
     * @var integer 页面数量
     */
    public $PageSize;

    /**
     * @var string 关键字
     */
    public $Keyword;

    /**
     * @var integer 激活状态，
空：全部；
1:待激活；
2:已激活；
     */
    public $Status;

    /**
     * @param integer $PageNumber 页码
     * @param integer $PageSize 页面数量
     * @param string $Keyword 关键字
     * @param integer $Status 激活状态，
空：全部；
1:待激活；
2:已激活；
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
