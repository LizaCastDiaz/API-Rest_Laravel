<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    // queremos que se retornamos la vista llamada 'index' y le pasaremos toda la informacion. Del 'index', Traeme los ultimos posts Post::latest() y me los traes paginados ->paginate().
    public function index()
    {
        return view('index', [
            'posts' => Post::latest()->paginate()
            // traeme los ultimos post y me los traes paginados
        ]);
    }
}
