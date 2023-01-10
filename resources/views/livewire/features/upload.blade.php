<div class="min-h-screen overflow-hidden flex items-center justify-center background: bg-gradient-to-b from-red-50 to-red-300" style="" x-data="scan">
    <div class="items-center justify-center w-1/2">
        <div class="text-center py-3 font-semibold">
            <h1>Please Upload Your National Identity Card (KTP)</h1>
        </div>
        <div>
        <label for="ktp" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-solid rounded-lg cursor-pointer bg-white dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-200 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                <p class="text-xs text-gray-500 dark:text-gray-400">JPEG (MAX. 800x400px) </p>
            </div>
            <input id="ktp" type="file" class="hidden" />
        </label>
        </div>
        <div class="text-center py-5">
            <button type="button"  @click="scanktp()" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Upload</button>
        </div>

        <template x-if="mode == 'verifikasi'">
            {{-- <div>
                <input type="text" name="nik" x-bind:value="datanya.nik"><br><br>
                <input type="text" name="nama" x-bind:value="datanya.nama"><br><br>
                <input type="text" name="tempat_lahir" x-bind:value="datanya.tempat_lahir"><br><br>
                <input type="text" name="tanggal_lahir" x-bind:value="datanya.tanggal_lahir"><br><br>
                <input type="text" name="kelamin" x-bind:value="datanya.kelamin"><br><br>

                <input type="text" name="golongan_darah" x-bind:value="datanya.golongan_darah"><br><br>
                <input type="text" name="alamat" x-bind:value="datanya.alamat"><br><br>
                <input type="text" name="rt" x-bind:value="datanya.rt"><br><br>
                <input type="text" name="rw" x-bind:value="datanya.rw"><br><br>
                <input type="text" name="kelurahan" x-bind:value="datanya.kelurahan"><br><br>
                <input type="text" name="kecamatan" x-bind:value="datanya.kecamatan"><br><br>
                <input type="text" name="agama" x-bind:value="datanya.agama"><br><br>
                <input type="text" name="perkawinan" x-bind:value="datanya.perkawinan"><br><br>
                <input type="text" name="pekerjaan" x-bind:value="datanya.pekerjaan"><br><br>
                <input type="text" name="kewarganegaraan" x-bind:value="datanya.kewarganegaraan"><br><br>
            </div> --}}

            {{-- -------------------------batas suci----------------------- --}}
            <div class="flex w-full justify-center gap-32">
                <div class=" bg-gray-200 rounded-lg max-w-md px-10 pt-10 pb-12 mt-7">
                    <h1 class=" h-[40px] flex justify-center text-[30px] text-red-400 font-bold mb-5">Biodata Diri</h1>
                    <div class="flex flex-col gap-4">
                        <div class="flex items-center">
                            <label class="w-40" for="nama">Nama : </label>
                            <input class="px-1 border-2  focus:border-blue-600 focus:outline-none" type="text" name="nama" id="nama" wire:model="nama" x-bind:value="datanya.nama">
                        </div>
                        <div class="flex items-center">
                            <label class="w-40" for="nik">NIK : </label>
                            <input class="px-1 border-2" type="text" name="nik" id="nik" wire:model="nik" x-bind:value="datanya.nik">
                        </div>
                        <div class="flex items-center">
                            <label class="w-40" for="tempat_lahir">Tempat Lahir : </label>
                            <input class="px-1 border-2" type="text" name="tempat_lahir" id="tempat_lahir" wire:model="tempat_lahir" x-bind:value="datanya.tempat_lahir">
                        </div>
                        <div class="flex items-center">
                            <label class="w-40" for="tanggal_lahir">Tanggal Lahir : </label>
                            <input class="px-1 border-2" type="text" name="tanggal_lahir" id="tanggal_lahir"
                                wire:model="tanggal_lahir" x-bind:value="datanya.tanggal_lahir">
                        </div>

                        <div class="flex items-center">
                            <label class="w-40" for="kelamin">Jenis Kelamin : </label>
                            <select class="border-2 gap-20" name="kelamin" id="kelamin" wire:model="kelamin">
                                <option value="1" x-bind:selected="datanya.kelamin == '1'">LAKI-LAKI</option>
                                <option value="0" x-bind:selected="datanya.kelamin == '0'">PEREMPUAN</option>
                            </select>        
                        </div>

                        <div class="flex items-center">
                            <label class="w-40" for="golongan_darah">Golongan Darah : </label>
                            <select class="border-2" name="golongan_darah" id="golongan_darah" wire:model="golongan_darah">
                                <option value="-">-</option>    
                                <option value="A" x-bind:selected="datanya.golongan_darah == 'A'">A</option>    
                                <option value="B" x-bind:selected="datanya.golongan_darah == 'B'">B</option>    
                                <option value="AB" x-bind:selected="datanya.golongan_darah == 'AB'">AB</option>    
                                <option value="O" x-bind:selected="datanya.golongan_darah == 'O'">O</option>    
                            </select>
                        </div>
                        <div class="flex items-center">
                            <label class="w-40" for="alamat">Alamat : </label>
                            <input class="px-1 border-2" type="text" name="alamat" id="alamat" wire:model="alamat" x-bind:value="datanya.alamat">
                        </div>
                        <div class="flex items-center">
                            <label class="w-40" for="rt">RT : </label>
                            <input class="px-1 border-2" type="text" name="rt" id="rt" wire:model="rt" x-bind:value="datanya.rt">
                        </div>
                        <div class="flex items-center">
                            <label class="w-40" for="rw">RW : </label>
                            <input class="px-1 border-2" type="text" name="rw" id="rw" wire:model="rw" x-bind:value="datanya.rw">
                        </div>
                    </div>
                    
                </div>
                <div class=" bg-gray-200 max-w-md px-10 pt-[100px] pb-12 mt-7 rounded-lg">
                    <div class="flex flex-col gap-4">
                        <div class="flex items-center">
                            <label class="w-40" for="kelurahan">Kelurahan : </label>
                            <input class="px-1 border-2" type="text" name="kelurahan" id="kelurahan" wire:model="kelurahan" x-bind:value="datanya.kelurahan">
                        </div>
                        <div class="flex items-center">
                            <label class="w-40" for="kecamatan">Kecamatan : </label>
                            <input class="px-1 border-2" type="text" name="kecamatan" id="kecamatan" wire:model="kecamatan" x-bind:value="datanya.kecamatan">
                        </div>
                        <div class="flex items-center">
                            <label class="w-40" for="kecamatan">Kota : </label>
                            <input class="px-1 border-2" type="text" name="kota" id="kota" wire:model="kota" x-bind:value="datanya.kota">
                        </div>
                        <div class="flex items-center">
                            <label class="w-40" for="provinsi">Provinsi : </label>
                            <input class="px-1 border-2" type="text" name="provinsi" id="provinsi" wire:model="provinsi" x-bind:value="datanya.provinsi">
                        </div>
                        <div class="flex items-center">
                            <label class="w-40" for="agama">Agama : </label>
                            <select class="border-2" name="agama" id="agama" wire:model="agama">
                                <option value="-">-</option>
                                <option value="ISLAM" x-bind:selected="datanya.agama == 'ISLAM'">ISLAM</option>
                                <option value="KRISTEN" x-bind:selected="datanya.agama == 'KRISTEN'">KRISTEN</option>
                                <option value="KATOLIK" x-bind:selected="datanya.agama == 'KATOLIK'">KATOLIK</option>
                                <option value="HINDU" x-bind:selected="datanya.agama == 'HINDU'">HINDU</option>
                                <option value="BUDHA" x-bind:selected="datanya.agama == 'BUDHA'">BUDHA</option>
                                <option value="KONGHUCU" x-bind:selected="datanya.agama == 'KONGHUCU'">KONGHUCU</option>
                            </select>
                        </div>
                        <div class="flex items-center">
                            <label class="w-40" for="perkawinan">Status Perkawinan : </label>
                            <select class="border-2" type="text" name="perkawinan" id="perkawinan" wire:model="perkawinan">
                                <option value="KAWIN" x-bind:selected="datanya.perkawinan == 'KAWIN'">KAWIN</option>
                                <option value="BELUM KAWIN" x-bind:selected="datanya.perkawinan == 'BELUM KAWIN'">BELUM KAWIN</option>
                                <option value="CERAI HIDUP" x-bind:selected="datanya.perkawinan == 'CERAI HIDUP'">CERAI HIDUP</option>
                                <option value="CERAI MATI" x-bind:selected="datanya.perkawinan == 'CERAI MATI'">CERAI MATI</option>
                            </select>
                        </div>
                        <div class="flex items-center">
                            <label class="w-40" for="pekerjaan">Pekerjaan : </label>
                            <input class="px-1 border-2" type="text" name="pekerjaan" id="pekerjaan" wire:model="pekerjaan" x-bind:value="datanya.pekerjaan">
                        </div>
                        <div class="flex items-center">
                            <label class="w-40" for="kewarganegaraan">Kewarganegaraan : </label>
                            <input class="px-1 border-2" type="text" name="kewarganegaraan" id="kewarganegaraan" wire:model="kewarganegaraan" x-bind:value="datanya.kewarganegaraan">
                        </div>
            
                        <div class="w-full flex justify-center">
                            <button @click="submitData()" 
                                class="inline-block mt-7 px-7 py-2 bg-red-400 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-500 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-600 active:shadow-lg transition duration-150 ease-in-out">
                                Edit</button>
                        </div>
                    </div>
                    
                </div>
            </div>  
            {{-- -------------------------batas suci----------------------- --}}
            
        </template>
    </div>
</div>
