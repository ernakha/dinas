<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Anggota extends Model
{
    use HasFactory;

    protected $fillable = ['nama'];

    // protected $guarded = ['id'];

    // public function tugasLuar(): BelongsToMany {
    //     return $this->belongsToMany(TugasLuar::class);
    // }
}
