<!DOCTYPE html>
<html>
<head>
    <title>Posts</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">
<div class="card p-3">
    <h3>{{ $post->title }}</h3>
    <p>{{ $post->description }}</p>

    <a href="/posts" class="btn btn-secondary">Back</a>
</div>
</body>
</html>