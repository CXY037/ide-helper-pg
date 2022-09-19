<?php

declare(strict_types=1);

namespace Swoole\Coroutine;

/**
 * This class is available when Swoole is installed with option "--enable-swoole-pgsql" included.
 *
 * @since 5.0.0
 * @not-serializable Objects of this class cannot be serialized.
 */
class PostgreSQL
{
    public $error;

    public $errCode = 0;

    public $resultStatus = 0;

    public $resultDiag;

    public $notices;

    public function __construct()
    {
    }

    public function __destruct()
    {
    }

    public function connect(string $conninfo, float $timeout = 2): bool
    {
    }

    public function query(string $query): PostgreSQLStatement|false
    {
    }
    // swoole 5.0
    // public function prepare(string $query): PostgreSQLStatement|false
    // {
    // }
    // swoole 4.8
    public function prepare(string $name, string $query): PostgreSQLStatement|false
    {
    }

    /**
     * @param $prepareStateMent
     * @param $param
     * @return PostgreSQLStatement
    */
    public function execute($prepareStateMent, $param)
    {
    }
    /**
     * 提取结果中所有行作为一个数组
     *
     * @link https://wiki.swoole.com/wiki/page/886.html
     * @param PostgreSQLStatement $query
     * @return array
     */
    public function fetchAll($query)
    {
    }

    /**
     * 返回受影响的记录数目
     *
     * @link https://wiki.swoole.com/wiki/page/887.html
     * @param resource $queryResult
     * @return int
     */
    public function affectedRows($queryResult)
    {
    }
    /**
     * 根据指定的 result 资源提取一行数据（记录）作为数组返回
     *
     * @link https://wiki.swoole.com/wiki/page/892.html
     * @param PostgreSQLStatement $queryResult
     * @param int $row
     * @return array
     */
    public function fetchRow($queryResult, $row = 0)
    {
    }

    public function metaData(string $table_name): array|false
    {
    }

    public function escape(string $string): string|false
    {
    }

    public function escapeLiteral(string $string): string|false
    {
    }

    public function escapeIdentifier(string $string): string|false
    {
    }
}
