<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Import all your individual controllers
use App\Http\Controllers\Api\ExperienceController;
use App\Http\Controllers\Api\SkillController;
use App\Http\Controllers\Api\CertificationController;
use App\Http\Controllers\Api\ToolController;
use App\Http\Controllers\Api\ProjectController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

// Grouping routes for the Portfolio
Route::prefix('v1')->group(function () {
    
    // Each line below creates 5 routes (Index, Store, Show, Update, Destroy)
    Route::apiResource('experiences', ExperienceController::class);
    Route::apiResource('skills', SkillController::class);
    Route::apiResource('certifications', CertificationController::class);
    Route::apiResource('tools', ToolController::class);
    Route::apiResource('projects', ProjectController::class);

});