<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    use HasFactory;
    protected $table='evaluations';
    protected $guarded=false;

    public function place(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Place::class,'place_id','id');
    }
    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

}
