@props(['message'])
@if (!empty($message))
    <div class="p-4 m-2 rounded bg-green-100 text-gray-700">
        {{ $message }}
    </div>
@endif
