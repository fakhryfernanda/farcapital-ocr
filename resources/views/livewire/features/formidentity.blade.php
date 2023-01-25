<div class="flex flex-col justify-center bg-gray-50 gap-1 rounded-md mb-10 py-5 mt-10 shadow shadow-gray-400">
            
    <img :src="imageUrl" class="w-full px-5 md:max-h-[240px] md:w-auto mx-auto">
    <hr>
    <div class="text-center">
        <h1 class=" h-[40px] flex justify-center text-[30px] text-slate-800 font-bold ">Form Biodata Diri</h1>
    </div>
    <div class="flex flex-col md:flex-row justify-center py-5 mt-7">
        <div class="rounded-lg max-w-md px-5">
            <div class="flex flex-col">

                <div class="flex flex-col">
                    <label class="w-40 font-semibold" for="nik">NIK : </label>
                    <input @click="errarea.nik = false" class="px-1 border-2 rounded-md  focus:border-blue-400 focus:outline-none py-1" type="number" name="nik" id="nik" wire:model="nik" x-bind:value="datanya.nik" x-bind:class="errarea.nik ? 'border-red-600' : ' border-slate-300'">
                    <p x-show="errarea.nik" x-text="errmsg.nik" class="text-red-600 text-sm italic"></p>
                </div>

                <div class="flex flex-col">
                    <label class="w-40 font-semibold" for="nama">Nama : </label>
                    <input @click="errarea.nama = false" class="px-1 border-2 rounded-md  focus:border-blue-400 focus:outline-none py-1 w-96" type="text" name="nama" id="nama" wire:model="nama" x-bind:class="errarea.nama ? 'border-red-600' : ' border-slate-300'" x-bind:value="datanya.nama">
                    <p x-show="errarea.nama" x-text="errmsg.nama" class="text-red-600 text-sm italic"></p>
                </div>

                <div class="flex flex-col">
                    <label class="w-40 font-semibold" for="tempat_lahir">Tempat Lahir : </label>
                    <input @click="errarea.tempat_lahir = false" class="px-1 border-2 rounded-md  focus:border-blue-400 focus:outline-none py-1" type="text" name="tempat_lahir" id="tempat_lahir" wire:model="tempat_lahir" x-bind:value="datanya.tempat_lahir" x-bind:class="errarea.tempat_lahir ? 'border-red-600' : ' border-slate-300'">
                    <p x-show="errarea.tempat_lahir" x-text="errmsg.tempat_lahir" class="text-red-600 text-sm italic"></p>
                </div>
                <div class="flex flex-col">
                    <label class="w-40 font-semibold" for="tanggal_lahir">Tanggal Lahir : </label>
                    <input @click="errarea.tanggal_lahir = false" class="px-1 border-2 rounded-md  focus:border-blue-400 focus:outline-none py-1" type="date" name="tanggal_lahir" id="tanggal_lahir" wire:model="tanggal_lahir" x-bind:value="datanya.tanggal_lahir" x-bind:class="errarea.tanggal_lahir ? 'border-red-600' : ' border-slate-300'">
                    <p x-show="errarea.tanggal_lahir" x-text="errmsg.tanggal_lahir" class="text-red-600 text-sm italic"></p>
                </div>

                <div class="flex flex-col">
                    <label class="w-40 font-semibold" for="kelamin">Jenis Kelamin : </label>
                    <select @click="errarea.kelamin = false" class="px-1 border-2 rounded-md  focus:border-blue-400 focus:outline-none py-1" name="kelamin" id="kelamin" wire:model="kelamin" x-bind:class="errarea.kelamin ? 'border-red-600' : ' border-slate-300'">
                        <option value="1" x-bind:selected="datanya.kelamin == '1'">LAKI-LAKI</option>
                        <option value="0" x-bind:selected="datanya.kelamin == '0'">PEREMPUAN</option>
                    </select>        
                    <p x-show="errarea.kelamin" x-text="errmsg.kelamin" class="text-red-600 text-sm italic"></p>
                </div>

                <div class="flex flex-col">
                    <label class="w-40 font-semibold" for="golongan_darah">Golongan Darah : </label>
                    <select @click="errarea.golongan_darah = false" class="px-1 border-2 rounded-md  focus:border-blue-400 focus:outline-none py-1" name="golongan_darah" id="golongan_darah" wire:model="golongan_darah" x-bind:class="errarea.golongan_darah ? 'border-red-600' : ' border-slate-300'">
                        <option value="-" x-bind:selected="datanya.golongan_darah == '-'">-</option>    
                        <option value="A" x-bind:selected="datanya.golongan_darah == 'A'">A</option>    
                        <option value="B" x-bind:selected="datanya.golongan_darah == 'B'">B</option>    
                        <option value="AB" x-bind:selected="datanya.golongan_darah == 'AB'">AB</option>    
                        <option value="O" x-bind:selected="datanya.golongan_darah == 'O'">O</option>    
                    </select>
                    <p x-show="errarea.golongan_darah" x-text="errmsg.golongan_darah" class="text-red-600 text-sm italic"></p>
                </div>
                
                <div class="flex flex-col">
                    <label class="w-40 font-semibold" for="agama">Agama : </label>
                    <select @click="errarea.agama = false" class="px-1 border-2 rounded-md  focus:border-blue-400 focus:outline-none py-1" id="agama" x-bind:class="errarea.agama ? 'border-red-600' : ' border-slate-300'">
                        <option value=""  x-bind:selected="datanya.agama != 'ISLAM'||datanya.agama != 'KRISTEN'||datanya.agama != 'KATOLIK'||datanya.agama != 'HINDU'||datanya.agama != 'BUDHA'||datanya.agama != 'KONGHUCU' || !datanya.agama">-</option>
                        <option value="ISLAM" x-bind:selected="datanya.agama == 'ISLAM'">ISLAM</option>
                        <option value="KRISTEN" x-bind:selected="datanya.agama == 'KRISTEN'">KRISTEN</option>
                        <option value="KATOLIK" x-bind:selected="datanya.agama == 'KATOLIK'">KATOLIK</option>
                        <option value="HINDU" x-bind:selected="datanya.agama == 'HINDU'">HINDU</option>
                        <option value="BUDHA" x-bind:selected="datanya.agama == 'BUDHA'">BUDHA</option>
                        <option value="KONGHUCU" x-bind:selected="datanya.agama == 'KONGHUCU'">KONGHUCU</option>
                    </select>
                    <p x-show="errarea.agama" x-text="errmsg.agama" class="text-red-600 text-sm italic"></p>
                </div>

                <div class="flex flex-col">
                    <label class="w-40 font-semibold" for="perkawinan">Status Perkawinan : </label>
                    <select @click="errarea.perkawinan = false" class="px-1 border-2 rounded-md  focus:border-blue-400 focus:outline-none py-1" type="text" name="perkawinan" id="perkawinan" wire:model="perkawinan" x-bind:class="errarea.perkawinan ? 'border-red-600' : ' border-slate-300'">
                        <option value="KAWIN" x-bind:selected="datanya.perkawinan == 'KAWIN'">KAWIN</option>
                        <option value="BELUM KAWIN" x-bind:selected="datanya.perkawinan == 'BELUM KAWIN'">BELUM KAWIN</option>
                        <option value="CERAI HIDUP" x-bind:selected="datanya.perkawinan == 'CERAI HIDUP'">CERAI HIDUP</option>
                        <option value="CERAI MATI" x-bind:selected="datanya.perkawinan == 'CERAI MATI'">CERAI MATI</option>
                    </select>
                    <p x-show="errarea.perkawinan" x-text="errmsg.perkawinan" class="text-red-600 text-sm italic"></p>
                </div>

                <div class="flex flex-col">
                    <label class="w-40 font-semibold" for="pekerjaan">Pekerjaan : </label>
                    <input @click="errarea.pekerjaan = false" class="px-1 border-2 rounded-md  focus:border-blue-400 focus:outline-none py-1" type="text" name="pekerjaan" id="pekerjaan" wire:model="pekerjaan" x-bind:value="datanya.pekerjaan" x-bind:class="errarea.pekerjaan ? 'border-red-600' : ' border-slate-300'">
                    <p x-show="errarea.pekerjaan" x-text="errmsg.pekerjaan" class="text-red-600 text-sm italic"></p>
                </div>

            </div>
            
        </div>
        <div class="max-w-md px-5 rounded-lg">
            <div class="flex flex-col">

                <div class="flex flex-col">
                    <label class="w-40 font-semibold" for="provinsi">Provinsi : </label>
                    <input @click="errarea.provinsi = false" class="px-1 border-2 rounded-md  focus:border-blue-400 focus:outline-none py-1" type="text" name="provinsi" id="provinsi" wire:model="provinsi" x-bind:value="datanya.provinsi" x-bind:class="errarea.provinsi ? 'border-red-600' : ' border-slate-300'">
                    <p x-show="errarea.provinsi" x-text="errmsg.provinsi" class="text-red-600 text-sm italic"></p>
                </div>
                
                <div class="flex flex-col">
                    <label class="w-40 font-semibold" for="kecamatan">Kota : </label>
                    <input @click="errarea.kota = false" class="px-1 border-2 rounded-md  focus:border-blue-400 focus:outline-none py-1" type="text" name="kota" id="kota" wire:model="kota" x-bind:value="datanya.kota" x-bind:class="errarea.kota ? 'border-red-600' : ' border-slate-300'">
                    <p x-show="errarea.kota" x-text="errmsg.kota" class="text-red-600 text-sm italic"></p>
                </div>
                
                <div class="flex flex-col">
                    <label class="w-40 font-semibold" for="kecamatan">Kecamatan : </label>
                    <input @click="errarea.kecamatan = false" class="px-1 border-2 rounded-md  focus:border-blue-400 focus:outline-none py-1" type="text" name="kecamatan" id="kecamatan" wire:model="kecamatan" x-bind:value="datanya.kecamatan" x-bind:class="errarea.kecamatan ? 'border-red-600' : ' border-slate-300'">
                    <p x-show="errarea.kecamatan" x-text="errmsg.kecamatan" class="text-red-600 text-sm italic"></p>
                </div>

                <div class="flex flex-col">
                    <label class="w-40 font-semibold" for="kelurahan">Kelurahan : </label>
                    <input @click="errarea.kelurahan = false" class="px-1 border-2 rounded-md  focus:border-blue-400 focus:outline-none py-1 w-96" type="text" name="kelurahan" id="kelurahan" wire:model="kelurahan" x-bind:value="datanya.kelurahan" x-bind:class="errarea.kelurahan ? 'border-red-600' : ' border-slate-300'">
                    <p x-show="errarea.kelurahan" x-text="errmsg.kelurahan" class="text-red-600 text-sm italic"></p>
                </div>
                
                <div class="flex flex-col">
                    <label class="w-40 font-semibold" for="rt">RT : </label>
                    <input @click="errarea.rt = false" class="px-1 border-2 rounded-md  focus:border-blue-400 focus:outline-none py-1" type="number" name="rt" id="rt" wire:model="rt" x-bind:value="datanya.rt" x-bind:class="errarea.rt ? 'border-red-600' : ' border-slate-300'">
                    <p x-show="errarea.rt" x-text="errmsg.rt" class="text-red-600 text-sm italic"></p>
                </div>

                <div class="flex flex-col">
                    <label class="w-40 font-semibold" for="rw">RW : </label>
                    <input @click="errarea.rw = false" class="px-1 border-2 rounded-md  focus:border-blue-400 focus:outline-none py-1" x-bind:class="errarea.rw ? 'border-red-600' : ' border-slate-300'" type="number" name="rw" id="rw" wire:model="rw" x-bind:value="datanya.rw">
                    <p x-show="errarea.rw" x-text="errmsg.rw" class="text-red-600 text-sm italic"></p>
                </div>

                <div class="flex flex-col">
                    <label class="w-40 font-semibold" for="alamat">Alamat : </label>
                    <textarea @click="errarea.alamat = false" class="px-1 border-2 rounded-md  focus:border-blue-400 focus:outline-none py-1" id="alamat" wire:model="alamat" x-bind:value="datanya.alamat" x-bind:class="errarea.alamat ? 'border-red-600' : ' border-slate-300'" rows="3"></textarea>
                    <p x-show="errarea.alamat" x-text="errmsg.alamat" class="text-red-600 text-sm italic"></p>
                </div>
    
                <div class="flex flex-col">
                    <label class="w-40 font-semibold" for="kewarganegaraan">Kewarganegaraan : </label>
                    <input @click="errarea.kewarganegaraan = false" class="px-1 border-2 rounded-md  focus:border-blue-400 focus:outline-none py-1" type="text" name="kewarganegaraan" id="kewarganegaraan" wire:model="kewarganegaraan" x-bind:value="datanya.kewarganegaraan" x-bind:class="errarea.kewarganegaraan ? 'border-red-600' : ' border-slate-300'">
                    <p x-show="errarea.kewarganegaraan" x-text="errmsg.kewarganegaraan" class="text-red-600 text-sm italic"></p>
                </div>

            </div>
            
        </div>
        
    </div>
    <hr>
    <div class="mx-auto w-[500px] my-3 p-4 bg-white shadow-md shadow-gray-400 rounded-sm border-gray-300">
        <h1 class="text-center font-bold text-lg">EULA</h1>
        <hr class="my-2">
        <p class="text-justify">Dengan ini saya (pemilik data) menyatakan bahwa semua data dan file (KTP) yang diinput benar dan dapat dipertanggungjawabkan secara hukum.</p>
        <hr class="my-2">
        <div class="flex justify-between">
            <div class="my-1">
                <input type="checkbox" name="" x-model="eulacheck" @click="eulacheck = !eulacheck, errarea.eula = false">
                <label for="eula" class="font-bold">Setuju</label>
            </div>
            <p x-show="errarea.eula" x-text="errmsg.eula" class="text-red-600 text-sm italic"></p>
        </div>
        
    </div>
    <p x-show="errarea.becritical" x-text="errmsg.becritical" class="text-red-600 text-sm italic"></p>
    <div class="w-full flex justify-center gap-4">
        <button 
            @click="scanUlang()" 
            class="btn-secondary w-40"
        >
            Scan Ulang
        </button>
        
        <button 
            @click="submitData()" 
            class="btn-primary w-40"
        >
            Submit
        </button>
    </div>
</div>  