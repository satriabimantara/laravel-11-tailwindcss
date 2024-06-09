<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <article class="py-8 max-w-screen-md">
        <a href="{{ url('/posts/'.$post->slug) }}" class="hover:underline">
            <h2 class="mb-1 text-3xl tracking-tighter">{{ $post->title }}</h2>
        </a>
        <div class="text-base text-gray-500">
            <a href="{{ url('/authors/'.$post->author->id) }}" class="hover:underline">{{ $post->author->name }}</a> |
            {{ $post->updated_at->diffForHumans() }}
        </div>
        <p class="my-4 font-light">
            {{ $post->body }}
        </p>
        <a href="{{ url('/posts') }}" class="font-medium text-blue-500 hover:underline">&laquo; Back to Blog</a>
    </article>
</x-layout>