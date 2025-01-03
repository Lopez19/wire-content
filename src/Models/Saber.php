<?php

namespace WireContent\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Saber extends Model
{
    use HasFactory;

    protected $table = 'saberes';

    protected $fillable = [
        'titulo',
        'descripcion',
        'area_tematica_id',
        'media_id',
        'format_id',
        'palabras_clave',
        'autor',
        'enlace_adicional',
    ];

    protected $casts = [
        'palabras_clave' => 'array',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(config('auth.providers.users.model'));
    }
}
