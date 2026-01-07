<div class="max-w-5xl mx-auto py-12 px-6">
    <div class="flex items-center justify-between mb-10">
        <div class="flex items-center gap-5">
            <a href="<?= BASE_URL ?>/admin/dashboard" class="w-12 h-12 flex items-center justify-center bg-white border border-gray-200 rounded-2xl text-gray-400 hover:text-npcGreen transition shadow-sm">
                <i class="fa-solid fa-arrow-left"></i>
            </a>
            <div>
                <h2 class="text-3xl font-extrabold text-npcDark">Edit Data UMKM</h2>
                <p class="text-gray-500 text-sm mt-1">ID Usaha: #<?= $umkm['id'] ?></p>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-[2.5rem] shadow-xl border border-gray-100 overflow-hidden">
        <div class="p-12">
            <form action="<?= BASE_URL ?>/admin/umkm/update" method="POST" enctype="multipart/form-data" class="space-y-10">
                <input type="hidden" name="id" value="<?= $umkm['id'] ?>">

                <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                    <div class="space-y-3">
                        <label class="text-[10px] font-black text-gray-400 uppercase tracking-[0.2em] ml-2">Nama Usaha / Toko</label>
                        <input type="text" name="nama" value="<?= $umkm['nama'] ?>" required
                            class="w-full px-6 py-4 bg-gray-50 border border-gray-100 rounded-2xl focus:bg-white focus:border-npcGreen focus:ring-4 focus:ring-green-100 transition outline-none font-bold text-gray-700" 
                            placeholder="Nama UMKM">
                    </div>
                    
                    <div class="space-y-3">
                        <label class="text-[10px] font-black text-gray-400 uppercase tracking-[0.2em] ml-2">Kategori Bisnis</label>
                        <select name="kategori" class="w-full px-6 py-4 bg-gray-50 border border-gray-100 rounded-2xl focus:bg-white focus:border-npcGreen transition outline-none font-bold text-gray-700 appearance-none">
                            <option value="Kuliner" <?= $umkm['kategori'] == 'Kuliner' ? 'selected' : '' ?>>Kuliner</option>
                            <option value="Kerajinan" <?= $umkm['kategori'] == 'Kerajinan' ? 'selected' : '' ?>>Kerajinan</option>
                            <option value="Minuman" <?= $umkm['kategori'] == 'Minuman' ? 'selected' : '' ?>>Minuman (Kopi)</option>
                            <option value="Pertanian" <?= $umkm['kategori'] == 'Pertanian' ? 'selected' : '' ?>>Pertanian</option>
                        </select>
                    </div>

                    <div class="space-y-3">
                        <label class="text-[10px] font-black text-gray-400 uppercase tracking-[0.2em] ml-2">Alamat / Dusun</label>
                        <input type="text" name="alamat" value="<?= $umkm['alamat'] ?>" required
                            class="w-full px-6 py-4 bg-gray-50 border border-gray-100 rounded-2xl focus:bg-white focus:border-npcGreen transition outline-none font-bold text-gray-700"
                            placeholder="Contoh: Dusun 1">
                    </div>

                    <div class="space-y-3">
                        <label class="text-[10px] font-black text-gray-400 uppercase tracking-[0.2em] ml-2">No. WhatsApp Aktif +62..</label>
                        <div class="relative">
                            <i class="fa-brands fa-whatsapp absolute left-6 top-1/2 -translate-y-1/2 text-green-500 text-lg"></i>
                            <input type="text" name="kontak" value="<?= $umkm['kontak'] ?>" required
                                class="w-full pl-14 pr-6 py-4 bg-gray-50 border border-gray-100 rounded-2xl focus:bg-white focus:border-npcGreen transition outline-none font-bold text-gray-700"
                                placeholder="0812-xxxx-xxxx">
                        </div>
                    </div>

                    <div class="space-y-3">
                        <label class="text-[10px] font-black text-gray-400 uppercase tracking-[0.2em] ml-2">Foto Usaha</label>
                        
                        <?php if (!empty($umkm['foto'])): ?>
                            <div class="mb-4">
                                <p class="text-[10px] text-gray-400 uppercase mb-2 tracking-widest">Foto saat ini:</p>
                                <img src="<?= BASE_URL ?>/public/uploads/<?= $umkm['foto'] ?>" class="w-32 h-32 object-cover rounded-2xl border border-gray-100 shadow-sm">
                            </div>
                        <?php endif; ?>

                        <input type="file" name="foto" 
                            class="w-full px-6 py-4 bg-gray-50 border border-gray-100 rounded-2xl focus:bg-white focus:border-npcGreen transition outline-none font-bold text-gray-700">
                        <p class="text-[10px] text-gray-400 italic ml-2">*Biarkan kosong jika tidak ingin mengubah foto</p>
                    </div>
                </div>

                <div class="space-y-3">
                    <label class="text-[10px] font-black text-gray-400 uppercase tracking-[0.2em] ml-2">Deskripsi Produk & Layanan</label>
                    <textarea name="deskripsi" rows="4" required
                        class="w-full px-6 py-4 bg-gray-50 border border-gray-100 rounded-2xl focus:bg-white focus:border-npcGreen transition outline-none font-medium text-gray-600 leading-relaxed"
                        placeholder="Ceritakan keunggulan produk UMKM ini..."><?= $umkm['deskripsi'] ?></textarea>
                </div>

                <div class="pt-10 border-t border-gray-50 flex flex-col md:flex-row items-center justify-between gap-6">
                    <p class="text-xs text-gray-400 italic">Terakhir diperbarui: <?= date('d M Y') ?></p>
                    <button type="submit" class="w-full md:w-auto px-12 py-4 bg-npcGreen text-white rounded-2xl font-black shadow-glow hover:bg-green-600 hover:-translate-y-1 transition active:translate-y-0">
                        <i class="fa-solid fa-floppy-disk mr-2"></i> UPDATE DATA UMKM
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>