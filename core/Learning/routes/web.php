<?php

Route::namespace('Core\Learning\Controllers\Web')->prefix('admin')->name('admin.')->group(function () {
    #*** Ex: START: Learning ***#
    // Route::resource('learnings', 'LearningController')->except([
    //    'store', 'update', 'destroy'
    // ]);
    #*** END: Learning ***#
});
