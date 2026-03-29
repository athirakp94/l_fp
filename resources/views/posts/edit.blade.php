<!DOCTYPE html>
<html>
<head>
    <title>Posts</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">
<h2>Edit Post</h2>

<form method="POST" action="/posts/{{ $post->id }}/update">
    @csrf

    <div class="mb-3">
        <label>Title</label>
        <input type="text" name="title" value="{{ $post->title }}" class="form-control">
    </div>

    <div class="mb-3">
        <label>Description</label>
        <textarea name="description" class="form-control">{{ $post->description }}</textarea>
    </div>

    <button class="btn btn-warning">Update</button>
</form>
</body>
</html>