<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function scopeSearchByKeyword($query, $d)
    {
        if ($d!=0) {
            $query->where(function ($query) use ($d) {
                $query->where("pid", "=","$d");});
        }return $query;
    }
}