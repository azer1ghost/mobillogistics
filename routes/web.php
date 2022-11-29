<?php

use App\Http\Controllers\WebsiteController;
use App\Http\Middleware\Localization;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Voyager;

Route::redirect('/', 'homepage')->name('index');
Route::get('homepage', [WebsiteController::class, 'homepage'])->name('homepage');
Route::get('about', [WebsiteController::class, 'about'])->name('about');
Route::get('policy', [WebsiteController::class, 'policy'])->name('policy');
Route::get('service/{service:slug}', [WebsiteController::class, 'service'])->name('service');
Route::get('media/video', [WebsiteController::class, 'videoBlog'])->name('videoBlog');
Route::get('media/articles', [WebsiteController::class, 'articles'])->name('articles');
Route::get('media/article/{post:slug}', [WebsiteController::class, 'article'])->name('article');
Route::get('branch', [WebsiteController::class, 'branches'])->name('branches');
Route::get('faq', [WebsiteController::class, 'faqs'])->name('faq');
Route::get('contact', [WebsiteController::class, 'contact'])->name('contact');
Route::get('contact-us', [WebsiteController::class, 'contactUs'])->name('contactUs');
Route::post('contact-us', [WebsiteController::class, 'contactForm'])->name('contact-form');


Localization::route();

Route::withoutMiddleware('localization')
    ->prefix('admin')
    ->group(function () {
        (new Voyager)->routes();
    });
