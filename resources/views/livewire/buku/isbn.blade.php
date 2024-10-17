<div>
    <h2 class="text-xl font-bold mb-4">List ISBN</h2>

    <div>
        <button wire:click="refresh" class="btn btn-sm mb-4">Refresh</button>
        <p class="ml-3" wire:loading>Loading...</p>
    </div>

    <table class="table-auto w-full">
        <thead>
            <tr>
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">ISBN Code</th>
                <th class="px-4 py-2">Format</th>
                <th class="px-4 py-2">Print Length</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($list as $item)
                <tr>
                    <td class="text-center">{{ $item->id }}</td>
                    <td class="text-center">{{ $item->isbn_code }}</td>
                    <td class="text-center">{{ $item->format }}</td>
                    <td class="text-center">{{ $item->print_length }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
