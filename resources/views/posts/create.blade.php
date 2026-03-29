<h2>Add Post</h2>
@if ($errors->any())
    <div style="color:red;">
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif
<form method="POST" action="/posts/store">
    @csrf

    <input type="text" name="title" placeholder="Title"><br><br>

    <textarea name="description" placeholder="Description"></textarea><br><br>

    <button type="submit">Save</button>
</form>

<a href="/posts">Back</a>