<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wait extends Model
{
    protected $table = 'waits';

    protected $fillable = ['name','phone','people','status'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
