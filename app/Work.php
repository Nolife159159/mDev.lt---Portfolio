<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    protected $table = "work";
    protected $hidden = ['updated_at'];
    protected $fillable = ['user_id', 'name', 'lang', 'description', 'image_url'];

    public function user()
    {
        return $this->BelongsTo('App\User');
    }
}
