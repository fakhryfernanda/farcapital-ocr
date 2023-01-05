<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <div class="container mt-10 block p-6 rounded-lg shadow-lg bg-blue-100 max-w-md border-2 w-full">
        <form action="">
            <h1 class=" flex justify-center text-[30px] text-blue-400 mb-5">Biodata Diri</h1>
            <div class="flex items-center">
                <label class="w-40" for="nama">Nama : </label>
                <input class="border-2  focus:border-blue-600 focus:outline-none" type="text" name="nama" id="nama"
                    wire:click="nama" value="fahri"><br><br>
            </div>
            <div class="flex items-center">
                <label class="w-40" for="nik">NIK : </label>
                <input class="border-2" type="text" name="nik" id="nik" wire:click="nik"
                    value="3305081212120001"><br><br>
            </div>
            <div class="flex items-center">
                <label class="w-40" for="tempat_lahir">Tempat Lahir : </label>
                <input class="border-2" type="text" name="tempat_lahir" id="tempat_lahir" value="Bekasi"
                    wire:click="tempat_lahir"><br><br>
            </div>
            <div class="flex items-center">
                <label class="w-40" for="tanggal_lahir">Tanggal Lahir : </label>
                <input class="border-2" type="date" name="tanggal_lahir" id="tanggal_lahir"
                    wire:click="tanggal_lahir"><br><br>
            </div>
            <!-- <div class="flex gap-40"> -->
            <div class="flex items-center">
                <label class="w-40" for="jenis_kelamin">Jenis Kelamin : </label>
                <input class="border-2 gap-20" type="text" name="jenis_kelamin" id="jenis_kelamin"
                    wire:click="golongan_darah" value="L"><br><br>
            </div>
            <div class="flex items-center">
                <label class="w-40" for="golongan_darah">Golongan Darah : </label>
                <input class="border-2" type="text" name="golongan_darah" id="golongan_darah"
                    wire:click="golongan_darah" value="A"><br><br>
            </div>
            <!-- </div> -->
            <div class="flex items-center">
                <label class="w-40" for="alamat">Alamat : </label>
                <input class="border-2" type="text" name="nama" id="nama" wire:click="nama"
                    value="Kampung Rambutan"><br><br>
            </div>
            <div class="flex items-center">
                <label class="w-40" for="rt">RT : </label>
                <input class="border-2" type="text" name="rt" id="rt" wire:click="rt" value="004"><br><br>
            </div>
            <div class="flex items-center">
                <label class="w-40" for="rw">RW : </label>
                <input class="border-2" type="text" name="rw" id="rw" wire:click="rw" value="004"><br><br>
            </div>
            <div class="flex items-center">
                <label class="w-40" for="desa">Desa : </label>
                <input class="border-2" type="text" name="desa" id="desa" wire:click="desa"
                    value="Tambun Selatan"><br><br>
            </div>
            <div class="flex items-center">
                <label class="w-40" for="kecamatan">Kecamatan : </label>
                <input class="border-2" type="text" name="kecamatan" id="kecamatan" wire:click="kecamatan"
                    value="Tambun"><br><br>
            </div>
            <div class="flex items-center">
                <label class="w-40" for="agama">Agama : </label>
                <input class="border-2" type="text" name="agama" id="agama" wire:click="agama" value="Islam"><br><br>
            </div>
            <div class="flex items-center">
                <label class="w-40" for="status_perkawinan">Status Perkawinan : </label>
                <input class="border-2" type="text" name="status_perkawinan" id="status_perkawinan"
                    wire:click="status_perkawinan" value="Belum Kawin"><br><br>
            </div>
            <div class="flex items-center">
                <label class="w-40" for="pekerjaan">Pekerjaan : </label>
                <input class="border-2" type="text" name="pekerjaan" id="pekerjaan" wire:click="pekerjaan"
                    value="Programmer"><br><br>
            </div>
            <div class="flex items-center">
                <label class="w-40" for="kewarganegaraan">Kewarganegaraan : </label>
                <input class="border-2" type="text" name="kewarganegaraan" id="kewarganegaraan"
                    wire:click="kewarganegaraan" value="WNI"><br><br>
            </div>

            <div class="flex items-center">
                <label class="w-40" for="berlaku_hingga">Berlaku Hingga : </label>
                <input class="border-2" type="text" name="berlaku_hingga" id="berlaku_hingga"
                    wire:click="berlaku_hingga" value="Seumur jagung"><br><br>
            </div>
            <div class="w-full flex justify-center">
                <button
                    class="inline-block   mt-7 px-7 py-2 bg-green-400 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-yellow-600 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-yellow-600 active:shadow-lg transition duration-150 ease-in-out">
                    Edit</button>
            </div>

        </form>
    </div>
</div>
