<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Responsible extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected static function booted()
    {
        static::created(function ($responsible) {
            $responsible->user->permissions()->attach([4, 6, 7]);
        });

        static::deleted(function ($responsible) {
            $responsible->user->delete();
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
