<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TodoItem extends Model
{
    const STATUS_DONE = "done";
    const STATUS_STARTED = "started";
    const STATUS_SCHEDULED = "schedules";
    const STATUS_NEW = "new";

    //
    use SoftDeletes;

    protected $fillable = [
        'title',
        'description',
        'status',
        'estimate',
        'reminder',
        'deadline',
        'user_id'
    ];

    protected $attributes = [
        'status' => self::STATUS_NEW,
        'reminder' => false,
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

}
