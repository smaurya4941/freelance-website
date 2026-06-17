<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LeadFile extends Model
{
    protected $fillable = [
        'lead_id',
        'original_name',
        'file_path',
        'file_type',
        'file_size',
        'category'
    ];

    public function lead()
    {
        return $this->belongsTo(Lead::class);
    }
}
