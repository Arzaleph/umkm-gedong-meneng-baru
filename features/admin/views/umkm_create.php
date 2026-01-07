<div class="max-w-4xl mx-auto py-10 px-6">
    <div class="flex items-center gap-4 mb-8">
        <a href="<?= BASE_URL ?>/admin/dashboard" class="w-10 h-10 flex items-center justify-center bg-white border border-gray-100 rounded-xl text-gray-400 hover:text-npcGreen transition shadow-sm">
            <i class="fa-solid fa-arrow-left"></i>
        </a>
        <div>
            <h2 class="text-2xl font-extrabold text-npcDark">Kelola Data UMKM</h2>
            <p class="text-gray-500 text-sm italic">Pastikan informasi usaha sudah sesuai dan benar.</p>
        </div>
    </div>

    <div class="bg-white rounded-[2rem] shadow-sm border border-gray-100 overflow-hidden">
        <div class="p-8 md:p-12">
            <form action="<?= isset($umkm) ? BASE_URL.'/admin/umkm/update' : BASE_URL.'/admin/umkm/store' ?>" method="POST" enctype="multipart/form-data" class="space-y-8">
                <?php if(isset($umkm)): ?>
                    <input type="hidden" name="id" value="<?= $umkm['id'] ?>">
                <?php endif; ?>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="space-y-2">
                        <label class="text-xs font-bold text-gray-400 uppercase tracking-wider ml-1">Nama Usaha</label>
                        <input type="text" name="nama" value="<?= $umkm['nama'] ?? '' ?>" required
                            class="w-full px-5 py-4 bg-gray-50 border border-gray-100 rounded-2xl focus:bg-white focus:border-npcGreen transition outline-none font-medium" 
                            placeholder="Contoh: Keripik Meneng">
                    </div>
                    
                    <div class="space-y-2">
                        <label class="text-xs font-bold text-gray-400 uppercase tracking-wider ml-1">Kategori</label>
                        <select name="kategori" class="w-full px-5 py-4 bg-gray-50 border border-gray-100 rounded-2xl focus:bg-white focus:border-npcGreen transition outline-none font-medium appearance-none">
                            <option value="Kuliner">Kuliner</option>
                            <option value="Kerajinan">Kerajinan</option>
                            <option value="Jasa">Jasa</option>
                            <option value="Pertanian">Pertanian</option>
                        </select>
                    </div>
                </div>

                <div class="space-y-2">
                    <label class="text-xs font-bold text-gray-400 uppercase tracking-wider ml-1">Kontak / No. WhatsApp +62..</label>
                    <input type="text" name="kontak" value="<?= $umkm['kontak'] ?? '' ?>" required
                        class="w-full px-5 py-4 bg-gray-50 border border-gray-100 rounded-2xl focus:bg-white focus:border-npcGreen transition outline-none font-medium"
                        placeholder="0812xxxx">
                </div>

                <div class="space-y-2">
                    <label class="text-xs font-bold text-gray-400 uppercase tracking-wider ml-1">Alamat Lengkap</label>
                    <input type="text" name="alamat" value="<?= $umkm['alamat'] ?? '' ?>" required
                        class="w-full px-5 py-4 bg-gray-50 border border-gray-100 rounded-2xl focus:bg-white focus:border-npcGreen transition outline-none font-medium"
                        placeholder="Contoh: Dusun 1">
                </div>

                <div class="space-y-2">
                    <label class="text-xs font-bold text-gray-400 uppercase tracking-wider ml-1">Foto UMKM</label>
                    <input type="file" name="foto" class="w-full px-5 py-4 bg-gray-50 border border-gray-100 rounded-2xl outline-none">
                </div>

                <div class="space-y-2">
                    <label class="text-xs font-bold text-gray-400 uppercase tracking-wider ml-1">Deskripsi Lengkap</label>
                    <textarea name="deskripsi" rows="5" required
                        class="w-full px-5 py-4 bg-gray-50 border border-gray-100 rounded-2xl focus:bg-white focus:border-npcGreen transition outline-none font-medium"
                        placeholder="Jelaskan produk atau jasa yang ditawarkan..."><?= $umkm['deskripsi'] ?? '' ?></textarea>
                </div>

                <div class="pt-6 border-t border-gray-50 flex justify-end">
                    <button type="submit" class="px-10 py-4 bg-npcGreen text-white rounded-2xl font-bold shadow-glow hover:bg-green-600 transition">
                        <i class="fa-solid fa-floppy-disk mr-2"></i> Simpan Data UMKM
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>