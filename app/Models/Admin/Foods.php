<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foods extends Model
{
    use HasFactory;
    protected $table = 'foods';
    protected $dates = ['created_at', 'updated_at'];
    protected $guarded = [];
}
