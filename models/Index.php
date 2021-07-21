<?php

namespace qh4module\navigation\models;

use qttx\helper\ArrayHelper;
/**
 * 获取tbl_navigation表的数据
 * Class Index
 * @package qh4module\navigation\models
 */
class Index extends NavigationModel
{
    /**
     * @inheritDoc
     */
    public function rules()
    {
        return parent::rules();
    }

    /**
     * @inheritDoc
     */
    public function run()
    {

        // 查询的字段
        $fields = ['id', 'name', 'url', 'sort', 'img', 'status'];

        $table_name = $this->external->TableName();
        $db = $this->external->getDb();

        $sql = $db->select($fields)->from($table_name);
        $data = $sql
            ->whereArray([
                'del_time' => 0,
            ])
            ->orderBy(['sort' => 'desc', 'name' => 'sort'])
            ->query();

        $total = $db->single('SELECT FOUND_ROWS()');

        return array(
            'total' => $total,
            'list' => $data,
        );
    }
}
