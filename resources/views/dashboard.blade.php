<x-layouts.app :title="__('Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="grid auto-rows-min gap-4 md:grid-cols-3">

            <!-- Userの数-->
            <div class="rounded-xl border p-6">
                <div class="text-sm text-gray-500">Users</div>
                <div class="mt-2 text-3xl font-bold">{{ \App\Models\User::count() }}</div>
            </div>
          
            <!-- プレイグラウンド -->
            <div class="rounded-xl border p-6">
                <div class="text-sm text-gray-500">Dogs</div>
                <div class="mt-2 text-3xl font-bold">
                    <div x-data="{ liked: false }">
                        <flux:button @click="liked = !liked" class="transition">
                            <i class="fa-solid fa-dog text-3xl transition-all duration-300"
                               :class="{
                                  'text-pink-400 scale-125 -translate-y-1': liked,
                                  'text-gray-400 hover:scale-110 hover:rotate-6': !liked
                               }"
                            ></i>
                        </flux:button>
                    </div>
                </div>
            </div>
            
            <!-- デフォルトのプレースホルダ -->
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
            </div>
        </div>
        <div class="relative h-full flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
            <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
        </div>
    </div>
</x-layouts.app>
