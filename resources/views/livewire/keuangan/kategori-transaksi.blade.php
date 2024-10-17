<div>
    <h2 class="text-xl font-bold mb-4">List Kategori Transaksi</h2>

    <div>
        <button wire:click="refresh" class="btn btn-sm mb-4">Refresh</button>
        <p class="ml-3" wire:loading>Loading...</p>
    </div>

    <table class="table-auto w-full">
        <thead>
            <tr>
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">Transaction</th>
                <th class="px-4 py-2">Type</th>
                <th class="px-4 py-2">Amount</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($list as $item)
                <tr>
                    <td class="text-center">{{ $item->id }}</td>
                    <td class="text-center">{{ $item->transaction }}</td>
                    <td class="text-center">{{ $item->type }}</td>
                    <td class="text-center">{{ $item->amount }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
