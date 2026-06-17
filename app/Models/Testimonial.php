<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_name',
        'company_name',
        'designation',
        'photo',
        'feedback',
        'rating',
        'project_type',
        'is_featured',
        'is_hidden',
        'date',
    ];
}
