<?php

namespace Adelf\Ventriloquist\Interfaces;


interface ListOfType
{
    public function validators(): array;

    public function dataDescribe(): string;

    public function resolver($value);

    public function getList(): array;

    public function defineList(array $list);

    public function defineSubtype($type);
}