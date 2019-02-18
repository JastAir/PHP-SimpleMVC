<?php

/**
 * Project: PHP Simple Core
 * Author: Паутов Вячеслав
 * Date: 08.07.2018
 * Time: 21:43
 */

namespace Core;

/**
 * Base model
 *
 * PHP version 7.0
 */
class Model
{
    protected $link = null;

    function __construct()
    {
        $this->link = mysqli_connect(DB_HOST . ':' . DB_PORT, DB_USER, DB_PASS, DB_NAME);
        mysqli_set_charset($this->link, 'utf8');
        if (!$this->link) {
            die('Ошибка соединения: ' . mysqli_error($this->link));
        }
    }

    public function getDB()
    {
        return $this->link;
    }

    function __destruct()
    {
        mysqli_close($this->link);
    }
}
