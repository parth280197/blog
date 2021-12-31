<x-layout>
    <article>
        <h1>{{$post->title}}</h1>
        <div>{!! $post->body !!}</div>
    </article>
    <p><a href="/posts">back to home</a></p>
</x-layout>



