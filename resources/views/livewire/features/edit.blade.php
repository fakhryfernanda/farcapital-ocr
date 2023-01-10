{{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
<div class="container mt-10  p-6   ">
    <form action="" >
        <div class="flex w-full justify-center gap-32">
            <div class=" bg-gray-200 rounded-lg max-w-md px-10 pt-10 pb-12 mt-7">
                <h1 class=" h-[40px] flex justify-center text-[30px] text-red-400 font-bold mb-5">Biodata Diri</h1>
                <div class="flex flex-col gap-4">
                    <div class="flex items-center">
                        <label class="w-40" for="nama">Nama : </label>
                        <input class="px-1 border-2  focus:border-blue-600 focus:outline-none" type="text" name="nama" id="nama"
                            wire:model="nama">
                    </div>
                    <div class="flex items-center">
                        <label class="w-40" for="nik">NIK : </label>
                        <input class="px-1 border-2" type="text" name="nik" id="nik" wire:model="nik">
                    </div>
                    <div class="flex items-center">
                        <label class="w-40" for="tempat_lahir">Tempat Lahir : </label>
                        <input class="px-1 border-2" type="text" name="tempat_lahir" id="tempat_lahir" wire:model="tempat_lahir">
                    </div>
                    <div class="flex items-center">
                        <label class="w-40" for="tanggal_lahir">Tanggal Lahir : </label>
                        <input class="px-1 border-2" type="date" name="tanggal_lahir" id="tanggal_lahir"
                            wire:model="tanggal_lahir">
                    </div>
                    <div class="flex items-center">
                        <label class="w-40" for="jenis_kelamin">Jenis Kelamin : </label>
                        <select class="border-2 gap-20" name="jenis_kelamin" id="jenis_kelamin" wire:model="jenis_kelamin">
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        </select>    
                        
                    </div>
                    <div class="flex items-center">
                        <label class="w-40" for="golongan_darah">Golongan Darah : </label>
                        <select class="border-2" name="golongan_darah" id="golongan_darah" wire:model="golongan_darah">
                            <option value="A">A</option>    
                            <option value="B">B</option>    
                            <option value="AB">AB</option>    
                            <option value="O">O</option>    
                        </select>
                    </div>
                    <div class="flex items-center">
                        <label class="w-40" for="alamat">Alamat : </label>
                        <input class="px-1 border-2" type="text" name="nama" id="nama" wire:model="alamat">
                    </div>
                    <div class="flex items-center">
                        <label class="w-40" for="rt">RT : </label>
                        <input class="px-1 border-2" type="text" name="rt" id="rt" wire:model="rt">
                    </div>
                    <div class="flex items-center">
                        <label class="w-40" for="rw">RW : </label>
                        <input class="px-1 border-2" type="text" name="rw" id="rw" wire:model="rw">
                    </div>
                </div>
                
            </div>
            <div class=" bg-gray-200 max-w-md px-10 pt-[100px] pb-12 mt-7 rounded-lg">
                <div class="flex flex-col gap-4">
                    <div class="flex items-center">
                        <label class="w-40" for="kelurahan">Kelurahan : </label>
                        <input class="px-1 border-2" type="text" name="kelurahan" id="kelurahan" wire:model="kelurahan">
                    </div>
                    <div class="flex items-center">
                        <label class="w-40" for="kecamatan">Kecamatan : </label>
                        <input class="px-1 border-2" type="text" name="kecamatan" id="kecamatan" wire:model="kecamatan">
                    </div>
                    <div class="flex items-center">
                        <label class="w-40" for="kecamatan">Kota : </label>
                        <input class="px-1 border-2" type="text" name="kota" id="kota" wire:model="kota">
                    </div>
                    <div class="flex items-center">
                        <label class="w-40" for="kecamatan">Provinsi : </label>
                        <input class="px-1 border-2" type="text" name="provinsi" id="provinsi" wire:model="provinsi">
                    </div>
                    <div class="flex items-center">
                        <label class="w-40" for="agama">Agama : </label>
                        <select class="border-2" name="agama" id="agama" wire:model="agama">
                            <option value="islam">Islam</option>
                            <option value="kristen">Kristen</option>
                            <option value="katolik">Katolik</option>
                            <option value="hindu">Hindu</option>
                            <option value="buddha">Buddha</option>
                            <option value="kong-hu-chu">Kong Hu Chu</option>
                        </select>
                    </div>
                    <div class="flex items-center">
                        <label class="w-40" for="status_perkawinan">Status Perkawinan : </label>
                        <select class="border-2" type="text" name="status_perkawinan" id="status_perkawinan" wire:model="status_perkawinan">
                            <option value="kawin">Kawin</option>
                            <option value="belum_kawin">Belum Kawin</option>
                            <option value="cerai_hidup">Cerai Hidup</option>
                            <option value="cerai_mati">Cerai Mati</option>
                        </select>
                    </div>
                    <div class="flex items-center">
                        <label class="w-40" for="pekerjaan">Pekerjaan : </label>
                        <input class="px-1 border-2" type="text" name="pekerjaan" id="pekerjaan" wire:model="pekerjaan">
                    </div>
                    <div class="flex items-center">
                        <label class="w-40" for="kewarganegaraan">Kewarganegaraan : </label>
                        <select class="border-2" type="text" name="kewarganegaraan" id="kewarganegaraan"
                        wire:model="kewarganegaraan">
                            <option value="wni">WNI</option>                            
                            <option value="wna">WNA</option>                            
                        </select>
                    </div>
        
                    <div class="w-full flex justify-center">
                        <button
                            class="inline-block   mt-7 px-7 py-2 bg-red-400 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-500 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-600 active:shadow-lg transition duration-150 ease-in-out">
                            Edit</button>
                    </div>
                </div>
                
            </div>
        </div>  
    </form>
</div>

