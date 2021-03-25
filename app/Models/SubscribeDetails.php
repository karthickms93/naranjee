<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubscribeDetails extends Model
{
    protected $table = 'subscriber_details';
    protected $appends = ['show_date'];
    public function getShowDateAttribute()
    {
        return date('M d, Y',strtotime($this->attributes['created_at']));
    }
}