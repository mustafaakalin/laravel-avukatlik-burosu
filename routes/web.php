<?php

use App\Models\Lawyer;
use App\Models\Service;
use App\Models\BlogPost;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home' , function (){
    $posts = BlogPost::latest()->take(8)->get(); // Get the latest 8 blog posts // or use pagination with Post::paginate(10);

    //lawyers 
    $lawyers = Lawyer::latest()->take(8)->get(); // Get the latest 8 lawyers // or use pagination with Lawyer::paginate(10);

    // service
    $services = Service::latest()->take(6)->get(); // Get the latest 8 services // or use pagination with Service::paginate(10);
    return view('home', ['posts' => $posts, 'lawyers' => $lawyers,'services' => $services]);
});



Route::get('/lawyers', function () {
    $lawyers = Lawyer::all(); // Fetch all lawyers
    return view('lawyer.index', compact('lawyers'));

})->name('lawyers.show');

Route::get('/about',[AboutController::class, 'index']);

Route::get('/contact', [ContactController::class,'index']);

Route::post('/contact', [ContactController::class,'send']);

Route::get('/blog', [BlogController::class, 'index']);

Route::get('/blog/{id}', [BlogController::class, 'show'])->name('blog.show');

Route::post('/blog/{id}/comment', [BlogController::class,'storeComment']);

Route::post('/blog/{id}/like', [BlogController::class,'like']);

Route::get('/services', function (){
    $services = Service::all(); // Fetch all services
    return view('service.index', compact('services'));
})->name('services.show');

