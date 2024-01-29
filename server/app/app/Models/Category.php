<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table='categories';
    protected $guarded=false;
    public function places(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Place::class,'category_id','id');
    }
}
