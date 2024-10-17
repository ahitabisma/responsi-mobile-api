<div>
    <h2 class="text-xl font-bold mb-4">List Bahasa</h2>

    <div>
        <button wire:click="refresh" class="btn btn-sm mb-4">Refresh</button>
        <p class="ml-3" wire:loading>Loading...</p>
    </div>

    <table class="table-auto w-full">
        <thead>
            <tr>
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">Original Language</th>
                <th class="px-4 py-2">Translated Language</th>
                <th class="px-4 py-2">Translator Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($list as $item)
                <tr>
                    <td class="text-center">{{ $item->id }}</td>
                    <td class="text-center">{{ $item->original_language }}</td>
                    <td class="text-center">{{ $item->translated_language }}</td>
                    <td class="text-center">{{ $item->translator_name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
