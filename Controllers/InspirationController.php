<?php
namespace Mouhssinelghazzali\Inspire\Controllers;

use Illuminate\Http\Request;
use Mouhssinelghazzali\Inspire\Inspire;

class InspirationController
{
    public function __invoke(Inspire $inspire) {
        $quote = "package LARAVEL";

        return view('inspire::index', compact('quote'));

    }
}