<?php

namespace Core\Learning\Resources;

use Illuminate\Http\Resources\Json\JsonResource as Resource;

class GradeResource extends Resource
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
            'value' => $this->value,
            $this->mergeWhen($request->route()->getName() == 'api.v1.grades.show', [

            ])
        ];
    }
}
