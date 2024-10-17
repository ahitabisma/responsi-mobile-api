<div>
    <h2 class="text-xl font-bold mb-4">List Destinasi Wisata</h2>

    <div>
        <button wire:click="refresh" class="btn btn-sm mb-4">Refresh</button>
        <p class="ml-3" wire:loading>Loading...</p>
    </div>

    <table class="table-auto w-full">
        <thead>
            <tr>
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">Destination</th>
                <th class="px-4 py-2">Location</th>
                <th class="px-4 py-2">Attraction</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($list as $item)
                <tr>
                    <td class="text-center">{{ $item->id }}</td>
                    <td class="text-center">{{ $item->destination }}</td>
                    <td class="text-center">{{ $item->location }}</td>
                    <td class="text-center">{{ $item->attraction }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
