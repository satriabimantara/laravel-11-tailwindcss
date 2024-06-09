<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <article class="py-8 max-w-screen-md">
        <h2 class="mb-1 text-3xl tracking-tighter">{{ $post->title }}</h2>
        <div class="text-base text-gray-500">
            <a href="#">{{ $post->author }} | {{ $post->updated_at->diffForHumans() }}</a>
        </div>
        <p class="my-4 font-light">
            {{ $post->body }}
        </p>
        <a href="{{ url('/posts') }}" class="font-medium text-blue-500 hover:underline">&laquo; Back to Blog</a>
    </article>
</x-layout>