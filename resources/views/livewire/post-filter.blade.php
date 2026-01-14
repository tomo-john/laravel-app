<div>
    <input wire:model.live="search" type="text" placeholder="検索(タイトル)" class="border rounded-xl p-2 my-4 w-full">
    @foreach ($posts as $post)
        <div wire:key="post-{{ $post->id }}" class="mt-6 p-6 bg-white rounded-2xl shadow-md border border-gray-500">
            <p class="p-4 text-lg text-gray-500 font-semibold">
                件名:
                <a href="{{ route('post.show', $post) }}" class="text-blue-600">
                    {{ $post->title }}
                </a>
            </p>
            <hr class="mt-4">
            <p class="mt-4 p-4 text-gray-600">{{ $post->body }}</p>
            <div class="flex justify-end p-4 text-sm text-gray-400 font-semibold">
                {{ $post->created_at }} / {{ $post->user->name ?? '匿名' }}
            </div>
        </div>
    @endforeach
</div>
