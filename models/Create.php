<?php

namespace qh4module\navigation\models;


use qttx\helper\ArrayHelper;

/**
 * tbl_navigation表新增一条数据
 * Class Create
 * @package qh4module\navigation\models
 */
class Create extends NavigationModel
{

    /**
     * @var string 接收参数,必须：名称
     */
    public $name;

    /**
     * @var string 接收参数,非必须：跳转url
     */
    public $url;

    /**
     * @var int 接收参数,必须：排序，默认0
     */
    public $sort = 0;

    /**
     * @var string 接收参数,必须：图片
     */
    public $img;

    /**
     * @var int 接收参数,必须：状态1.正常，0，禁用，默认1
     */
    public $status = 1;


    /**
     * @inheritDoc
     */
    public function rules()
    {
        return ArrayHelper::merge([
            [['name', 'img', 'sort', 'status'], 'required']
        ], parent::rules());
    }

    /**
     * @inheritDoc
     */
    public function run()
    {
        $table_name = $this->external->TableName();

        \QTTX::$app->db->insert($table_name)
            ->cols([
                'name' => $this->name,
                'img' => $this->img,
                'url' => $this->url,
                'status' => $this->status,
                'sort' => $this->sort,
            ])
            ->query();
        return true;
    }
}