<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class post extends Model
{
    protected $fillable =['postContent'];

    public function user()
    {
      return $this->belongsTo('App\User');
    }
}
