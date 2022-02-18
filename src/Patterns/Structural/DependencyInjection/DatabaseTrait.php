<?php

namespace ViktorovIO\Library\Patterns\Structural\DependencyInjection;

use Doctrine\DBAL\Connection;
use Doctrine\DBAL\DriverManager;
use ViktorovIO\Library\Database\ConnectionConfig;

trait DatabaseTrait
{
    // Доступ в БД
    public static function getDbal(bool $force = false): Connection
    {
        static $dbal;

        if ( ! $dbal || $force) {
            $masterConfig = new ConnectionConfig();
            // зачем нам на тестовой среде другие имена переменных окружения для подключения к БД?
            if (getenv('APPLICATION_ENV') !== 'production') {
                $masterConfig->dbname = getenv('TEST_DB_NAME');
                $masterConfig->user = getenv('TEST_DB_USER');
                $masterConfig->password = getenv('TEST_DB_PASSWORD');
                $masterConfig->host = getenv('TEST_DB_HOST');
                $masterConfig->port = getenv('TEST_DB_PORT');
                $masterConfig->charset = getenv('TEST_DB_CHARSET');
            } else {
                $masterConfig->dbname = getenv('DB_NAME');
                $masterConfig->user = getenv('DB_USER');
                $masterConfig->password = getenv('DB_PASSWORD');
                $masterConfig->host = getenv('DB_HOST');
                $masterConfig->port = getenv('DB_PORT');
                $masterConfig->charset = getenv('DB_CHARSET');
            }

            $dbal = self::createConnection($masterConfig);
        }

        return $dbal;
    }

    private static function createConnection(ConnectionConfig $config): Connection
    {
        $params = [
            'driver' => 'mysqli',
            'dbname' => $config->dbname,
            'user' => $config->user,
            'password' => $config->password,
            'host' => $config->host,
            'port' => $config->port,
            'charset' => $config->charset,
        ];

        return DriverManager::getConnection($params);
    }
}
