<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Photos extends Model
{
    protected $table = 'photos';

    protected $fillable = ['name', 'description', 'user_id', 'state_id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function states()
    {
        return $this->belongsTo(States::class, 'state_id');
    }
}
