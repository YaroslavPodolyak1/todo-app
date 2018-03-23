<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 */
class Tasks extends Model
{
    protected $guarded = [
        'id',
        'completed'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
