<?php
/**
 * 分页获取数据
 *
 * @author xiaomo<i@nixiaomo.com>
 */

namespace app\lib\validate;


class PageParameter extends BaseValidate
{
    protected $rule = [
        'page' => 'isPositiveInteger',
        'size' => 'isPositiveInteger'
    ];

    protected $message = [
        'page' => '分页参数必须是正整数',
        'size' => '分页参数必须是正整数'
    ];
}