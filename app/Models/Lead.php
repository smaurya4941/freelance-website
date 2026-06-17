<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'company',
        'industry',
        'project_type',
        'budget',
        'timeline',
        'message',
        'file_path',
        'original_file_name',
        'file_type',
        'status',
        'priority',
        'source',
    ];

    public function notes()
    {
        return $this->hasMany(LeadNote::class)->latest();
    }

    public function timelines()
    {
        return $this->hasMany(LeadTimeline::class)->latest();
    }

    public function files()
    {
        return $this->hasMany(LeadFile::class)->latest();
    }
}
