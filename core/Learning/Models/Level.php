<?php

namespace Core\Learning\Models;

use Core\Base\Models\Base;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Level extends Base
{
    public function program():HasOne
    {
        return $this->hasOne(Program::class);
    }
}
