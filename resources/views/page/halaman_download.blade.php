<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Download</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 text-gray-800 p-4 md:p-8 font-sans min-h-screen flex items-center justify-center">

    <div class="max-w-4xl w-full bg-white p-6 md:p-8 rounded-xl shadow-md border border-gray-200">
        
        <div class="mb-6 border-b border-gray-200 pb-4 text-center md:text-left">
            <h1 class="text-2xl md:text-3xl font-bold text-gray-900">Download</h1>
            {{-- <p class="text-gray-500 mt-2 text-sm md:text-base">Pilih dan unduh versi aplikasi yang sesuai dengan perangkat Anda.</p> --}}
        </div>

        <div class="w-full">
            <table class="w-full border-collapse">
                
                <thead class="hidden md:table-header-group bg-gray-100 border-b-2 border-gray-300">
                    <tr>
                        <th class="p-4 text-left font-semibold text-gray-700">Name</th>
                        <th class="p-4 text-left font-semibold text-gray-700">Version</th>
                        <th class="p-4 text-left font-semibold text-gray-700">Size</th>
                        <th class="p-4 text-center font-semibold text-gray-700">Action</th>
                    </tr>
                </thead>
                
                <tbody class="block md:table-row-group">
                    
                    <tr class="block md:table-row border border-gray-300 md:border-b md:border-t-0 md:border-l-0 md:border-r-0 mb-6 md:mb-0 rounded-lg md:rounded-none overflow-hidden hover:bg-gray-50 transition-colors">
                        
                        <td class="block md:table-cell p-4 border-b border-gray-200 md:border-none">
                            <div class="flex flex-col md:block">
                                <span class="md:hidden text-xs font-bold text-gray-400 uppercase tracking-wider mb-1">Name</span>
                                <div>
                                    <strong class="text-gray-900 text-lg md:text-base">CuanTrack</strong>
                                    <div class="text-xs text-gray-500 mt-1">File instalasi manual untuk HP Android</div>
                                </div>
                            </div>
                        </td>

                        <td class="block md:table-cell p-4 border-b border-gray-200 md:border-none align-middle">
                            <div class="flex justify-between md:block items-center">
                                <span class="md:hidden text-xs font-bold text-gray-400 uppercase tracking-wider">Version</span>
                                <span class="font-medium text-gray-700 bg-gray-100 md:bg-transparent px-2 py-1 rounded md:p-0">1.2.2+1</span>
                            </div>
                        </td>

                        <td class="block md:table-cell p-4 border-b border-gray-200 md:border-none align-middle">
                            <div class="flex justify-between md:block items-center">
                                <span class="md:hidden text-xs font-bold text-gray-400 uppercase tracking-wider">Size</span>
                                <span class="text-gray-600">~121 MB</span>
                            </div>
                        </td>

                        <td class="block md:table-cell p-4 bg-gray-50 md:bg-transparent align-middle text-center">
                            <a href="https://github.com/yusdi17/CuanTrack-Mobile/releases/download/cuantrack/cuantrack-1.2.3.apk" download="CuanTrack-v1.2.3.apk" 
                               class="block md:inline-block w-full md:w-auto bg-green-600 hover:bg-green-700 text-white font-bold py-3 md:py-2 px-6 rounded-md shadow-sm transition-transform active:scale-95 text-center">
                                Download
                            </a>
                        </td>
                    </tr>

                    {{-- <tr class="block md:table-row border border-gray-300 md:border-b md:border-t-0 md:border-l-0 md:border-r-0 mb-6 md:mb-0 rounded-lg md:rounded-none overflow-hidden hover:bg-gray-50 transition-colors opacity-75">
                        
                        <td class="block md:table-cell p-4 border-b border-gray-200 md:border-none">
                            <div class="flex flex-col md:block">
                                <span class="md:hidden text-xs font-bold text-gray-400 uppercase tracking-wider mb-1">Nama File</span>
                                <div>
                                    <strong class="text-gray-700 text-lg md:text-base">CuanTrack Android - Lama</strong>
                                    <div class="text-xs text-gray-500 mt-1">Versi 1.0.0 (Archive)</div>
                                </div>
                            </div>
                        </td>

                        <td class="block md:table-cell p-4 border-b border-gray-200 md:border-none align-middle">
                            <div class="flex justify-between md:block items-center">
                                <span class="md:hidden text-xs font-bold text-gray-400 uppercase tracking-wider">Versi</span>
                                <span class="text-gray-500">1.0.0+1</span>
                            </div>
                        </td>

                        <td class="block md:table-cell p-4 border-b border-gray-200 md:border-none align-middle">
                            <div class="flex justify-between md:block items-center">
                                <span class="md:hidden text-xs font-bold text-gray-400 uppercase tracking-wider">Ukuran</span>
                                <span class="text-gray-500">~50 MB</span>
                            </div>
                        </td>

                        <td class="block md:table-cell p-4 bg-gray-50 md:bg-transparent align-middle text-center">
                            <button disabled class="block md:inline-block w-full md:w-auto bg-gray-200 text-gray-400 font-bold py-3 md:py-2 px-6 rounded-md cursor-not-allowed text-center">
                                Tdk Tersedia
                            </button>
                        </td>
                    </tr> --}}

                </tbody>
            </table>
        </div>
        
        <div class="mt-8 md:mt-10 p-5 bg-blue-50/50 border border-blue-100 rounded-lg">
            <div class="flex items-center gap-2 mb-3 text-blue-800 font-bold">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm8.706-1.442c1.146-.573 2.437.463 2.126 1.733l-1.052 4.305c-.022.09-.038.183-.048.277-.04.368.1.738.375.98.276.242.666.36 1.054.321l.162-.014a.75.75 0 01.139 1.492c-.171.016-.347.022-.525.022-1.34 0-2.61-.43-3.616-1.19-1.006-.761-1.636-1.87-1.785-3.085-.021-.174-.03-.35-.027-.525a.75.75 0 01.013-.135l1.052-4.305c.01-.044.02-.088.032-.132.064-.24.167-.468.303-.674zM11.25 7.5a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z" clip-rule="evenodd" />
                </svg>
                Cara Install (Penting!)
            </div>
            <ol class="list-decimal ml-5 space-y-2 text-sm text-gray-600">
                <li>Klik tombol <b>Download</b> di atas.</li>
                <li>Setelah selesai mengunduh, ketuk file <b>.apk</b> tersebut dari menu notifikasi atau File Manager HP Anda.</li>
                <li>Jika HP Anda memblokir instalasi, pilih <b>Pengaturan (Settings)</b> pada popup yang muncul.</li>
                <li>Aktifkan opsi <b>"Izinkan dari sumber ini" (Allow from this source)</b>.</li>
                <li>Tekan kembali (back) dan lanjutkan proses <b>Install</b>.</li>
            </ol>
        </div>

    </div>

</body>

</html>
