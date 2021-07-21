<?php

namespace qh4module\navigation\models;


use qh4module\navigation\external\ExtNavigation;
use qttx\web\ServiceModel;

/**
 * Class NavigationModel
 * @package backend\models
 * @description 数据表tbl_setting的模型
 * @property ExtNavigation $external
 */
class NavigationModel extends ServiceModel
{

    /**
     * {@inheritDoc}
     */
    public function rules()
    {
        return $this->mergeRules([
            [['id', 'sort', 'status'], 'integer'],
            [['name', 'url', 'img'], 'string', ['max' => 255]]
        ], $this->external->rules());
    }

    /**
     * {@inheritDoc}
     */
    public function attributeLangs()
    {
        return $this->mergeLanguages([
            'id' => 'ID',
            'name' => '名称',
            'url' => '跳转url',
            'sort' => '排序',
            'img' => '图片',
            'status' => '状态1.正常，0，禁用'
        ], $this->external->attributeLangs());
    }
}
