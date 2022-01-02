<x-layout>
    @foreach ($posts as $post)
        <article>
            <h1>
                <a href="/posts/<?=$post->slug ?>">
                    {{$post->title}}
                </a>
            </h1>
            <p>
                <a href="/users/{{$post->user->id}}">{{$post->user->name}}</a>
                <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a>
            </p>
            {!! $post->body !!}
        </article>
    @endforeach
</x-layout>

