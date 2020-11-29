<?php

namespace App\Models\Task;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $guarded = [];

    public function tasks()
    {
        return $this->belongsToMany(Task::class);
    }

    public function getRouteKeyName()
    {
        return 'name';
    }

    public static function tagsCloud()
    {
        return (new static)->has('tasks')->get();
    }
}