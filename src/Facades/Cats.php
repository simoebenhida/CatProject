<?php declare(strict_types=1);

namespace Smt\Cat\Facades;

use Illuminate\Support\Facades\Facade;

class Cats extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'example.cats';
    }
}
