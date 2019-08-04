<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;

class LocalizationController extends Controller
{
    /**
     * Switch Language.
     *
     * @param string $language Language code.
     * 
     * @return Response
     */
    public function switch($language = '')
    {
        App::setLocale($language);

        // Store selected language to session.
        request()->session()->put('locale', $language);

        return redirect()->back();
    }
}
