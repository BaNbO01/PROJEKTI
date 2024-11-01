<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sezona extends Model
{
    protected $table = 'sezone';
    use HasFactory;

    protected $fillable = ['pocetak', 'kraj'];

    public function dogadjaji()
    {
        return $this->hasMany(Dogadjaj::class);
    }
}
