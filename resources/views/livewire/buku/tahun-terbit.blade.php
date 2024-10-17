<div>
    <h2 class="text-xl font-bold mb-4">List Tahun Terbit</h2>

    <div>
        <button wire:click="refresh" class="btn btn-sm mb-4">Refresh</button>
        <p class="ml-3" wire:loading>Loading...</p>
    </div>

    <table class="table-auto w-full">
        <thead>
            <tr>
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">Publication Year</th>
                <th class="px-4 py-2">Edition Number</th>
                <th class="px-4 py-2">Language</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($list as $item)
                <tr>
                    <td class="text-center">{{ $item->id }}</td>
                    <td class="text-center">{{ $item->publication_year }}</td>
                    <td class="text-center">{{ $item->edition_number }}</td>
                    <td class="text-center">{{ $item->language }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
