<?php

namespace Adelf\Ventriloquist\Tests\Stubs;

use Adelf\Ventriloquist\Abstracts\Type;
use Adelf\Ventriloquist\DataStructure\StringStructure;

class FakeType extends Type
{
    protected $model = FakeModel::class;

    function attributes(): array
    {
        return [
            'just_column' => [
                'structure' => StringStructure::class,
            ],
            'just_column_two' => [
                'structure' => StringStructure::class,
            ],
            'relation_test_one' => [
                'type' => FakeSubType::class,
            ],
        ];
    }
}
