<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    // Es lo que se necesita para hacer mi consulta y que los datos vayan directamente a la vista index
    //  Cuando lleguemos a este punto RETORNA la vista llamada 'index' con la info de los ultimos posts Post::latest() y me los traes paginados ->paginate().
    public function index()
    {
        return view('index', [
            'posts' => Post::latest()->paginate()
            // traeme los ultimos post y me los traes paginados
        ]);
    }
}
