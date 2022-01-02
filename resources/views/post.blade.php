<x-layout>
    <article>
        <h1>{{$post->title}}</h1>
        <h2><a href="#">{{$post->category->name}}</a></h2>
        <div>{!! $post->body !!}</div>
    </article>
    <p><a href="/posts">back to home</a></p>
</x-layout>



