<?php

namespace Core\Learning\Resources;

use Illuminate\Http\Resources\Json\JsonResource as Resource;

class ItemResource extends Resource
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
            'id'        => $this->id,
            'grade'     => $this->grade,
            'course_id' => $this->course_id,
            $this->mergeWhen($request->route()->getName() == 'api.v1.items.show', [
                'course' => new CourseResource($this->course),
            ])
        ];
    }
}
