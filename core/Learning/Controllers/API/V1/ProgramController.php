<?php

namespace Core\Learning\Controllers\API\V1;

use Core\Learning\Requests\ProgramRequest as FormRequest;
use Core\Learning\Models\Program as Model;
use Core\Learning\Resources\ProgramResource as Resource;

class ProgramController extends \Core\Base\Controllers\API\Controller
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
