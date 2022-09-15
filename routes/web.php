<?php

use Mouhssinelghazzali\Inspire\Controllers;
use Illuminate\Support\Facades\Route;
use Mouhssinelghazzali\Inspire\Controllers\InspirationController;

Route::get('inspire', InspirationController::class);