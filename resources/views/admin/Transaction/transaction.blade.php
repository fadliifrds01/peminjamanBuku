<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi - Perpustakaan</title>
    @vite('resources/css/app.css')
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
</head>

<body class="bg-gray-100 font-sans antialiased">

    <div class="flex min-h-screen">
        <!-- Sidebar -->
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
                    class="flex items-center px-6 py-3 text-gray-600 hover:bg-gray-50 hover:text-blue-600 hover:border-blue-600 transition-colors duration-100 ease-in">
                    <i class="ph ph-books text-xl mr-3"></i>
                    <span>Kelola Data Buku</span>
                </a>
                <a href="{{ route('transaction') }}"
                    class="flex items-center px-6 py-3 bg-blue-50 text-blue-600 border-r-4 border-blue-600">
                    <i class="ph ph-arrows-left-right text-xl mr-3"></i>
                    <span class="font-semibold">Transaksi</span>
                </a>
                <a href="{{ route('anggota') }}"
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

        <!-- Main Content -->
        <main class="flex-1 p-10">
            <div class="flex justify-between items-center mb-8">
                <div>
                    <h1 class="text-3xl font-bold text-gray-800">Transaksi</h1>
                    <p class="text-gray-500 text-sm">Pantau peminjaman dan pengembalian buku perpustakaan.</p>
                </div>
                <button
                    class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg flex items-center transition-all">
                    <i class="ph ph-plus-circle text-xl mr-2"></i>
                    Tambah Transaksi
                </button>
            </div>

            <div class="w-full bg-white rounded-xl shadow-sm overflow-hidden border border-gray-100">
                <table class="w-full text-left border-collapse">
                    <thead class="bg-gray-50 border-b border-gray-100">
                        <tr>
                            <th class="px-6 py-4 text-sm font-semibold text-gray-600 uppercase text-center">ID Transaksi</th>
                            <th class="px-6 py-4 text-sm font-semibold text-gray-600 uppercase text-center">Nama Anggota</th>
                            <th class="px-6 py-4 text-sm font-semibold text-gray-600 uppercase text-center">Judul Buku</th>
                            <th class="px-6 py-4 text-sm font-semibold text-gray-600 uppercase text-center">Tanggal Pinjam</th>
                            <th class="px-6 py-4 text-sm font-semibold text-gray-600 uppercase text-center">Tanggal Kembali</th>
                            <th class="px-6 py-4 text-sm font-semibold text-gray-600 uppercase text-center">Status</th>
                            <th class="px-6 py-4 text-sm font-semibold text-gray-600 uppercase text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-4 text-center font-mono text-gray-500">TRX-001</td>
                            <td class="px-6 py-4 text-gray-600 text-sm">Muhammad Fadli</td>
                            <td class="px-6 py-4 text-gray-800 font-medium">Laskar Pelangi</td>
                            <td class="px-6 py-4 text-gray-600 text-sm text-center">21-01-2026</td>
                            <td class="px-6 py-4 text-gray-600 text-sm text-center">28-01-2026</td>
                            <td class="px-6 py-4 text-center">
                                <span
                                    class="bg-green-100 text-green-600 text-xs px-2 py-1 rounded-full uppercase font-bold italic">Dipinjam</span>
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
                        <!-- Contoh transaksi lain -->
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-4 text-center font-mono text-gray-500">TRX-002</td>
                            <td class="px-6 py-4 text-gray-600 text-sm">Siti Aminah</td>
                            <td class="px-6 py-4 text-gray-800 font-medium">Harry Potter</td>
                            <td class="px-6 py-4 text-gray-600 text-sm text-center">20-01-2026</td>
                            <td class="px-6 py-4 text-gray-600 text-sm text-center">27-01-2026</td>
                            <td class="px-6 py-4 text-center">
                                <span
                                    class="bg-red-100 text-red-600 text-xs px-2 py-1 rounded-full uppercase font-bold italic">Terlambat</span>
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
