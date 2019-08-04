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
        // Simpan locale ke session.
        request()->session()->put('locale', $language);

        // Arahkan ke halaman sebelumnya.
        return redirect()->back();
    }
}
