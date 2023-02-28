<div>

    <div class="relative p-4 modal-body">
        <div class="w-full mb-8 overflow-hidden border rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                    <thead>
                    <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b bg-gray-50">
                        <th class="px-4 py-3">Name</th>
                        <th class="px-4 py-3">Unit</th>
                        <th class="px-4 py-3 text-center">Total Qty.</th>
                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y">

                        @forelse ($addons as $addon)
                            <tr class="text-gray-700">
                                <td class="px-4 py-3 text-sm text-s">
                                    {{ $addon->inventory_name }}<br>
                                    <span class="text-small"><em>({{ $addon->inventory_code }})</em></span>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{ $addon->unit_label }}<br>
                                </td>
                                <td class="px-4 py-3 text-sm text-center">
                                    {{ $addon->qty }}<br>
                                </td>
                            </tr>
                        @empty
                            <tr class="text-gray-700">
                                <td colspan="3" class="px-4 py-3 text-sm text-center">
                                    No records found.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
