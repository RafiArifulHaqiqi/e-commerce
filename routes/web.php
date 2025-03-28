<?php

    use Illuminate\Support\Facades\Route;
    use Livewire\Volt\Volt;

    Route::get('/', function () {
        return('Halaman utama');
    });
    // Route::get('/', function () {
    //     return view('web.homepage');
    // });
    
    Route::get('/', function () {
        $title = "Homepage";
        return view('web.homepage', ['title' => $title]);
    });
    
    Route::get('products', function () {
        $title = "Products";
        return view("web.products", ['title' => $title]);
    });
    
    Route::get('product/{slug}', function ($slug) {
        return "halaman single product - " . $slug;
    });
    
    Route::get('categories', function () {
        return view("web.categories");
    });
    
    Route::get('category/{slug}', function ($slug) {
        return "halaman single category - " . $slug;
    });
    
    Route::get('cart', function () {
        $title = "Cart";
        return view("web.cart", ['title' => $title]);
    });
    
    Route::get('checkout', function () {
        $title = "co";
        return view("web.checkout", ['title' => $title]);
    });

// Route::get('/', function(){
//     $title = "Homepage - Toko Butik";
//     return view('web.homepage',['title'=>$title]);
//    });
//    Route::get('products', function(){
//     $title = "Products - Gamis";

//     return view('web.products',['title'=>$title]);
//    });
//    Route::get('product/{slug}', function($slug){
//     $title = "Single Product";

//     return view('web.single_product',['title'=>$title,'slug'=>$slug]);
//    });
//    Route::get('categories', function(){
//     $title = "Categories";

//     return view('web.categories',['title'=>$title]);
//    });
//    Route::get('category/{slug}', function($slug){
//     $title = "Single Category";

//     return view('web.single_category',['title'=>$title,'slug'=>$slug]);
//    });
//    Route::get('cart', function(){
//     $title = "Cart";

//     return view('web.cart',['title'=>$title]);
//    });
//    Route::get('checkout', function(){
//     $title = "Checkout";
    
//     return view('web.checkout',['title'=>$title]);
//    });

// use Illuminate\Support\Facades\Route;
// use Livewire\Volt\Volt;

// Route::get('/', function () {
//     return view('welcome');
// })->name('home');

// Route::view('dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

// Route::middleware(['auth'])->group(function () {
//     Route::redirect('settings', 'settings/profile');

//     Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
//     Volt::route('settings/password', 'settings.password')->name('settings.password');
//     Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
// });

require __DIR__.'/auth.php';
