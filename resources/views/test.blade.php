<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        @include('partials.head')
    </head>
    <body class="min-h-screen bg-white dark:bg-zinc-800">
        @auth
            <div class="text-sm text-gray-500">
                <p>{{ Auth::user()->name }}さんこんにちわん🐶</p>
            </div>
        @endauth

        <p>わーん🐶</p>

        <a href="{{ route('home') }}">
          <flux:button>Home</flux:button>
        </a>
    </body>
</html>
