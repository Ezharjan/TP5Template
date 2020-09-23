<?php

namespace app\index\model;

use think\Db;

class Products
{
    public function getMyProducts()//查看账号密码是否匹配
    {
//        $app = Db::where('prod_price', '>', 5)
//            ->find();
        $cmd = "select prod_id from products where prod_price>5;";
        $result[] = Db::execute($cmd);
        return var_dump($result);
//        return $result;
    }
}