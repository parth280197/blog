<x-layout>
    <article>
        <h1>{{$post->title}}</h1>
        <h2>
            <p>
                <a href="/users/{{$post->user->id}}">{{$post->user->name}}</a>
                <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a>
            </p>
        </h2>
        <div>{!! $post->body !!}</div>
    </article>
    <p><a href="/posts">back to home</a></p>
</x-layout>



