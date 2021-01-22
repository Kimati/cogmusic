<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FullAlbum extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'album_name', 'date_released', 'youtube_link',
    ];
}
