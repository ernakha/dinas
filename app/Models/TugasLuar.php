<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class TugasLuar extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    
    public function anggota(): BelongsTo {
        return $this->belongsTo(Anggota::class);
    }
}
