<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>



    </head>
    <body>
        <!-- Info que he consultado. Var $posts (donde recorres el array)
y post es cada elemento de ese array -->

        @foreach($posts as $post)
        <div>
            <h3>{{ $post->title }}</h3>
        </div>
        @endforeach
        {{ $posts->links()}}
       <!-- Acceso a la paginación -->
    </body>
</html>
