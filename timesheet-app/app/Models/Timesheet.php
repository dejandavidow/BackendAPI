<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timesheet extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function project()
    {
        return $this->belongsto(Project::class);
    }
    public function client()
    {
        return $this->belongsto(Client::class);
    }
    public function category()
    {
        return $this->belongsto(Category::class);
    }

}
