<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['description', 'status'];

    public function markComplete()
    {
        $this->status = true;
        return $this;
    }

    public function markIncomplete()
    {
        $this->status = false;
        return $this;
    }
}
