<x-layouts.app>
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-200 leading-tight">
                一覧表示
            </h2>
            <a href="{{ route('post.create') }}" class="inline-block mr-8">新規作成</a>
        </div>

        @if(session('message'))
            <div class="text-red-600 font-bold">
                  {{ session('message') }}
            </div>
        @endif

        <div class="mx-auto px-6">
            @foreach ($posts as $post)
                <div class="mt-6 p-6 bg-white rounded-2xl shadow-md border border-gray-500">
                    <p class="p-4 text-lg text-gray-500 font-semibold">{{ $post->title }}</p>
                    <hr class="mt-4">
                    <p class="mt-4 p-4 text-gray-600">{{ $post->body }}</p>
                    <div class="flex justify-end p-4 text-sm text-gray-400 font-semibold">
                        {{ $post->created_at }} / {{ $post->user->name ?? '匿名' }}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layouts.app>
