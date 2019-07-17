<?php

use Illuminate\Support\Facades\Route;

Route::post('/larecipe-feedback', 'FeedbackController')->middleware(['throttle:60,1']);
