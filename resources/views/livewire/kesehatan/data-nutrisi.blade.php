<div>
    <h2 class="text-xl font-bold mb-4">List Data Nutrisi</h2>

    <div>
        <button wire:click="refresh" class="btn btn-sm mb-4">Refresh</button>
        <p class="ml-3" wire:loading>Loading...</p>
    </div>

    <table class="table-auto w-full">
        <thead>
            <tr>
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">Food Item</th>
                <th class="px-4 py-2">Calories</th>
                <th class="px-4 py-2">Fat Content</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($list as $item)
                <tr>
                    <td class="text-center">{{ $item->id }}</td>
                    <td class="text-center">{{ $item->food_item }}</td>
                    <td class="text-center">{{ $item->calories }}</td>
                    <td class="text-center">{{ $item->fat_content }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
