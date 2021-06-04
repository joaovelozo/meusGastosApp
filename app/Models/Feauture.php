<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feauture extends Model
{
    use HasFactory;

      protected $fillable = [ 'name', 'type', 'slug'];

    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }
}