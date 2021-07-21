<?php


namespace qh4module\navigation\models;


use qttx\helper\ArrayHelper;
use qttx\web\ServiceModel;

/**
 * tbl_navigation表改变status状态 取反
 * Class Update
 * @package qh4module\navigation\models
 */
class ChangStatus extends ServiceModel
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
        $fields = ['id', 'status'];

        $db = $this->external->getDb();
        $table_name = $this->external->TableName();

        $old = $db
            ->select($fields)
            ->from($table_name)
            ->whereArray(['id' => $this->id])
            ->row();
        if (empty($old)) {
            $this->addError('id', '更新条目不存在');
            return false;
        }

        $db->update($table_name)
            ->cols([
                'status' => (int)!$old['status'],
            ])
            ->whereArray(['id' => $this->id])
            ->query();
        return true;
    }
}