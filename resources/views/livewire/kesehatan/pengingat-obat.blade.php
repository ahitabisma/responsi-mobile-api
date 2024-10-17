<div>
    <h2 class="text-xl font-bold mb-4">List Pengingat Obat</h2>

    <div>
        <button wire:click="refresh" class="btn btn-sm mb-4">Refresh</button>
        <p class="ml-3" wire:loading>Loading...</p>
    </div>

    <table class="table-auto w-full">
        <thead>
            <tr>
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">Medicine Name</th>
                <th class="px-4 py-2">Dosage Mg</th>
                <th class="px-4 py-2">Times Per Day</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($list as $item)
                <tr>
                    <td class="text-center">{{ $item->id }}</td>
                    <td class="text-center">{{ $item->medicine_name }}</td>
                    <td class="text-center">{{ $item->dosage_mg }}</td>
                    <td class="text-center">{{ $item->times_per_day }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
