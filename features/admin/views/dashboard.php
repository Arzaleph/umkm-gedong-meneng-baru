<div class="min-h-screen bg-gray-50">
    <header class="bg-white h-20 border-b border-gray-100 flex items-center justify-between px-6 md:px-12 sticky top-0 z-50 backdrop-blur-md bg-white/80">
        <div class="flex items-center gap-4">
            <div class="w-10 h-10 bg-npcGreen rounded-xl flex items-center justify-center shadow-glow">
                <i class="fa-solid fa-user-shield text-white text-lg"></i>
            </div>
            <div>
                <h2 class="text-xl font-black text-npcDark tracking-tight leading-tight">Panel Admin</h2>
                <p class="text-[10px] text-npcGreen font-bold uppercase tracking-widest">Gedong Meneng Baru</p>
            </div>
        </div>
        
        <div class="flex items-center gap-3 md:gap-6">
            <div class="hidden md:flex items-center gap-3 border-r border-gray-100 pr-6 mr-2">
                <a href="<?= BASE_URL ?>/" target="_blank" class="text-xs font-bold text-gray-400 hover:text-npcGreen transition flex items-center gap-2">
                    <i class="fa-solid fa-globe"></i> Lihat Website
                </a>
            </div>

            <div class="flex items-center gap-4">
                <div class="text-right hidden sm:block">
                    <p class="text-sm font-bold text-npcDark"><?= $_SESSION["admin"]["username"] ?></p>
                    <p class="text-[10px] text-gray-400 font-bold uppercase tracking-widest">Administrator</p>
                </div>
                <a href="<?= BASE_URL ?>/admin/logout" class="w-10 h-10 rounded-xl bg-red-50 text-red-500 flex items-center justify-center hover:bg-red-500 hover:text-white transition-all shadow-sm" title="Keluar Sesi">
                    <i class="fa-solid fa-right-from-bracket text-xs"></i>
                </a>
            </div>
        </div>
    </header>

    <main class="max-w-7xl mx-auto p-6 md:p-12 space-y-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white p-8 rounded-[2rem] border border-gray-100 shadow-sm flex items-center gap-5">
                <div class="w-14 h-14 bg-green-50 rounded-2xl flex items-center justify-center text-npcGreen text-xl shadow-inner">
                    <i class="fa-solid fa-shop"></i>
                </div>
                <div>
                    <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">Total UMKM</p>
                    <p class="text-2xl font-black text-npcDark"><?= count($umkm) ?></p>
                </div>
            </div>
            
            <div class="bg-white p-8 rounded-[2rem] border border-gray-100 shadow-sm flex items-center gap-5 text-gray-400">
                <div class="w-14 h-14 bg-blue-50 rounded-2xl flex items-center justify-center text-blue-500 text-xl shadow-inner">
                    <i class="fa-solid fa-calendar-day"></i>
                </div>
                <div>
                    <p class="text-[10px] font-bold uppercase tracking-widest">Hari Ini</p>
                    <p class="text-sm font-bold text-npcDark"><?= date('d M Y') ?></p>
                </div>
            </div>

            <div class="bg-npcGreen p-6 rounded-[2rem] shadow-glow flex items-center gap-5 text-white">
                    <div class="w-14 h-14 bg-white/20 rounded-2xl flex items-center justify-center text-xl backdrop-blur-md">
                        <i class="fa-solid fa-check-double"></i>
                    </div>
                    <div>
                        <p class="text-[10px] font-bold text-white/70 uppercase tracking-widest">Status Sistem</p>
                        <p class="text-sm font-bold">Terhubung & Aktif</p>
                    </div>
            </div>
        </div>

        <div class="bg-white rounded-[2.5rem] shadow-sm border border-gray-100 overflow-hidden">
            <div class="px-8 py-8 border-b border-gray-50 flex flex-col md:flex-row gap-4 items-center justify-between bg-white">
                <div>
                    <h3 class="font-black text-npcDark uppercase tracking-wider text-sm">Manajemen Data UMKM</h3>
                    <p class="text-xs text-gray-400 mt-1">Total data yang terdaftar dalam database desa.</p>
                </div>
                <a href="<?= BASE_URL ?>/admin/umkm/create" class="px-8 py-4 bg-npcGreen text-white rounded-2xl text-sm font-bold hover:bg-green-600 transition-all flex items-center gap-3 shadow-glow">
                    <i class="fa-solid fa-plus"></i> Tambah Baru
                </a>
            </div>
            
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    </table>
            </div>
        </div>
    </main>
</div>