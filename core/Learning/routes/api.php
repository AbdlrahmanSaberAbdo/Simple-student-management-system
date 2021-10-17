<?php

Route::group(['prefix' => 'api', 'middleware' => []], function () {
    # V1
    Route::namespace('Core\Learning\Controllers\API\V1')->prefix('v1')->name('api.v1.')->group(function () {
        #*** Ex: START: level ***#
         Route::apiResource('levels', 'LevelController');
        #*** END: level ***#

        #*** Ex: START: program ***#
        Route::apiResource('programs', 'ProgramController');
        #*** END: program ***#


        #*** Ex: START: course ***#
        Route::apiResource('courses', 'CourseController');
        #*** END: course ***#

        #*** Ex: START: course ***#
        Route::apiResource('items', 'ItemController');
        #*** END: course ***#

        #*** Ex: START: course ***#
        Route::apiResource('students', 'StudentController');
        #*** END: course ***#
    });
});
