<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Data Buku - Perpustakaan</title>
    @vite('resources/css/app.css')
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
</head>

<body class="bg-gray-100 font-sans antialiased">

    <div class="flex min-h-screen">
        <aside class="w-64 bg-white shadow-md">
            <div class="p-6">
                <h2 class="text-xl font-bold italic text-blue-600">Admin Perpustakaan</h2>
            </div>
            <nav class="mt-4">
                <a href="{{ route('dashboard') }}"
                    class="flex items-center px-6 py-3 text-gray-600 hover:bg-gray-50 hover:text-blue-600 hover:border-blue-600 transition-colors duration-100 ease-in">
                    <i class="ph ph-layout text-xl mr-3"></i>
                    <span>Dashboard</span>
                </a>
                <a href="{{ route('dataBuku') }}"
                    class="flex items-center px-6 py-3 bg-blue-50 text-blue-600 border-r-4 border-blue-600">
                    <i class="ph ph-books text-xl mr-3"></i>
                    <span class="font-medium">Kelola Data Buku</span>
                </a>
                <a href="#"
                    class="flex items-center px-6 py-3 text-gray-600 hover:bg-gray-50 hover:text-blue-600 hover:border-blue-600 transition-colors duration-100 ease-in">
                    <i class="ph ph-arrows-left-right text-xl mr-3"></i>
                    <span>Transaksi</span>
                </a>
                <a href="#"
                    class="flex items-center px-6 py-3 text-gray-600 hover:bg-gray-50 hover:text-blue-600 hover:border-blue-600 transition-colors duration-100 ease-in">
                    <i class="ph ph-users text-xl mr-3"></i>
                    <span>Kelola Anggota</span>
                </a>

                <div class="mt-10 px-6">
                    <form action="{{ route('login') }}" method="GET">
                        <button class="flex items-center text-red-500 hover:text-red-700 font-medium">
                            <i class="ph ph-sign-out text-xl mr-3"></i>
                            Logout
                        </button>
                    </form>
                </div>
            </nav>
        </aside>

        <main class="flex-1 p-10">
            <div class="flex justify-between items-center mb-8">
                <div>
                    <h1 class="text-3xl font-bold text-gray-800">Kelola Data Buku</h1>
                    <p class="text-gray-500 text-sm">Kelola koleksi buku perpustakaan Anda di sini.</p>
                </div>
                <button
                    class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg flex items-center transition-all">
                    <i class="ph ph-plus-circle text-xl mr-2"></i>
                    Tambah Buku
                </button>
            </div>

            <div class="w-full bg-white rounded-xl shadow-sm overflow-hidden border border-gray-100">
                <table class="w-full text-left border-collapse">
                    <thead class="bg-gray-50 border-b border-gray-100">
                        <tr>
                            <th class="px-6 py-4 text-sm font-semibold text-gray-600 uppercase text-center">Judul Buku</th>
                            <th class="px-6 py-4 text-sm font-semibold text-gray-600 uppercase text-center">Pengarang</th>
                            <th class="px-6 py-4 text-sm font-semibold text-gray-600 uppercase text-center">Kategori</th>
                            <th class="px-6 py-4 text-sm font-semibold text-gray-600 uppercase text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-4">
                                <div class="font-medium text-gray-800">Laskar Pelangi</div>
                                <div class="text-xs text-gray-400 font-mono">ID: BUK-001</div>
                            </td>
                            <td class="px-6 py-4 text-gray-600 text-sm">Andrea Hirata Andrea Hirata Andrea Hirata </td>
                            <td class="px-6 py-4">
                                <span
                                    class="bg-blue-100 text-blue-600 text-xs px-2 py-1 rounded-full uppercase font-bold italic">Novel</span>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex justify-center gap-3">
                                    <button class="text-amber-500 hover:text-amber-600" title="Edit">
                                        <i class="ph ph-pencil-simple text-xl"></i>
                                    </button>
                                    <button class="text-red-500 hover:text-red-600" title="Hapus">
                                        <i class="ph ph-trash text-xl"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>

</body>

</html>