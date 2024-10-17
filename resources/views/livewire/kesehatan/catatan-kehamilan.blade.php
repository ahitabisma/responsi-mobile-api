<div>
    <h2 class="text-xl font-bold mb-4">List Catatan Kehamilan</h2>

    <div>
        <button wire:click="refresh" class="btn btn-sm mb-4">Refresh</button>
        <p class="ml-3" wire:loading>Loading...</p>
    </div>

    <table class="table-auto w-full">
        <thead>
            <tr>
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">Patient Name</th>
                <th class="px-4 py-2">Gestational Week</th>
                <th class="px-4 py-2">Baby Weight</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($list as $item)
                <tr>
                    <td class="text-center">{{ $item->id }}</td>
                    <td class="text-center">{{ $item->patient_name }}</td>
                    <td class="text-center">{{ $item->gestational_week }}</td>
                    <td class="text-center">{{ $item->baby_weight }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>