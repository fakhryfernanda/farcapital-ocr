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
        <button type="button"  @click="submitData()"  class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Upload</button>
    </div>

    <template x-if="mode == 'verifikasi'">
        <div>
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
        </div>
    </template>
</div>

