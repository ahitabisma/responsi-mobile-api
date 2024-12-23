<div>
    <h2 class="text-xl font-bold mb-4">Session</h2>

    <div>
        <button wire:click="refresh" class="btn btn-sm mb-4">Refresh</button>
        <p class="ml-3" wire:loading>Loading...</p>
    </div>

    <table class="table-auto w-full">
        <thead>
            <tr>
                <th class="px-4 py-2">IP Address</th>
                {{-- <th class="px-4 py-2">User Agent</th> --}}
                <th class="px-4 py-2">Last Activity</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sessions as $session)
                <tr>
                    <td class="text-center">{{ $session->ip_address }}</td>
                    {{-- <td class="text-center">{{ $session->user_agent }}</td> --}}
                    <td class="text-center">
                        {{ \Carbon\Carbon::createFromTimestamp($session->last_activity)->toDateTimeString() }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
