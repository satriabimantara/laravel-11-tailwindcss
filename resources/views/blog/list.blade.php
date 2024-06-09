<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    @foreach ($posts as $post)
    <article class="py-8 max-w-screen-md border-b border-gray-300">
        <h2 class="mb-1 text-3xl tracking-tighter">{{ $post->title }}</h2>
        <div class="text-base text-gray-500">
            <a href="#">{{ $post->author }} | {{ $post->updated_at->diffForHumans() }}</a>
        </div>
        <p class="my-4 font-light">{{ Str::limit($post->body, 150) }}</p>
        <a href="{{ url('/posts/'.$post->slug) }}" class="font-medium text-blue-500 hover:underline">Read more
            &raquo;</a>
    </article>
    @endforeach
</x-layout>