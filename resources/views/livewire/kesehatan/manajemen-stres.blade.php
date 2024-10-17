<div>
    <h2 class="text-xl font-bold mb-4">List Manajemen Stres</h2>

    <div>
        <button wire:click="refresh" class="btn btn-sm mb-4">Refresh</button>
        <p class="ml-3" wire:loading>Loading...</p>
    </div>

    <table class="table-auto w-full">
        <thead>
            <tr>
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">Stress Factor</th>
                <th class="px-4 py-2">Coping Strategy</th>
                <th class="px-4 py-2">Stress Level</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($list as $item)
                <tr>
                    <td class="text-center">{{ $item->id }}</td>
                    <td class="text-center">{{ $item->stress_factor }}</td>
                    <td class="text-center">{{ $item->coping_strategy }}</td>
                    <td class="text-center">{{ $item->stress_level }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
