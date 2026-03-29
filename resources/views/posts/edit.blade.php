<h2>Edit Post</h2>

@if ($errors->any())
    <div style="color:red;">
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif

<form method="POST" action="/posts/{{ $post->id }}/update">
    @csrf

    <input type="text" name="title" value="{{ $post->title }}"><br><br>

    <textarea name="description">{{ $post->description }}</textarea><br><br>

    <button type="submit">Update</button>
</form>

<a href="/posts">Back</a>