<!DOCTYPE html>
<html>
    <head>
        <title>Posts</title>

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    </head>
    <body class="container mt-4">

        <h2 class="mb-3">Posts</h2>

        <a href="/posts/create" class="btn btn-primary mb-3">Add New Post</a>

   @foreach($posts as $post)
    <div class="d-flex justify-content-between align-items-center border p-3 mb-2 rounded">

        <!-- Title -->
        <div>
            <strong>{{ $post->title }}</strong>
        </div>

        <!-- Icons -->
        <div>
            <!-- View -->
            <a href="/posts/{{ $post->id }}" class="text-info me-3">
                <i class="bi bi-eye"></i>
            </a>

            <!-- Edit -->
            <a href="/posts/{{ $post->id }}/edit" class="text-warning me-3">
                <i class="bi bi-pencil"></i>
            </a>

            <!-- Delete -->
            <form method="POST" action="/posts/{{ $post->id }}/delete" class="d-inline">
                @csrf
                <button style="border:none; background:none;" class="text-danger">
                    <i class="bi bi-trash"></i>
                </button>
            </form>
        </div>

    </div>
@endforeach

    </body>
</html>