<?php
/** Created by 嗝嗝<china_wangyu@aliyun.com>. Date: 2019-11-14  */

namespace think\annotation\handler;


use Doctrine\Common\Annotations\Annotation;

class Middleware extends Handler
{
    protected $middleware = [];

    public function handleClass(string $class, Annotation $annotation, \think\Route &$route)
    {
        // TODO: Implement handleClass() method.
        array_push($this->middleware,$annotation->value);
    }

    public function handleMethod(\ReflectionMethod $refMethod, Annotation $annotation, \think\Route &$route)
    {
        // TODO: Implement handleMethod() method.
        array_push($this->middleware,$annotation->value);
        $route->middleware($this->middleware);
    }
}