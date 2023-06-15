<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use HasFactory;
    protected $guarded = ['_token'];
    public function item(){
        return $this->belongsToMany(Item::class);
    }
}
