<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dogadjaj extends Model
{
    use HasFactory;

    protected $table = 'dogadjaji';
    protected $fillable = ['sezona_id', 'datum_odrzavanja','naziv'];

    public function sezona()
    {
        return $this->belongsTo(Sezona::class);
    }

    public function timovi()
    {
        return $this->belongsToMany(Tim::class, 'dogadjaj_tim')->withPivot('score');
    }
}
