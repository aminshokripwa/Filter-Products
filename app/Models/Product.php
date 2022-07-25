<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function scopeStorage($query, $storage)
    {
        if (!empty($storage)){
            $storage = str_replace(['TB', 'GB', ' '], ['000', '', ''], $storage);
            $storage = explode('-', $storage);
            return $query
                ->where('hdd_capacity', '>=', intval($storage[0]))
                ->where('hdd_capacity', '<=', intval($storage[1]));
        }
        return $query;
    }

    public function scopeRam($query, $ram)
    {
        if (!empty($ram)){
            return $query->whereIn('ram_capacity', $ram);
        }
        return $query;
    }

    public function scopeHddType($query, $hddType)
    {
        if (!empty($hddType)){
            return $query->where('hdd_type', 'like',  $hddType . '%');
        }
        return $query;
    }

    public function scopeLocation($query, $location)
    {
        if (!empty($location)){
            return $query->where('location', $location);
        }
        return $query;
    }
}
