<?php

namespace Core\Learning\Controllers\API\V1;

use Core\Learning\Requests\CourseRequest as FormRequest;
use Core\Learning\Models\Course as Model;
use Core\Learning\Resources\CourseResource as Resource;

class CourseController extends \Core\Base\Controllers\API\Controller
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
}
