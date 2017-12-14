<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    protected $table = "work";
    public function user()
    {
        return $this->has('App\User');
    }
}
