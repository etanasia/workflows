<?php

Route::group(['prefix' => 'workflow'], function() {
    Route::get('/', 'Jawaraegov\Workflows\Http\Controllers\WorkflowController@index')->name('workflow');
    Route::get('/create', 'Jawaraegov\Workflows\Http\Controllers\WorkflowController@create')->name('workflowFormCreate');
    Route::post('/store', 'Jawaraegov\Workflows\Http\Controllers\WorkflowController@store')->name('workflowStore');
    Route::get('/{id}/edit', 'Jawaraegov\Workflows\Http\Controllers\WorkflowController@edit')->name('workflowFormEdit');
    Route::post('/{id}/update', 'Jawaraegov\Workflows\Http\Controllers\WorkflowController@update')->name('workflowUpdate');
    Route::get('demo', 'Jawaraegov\Workflows\Http\Controllers\WorkflowController@demo')->name('demo');
});

Route::resource('workflow/history', 'Jawaraegov\Workflows\Http\Controllers\HistoryController');

// state add route (GET)
Route::get('/workflow/state/create', 'Jawaraegov\Workflows\Http\Controllers\WorkflowStateController@create')->name('stateFormCreate');

// state list route (GET)
Route::get('/workflow/state', 'Jawaraegov\Workflows\Http\Controllers\WorkflowStateController@index')->name('state');

// state active route (GET)
Route::get('/workflow/state/{id}/active', 'Jawaraegov\Workflows\Http\Controllers\WorkflowStateController@Active')->name('stateActive');

// state deactive route (GET)
Route::get('/workflow/state/{id}/deactive', 'Jawaraegov\Workflows\Http\Controllers\WorkflowStateController@DeActive')->name('stateDeactive');

// state edit view route (GET)
Route::get('/workflow/state/{id}/edit', 'Jawaraegov\Workflows\Http\Controllers\WorkflowStateController@edit')->name('stateFormEdit');

// state add action route (POST)
Route::post('/workflow/state/add', 'Jawaraegov\Workflows\Http\Controllers\WorkflowStateController@store')->name('stateStore');

// state edit action route (POST)
Route::post('/workflow/state/{id}/edit', 'Jawaraegov\Workflows\Http\Controllers\WorkflowStateController@update')->name('stateUpdate');



/*Workflow transition*/

    // transition add route (GET)
Route::get('/workflow/transition/create', 'Jawaraegov\Workflows\Http\Controllers\WorkflowTransitionController@create')->name('transitionFormCreate');

// transition list route (GET)
Route::get('/workflow/transition', 'Jawaraegov\Workflows\Http\Controllers\WorkflowTransitionController@index')->name('transition');

// transition active route (GET)
Route::get('/workflow/transition/{id}/active', 'Jawaraegov\Workflows\Http\Controllers\WorkflowTransitionController@Active')->name('transitionActive');

// transition deactive route (GET)
Route::get('/workflow/transition/{id}/deactive', 'Jawaraegov\Workflows\Http\Controllers\WorkflowTransitionController@DeActive')->name('transitionDeactive');

// transition edit view route (GET)
Route::get('/workflow/transition/{id}/edit', 'Jawaraegov\Workflows\Http\Controllers\WorkflowTransitionController@edit')->name('transitionFormEdit');

// transition add action route (POST)
Route::post('/workflow/transition/add', 'Jawaraegov\Workflows\Http\Controllers\WorkflowTransitionController@store')->name('transitionCreate');

// transition edit action route (POST)
Route::post('/workflow/transition/{id}/edit', 'Jawaraegov\Workflows\Http\Controllers\WorkflowTransitionController@update')->name('transitionUpdate');
