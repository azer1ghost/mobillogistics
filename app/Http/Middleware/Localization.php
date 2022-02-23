<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Route;

class Localization
{
    public function handle(Request $request, Closure $next)
    {
        if ($request->user() && $request->user()->getAttribute('default_lang')) {
            App::setlocale($request->user()->getAttribute('default_lang'));
        }else if (session()->has('locale')){
            App::setlocale(session()->get('locale'));
        }
        return $next($request);
    }

    public function locale(string $locale): RedirectResponse
    {
        abort_if(!in_array($locale, config('voyager.multilingual.locales')),403);
        App::setlocale($locale);
        session()->put('locale', $locale);
        return back();
    }

    public static function route()
    {
        Route::get('locale/{locale}', [self::class, 'locale'])->whereAlpha('locale')->where('locale','[A-Za-z]{2}')->name('locale');
    }
}
