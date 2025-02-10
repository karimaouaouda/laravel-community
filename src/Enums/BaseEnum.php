<?php

namespace LaravelCommunity\Enums;

trait BaseEnum
{
    public static function findByValue($val): CommunityColumns|null
    {
        foreach (self::cases() as $case){
            if( $case->value == $val ){
                return $case;
            }
        }


        return null;
    }
}
