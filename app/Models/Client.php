<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = ['lead_id'];

    // Relación con el modelo Lead
    public function lead()
    {
        return $this->belongsTo(Lead::class);
    }
    
}
