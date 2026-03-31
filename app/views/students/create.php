<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Siswa</title>
    <link rel="stylesheet" href="/css/output.css">
</head>
<body class="min-h-screen flex flex-col bg-gray-100">
    <header class="bg-blue-500 text-white">
        <div class="flex items-center justify-between container mx-auto p-4">
            <a href="/students" class="font-bold text-xl">Sistem Sekolah</a>
            <a href="/students/create" class="bg-white text-blue-500 px-4 py-2 rounded-lg">+ Tambah Siswa</a>
        </div>
    </header>
 
    <main class="grow container mx-auto">
        <div class="mt-8 space-y-4">
            <!--Card header start-->
            <div class="bg-white shadow rounded-lg p-4">
                <h1 class="text-2xl font-bold">Tambah Siswa</h1>
                <p>Isi formulir di bawah ini untuk menambahkan siswa baru.</p>
            </div>
            <!--Card header end-->
 
            <!--Card content start-->
            <div class="bg-white shadow rounded-lg">
 
               <form action="" class="p-4 grid grid-cols-2 gap-4">
                    <div class="space-y-2">
                    <label for="name" class="block font-bold ">Nama</label>
                    <input type="text" name="name" id="name" placeholder="Masukkan nama" class="w-full border rounded-lg py-2 px-4">
                </div>
                    <div class="space-y-2">
                    <label for="nis" class="block font-bold ">Nis</label>
                    <input type="text" name="nis" id="nis" placeholder="Masukkan nis" class="w-full border rounded-lg py-2 px-4">
                </div>
                    <div class="space-y-2">
                    <label for="kelas" class="block font-bold ">Kelas</label>
                    <input type="text" name="kelas" id="kelas" placeholder="Masukkan kelas" class="w-full border rounded-lg py-2 px-4">
                </div>
                    <div class="space-y-2">
                    <label for="phone-number" class="block font-bold ">No Telepon</label>
                    <input type="text" name="phone_number" id="phone_number" placeholder="Masukkan no telepon" class="w-full border rounded-lg py-2 px-4">
                </div>
               </form>
 
            </div>
            <!--Card content end-->
        </div>
    </main>
 
    <footer class="bg-green-800 text-white item">
            <div class="text-center p-4">
                &copy <?= date(format: "Y") ?> - Sistem Sekolah SMK Kristen Immanuel
            </div>
    </footer>
 
</body>
</html>