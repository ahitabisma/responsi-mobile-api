<div>
    <h2 class="text-xl font-bold mb-4">List Lokasi Rak</h2>

    <div>
        <button wire:click="refresh" class="btn btn-sm mb-4">Refresh</button>
        <p class="ml-3" wire:loading>Loading...</p>
    </div>

    <table class="table-auto w-full">
        <thead>
            <tr>
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">Shelf Number</th>
                <th class="px-4 py-2">Aisle Letter</th>
                <th class="px-4 py-2">Floor Level</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($list as $item)
                <tr>
                    <td class="text-center">{{ $item->id }}</td>
                    <td class="text-center">{{ $item->shelf_number }}</td>
                    <td class="text-center">{{ $item->aisle_letter }}</td>
                    <td class="text-center">{{ $item->floor_level }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
