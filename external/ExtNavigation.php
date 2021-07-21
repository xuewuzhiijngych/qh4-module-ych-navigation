<?php

namespace qh4module\navigation\external;


use qttx\web\External;

class ExtNavigation extends External
{
    /**
     * @return string 导航（金刚区）表
     */
    public function TableName()
    {
        return '{{%navigation}}';
    }
}