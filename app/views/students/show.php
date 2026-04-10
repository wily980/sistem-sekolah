        <div class="mt-8 space-y-4">
            <!--Card header start-->
            <div class="bg-white shadow rounded-lg p-4">
                <h1 class="text-2xl font-bold">Detail Siswa</h1>
                <p>Menampilkan detail siswa yang terdaftar.</p>
            </div>
            <!--Card header end-->
 
            <!--Card content start-->
            <div class="bg-white shadow rounded-lg">
 
               <div  class="p-4 grid grid-cols-2 gap-4">
                    <div class="space-y-2">
                    <label for="name" class="block font-bold ">Nama</label>
                    <input type="text" name="name" readonly id="name" readonly placeholder="Masukkan nama" readonly class="w-full border rounded-lg py-2 px-4">
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
                <div class="flex justify-end gap-4 col-span-2">
                    <a href="/students" class="bg-gray-500 text-white px-4 py-2 rounded-lg">Kembali</a>
                </div>
               </div>
 
            </div>
            <!--Card content end-->
        </div>
