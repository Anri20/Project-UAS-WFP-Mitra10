<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        primary: {
                            "50": "#eff6ff",
                            "100": "#dbeafe",
                            "200": "#bfdbfe",
                            "300": "#93c5fd",
                            "400": "#60a5fa",
                            "500": "#3b82f6",
                            "600": "#2563eb",
                            "700": "#1d4ed8",
                            "800": "#1e40af",
                            "900": "#1e3a8a",
                            "950": "#172554"
                        }
                    }
                },
                fontFamily: {
                    "body": ["Inter", "ui-sans-serif", "system-ui", "-apple-system", "system-ui", "Segoe UI", "Roboto",
                        "Helvetica Neue", "Arial", "Noto Sans", "sans-serif", "Apple Color Emoji", "Segoe UI Emoji",
                        "Segoe UI Symbol", "Noto Color Emoji"
                    ],
                    "sans": ["Inter", "ui-sans-serif", "system-ui", "-apple-system", "system-ui", "Segoe UI", "Roboto",
                        "Helvetica Neue", "Arial", "Noto Sans", "sans-serif", "Apple Color Emoji", "Segoe UI Emoji",
                        "Segoe UI Symbol", "Noto Color Emoji"
                    ]
                }
            }
        }
    </script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
</head>

<body>
    <section class="bg-gray-50 dark:bg-gray-900 py-3 sm:py-5">
        <div class="px-4 mx-auto max-w-screen-2xl lg:px-12">
            <div id="alert"></div>
            <div class="relative overflow-hidden bg-white shadow-md dark:bg-gray-800 sm:rounded-lg">
                <div
                    class="flex flex-col px-4 py-3 space-y-3 lg:flex-row lg:items-center lg:justify-between lg:space-y-0 lg:space-x-4">
                    <h4>Transaksi</span></h4>
                    <div class="flex items-center flex-1 space-x-4">
                        <h5>
                            <span class="text-gray-500">All Transactions:</span>
                            <span class="dark:text-white">{{ sizeof($transactions) }}</span>
                        </h5>
                        <h5>
                            <span class="text-gray-500">Total sales:</span>
                            <span class="dark:text-white">
                                Rp{{ number_format($totalSales, 2, ',', '.') }}
                            </span>
                        </h5>
                    </div>
                    <div
                        class="flex flex-col flex-shrink-0 space-y-3 md:flex-row md:items-center lg:justify-end md:space-y-0 md:space-x-3">
                        <button type="button"
                            class="flex items-center justify-center px-4 py-2 text-sm font-medium text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                            <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path clip-rule="evenodd" fill-rule="evenodd"
                                    d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z">
                                </path>
                            </svg>
                            Add new transaction
                        </button>
                        <button type="button"
                            class="flex items-center justify-center flex-shrink-0 px-3 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg focus:outline-none hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"
                            onclick="showAlert()">
                            <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99">
                                </path>
                            </svg>
                            Update data
                        </button>
                        <button type="button"
                            class="flex items-center justify-center flex-shrink-0 px-3 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg focus:outline-none hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                            <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5m-13.5-9L12 3m0 0l4.5 4.5M12 3v13.5">
                                </path>
                            </svg>
                            Export
                        </button>
                    </div>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="p-4">
                                    <div class="flex items-center">
                                        <input id="checkbox-all" type="checkbox"
                                            class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="checkbox-all" class="sr-only">checkbox</label>
                                    </div>
                                </th>
                                <th scope="col" class="px-4 py-3 text-right">Tanggal</th>
                                <th scope="col" class="px-4 py-3">Customer</th>
                                <th scope="col" class="px-4 py-3 text-right">Total (IDR)</th>
                                <th scope="col" class="px-4 py-3 text-center">Pembayaran</th>
                                <th scope="col" class="px-4 py-3 text-right">Tanggal Pembayaran</th>
                                <th scope="col" class="px-4 py-3 text-center">Status</th>
                                <th scope="col" class="px-4 py-3">Last Update</th>
                            </tr>
                        </thead>
                        <tbody>
							@foreach ($transactions as $transaction)
								<tr class="border-b dark:border-gray-600 hover:bg-gray-100 dark:hover:bg-gray-700">
									<td class="w-4 px-4 py-3">
										<div class="flex items-center">
											<input id="checkbox-table-search-1" type="checkbox"
												onclick="event.stopPropagation()"
												class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
											<label for="checkbox-table-search-1" class="sr-only">checkbox</label>
										</div>
									</td>
                                    <td class="px-4 py-2 text-gray-900 whitespace-nowrap dark:text-white text-right">
                                        {{ (new Carbon\Carbon($transaction->tanggal))->toFormattedDayDateString() }}
									</td>
									<td class="flex items-center px-4 py-2 text-gray-900 whitespace-nowrap dark:text-white text-left">
                                        <div>
                                            <div class="font-medium">
                                                {{ $transaction->customer->namaLengkap() }}
                                            </div>
                                            <div class="text-xs">
                                                {{ $transaction->customer->nomor_whatsapp }}
                                            </div>
                                            <div class="text-xs text-gray-700">
                                                {{ $transaction->customer->email }}
                                            </div>
                                        </div>
									</td>
									<td class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white text-right">
                                        <a href="#" class="underline" data-items-popover="{{ $transaction->idtransactions }}">
                                            Rp{{ number_format($transaction->total, 2, ',', '.') }}
                                        </a>
									</td>
                                    <td class="px-4 py-2 text-center">
                                        @if ($transaction->metode_pembayaran == 'visa')
                                            <img class="mx-auto w-12 h-8" src="https://upload.wikimedia.org/wikipedia/commons/5/5e/Visa_Inc._logo.svg" alt="VISA logo">
                                        @elseif ($transaction->metode_pembayaran == 'mastercard')
                                            <img class="mx-auto w-16 h-8" src="https://upload.wikimedia.org/wikipedia/commons/2/2a/Mastercard-logo.svg" alt="Mastercard logo">
                                        @elseif ($transaction->metode_pembayaran == 'cash')
                                            <span
                                                class="bg-primary-100 text-primary-800 text-xs font-medium px-2 py-0.5 rounded dark:bg-primary-900 dark:text-primary-300">
                                                {{ ucfirst($transaction->metode_pembayaran) }}
                                            </span>
                                        @endif
									</td>
                                    <td class="px-4 py-2 text-gray-900 whitespace-nowrap dark:text-white text-right">
                                        @if ($transaction->tanggal_pembayaran)
                                            {{ (new Carbon\Carbon($transaction->tanggal_pembayaran))->toFormattedDayDateString() }}
                                        @else
                                            -
                                        @endif
									</td>
									<td class="px-4 py-2 font-medium text-gray-900 text-center whitespace-nowrap dark:text-white">
                                        @if ($transaction->tanggal_pembayaran)
                                            <span
                                                class="bg-green-100 text-green-800 text-xs font-medium px-2 py-0.5 rounded dark:bg-green-900 dark:text-green-300">
                                                Lunas
                                            </span>
                                        @else
                                            <span
                                                class="bg-red-100 text-red-800 text-xs font-medium px-2 py-0.5 rounded dark:bg-red-900 dark:text-red-300">
                                                Belum Lunas
                                            </span>
                                        @endif
									</td>
									<td class="px-4 py-2 text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ (new Carbon\Carbon($transaction->updated_at))->diffForHumans() }}
                                    </td>
								</tr>
							@endforeach
                        </tbody>
                    </table>
                </div>
                <nav class="flex flex-col items-start justify-between p-4 space-y-3 md:flex-row md:items-center md:space-y-0"
                    aria-label="Table navigation">
                    <span class="text-sm font-normal text-gray-500 dark:text-gray-400">
                        Showing
                        <span class="font-semibold text-gray-900 dark:text-white">1-10</span>
                        of
                        <span class="font-semibold text-gray-900 dark:text-white">1000</span>
                    </span>
                    <ul class="inline-flex items-stretch -space-x-px">
                        <li>
                            <a href="#"
                                class="flex items-center justify-center h-full py-1.5 px-3 ml-0 text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                <span class="sr-only">Previous</span>
                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center justify-center px-3 py-2 text-sm leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center justify-center px-3 py-2 text-sm leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                        </li>
                        <li>
                            <a href="#" aria-current="page"
                                class="z-10 flex items-center justify-center px-3 py-2 text-sm leading-tight border text-primary-600 bg-primary-50 border-primary-300 hover:bg-primary-100 hover:text-primary-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center justify-center px-3 py-2 text-sm leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">...</a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center justify-center px-3 py-2 text-sm leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">100</a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center justify-center h-full py-1.5 px-3 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                <span class="sr-only">Next</span>
                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>
    <div id="popover-items" role="tooltip" class="absolute z-10 invisible inline-block w-100 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-md opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
        <div class="px-3 py-2 bg-gray-100 border-b border-gray-200 rounded-t-lg dark:border-gray-600 dark:bg-gray-700">
            <h3 class="font-semibold text-gray-900 dark:text-white">
                Item transaksi
            </h3>
        </div>
        <div id="items-popover" class="px-3 py-2">
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>

    <script>
        window.addEventListener("load", function(event) {
            const links = document.querySelectorAll("a");
            const buttons = document.querySelectorAll("button");

            links.forEach(function(link) {
                link.addEventListener("click", function(ev) {
                    ev.preventDefault();
                });
            });

            buttons.forEach(function(button) {
                button.addEventListener("click", function(ev) {
                    ev.preventDefault();
                });
            });
        });

        function showAlert() {
            fetch('{{ route('transaction.alert') }}', {
                method: 'post',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                },
            }).then(response => response.text()).then(html => {
                document.getElementById('alert').innerHTML = html
            })
        }

        document.querySelectorAll('[data-items-popover]').forEach(trigger => {
            const popoverOptions = {
                placement: 'bottom',
                triggerType: 'none',
                onHide: () => {
                    console.log('popover hide')
                },
            }

            const popover = new Popover(document.getElementById('popover-items'), trigger, popoverOptions)

            trigger.addEventListener('click', e => {
                const transactionId = e.target.getAttribute('data-items-popover')
                const url = '{{ url('transactions/popover/$id/items') }}'.replace('$id', transactionId)
                fetch(url).then(response => response.text()).then(html => {
                    document.getElementById('items-popover').innerHTML = html
                    popover.show()
                })
            })
        })
    </script>

</body>

</html>
