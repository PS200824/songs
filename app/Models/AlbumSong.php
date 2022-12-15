<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlbumSong extends Model
{
    use HasFactory;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array<string>|bool
     */
    protected $fillable = ['album_id', 'song_id'];

    public $timestamps = false;




    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "album_song";
}
