<?php

namespace Baijunyao\DesignPatterns\AbstractFactory;

/**
 * User 产品接口
 *
 * Interface User
 * @package Baijunyao\DesignPatterns\AbstractFactory
 */
interface User
{
    /**
     * 新增
     *
     * @return mixed
     */
    public function insert();

    /**
     * 查询
     *
     * @return mixed
     */
    public function select();
}