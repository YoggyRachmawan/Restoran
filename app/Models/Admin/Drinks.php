<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drinks extends Model
{
    use HasFactory;
    protected $table = 'drinks';
    protected $dates = ['created_at', 'updated_at'];
    protected $guarded = [];
}
