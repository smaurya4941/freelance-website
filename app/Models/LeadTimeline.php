<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LeadTimeline extends Model
{
    protected $fillable = ['lead_id', 'action', 'description'];

    public function lead()
    {
        return $this->belongsTo(Lead::class);
    }
}
