<?= $this->extend('template/layout'); ?>

<?= $this->section('content'); ?>
<div>
    <h1 class="uppercase text-sm sm:text-lg font-bold">DATA GURU</h1>
    <h3 class="uppercase text-xs sm:text-base font-semibold text-gray-800">DATA GURU - SMK N 6 SURAKARTA</h3>
</div>

<div class="mt-4 flex justify-start items-center">
    <div class="w-min group mr-2">
        <a href="/guru/tambah" class="flex justify-evenly items-center border border-primary px-2 rounded-lg group-hover:bg-primary group-hover:cursor-pointer">
            <div class="p-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#4f46e5" class="bi bi-plus-square-fill group-hover:fill-white" viewBox="0 0 16 16">
                    <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0z" />
                </svg>
            </div>
            <div class="flex items-center group-hover:cursor-pointer">
                <span class="text-sm text-center group-hover:text-white group-hover:font-semibold font-semibold">Tambah</span>
            </div>
        </a>
    </div>
    <div class="w-min group mx-2">
        <button class="flex justify-evenly items-center border border-primary px-2 rounded-lg group-hover:bg-primary">
            <div class="p-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#4f46e5" class="bi bi-file-earmark-spreadsheet group-hover:fill-white" viewBox="0 0 16 16">
                    <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V9H3V2a1 1 0 0 1 1-1h5.5v2zM3 12v-2h2v2H3zm0 1h2v2H4a1 1 0 0 1-1-1v-1zm3 2v-2h3v2H6zm4 0v-2h3v1a1 1 0 0 1-1 1h-2zm3-3h-3v-2h3v2zm-7 0v-2h3v2H6z" />
                </svg>
            </div>
            <div class="flex items-center">
                <span class="text-sm text-center group-hover:text-white group-hover:font-semibold font-semibold">Import</span>
            </div>
        </button>
    </div>
    <!-- cari data guru -->
    <div class="w-min mx-2">
        <div>
            <input id="input_cari_guru" type="text" placeholder="   Cari guru ..." class="px-3 border border-primary rounded-lg overflow-hidden h-8 placeholder:text-xs placeholder:items-center focus:border focus:border-primary">
        </div>
    </div>
    <div class="w-min mx-2">
        <div class="flex justify-start items-center">
            <div>
                <span class="font-semibold text-sm">Filter:</span>
            </div>
            <div>
                <select class="h-8 rounded-lg border border-primary px-2 mx-2" name="ampuan" id="ampuan">
                    <option value="" selected hidden>MAPEL</option>
                    <option class="text-sm text-slate-700" value="">MTK</option>
                    <option class="text-sm text-slate-700" value="Biologi">Biologi</option>
                    <option class="text-sm text-slate-700" value="">Kimia</option>
                </select>
            </div>
        </div>

    </div>
</div>

<div class="mt-6">
    <div class="md:max-w-full md:w-full  overflow-x-auto rounded-lg border border-primary shadow-md">
        <table id="table_guru" class="md:w-full w-[800px]">
            <tr class="text-primary text-sm">
                <th class="border-b-2 border-primary py-3">No.</th>
                <th class="border-b-2 border-primary py-3">Kode</th>
                <th class="border-b-2 border-primary py-3">Nama</th>
                <th class="border-b-2 border-primary py-3">Email</th>
                <th class="border-b-2 border-primary py-3">No. Telp</th>
                <th class="border-b-2 border-primary py-3">Ampuan</th>
                <th class="border-b-2 border-primary py-3">Alamat</th>
                <th class="border-b-2 border-primary py-3">Aksi</th>
            </tr>
            <!-- ... konten tabel ... -->
            <?php $i = 1; ?>
            <?php foreach ($guru as $row) : ?>
                <tr class="text-center text-sm">
                    <td class="py-3 border-b border-slate-300"><?= $i++ ?></td>
                    <td class="py-3 border-b border-slate-300"><?= $row['kode'] ?></td>
                    <td class="py-3 border-b border-slate-300"><?= $row['nama'] ?></td>
                    <td class="py-3 border-b border-slate-300"><?= $row['email'] ?></td>
                    <td class="py-3 border-b border-slate-300"><?= $row['no_telp'] ?></td>
                    <td class="py-3 border-b border-slate-300"><?= $row['ampuan'] ?></td>
                    <td class="py-3 border-b border-slate-300"><?= $row['alamat'] ?></td>
                    <td class="py-3 border-b border-slate-300">
                        <a href="">edit</a>
                        <a href="">hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>

        </table>
    </div>
    <br><br>
</div>

<script>
    $(document).ready(function() {
        // Fungsi untuk melakukan penyortiran berdasarkan input pengguna
        function sortTable() {
            const sortCriteria = $("#ampuan").val();
            const searchKeyword = $("#input_cari_guru").val().toLowerCase();

            $("#table_guru tr:gt(0)").each(function() {
                const rowText = $(this).text().toLowerCase();
                const isVisible = rowText.includes(searchKeyword) && (sortCriteria === "" || rowText.includes(sortCriteria.toLowerCase()));
                $(this).toggle(isVisible);
            });
        }

        // Menambahkan event listener untuk input pencarian
        $("#input_cari_guru").on("input", sortTable);

        // Menambahkan event listener untuk dropdown kriteria penyortiran
        $("#ampuan").on("change", sortTable);

        // Memanggil fungsi sortTable() secara awal untuk menginisialisasi tabel
        sortTable();
    });
</script>
<?= $this->endSection(); ?>