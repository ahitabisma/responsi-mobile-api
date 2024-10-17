<div>
    <h2 class="text-xl font-bold mb-4">List Rekam Medis Pasien</h2>

    <div>
        <button wire:click="refresh" class="btn btn-sm mb-4">Refresh</button>
        <p class="ml-3" wire:loading>Loading...</p>
    </div>

    <table class="table-auto w-full">
        <thead>
            <tr>
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">Patient Name</th>
                <th class="px-4 py-2">Symptom</th>
                <th class="px-4 py-2">Severity</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($list as $item)
                <tr>
                    <td class="text-center">{{ $item->id }}</td>
                    <td class="text-center">{{ $item->patient_name }}</td>
                    <td class="text-center">{{ $item->symptom }}</td>
                    <td class="text-center">{{ $item->severity }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
