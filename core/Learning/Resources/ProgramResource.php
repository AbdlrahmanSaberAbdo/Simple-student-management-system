<?php

namespace Core\Learning\Resources;

use Core\Learning\Models\Course;
use Illuminate\Http\Resources\Json\JsonResource as Resource;

class ProgramResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'   => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            $this->mergeWhen($request->route()->getName() == 'api.v1.programs.show', [
                'level' => new LevelResource($this->level),
                'courses' => new CourseResource($this->course)
            ])
        ];
    }
}
