<div>
    <h2 class="text-xl font-bold mb-4">List Penerbit</h2>

    <div>
        <button wire:click="refresh" class="btn btn-sm mb-4">Refresh</button>
        <p class="ml-3" wire:loading>Loading...</p>
    </div>

    <table class="table-auto w-full">
        <thead>
            <tr>
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">Publisher Name</th>
                <th class="px-4 py-2">Established Year</th>
                <th class="px-4 py-2">Country</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($list as $item)
                <tr>
                    <td class="text-center">{{ $item->id }}</td>
                    <td class="text-center">{{ $item->publisher_name }}</td>
                    <td class="text-center">{{ $item->established_year }}</td>
                    <td class="text-center">{{ $item->country }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
