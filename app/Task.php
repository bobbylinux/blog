<?php

namespace App;

class Task extends Model
{
    /*public static function incomplete()
    {
        return static::where('completed',false)->get();
    }*/

    public static function scopeIncomplete($query)
    {
        return $query->where('completed',false);
    }
}
