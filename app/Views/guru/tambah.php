<?= $this->extend('template/layout'); ?>

<?= $this->section('content'); ?>
<div>
    <h1 class="uppercase text-sm sm:text-lg font-bold">TAMBAH GURU</h1>
    <h3 class="uppercase text-xs sm:text-base font-semibold text-gray-800">TAMBAH GURU - SMK N 6 SURAKARTA</h3>
</div>

<div class="mt-6">
    <form action="/guru/add" method="post" enctype="multipart/form-data">
        <?= csrf_field(); ?>
        <div class="md:max-w-full md:w-full  overflow-x-auto rounded-lg border border-primary shadow-md -z-50">
            <div class="mx-2 mt-6 block md:flex md:justify-evenly overflow-hidden">
                <div class="w-auto md:w-full mx-3">
                    <div class="relative mt-8">
                        <input name="kode" id="kode" type="text" class="rounded-b-lg w-full border-b focus:outline-none py-1 focus:border-primary focus:border-b-2 transition-colors duration-300 peer">
                        <label class="text-xs sm:text-sm font-semibold peer-focus:text-primary absolute left-0 -top-5" for="kode">Kode</label>
                    </div>
                    <div class="relative mt-8">
                        <input name="nama" id="nama" type="text" class="rounded-b-lg w-full border-b focus:outline-none py-1 focus:border-primary focus:border-b-2 transition-colors duration-300 peer">
                        <label class="text-xs sm:text-sm font-semibold peer-focus:text-primary absolute left-0 -top-5" for="nama">Nama Guru</label>
                    </div>
                    <div class="relative mt-8">
                        <input name="email" id="email" type="email" class="rounded-b-lg w-full border-b focus:outline-none py-1 focus:border-primary focus:border-b-2 transition-colors duration-300 peer">
                        <label class="text-xs sm:text-sm font-semibold peer-focus:text-primary absolute left-0 -top-5" for="email">Email</label>
                    </div>
                </div>
                <div class="w-auto md:w-full mx-3 ">
                    <div class="relative mt-8">
                        <input name="no_telp" id="no_telp" type="text" class="rounded-b-lg w-full border-b focus:outline-none py-1 focus:border-primary focus:border-b-2 transition-colors duration-300 peer">
                        <label class="text-xs sm:text-sm font-semibold peer-focus:text-primary absolute left-0 -top-5" for="no_telp">No. Telp</label>
                    </div>
                    <div class="relative mt-8">
                        <input name="ampuan" id="ampuan" type="text" class="rounded-b-lg w-full border-b focus:outline-none py-1 focus:border-primary focus:border-b-2 transition-colors duration-300 peer">
                        <label class="text-xs sm:text-sm font-semibold peer-focus:text-primary absolute left-0 -top-5" for="ampuan">Ampuan</label>
                    </div>
                    <div class="relative mt-8">
                        <input name="alamat" id="alamat" type="text" class="rounded-b-lg w-full border-b focus:outline-none py-1 focus:border-primary focus:border-b-2 transition-colors duration-300 peer">
                        <label class="text-xs sm:text-sm font-semibold peer-focus:text-primary absolute left-0 -top-5" for="alamat">Alamat</label>
                    </div>
                </div>
            </div>
            <div class="mb-6 mt-4">
                <div class="flex items-center justify-center ">
                    <button class="sm:text-sm text-sm hover:bg-primary py-[0.34rem] px-3 sm:py-2 sm:px-4 rounded-full text-center font-semibold hover:text-white mt-4 bg-slate-200 text-primary border border-primary">
                        <input type="submit" name="add" id="add" value="simpan">
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>
<br><br>
</div>

<script>

</script>
<?= $this->endSection(); ?>