<h2>Posts List</h2>

@foreach($posts as $post)
    <p>
        <a href="/posts/{{ $post['id'] }}">
            {{ $post['title'] }}
        </a>
    </p>
@endforeach