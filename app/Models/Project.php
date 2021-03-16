<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'projects';
    public $timestamps = true;

    protected $casts = [
        'cost' => 'integer'
    ];

    protected $fillable = [
        'first_name',
        'last_name',
        'introduction',
        'created_at',
        'age'
    ];
}
