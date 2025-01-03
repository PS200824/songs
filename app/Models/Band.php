<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Band extends Model
{
    use HasFactory;


    /**
     * The attributes that aren't mass assignable.
     *
     * @var array<string>|bool
     */
    protected $guarded = ['id'];


    public function albums()
    {
        return $this->hasMany(Album::class);
    }
}
