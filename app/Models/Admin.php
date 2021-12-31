<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected static function booted()
    {
        static::created(function ($admin) {
            $admin->user->permissions()->attach([1, 2, 3, 4, 5]);
        });

        static::deleted(function ($admin) {
            $admin->user->delete();
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
