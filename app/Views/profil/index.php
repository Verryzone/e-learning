<?= $this->extend('template/layout'); ?>

<?= $this->section('content'); ?>
<div>
    <h1 class="uppercase text-sm sm:text-lg font-bold">Edit Profil</h1>
    <h3 class="uppercase text-xs sm:text-base font-semibold text-gray-800">DATA SISWA - Abdullah A.S</h3>
</div>

<div class="mt-10 border-2 ">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="sm:flex sm:justify-center block">
            <div class="2md:flex 2md:justify-evenly block">
                <div class=" sm:w-96 md:w-96 w-auto">
                    <div class="mt-10 ml-8 w-auto mr-8">
                        <div class="relative">
                            <input name="nis" id="nis" type="text" class="rounded-b-lg w-full border-b focus:outline-none py-1 focus:border-primary focus:border-b-2 transition-colors duration-300 peer">
                            <label class="text-sm sm:text-base font-semibold peer-focus:text-primary absolute left-0 -top-5" for="nis">NIS</label>
                        </div>
                        <div class="relative mt-8">
                            <input name="nis" id="nis" type="text" class="rounded-b-lg w-full border-b focus:outline-none py-1 focus:border-primary focus:border-b-2 transition-colors duration-300 peer">
                            <label class="text-sm sm:text-base font-semibold peer-focus:text-primary absolute left-0 -top-5" for="nis">Nama Siswa</label>
                        </div>
                        <div class="relative mt-8">
                            <input name="nis" id="nis" type="text" class="rounded-b-lg w-full border-b focus:outline-none py-1 focus:border-primary focus:border-b-2 transition-colors duration-300 peer">
                            <label class="text-sm sm:text-base font-semibold peer-focus:text-primary absolute left-0 -top-5" for="nis">Nama Orang Tua</label>
                        </div>
                        <div class="relative mt-8">
                            <input name="nis" id="nis" type="text" class="rounded-b-lg w-full border-b focus:outline-none py-1 focus:border-primary focus:border-b-2 transition-colors duration-300 peer">
                            <label class="text-sm sm:text-base font-semibold peer-focus:text-primary absolute left-0 -top-5" for="nis">Kelas</label>
                        </div>
                        <div class="relative mt-8">
                            <!-- <input name="nis" id="nis" type="text" class="w-full border-b focus:outline-none py-1 focus:border-primary focus:border-b-2 transition-colors duration-300 peer"> -->
                            <select name="keaktifan" id="keaktifan" class="rounded-b-lg w-full border-b focus:outline-none py-1 focus:border-primary focus:border-b-2 transition-colors duration-300 peer">
                                <option value="" selected hidden><span class="text-slate-300 text-sm">Keaktifan</span></option>
                                <option class="" value="">Aktif</option>
                                <option value="">Nonaktif</option>
                            </select>
                            <label class="text-sm sm:text-base font-semibold peer-focus:text-primary absolute left-0 -top-5" for="keaktifan">Keaktifan</label>
                        </div>
                        <div class="relative mt-8">
                            <input name="nis" id="nis" type="text" class="rounded-b-lg w-full border-b focus:outline-none py-1 focus:border-primary focus:border-b-2 transition-colors duration-300 peer">
                            <label class="text-sm sm:text-base font-semibold peer-focus:text-primary absolute left-0 -top-5" for="nis">Ganti Password</label>
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <div class="grid grid-rows-2 justify-center h-min">
                        <div class="flex justify-center items-center">
                            <img class="sm:h-48 sm:w-48 h-40 w-40 object-cover rounded-full border-2 border-indigo-800" src="img/astravio.img" alt="">
                        </div>
                        <label class="block mt-8 h-min">
                            <span class=" sr-only"> Choose profile photo</span>
                            <input type="file" class="block w-full text-xs sm:text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-[0.5px] file:border-primary file:text-xs sm:file:text-sm file:font-semibold file:bg-violet-50 file:text-primary hover:file:bg-primary hover:file:text-white hover:cursor-pointer hover:file:cursor-pointer" />
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="flex items-center justify-center ">
                <button class="sm:text-base text-sm hover:bg-primary py-[0.34rem] px-3 sm:py-2 sm:px-4 rounded-full text-center font-semibold hover:text-white mt-4 bg-slate-200 text-primary border border-primary">Simpan</button>
            </div>
        </div>
    </form>
    <br><br>
</div>

<br><br>
<?= $this->endSection(); ?>