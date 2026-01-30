<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;     // Necesaria para App::setLocale
use Illuminate\Support\Facades\Session; // ESTA ES LA QUE FALTA
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    public function handle(Request $request, Closure $next): Response
    {
        // Si hay un idioma guardado en la sesión, lo aplicamos
        if (Session::has('locale')) {
            App::setLocale(Session::get('locale'));
        }

        return $next($request);
    }
}
