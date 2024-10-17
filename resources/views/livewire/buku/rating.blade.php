<div>
    <h2 class="text-xl font-bold mb-4">List Rating</h2>

    <div>
        <button wire:click="refresh" class="btn btn-sm mb-4">Refresh</button>
        <p class="ml-3" wire:loading>Loading...</p>
    </div>

    <table class="table-auto w-full">
        <thead>
            <tr>
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">Average Rating</th>
                <th class="px-4 py-2">Total Reviews</th>
                <th class="px-4 py-2">Best Seller Rank</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($list as $item)
                <tr>
                    <td class="text-center">{{ $item->id }}</td>
                    <td class="text-center">{{ $item->average_rating }}</td>
                    <td class="text-center">{{ $item->total_reviews }}</td>
                    <td class="text-center">{{ $item->best_seller_rank }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
