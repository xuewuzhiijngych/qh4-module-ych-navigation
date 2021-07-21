<?php

namespace qh4module\navigation;

use qh4module\navigation\external\ExtNavigation;
use qh4module\navigation\models\ChangStatus;
use qttx\web\ResponseTrait;

class HpNavigation
{
    use ResponseTrait;

    /**
     * 取反-快速改变状态
     * @param $id
     * @param ExtNavigation|null $external
     * @return array
     */
    public static function changeStatus($id, ExtNavigation $external = null): array
    {
        if (!$id) {
            return (new self)->RE('未传递 id 参数！');
        }
        
        if ($external === null) {
            $external = new ExtNavigation();
        }
        return (new self)->runModel(new ChangStatus([
            'external' => $external,
        ]));
    }

}
