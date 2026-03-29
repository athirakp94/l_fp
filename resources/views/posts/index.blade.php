<a href="/posts/create">Add New Post</a>
@foreach($posts as $post)
    <form method="POST" action="/posts/{{ $post->id }}/delete" style="display:inline;">
    @csrf
    <p>
        <a href="/posts/{{ $post->id }}">
            {{ $post->title }}
        </a>
        <a href="/posts/{{ $post->id }}/edit">Edit</a>

    </p>
    <button type="submit">Delete</button>
    </form>
@endforeach

    