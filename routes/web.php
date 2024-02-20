<?php

use App\Models\Usuario;
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
| Comando de iniciar serv: 
|                php artisan serve
| Encerrar servidor:
|                Ctrl + c
*/

Route::get('/', function () {
    $usuarios = Usuario::latest()->get();

    return view('usuarios', [
      'usuarios' => $usuarios
    ]);
});

Route::get('usuarios/{usuario:cpf}', function(Usuario $usuario){
  /* Encontrar um _usuario_ por meio de seu _cpf_ e passa-lo
   * para uma _visualizacao_ (view) chamado _usuario_.
  **/
  
  return view('usuario', ['usuario'=> $usuario]);
  
});
/*
Route::get('categories/{category:slug}', function (Category $category) {
  

  return view('usuarios', [
    'usuarios' => $category->usuarios->load(['category','author'])
  ]);
});

Route::get('authors/{author:username}', function (User $author) {

  return view('usuarios', [
    'usuarios' => $author->usuarios->load(['category','author'])
  ]);
});*/