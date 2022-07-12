<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class USD extends Model
{
    use HasFactory;

    protected $fillable = ["number","name"];
}
