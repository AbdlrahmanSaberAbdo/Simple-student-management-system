<?php

namespace Core\Learning\Models;

use Core\Base\Models\Base;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Course extends Base
{
    public function students(): BelongsToMany
    {
        return $this->belongsToMany(Student::class, 'student_courses')->withPivot('total')->withTimestamps();
    }

    public function items(): HasMany {
        return $this->hasMany(Item::class);
    }

    public function program(): BelongsTo
    {
        return $this->belongsTo(Program::class);
    }
}
