<?php

namespace qh4module\navigation\models;


use qttx\helper\ArrayHelper;

/**
 * tbl_navigation表删除一条数据（软删除）
 * Class Create
 * @package qh4module\navigation\models
 */
class Delete extends NavigationModel
{
    /**
     * @var int 接收参数,必须：ID
     */
    public $id;


    /**
     * @inheritDoc
     */
    public function rules()
    {
        return ArrayHelper::merge([
            ['id', 'required']
        ], parent::rules());
    }

    /**
     * @inheritDoc
     */
    public function run()
    {
        $table_name = $this->external->TableName();
        
        $this->external->getDb()
            ->update($table_name)
            ->col('del_time', time())
            ->whereArray(['id' => $this->id])
            ->query();
        return true;
    }
}