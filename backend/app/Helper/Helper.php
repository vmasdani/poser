<?php

namespace App\Helper;

use JsonMapper\Cache\NullCache;
use JsonMapper\Handler\PropertyMapper;
use JsonMapper\JsonMapperFactory;
use JsonMapper\Middleware\Attributes\Attributes;
use JsonMapper\Middleware\TypedProperties;

class Helper
{
    public static function deserialize(?string $str, object $obj)
    {
        return (new JsonMapperFactory)->create(
            new PropertyMapper(),
            new Attributes(),
            new TypedProperties(new NullCache)
        )->mapObjectFromString($str, $obj);
    }
}
