<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="pl-3 pr-6 py-3">
                    Produk
                </th>
                <th scope="col" class="pl-6 pr-3 py-3 text-right">
                    Harga
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                    Jumlah
                </th>
                <th scope="col" class="pl-6 pr-3 py-3 text-right">
                    Subtotal
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="pl-3 pr-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white truncate w-40">
                        {{ substr($item->product->nama, 0, 30) . '...' }}
                    </th>
                    <td class="pl-6 pr-3 py-4 text-right">
                        Rp{{ number_format($item->product->harga, 2, ',', '.') }}
                    </td>
                    <td class="px-6 py-4 text-center">
                        {{ $item->jumlah }}
                    </td>
                    <td class="pl-6 pr-3 py-4 text-right">
                        Rp{{ number_format($item->total, 2, ',', '.') }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
