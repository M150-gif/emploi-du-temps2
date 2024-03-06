<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\seance;
use App\Models\module;

class formateur extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'id'
    ];
    public function modules():HasMany
    {
        $this->hasMany(modules::class);
    }
    public function seance():HasMany
    {
        $this->hasMany(seance::class);
    }
}
