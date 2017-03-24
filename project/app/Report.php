<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $guarded =[];

   public function scopeSearchByKeyword($query, $r)
    {
        if ($r!=''){
            $query->where(function ($query) use ($r) {
                $query->where("rid", "=","$r");});
                
    }return $query;


}}
