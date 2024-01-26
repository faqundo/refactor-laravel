<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'phone', 'score'];

    // Relación con el modelo Client
    public function client()
    {
        return $this->hasOne(Client::class);
    }
}
