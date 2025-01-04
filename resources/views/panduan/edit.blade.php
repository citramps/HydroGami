<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Misi Gamifikasi</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Karla:wght@400;700&display=swap" rel="stylesheet">
    <style>
        .bg-custom-green {
            background-color: #29CC74;
        }
    </style>
</head>

<body>
    <div class="flex min-h-screen">

        <!-- Side Bar -->
        <div class="w-1/5 bg-custom-green text-white p-6 z-10 flex flex-col">
            <div class="mb-8">
                <div class="flex justify-center mb-4">
                    <img src="{{ asset('images/hydrogami-logo2.png') }}" alt="HydroGami Logo" class="w-12">
                </div>
            </div>
            <nav class="space-y-4">
                <a href="{{ route('dashboard-admin') }}" class="flex items-center py-2 px-4 hover:bg-green-300 rounded">
                    <svg class="w-5 h-5 mr-2 text-white" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10 2.828l7 7V17a2 2 0 01-2 2h-3a1 1 0 01-1-1v-4a1 1 0 00-1-1H8a1 1 0 00-1 1v4a1 1 0 01-1 1H3a2 2 0 01-2-2v-7.172l7-7a1 1 0 011.414 0z" />
                    </svg>
                    <span>Dashboard</span>
                </a>

                <a href="{{ route('misi.index') }}" class="flex items-center py-2 px-4 hover:bg-green-300 rounded">
                    <svg class="w-5 h-5 mr-2 text-white" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M5 3a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V5a2 2 0 00-2-2H5zm3 3h4a1 1 0 010 2H8a1 1 0 010-2z" />
                    </svg>
                    <span>Misi</span>
                </a>

                <a href="{{ route('leaderboard-admin') }}"
                    class="flex items-center py-2 px-4 hover:bg-green-300 rounded">
                    <svg class="w-5 h-5 mr-2 text-white" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10 2a1 1 0 01.832.445l4 6A1 1 0 0114 10H6a1 1 0 01-.832-1.555l4-6A1 1 0 0110 2zm.79 7.607A1 1 0 0010 9h0a1 1 0 00-.79.393L4 15h12l-5.21-7.393z" />
                    </svg>
                    <span>Leaderboard</span>
                </a>

                <a href="{{ route('panduan.index') }}"
                    class="flex items-center py-2 px-4 bg-white text-green-500 rounded shadow">
                    <svg class="w-5 h-5 mr-2 text-green-500" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M5 3a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V5a2 2 0 00-2-2H5zm3 3h4a1 1 0 010 2H8a1 1 0 010-2z" />
                    </svg>
                    <span>Panduan</span>
                </a>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-1 p-10 bg-white">
            <h2 class="text-2xl font-bold mb-4">Edit Panduan Gamifikasi</h2>
            <div class="bg-white shadow-md rounded-lg p-6">
                <form action="{{ route('panduan.update', $panduan->id_panduan) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label for="id_panduan" class="block text-gray-700 font-medium mb-2">ID Panduan</label>
                        <input type="text" id="id_panduan" name="id_panduan"
                            class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-green-500"
                            value="{{ $panduan->id_panduan }}" readonly>
                    </div>

                    <div class="mb-4">
                        <label for="judul" class="block text-gray-700 font-medium mb-2">Judul Panduan</label>
                        <input type="text" id="judul" name="judul"
                            class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-green-500"
                            value="{{ $panduan->judul }}">
                    </div>

                    <div class="mb-4">
                        <label for="desk_panduan" class="block text-gray-700 font-medium mb-2">Deskripsi Panduan</label>
                        <textarea id="desk_panduan" name="desk_panduan"
                            class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-green-500">{{ $panduan->desk_panduan }}</textarea>
                    </div>

                    <div class="mb-4">
                        <label for="gambar" class="block text-gray-700 font-medium mb-2">Gambar</label>
                        <input type="file" id="gambar" name="gambar"
                            class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-green-500 text-sm text-gray-500">
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 font-medium mb-2" for="video">Video Panduan (URL)</label>
                        <input type="url" name="video" id="video" placeholder="Masukkan URL Video Panduan"
                            class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-green-500"
                            value="{{ $panduan->video }}">
                    </div>
                    <div class="text-center">
                        <button type="submit"
                            class="px-4 py-2 bg-green-500 text-white font-semibold rounded-md hover:bg-green-600"> Simpan Perubahan
                        </button>
                    </div>
                </form>
            </div>
        </div>
        
</body>
</html>