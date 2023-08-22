<div>
    {{$author->authorName}}<br >
    <!-- {{$author->posts}} -->
    @foreach ($author->posts as $post)
        {{$post->post}}<br />
    @endforeach
</div>