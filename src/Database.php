<?php

declare(strict_types=1);
/**
 * happy coding!!!
 */
namespace Smalldb;

class Database
{
    /**
     * 打开一个 bitcask 数据库实例，使用传入的目录路径
     * 需要保证进程对该目录具有可读可写权限.
     */
    public function open(string $path)
    {
    }

    /**
     * 通过 Key 获取存储的 value.
     */
    public function get(string $key)
    {
    }

    /**
     * 存储 key 和 value.
     * @param mixed $value
     */
    public function put(string $key, $value)
    {
    }

    /**
     * 删除一个 key.
     */
    public function delete(string $key)
    {
    }

    /**
     * 获取全部的 key.
     */
    public function keys()
    {
    }

    /**
     * 遍历所有的数据，执行函数 Fun.
     */
    public function fold(callable $callback)
    {
    }

    /**
     * 执行 merge，清理无效数据.
     */
    public function merge(string $path)
    {
    }

    /**
     * 刷盘，将所有缓冲区的写入持久化到磁盘中.
     */
    public function sync()
    {
    }

    /**
     * 关闭数据库.
     */
    public function close()
    {
    }
}
