<div>
    <h2 class="text-xl font-bold mb-4">List Kesehatan Mental</h2>

    <div>
        <button wire:click="refresh" class="btn btn-sm mb-4">Refresh</button>
        <p class="ml-3" wire:loading>Loading...</p>
    </div>

    <table class="table-auto w-full">
        <thead>
            <tr>
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">Mental State</th>
                <th class="px-4 py-2">Therapy Sessions</th>
                <th class="px-4 py-2">Medication</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($list as $item)
                <tr>
                    <td class="text-center">{{ $item->id }}</td>
                    <td class="text-center">{{ $item->mental_state }}</td>
                    <td class="text-center">{{ $item->therapy_sessions }}</td>
                    <td class="text-center">{{ $item->medication }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
