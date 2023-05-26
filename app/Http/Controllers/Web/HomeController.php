<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Perfil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function home()
    {
        $permissoes = Perfil::where('id_user', Auth::user()->id)->with('perfil_catalogo')->get();


        return view('web/home/home',[
            'permissoes' => $permissoes,
        ]);
    }
}
