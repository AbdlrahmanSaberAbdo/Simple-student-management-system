<?php

namespace Core\Learning\Resources;

use Illuminate\Http\Resources\Json\JsonResource as Resource;

class StudentResource extends Resource
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
            'full_name' => $this->full_name,
            'birthdate' => $this->birthdate,
            'email' => $this->email,
            'identifier' => $this->identifier,
            'level_id'      => $this->level_id,
            $this->mergeWhen($request->route()->getName() == 'api.v1.students.show', [
                'level' => new LevelResource($this->level),
                'courses' => $this->courses
            ])
        ];
    }
}
