<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    @foreach ($posts as $post)
    <article class="py-8 max-w-screen-md border-b border-gray-300">
        <a href="{{ url('/posts/'.$post->slug) }}" class="hover:underline">
            <h2 class="mb-1 text-3xl tracking-tighter">{{ $post->title }}</h2>
        </a>
        <div class="">
            By <a href="{{ url('/authors/'.$post->author->username) }}"
                class="text-base text-gray-500 hover:underline">{{ $post->author->name }}</a> in
            <a href="{{ url('/post-category/'.$post->category->slug) }}"
                class="text-base text-gray-500 hover:underline">{{ $post->category->name }}</a> |
            {{ $post->updated_at->diffForHumans() }}
        </div>
        <p class="my-4 font-light">{{ Str::limit($post->body, 150) }}</p>
        <a href="{{ url('/posts/'.$post->slug) }}" class="font-medium text-blue-500 hover:underline">Read more
            &raquo;</a>
    </article>
    @endforeach
</x-layout>