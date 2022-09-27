<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function clients()
    {
        return $this->belongsTo(Client::class);
    }
    public function members()
    {
        return $this->belongsTo(Member::class);
    }
}
