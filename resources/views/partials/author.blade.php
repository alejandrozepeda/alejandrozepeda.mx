<div class="flex items-center max-w-2xl">
    <img class="w-10 h-10 rounded-full mr-4" src="{{ $post->author->avatar }}" alt="Avatar of {{ $post->author->name }}">
    <div class="text-sm">
        <p class="uppercase tracking-wide font-semibold no-underline text-gray-900">{{ $post->author->name }}</p>
        <span class="text-gray-600">{!! $post->author->bio  !!}</span>
    </div>
</div>
