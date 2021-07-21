<?php

namespace qh4module\navigation\models;

use qttx\helper\ArrayHelper;

/**
 * tbl_navigation表更新一条数据
 * Class Update
 * @package qh4module\navigation\models
 */
class Update extends NavigationModel
{
    /**
     * @var int 接收参数,必须：ID
     */
    public $id;

    /**
     * @var string 接收参数,必须：名称
     */
    public $name;

    /**
     * @var string 接收参数,必须：跳转url
     */
    public $url;

    /**
     * @var int 接收参数,必须：排序
     */
    public $sort;

    /**
     * @var string 接收参数,必须：图片
     */
    public $img;

    /**
     * @var int 接收参数,必须：状态1.正常，0，禁用
     */
    public $status;


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
        // 查询的字段
        $fields = ['id', 'name', 'url', 'sort', 'img', 'status'];

        $db = $this->external->getDb();
        $table_name = $this->external->TableName();

        $db->update($table_name)
            ->cols([
                'name' => $this->name,
                'img' => $this->img,
                'url' => $this->url,
                'status' => $this->status,
                'sort' => $this->sort,
            ])
            ->whereArray(['id' => $this->id])
            ->query();
        return true;
    }
}