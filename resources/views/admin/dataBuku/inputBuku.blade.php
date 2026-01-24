<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">

    <div class="min-h-screen flex items-center justify-center px-4">
        <div class="w-full max-w-md bg-white rounded-xl shadow-sm border border-gray-100 p-8">

            <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">
                Tambah Buku
            </h2>

            <form action="{{ route('inputBuku') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- Judul Buku -->
                <div class="mb-4">
                    <label class="block text-sm font-semibold text-gray-600 mb-2">
                        Judul Buku
                    </label>
                    <input type="text" name="judul" value="{{ old('judul') }}"
                        class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none"
                        placeholder="Masukkan judul buku">
                </div>

                <!-- Pengarang -->
                <div class="mb-4">
                    <label class="block text-sm font-semibold text-gray-600 mb-2">
                        Pengarang
                    </label>
                    <input type="text" name="pengarang" value="{{ old('pengarang') }}"
                        class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none"
                        placeholder="Masukkan nama pengarang">
                </div>

                <!-- Kategori -->
                <div class="mb-4">
                    <label class="block text-sm font-semibold text-gray-600 mb-2">
                        Kategori
                    </label>
                    <select name="kategori"
                        class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                        <option value="">-- Pilih Kategori --</option>
                        <option value="Novel" {{ old('kategori') == 'Novel' ? 'selected' : '' }}>Novel</option>
                        <option value="Pendidikan" {{ old('kategori') == 'Pendidikan' ? 'selected' : '' }}>Pendidikan</option>
                        <option value="Teknologi" {{ old('kategori') == 'Teknologi' ? 'selected' : '' }}>Teknologi</option>
                        <option value="Agama" {{ old('kategori') == 'Agama' ? 'selected' : '' }}>Agama</option>
                    </select>
                </div>

                <!-- Stok -->
                <div class="mb-4">
                    <label class="block text-sm font-semibold text-gray-600 mb-2">
                        Stok Buku
                    </label>
                    <input type="number" name="stok" value="{{ old('stok') }}"
                        class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none"
                        placeholder="Jumlah stok buku">
                </div>

                <!-- Cover Buku -->
                <div class="mb-6">
                    <label class="block text-sm font-semibold text-gray-600 mb-2">
                        Cover Buku
                    </label>
                    <input type="file" name="gambar"
                        class="w-full text-sm text-gray-500
                               file:mr-4 file:py-2 file:px-4
                               file:rounded-lg file:border-0
                               file:text-sm file:font-semibold
                               file:bg-blue-50 file:text-blue-600
                               hover:file:bg-blue-100">
                </div>

                <!-- Tombol -->
                <div class="flex justify-between items-center">
                    <a href="{{ route('dataBuku') }}"
                        class="px-5 py-2 rounded-lg bg-red-500 hover:bg-red-600 text-white transition-all">
                        Kembali
                    </a>
                    <button type="submit"
                        class="px-5 py-2 rounded-lg bg-blue-600 text-white hover:bg-blue-700 transition-all">
                        Simpan Buku
                    </button>
                </div>

            </form>
        </div>
    </div>

</body>
</html>
