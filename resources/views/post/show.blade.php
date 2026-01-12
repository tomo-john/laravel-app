<x-layouts.app>
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-200 leading-tight">
                個別表示
                <i class="fa-solid fa-dog"></i>
            </h2>
            <a href="{{ route('post.index') }}" class="inline-block mr-8">一覧画面</a>
        </div>

        @if(session('message'))
            <div class="text-red-600 font-bold">
                  {{ session('message') }}
            </div>
        @endif

        <div class="mt-6 p-6 bg-white rounded-2xl shadow-md border border-gray-200">
            <div class="mt-4 p-6">
                <p class="text-lg text-black font-semibold">
                    {{ $post->title }}
                </p>

                <div class="text-right">
                    <a href="{{ route('post.edit', $post) }}">
                        <flux:button variant="primary" color="sky" class="cursor-pointer">編集</flux:button>
                    </a>
                </div>

                <hr class="w-full">

                <p class="mt-4 whitespace-pre-line text-black">
                    {{ $post->body }}
                </p>
                <div class="flex justify-end w-full text-sm text-black font-semibold">
                    <p>{{ $post->created_at }}</p>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
