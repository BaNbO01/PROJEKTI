<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clan extends Model
{
    protected $table = 'clanovi';
    use HasFactory;

    protected $fillable = ['ime', 'prezime','email'];

    public function timovi()
    {
        return $this->belongsToMany(Tim::class, 'tim_clan');
    }
}
