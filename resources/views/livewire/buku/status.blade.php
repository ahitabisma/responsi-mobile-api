<div>
    <h2 class="text-xl font-bold mb-4">List Status</h2>

    <div>
        <button wire:click="refresh" class="btn btn-sm mb-4">Refresh</button>
        <p class="ml-3" wire:loading>Loading...</p>
    </div>

    <table class="table-auto w-full">
        <thead>
            <tr>
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">Availability</th>
                <th class="px-4 py-2">Borrower Name</th>
                <th class="px-4 py-2">Due Days</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($list as $item)
                <tr>
                    <td class="text-center">{{ $item->id }}</td>
                    <td class="text-center">{{ $item->availability }}</td>
                    <td class="text-center">{{ $item->borrower_name }}</td>
                    <td class="text-center">{{ $item->due_days }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
