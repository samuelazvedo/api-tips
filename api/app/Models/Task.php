<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $table = 'tasks';
    protected $fillable = ['title', 'description', 'status'];
    protected $casts = [
        'status' => 'string',
    ];
    
    // Constantes para os possíveis valores de status
    const STATUS_PENDING = 'pending';
    const STATUS_ONGOING = 'ongoing';
    const STATUS_COMPLETED = 'completed';
}
