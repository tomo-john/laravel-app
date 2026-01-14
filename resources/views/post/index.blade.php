<x-layouts.app>
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-200 leading-tight">
                一覧表示
                <i class="fa-solid fa-list"></i>
            </h2>
            <a href="{{ route('post.create') }}" class="inline-block mr-8">新規作成</a>
        </div>

        <x-message :message="session('message')" />

        <div class="mx-auto px-6">
            <livewire:post-filter />
        </div>
    </div>
</x-layouts.app>
