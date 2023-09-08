<?php

use App\Http\Controllers\AuthController;
use App\Models\Category;
use App\Models\Product;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/home', [AuthController::class, 'landing']);

Route::get('/menu', [AuthController::class, 'menu']);

Route::get('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'index']);
Route::post('/login', [AuthController::class, 'attempt'])->name('login.attempt');

Route::get('/', function () {

  /* $category = Category::create(['name' => 'Café']);
  $product = Product::create([
        'category_id' => $category->id,
        'name' => 'Espresso',
        'price' => 1800,
        'description' => 'Café mezcla seleccionada de Arábica y Robusta',
        'image_path' => 'espresso.jpg',
   ]);
   $category = Category::create(['name' => 'Pasteleria']);
   $product = Product::create([
         'category_id' => $category->id,
         'name' => 'Torta Reina Madre Lucuma',
         'price' => 31500,
         'description' => 'Si deseas probar un nuevo sabor y sorprender, esta torta de amapola es una real alternativa, se prepara en base a bizcocho con amapola, crema chantilly mezclada con manjar y trozos de nueces.',
         'image_path' => 'amapola.jpg',
    ]);
    $category = Category::create(['name' => 'Sandwich']);
    $product = Product::create([
          'category_id' => $category->id,
          'name' => 'Jamón Pierna',
          'price' => 6800,
          'description' => 'Pan Italiano (9x18cm) - Miga Blanco o Miga Integral (13x11cm).',
          'image_path' => 'jamon.jpg',
     ]);
   dd(Product::with(['category'])->get()); */
    return view('welcome');
});
