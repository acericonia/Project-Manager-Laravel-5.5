<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $guarded = [];

    public function project()
    {
    	return $this->belongsTo(Project::class);
    }

    public function customer()
    {
    	return $this->belongsTo(Customer::class);
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
