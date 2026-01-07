<div class="space-y-2">
    @foreach ($users as $user)
        <div class="p-2 border rounded">
            {{ $user['name'] }}
        </div>
    @endforeach
</div>
