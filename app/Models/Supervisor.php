<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supervisor extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected static function booted()
    {
        static::created(function ($supervisor) {
            $supervisor->user->permissions()->attach([6,7]);
        });

        static::deleted(function ($supervisor) {
            $supervisor->user->delete();
        });

    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
