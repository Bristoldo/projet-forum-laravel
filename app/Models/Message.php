<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Groupe;
class Message extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected function user(){
        $this->belongsTo(User::class);
    }

    protected function groupe(){
        $this->belongsTo(Groupe::class);
    }
}
