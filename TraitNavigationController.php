<?php


namespace qh4module\navigation;


use qh4module\navigation\external\ExtNavigation;
use qh4module\navigation\models\Index;
use qh4module\navigation\models\Create;
use qh4module\navigation\models\Update;
use qh4module\navigation\models\Delete;
use qh4module\navigation\models\ChangStatus;

/**
 * 导航金刚区
 * Trait TraitNavigationController
 * @package qh4module\navigation
 */
trait TraitNavigationController
{

    /**
     * @return ExtNavigation
     */
    public function ext_navigation()
    {
        return new ExtNavigation();
    }


    /**
     * 列表
     * @return array
     */
    public function actionIndex()
    {
        $model = new Index([
            'external' => $this->ext_navigation(),
        ]);

        return $this->runModel($model);
    }

    /**
     * 新增
     * @return array
     */
    public function actionCreate()
    {
        $model = new Create([
            'external' => $this->ext_navigation(),
        ]);
        return $this->runModel($model);
    }

    /**
     * 更新
     * @return array
     */
    public function actionUpdate()
    {
        $model = new Update([
            'external' => $this->ext_navigation(),
        ]);
        return $this->runModel($model);
    }

    /**
     * 删除
     * @return array
     */
    public function actionDelete()
    {
        $model = new Delete([
            'external' => $this->ext_navigation(),
        ]);
        return $this->runModel($model);
    }

    /**
     * 改变status状态 取反
     * @return array
     */
    public function actionChangStatus()
    {
        $model = new ChangStatus([
            'external' => $this->ext_navigation(),
        ]);
        return $this->runModel($model);
    }

}