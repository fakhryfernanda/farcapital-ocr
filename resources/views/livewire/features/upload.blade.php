<div class="flex flex-col justify-center" x-data="scan">
    <div x-init="isusernothaveidentity()"></div>
    <template x-if="mode == 'scan'">
        <div class="mt-14">
            <div class="text-center py-3 font-semibold">
                <h1>Please Upload Your National Identity Card (KTP)</h1>
            </div>
            <div  x-data="imageViewer()" class="w-[400px]  h-[300px]">
                <label for="ktp" id="ktp_label" class="flex flex-col items-center justify-center w-full h-full border-2 border-gray-300 border-solid bg-white rounded-lg cursor-pointer  dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-200 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                    <template x-if="!imageUrl">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                            <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                            </svg>
                            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                            <p class="text-xs text-gray-500 dark:text-gray-400">JPEG (MAX. 800x400px) </p>
                        </div>
                    </template>
                    <template x-if="imageUrl">
                        <img :src="imageUrl" class="h-[250px] object-contain">
                    </template>
                    <input @change="fileChosen" id="ktp" type="file" accept="image/*" class="hidden" />
                </label>
            </div>
            <div class="text-center py-5">
                <button type="button"  @click="scanktp()" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Upload</button>
            </div>
          
        </div>
        
    </template>
    
    {{-- iki kodingan spinner --}}
    <template x-if="giloading">
        <div role="status" class="absolute top-2/3 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
            <svg aria-hidden="true" class="w-20 h-20 mx-auto text-gray-200 animate-spin dark:text-gray-600 fill-red-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/><path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/></svg>
            <span class="sr-only">Loading...</span>
        </div>
    </template>

    {{-- <template x-if="giloading"> --}}
        <div x-show="giloading" class="bg-black/50 fixed z-10 top-0 bottom-0 left-0 right-0"></div>
    {{-- <template> --}}
        


    <template x-if="mode == 'verifikasi'">

        {{-- -------------------------batas suci----------------------- --}}
        <div class="flex flex-col w-[1200px] justify-center bg-gray-50 gap-1 rounded-md mb-10 py-5 mt-10">
            <div class="text-center">
                <h1 class=" h-[40px] flex justify-center text-[30px] text-slate-800 font-bold ">Form Biodata Diri</h1>
            </div>
            <div class="flex justify-center">
                <div class="rounded-lg max-w-md px-5 py-5 mt-7">
                    <div class="flex flex-col">
                        <input type="hidden" id="id_user" :value="{{ session('id_user') }}">
                        <div class="flex flex-col">
                            <label class="w-40 font-semibold" for="nama">Nama : </label>
                            <input class="px-1 border-2 border-slate-300 rounded-md  focus:border-blue-400 focus:outline-none py-1 w-96" type="text" name="nama" id="nama" wire:model="nama" x-bind:value="datanya.nama">
                        </div>
                        <div class="flex flex-col">
                            <label class="w-40 font-semibold" for="nik">NIK : </label>
                            <input class="px-1 border-2 border-slate-300 rounded-md  focus:border-blue-400 focus:outline-none py-1" type="number" name="nik" id="nik" wire:model="nik" x-bind:value="datanya.nik">
                        </div>
                        <div class="flex flex-col">
                            <label class="w-40 font-semibold" for="tempat_lahir">Tempat Lahir : </label>
                            <input class="px-1 border-2 border-slate-300 rounded-md  focus:border-blue-400 focus:outline-none py-1" type="text" name="tempat_lahir" id="tempat_lahir" wire:model="tempat_lahir" x-bind:value="datanya.tempat_lahir">
                        </div>
                        <div class="flex flex-col">
                            <label class="w-40 font-semibold" for="tanggal_lahir">Tanggal Lahir : </label>
                            <input class="px-1 border-2 border-slate-300 rounded-md  focus:border-blue-400 focus:outline-none py-1" type="date" name="tanggal_lahir" id="tanggal_lahir"
                                wire:model="tanggal_lahir" x-bind:value="datanya.tanggal_lahir">
                        </div>
    
                        <div class="flex flex-col">
                            <label class="w-40 font-semibold" for="kelamin">Jenis Kelamin : </label>
                            <select class="px-1 border-2 border-slate-300 rounded-md  focus:border-blue-400 focus:outline-none py-1" name="kelamin" id="kelamin" wire:model="kelamin">
                                <option value="1" x-bind:selected="datanya.kelamin == '1'">LAKI-LAKI</option>
                                <option value="0" x-bind:selected="datanya.kelamin == '0'">PEREMPUAN</option>
                            </select>        
                        </div>
    
                        <div class="flex flex-col">
                            <label class="w-40 font-semibold" for="golongan_darah">Golongan Darah : </label>
                            <select class="px-1 border-2 border-slate-300 rounded-md  focus:border-blue-400 focus:outline-none py-1" name="golongan_darah" id="golongan_darah" wire:model="golongan_darah">
                                <option value="-">-</option>    
                                <option value="A" x-bind:selected="datanya.golongan_darah == 'A'">A</option>    
                                <option value="B" x-bind:selected="datanya.golongan_darah == 'B'">B</option>    
                                <option value="AB" x-bind:selected="datanya.golongan_darah == 'AB'">AB</option>    
                                <option value="O" x-bind:selected="datanya.golongan_darah == 'O'">O</option>    
                            </select>
                        </div>
                        <div class="flex flex-col">
                            <label class="w-40 font-semibold" for="alamat">Alamat : </label>
                            <input class="px-1 border-2 border-slate-300 rounded-md  focus:border-blue-400 focus:outline-none py-1" type="text" name="alamat" id="alamat" wire:model="alamat" x-bind:value="datanya.alamat">
                        </div>
                        <div class="flex flex-col">
                            <label class="w-40 font-semibold" for="rt">RT : </label>
                            <input class="px-1 border-2 border-slate-300 rounded-md  focus:border-blue-400 focus:outline-none py-1" type="number" name="rt" id="rt" wire:model="rt" x-bind:value="datanya.rt">
                        </div>
                        <div class="flex flex-col">
                            <label class="w-40 font-semibold" for="rw">RW : </label>
                            <input class="px-1 border-2 border-slate-300 rounded-md  focus:border-blue-400 focus:outline-none py-1" type="number" name="rw" id="rw" wire:model="rw" x-bind:value="datanya.rw">
                        </div>
                    </div>
                    
                </div>
                <div class="max-w-md px-5 py-5 mt-7 rounded-lg">
                    <div class="flex flex-col">
                        <div class="flex flex-col">
                            <label class="w-40 font-semibold" for="kelurahan">Kelurahan : </label>
                            <input class="px-1 border-2 border-slate-300 rounded-md  focus:border-blue-400 focus:outline-none py-1 w-96" type="text" name="kelurahan" id="kelurahan" wire:model="kelurahan" x-bind:value="datanya.kelurahan">
                        </div>
                        <div class="flex flex-col">
                            <label class="w-40 font-semibold" for="kecamatan">Kecamatan : </label>
                            <input class="px-1 border-2 border-slate-300 rounded-md  focus:border-blue-400 focus:outline-none py-1" type="text" name="kecamatan" id="kecamatan" wire:model="kecamatan" x-bind:value="datanya.kecamatan">
                        </div>
                        <div class="flex flex-col">
                            <label class="w-40 font-semibold" for="kecamatan">Kota : </label>
                            <input class="px-1 border-2 border-slate-300 rounded-md  focus:border-blue-400 focus:outline-none py-1" type="text" name="kota" id="kota" wire:model="kota" x-bind:value="datanya.kota">
                        </div>
                        <div class="flex flex-col">
                            <label class="w-40 font-semibold" for="provinsi">Provinsi : </label>
                            <input class="px-1 border-2 border-slate-300 rounded-md  focus:border-blue-400 focus:outline-none py-1" type="text" name="provinsi" id="provinsi" wire:model="provinsi" x-bind:value="datanya.provinsi">
                        </div>
                        <div class="flex flex-col">
                            <label class="w-40 font-semibold" for="agama">Agama : </label>
                            <select class="px-1 border-2 border-slate-300 rounded-md  focus:border-blue-400 focus:outline-none py-1" id="agama">
                                <option value="-"  x-bind:selected="datanya.agama != 'ISLAM'||datanya.agama != 'KRISTEN'||datanya.agama != 'KATOLIK'||datanya.agama != 'HINDU'||datanya.agama != 'BUDHA'||datanya.agama != 'KONGHUCU' || !datanya.agama">-</option>
                                <option value="ISLAM" x-bind:selected="datanya.agama == 'ISLAM'">ISLAM</option>
                                <option value="KRISTEN" x-bind:selected="datanya.agama == 'KRISTEN'">KRISTEN</option>
                                <option value="KATOLIK" x-bind:selected="datanya.agama == 'KATOLIK'">KATOLIK</option>
                                <option value="HINDU" x-bind:selected="datanya.agama == 'HINDU'">HINDU</option>
                                <option value="BUDHA" x-bind:selected="datanya.agama == 'BUDHA'">BUDHA</option>
                                <option value="KONGHUCU" x-bind:selected="datanya.agama == 'KONGHUCU'">KONGHUCU</option>
                            </select>
                        </div>
                        <div class="flex flex-col">
                            <label class="w-40 font-semibold" for="perkawinan">Status Perkawinan : </label>
                            <select class="px-1 border-2 border-slate-300 rounded-md  focus:border-blue-400 focus:outline-none py-1" type="text" name="perkawinan" id="perkawinan" wire:model="perkawinan">
                                <option value="KAWIN" x-bind:selected="datanya.perkawinan == 'KAWIN'">KAWIN</option>
                                <option value="BELUM KAWIN" x-bind:selected="datanya.perkawinan == 'BELUM KAWIN'">BELUM KAWIN</option>
                                <option value="CERAI HIDUP" x-bind:selected="datanya.perkawinan == 'CERAI HIDUP'">CERAI HIDUP</option>
                                <option value="CERAI MATI" x-bind:selected="datanya.perkawinan == 'CERAI MATI'">CERAI MATI</option>
                            </select>
                        </div>
                        <div class="flex flex-col">
                            <label class="w-40 font-semibold" for="pekerjaan">Pekerjaan : </label>
                            <input class="px-1 border-2 border-slate-300 rounded-md  focus:border-blue-400 focus:outline-none py-1" type="text" name="pekerjaan" id="pekerjaan" wire:model="pekerjaan" x-bind:value="datanya.pekerjaan">
                        </div>
                        <div class="flex flex-col">
                            <label class="w-40 font-semibold" for="kewarganegaraan">Kewarganegaraan : </label>
                            <input class="px-1 border-2 border-slate-300 rounded-md  focus:border-blue-400 focus:outline-none py-1" type="text" name="kewarganegaraan" id="kewarganegaraan" wire:model="kewarganegaraan" x-bind:value="datanya.kewarganegaraan">
                        </div>
            
                    </div>
                    
                </div>
                
            </div>
            <div class="w-full flex justify-center gap-4">
                <button 
                    @click="scanUlang()" 
                    class="inline-block mt-7 px-7 py-2 bg-blue-700 text-white font-medium text-sm leading-snug rounded-full shadow-md hover:bg-blue-500 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-600 active:shadow-lg transition duration-150 ease-in-out"
                >
                    Scan Ulang
                </button>
                
                <button 
                    @click="submitData()" 
                    class="inline-block mt-7 px-7 py-2 bg-blue-700 text-white font-medium text-sm leading-snug rounded-full shadow-md hover:bg-blue-500 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-600 active:shadow-lg transition duration-150 ease-in-out"
                >
                    Submit
                </button>
            </div>
        </div>  
        {{-- -------------------------batas suci----------------------- --}}
        
    </template>
</div>

