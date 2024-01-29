<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhotoPlace extends Model
{
    use HasFactory;
    protected $table='photo_places';
    protected $guarded=false;
    public function place(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Place::class,'place_id','id');
    }
}
