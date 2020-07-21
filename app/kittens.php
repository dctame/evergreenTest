<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kittens extends Model
{


    private $filteredFields = [
        'height',
        'weight',
        'width',
        'age',
        'fur',
        'color',
    ];

    public function breed()
    {
        return $this->belongsTo('App\breed');
    }

    public function scopeAvailableFilters(){
        $AvailableFilters = new \stdClass();
        foreach ($this->filteredFields as $filteredField) {
            $AvailableFilters->$filteredField = $this->select($filteredField)->distinct()->orderBy($filteredField)->get();
        }
        return $AvailableFilters;
    }


    public function scopeFilter($q)
    {
        if (request('height')) {
            $q->where('height', request('height'));
        }
        if (request('weight')) {
            $q->where('weight',  request('weight'));
        }
        if (request('width')) {
            $q->where('width', request('width'));
        }
        if (request('age')) {
            $q->where('age', request('age'));
        }
        if (request('fur')) {
            $q->where('fur',request('fur'));
        }
        if (request('color')) {
            $q->where('color', request('color'));
        }
        if (request('color')) {
            $q->where('color',request('color'));
        }

        return $q;
    }

}
