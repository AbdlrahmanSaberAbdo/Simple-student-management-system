<?php

namespace Core\Learning\Models;

use Core\Base\Models\Base;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Student extends Base
{
    public function courses():BelongsToMany
    {
        return $this->belongsToMany(Course::class, 'student_courses')->withPivot('items');
    }

    public function level():BelongsTo
    {
        return $this->belongsTo(Level::class);
    }
}
