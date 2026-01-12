<x-layouts.app>
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-200 leading-tight">
                フォーム(編集)
                <i class="fa-solid fa-pen"></i>
            </h2>
            <a href="{{ route('post.index') }}" class="inline-block mr-8">一覧画面</a>
        </div>

        @if(session('message'))
            <div class="text-red-600 font-bold">
                  {{ session('message') }}
            </div>
        @endif

        <form method="post" action="{{ route('post.update', $post) }}">
            @csrf
            @method('patch')

            <div class="mt-8">
                <div class="w-full flex flex-col">
                    <label for="title" class="font-semibold mt-4">件名</label>
                    <x-input-error :messages="$errors->get('title')" class="mt-2" />
                    <input type="text" name="title" class="w-auto p-2 border border-gray-300 rounded-md" id="title" value="{{ old('title', $post->title) }}">
                </div>
            </div>

            <div class="w-full flex flex-col">
                <label for="body" class="font-semibold mt-4">本文</label>
                <x-input-error :messages="$errors->get('body')" class="mt-2" />
                <textarea name="body" class="w-auto p-2 border border-gray-300 rounded-md" id="body" cols="30" rows="8">{{ old('body', $post->body) }}</textarea>
            </div>

            <flux:button variant="primary" type="submit" class="w-full mt-4 cursor-pointer">送信する</flux:button>
        </form>
    </div>
</x-layouts.app>
