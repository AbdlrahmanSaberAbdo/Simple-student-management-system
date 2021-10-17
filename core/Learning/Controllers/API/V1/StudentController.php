<?php

namespace Core\Learning\Controllers\API\V1;

use Core\Learning\Requests\StudentRequest as FormRequest;
use Core\Learning\Models\Student as Model;
use Core\Learning\Resources\StudentResource as Resource;

class StudentController extends \Core\Base\Controllers\API\Controller
{
    /**
     * Init.
     * @param FormRequest $request
     * @param Model $model
     * @param string $resource
     */
    public function __construct(FormRequest $request, Model $model, $resource = Resource::class)
    {
        parent::__construct($request, $model, $resource);
    }

    public function store()
    {
        $items = $this->request->get('items');
        $student = $this->model->create($this->request->all());
        $course   =  $student->level->program->course;
        $student->courses()->attach($course->id, [
            'items' => json_encode($items)
        ]);

        return $this->sendResponse(
            new $this->resource($student),
            'successfully created.',
            true,
            201
        );
    }
}
