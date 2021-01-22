<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FanComment extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Fname', 'Sname', 'Phone', 'Email', 'Comment',
    ];
}
