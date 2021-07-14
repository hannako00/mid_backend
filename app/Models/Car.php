<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand',
        'model',
        'plate_number',
        'color',
        'value',
    ];

    public function container() {
        return $this->belongsTo('App\Models\Car', 'id');
    }
}
