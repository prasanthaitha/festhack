<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $guarded =[];


public function scopeSearchByKeyword($query,$m)
    {
        if ($m!=''){
            $query->where(function ($query) use ($m) {
                $query->where("pmail", "=","$m");});
                
    }return $query;

}}
   