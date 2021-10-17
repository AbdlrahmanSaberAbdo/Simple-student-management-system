<?php

namespace Core\Learning\Controllers\API\V1;

use Core\Learning\Requests\GradeRequest as FormRequest;
use Core\Learning\Models\Grade as Model;
use Core\Learning\Resources\GradeResource as Resource;

class GradeController extends \Core\Base\Controllers\API\Controller
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
