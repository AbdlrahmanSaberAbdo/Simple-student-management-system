<?php

namespace Core\Learning\Models;

use Core\Base\Models\Base;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Item extends Base
{
    public function course():BelongsTo {
        return $this->belongsTo(Course::class);
    }
}
