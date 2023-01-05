<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <div class="container mt-10 block p-6 rounded-lg shadow-lg bg-blue-100 max-w-md border-2 w-full">
        <form method="POST" wire:submit.prevent="update" enctype="multipart/form-data">
            @csrf
            <h1 class=" flex justify-center text-[30px] text-blue-400 mb-5">Biodata Diri</h1>
            <div class="flex items-center">
                <label class="w-40" for="nama">Nama : </label>
                <input class="border-2  focus:border-blue-600 focus:outline-none" type="text" name="nama" id="nama"
                    wire:model="nama" ><br><br>
            </div>
            <div class="flex items-center">
                <label class="w-40" for="nik">NIK : </label>
                <input class="border-2" type="text" name="nik" id="nik" wire:model="nik"
                    ><br><br>
            </div>
            <div class="flex items-center">
                <label class="w-40" for="tempat_lahir">Tempat Lahir : </label>
                <input class="border-2" type="text" name="tempat_lahir" id="tempat_lahir" 
                    wire:model="tempat_lahir"><br><br>
            </div>
            <div class="flex items-center">
                <label class="w-40" for="tanggal_lahir">Tanggal Lahir : </label>
                <input class="border-2" type="date" name="tanggal_lahir" id="tanggal_lahir"
                    wire:model="tanggal_lahir"><br><br>
            </div>
            <!-- <div class="flex gap-40"> -->
            <div class="flex items-center">
                <label class="w-40" for="jenis_kelamin">Jenis Kelamin : </label>
                <select  class="border-2 gap-20" name="jenis_kelamin" id="jenis_kelamin" wire:model="jenis_kelamin">
                    <option value="L">L</option>
                    <option value="P">P</option>
                </select><br><br>
            </div>
            <div class="flex items-center">
                <label class="w-40" for="golongan_darah">Golongan Darah : </label>
                <select  class="border-2 gap-20" name="golongan_darah" id="golongan_darah" wire:model="golongan_darah">
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="AB">AB</option>
                    <option value="O">O</option>
                </select><br><br>
            </div>
            <!-- </div> -->
            <div class="flex items-center">
                <label class="w-40" for="alamat">Alamat : </label>
                <input class="border-2" type="text" name="nama" id="nama" wire:model="alamat"
                   ><br><br>
            </div>
            <div class="flex items-center">
                <label class="w-40" for="rt">RT : </label>
                <input class="border-2" type="text" name="rt" id="rt" wire:model="rt" ><br><br>
            </div>
            <div class="flex items-center">
                <label class="w-40" for="rw">RW : </label>
                <input class="border-2" type="text" name="rw" id="rw" wire:model="rw" ><br><br>
            </div>
            <div class="flex items-center">
                <label class="w-40" for="desa">Desa : </label>
                <input class="border-2" type="text" name="desa" id="desa" wire:model="desa"
                    ><br><br>
            </div>
            <div class="flex items-center">
                <label class="w-40" for="kecamatan">Kecamatan : </label>
                <input class="border-2" type="text" name="kecamatan" id="kecamatan" wire:model="kecamatan"
                    ><br><br>
            </div>
            <div class="flex items-center">
                <label class="w-40" for="agama">Agama : </label>
                <select  class="border-2 gap-20" name="agama" id="agama" wire:model="agama">
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Konghucu">Konghucu</option>
                    <option value="Budha">Budha</option>
                    <option value="Hindu">Hindu</option>
                </select><br><br>
            </div>
            <div class="flex items-center">
                <label class="w-40" for="status_perkawinan">Status Perkawinan : </label>
                <select  class="border-2 gap-20" name="status_perkawinan" id="status_perkawinan" wire:model="status_perkawinan">
                    <option value="Belum_kawin">Belum Kawin</option>
                    <option value="Kawin">Kawin</option>
                    <option value="Janda">Janda</option>
                    <option value="Duda">Duda</option>
                </select><br><br>
            </div>
            <div class="flex items-center">
                <label class="w-40" for="pekerjaan">Pekerjaan : </label>
                <input class="border-2" type="text" name="pekerjaan" id="pekerjaan" wire:model="pekerjaan"
                    ><br><br>
            </div>
            <div class="flex items-center">
                <label class="w-40" for="kewarganegaraan">Kewarganegaraan : </label>
                <select  class="border-2 gap-20" name="kewarganegaraan" id="kewarganegaraan" wire:model="kewarganegaraan">
                    <option value="WNI">WNI</option>
                    <option value="WNA">WNA</option>
                </select><br><br>
            </div>

            <div class="flex items-center">
                <label class="w-40" for="berlaku_hingga">Berlaku Hingga : </label>
                <input class="border-2" type="text" name="berlaku_hingga" id="berlaku_hingga"
                    wire:model="berlaku_hingga" ><br><br>
            </div>
            <div class="w-full flex justify-center">
                <button wire:model=""
                    class="inline-block   mt-7 px-7 py-2 bg-green-400 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-yellow-600 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-yellow-600 active:shadow-lg transition duration-150 ease-in-out">
                    Edit</button>
            </div>

        </form>
    </div>
</div>
