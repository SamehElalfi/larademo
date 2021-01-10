<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];
    protected $hidden = ['created_at', 'updated_at'];

    public function category()
    {
        $this->belongsTo("App\Category");
    }
}
