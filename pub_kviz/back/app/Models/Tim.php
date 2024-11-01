<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tim extends Model
{
    use HasFactory;

    protected $table = 'timovi';
    protected $fillable = ['ime'];

    public function clanovi()
    {
        return $this->hasMany(Clan::class);
    }

    public function dogadjaji()
    {
        return $this->belongsToMany(Dogadjaj::class, 'dogadjaj_tim')->withPivot('score');
    }
}
