<?php

namespace Core\Learning\Models;

use Core\Base\Models\Base;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Program extends Base
{
    public function level():BelongsTo
    {
        return $this->belongsTo(Program::class);
    }

    public function course():HasOne
    {
        return $this->hasOne(Course::class);
    }
}
