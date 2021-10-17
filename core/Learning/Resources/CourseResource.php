<?php

namespace Core\Learning\Resources;

use Illuminate\Http\Resources\Json\JsonResource as Resource;

class CourseResource extends Resource
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
            'code' => $this->code,
            'description' => $this->description,
            'program_id'  => $this->program_id,
            $this->mergeWhen($request->route()->getName() == 'api.v1.courses.show', [
                'program'     => new ProgramResource($this->program),
                'students' => StudentResource::collection($this->students),
                'items'    => ItemResource::collection($this->items)
            ])
        ];
    }
}
