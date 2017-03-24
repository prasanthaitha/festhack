<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
   public function scopeSearchByKeyword($query, $q)
    {
        if ($q!='') {
            $query->where(function ($query) use ($q) {
                $query->where("city", "LIKE","%$q%");});
        }return $query;
}}
