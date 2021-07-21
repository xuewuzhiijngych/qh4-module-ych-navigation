QH4框架扩展模块-导航（金刚区）模块

### 功能

1、导航（金刚区）模块.....

### 助手方法

```php
   原型：（内部依然使用 ChangStatus Model）
   /**
     * 改变状态
     * @param $id
     * @param ExtNavigation|null $external
     * @return bool
     */
    public static function changeStatus($id, ExtNavigation $external = null)
    {
    }

    使用示例：
    use qh4module\navigation\HpNavigation;
    $ext = new ExtNavigation();
    $res = HpNavigation::changeStatus($_POST['id'], $ext);
    
    注意事项：
    ① 此方法第二个参数为传入自定义扩展，因此只要数据表吧包含 id status 字段，均可使用该方法，快速改变数据状态~
    ② 调用该助手方法，默认会对元数据的状态取反，即 0-1 1-0
    ③ 扩展类必须包含以下方法:
     /**
     * @return string 返回数据表名
     */
     public function TableName()
     {
        return '{{%xxx}}';
     }
```

### 方法列表

```php

    /**
     * 列表
     * @return array
     */
    public function actionIndex()
    {
    }
```

```php

    /**
     * 新增
     * @return array
     */
    public function actionCreate()
    {
    }
```

```php

    /**
     * 更新
     * @return array
     */
    public function actionUpdate()
    {
    }
```

```php

    /**
     * 删除
     * @return array
     */
    public function actionDelete()
    {
    }
```

```php
    /**
     * 改变status状态
     * @return array
     */
    public function actionChangStatus()
    {
    }
```