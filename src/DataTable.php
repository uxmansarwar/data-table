<?php

namespace uxmansarwar;


class DataTable
{

    public string $table;


    public function __construct()
    {
        return 'im working';
    }

    public function setTR()
    {
        return 'this is testing tr';
    }

    public function __toString()
    {
        return $this->table;
    }
}
