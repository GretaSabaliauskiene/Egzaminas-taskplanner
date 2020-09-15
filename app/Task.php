<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public $fillable = ['task_name', 'task_description', 'add_date', 'completed_date', 'status_id'];

    public function status()
    {
        return $this->belongsTo('App\Status');
    }
}
