<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        @include('partials.head')
    </head>
    <body class="min-h-screen bg-white dark:bg-zinc-900 antialiased">
        <flux:main container class="space-y-8">

            {{-- ヘッダー --}}
            <div>
                <flux:heading size="xl" level="1">Flux Playground</flux:heading>
                <flux:subheading>Fluxの基本を試すテストページ</flux:subheading>
                <a href="{{ route('home') }}" class="inline-block mt-2">
                    <flux:button size="xs" variant="filled" color="zinc" icon="arrow-down-tray">home</flux:button>
                </a>
            </div>

            <flux:separator variant="subtle" />

            {{-- コンテンツ --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                {{-- Left --}}
                <div class="rounded-xl border border-zinc-200 dark:border-zinc-700 p-6 bg-white dark:bg-zinc-800 space-y-4">
                    <flux:heading size="lg">Left</flux:heading>

                    <p class="mt-2 text-sm text-zinc-600 dark:text-zinc-400">Button</p>

                    <div class="flex gap-4">
                        <flux:button>default</flux:button>
                        <flux:button variant="primary">primary</flux:button>
                        <flux:button variant="danger">danger</flux:button>
                    </div>
                </div>

                {{-- Right --}}
                <div class="rounded-xl border border-zinc-200 dark:border-zinc-700 p-6 bg-white dark:bg-zinc-800 space-y-4">
                    <flux:heading size="lg">Right</flux:heading>

                    <p class="mt-2 text-sm text-zinc-600 dark:text-zinc-400">モーダル</p>

                    <flux:modal.trigger name="test-modal">
                        <flux:button variant="primary">
                            modal
                        </flux:button>
                    </flux:modal.trigger>
                </div>

                {{-- Livewire呼んでみる --}}
                <div class="rounded-xl border border-zinc-200 dark:border-zinc-700 p-6 bg-white dark:bg-zinc-800 space-y-4">
                    <flux:heading size="lg">Users</flux:heading>

                    <livewire:sandbox.user-list />
                </div>
            </div>

            {{-- Modal --}}
            <flux:modal name="test-modal" title="Flux Modal">
                <div class="space-y-4">
                    <p class="text-sm">これはFluxのモーダルです。</p>
                    <flux:modal.close><flux:button>close</flux:button></flux:modal.close>
                </div>
            </flux:modal>

        </flux:main>

        @fluxScripts
    </body>
</html>
