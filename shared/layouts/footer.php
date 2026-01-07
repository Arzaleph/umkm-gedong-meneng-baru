<footer class="bg-white border-t border-gray-100 pt-16 pb-8">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">
            <div class="col-span-1 md:col-span-2">
                <div class="flex items-center gap-2 mb-6">
                    <div class="bg-npcGreen text-white font-bold text-lg px-2 py-0.5 rounded">GMB</div>
                    <span class="font-bold text-xl text-npcDark">UMKM Gedong Meneng Baru</span>
                </div>
                <p class="text-gray-500 text-sm leading-relaxed max-w-sm mb-6">
                    Platform digital resmi untuk mendukung dan mempromosikan produk-produk unggulan dari pelaku usaha di Desa Gedong Meneng Baru.
                </p>
            </div>
            
            <div>
                <h4 class="font-bold text-npcDark mb-6">Navigasi</h4>
                <ul class="space-y-4 text-sm text-gray-500">
                    <li><a href="<?= BASE_URL ?>/" class="hover:text-npcGreen transition">Beranda</a></li>
                    <li><a href="<?= BASE_URL ?>/umkm" class="hover:text-npcGreen transition">Daftar UMKM</a></li>
                    <li><a href="<?= BASE_URL ?>/kategori" class="hover:text-npcGreen transition">Kategori</a></li>
                    <li><a href="<?= BASE_URL ?>/admin" class="hover:text-npcGreen transition">Login Admin</a></li>
                </ul>
            </div>

            <div>
                <h4 class="font-bold text-npcDark mb-6">Hubungi Kami</h4>
                <p class="text-sm text-gray-500 flex items-start gap-3">
                    <i class="fa-solid fa-location-dot mt-1 text-npcGreen"></i>
                    Balai Desa Gedong Meneng Baru,<br>Lampung Selatan
                </p>
            </div>
        </div>
        
        <div class="border-t border-gray-100 pt-8 text-center text-xs text-gray-400">
            <p>&copy; <?= date('Y'); ?> UMKM Desa Gedong Meneng Baru. All rights reserved.</p>
        </div>
    </div>
</footer>

<script>
    window.addEventListener('scroll', function() {
        const navbar = document.getElementById('navbar');
        const logoText = document.getElementById('logo-text');
        const logoSub = document.getElementById('logo-sub');
        const navLinks = document.querySelectorAll('.nav-link');

        if (window.scrollY > 50) {
            navbar.classList.add('bg-white/90', 'backdrop-blur-md', 'shadow-md', 'py-2');
            navbar.classList.remove('bg-transparent', 'py-4');
            logoText.classList.replace('text-white', 'text-npcDark');
            logoSub.classList.replace('text-gray-300', 'text-gray-500');
            navLinks.forEach(link => link.classList.replace('text-white/90', 'text-gray-600'));
        } else {
            navbar.classList.remove('bg-white/90', 'backdrop-blur-md', 'shadow-md', 'py-2');
            navbar.classList.add('bg-transparent', 'py-4');
            logoText.classList.replace('text-npcDark', 'text-white');
            logoSub.classList.replace('text-gray-500', 'text-gray-300');
            navLinks.forEach(link => link.classList.replace('text-gray-600', 'text-white/90'));
        }
    });
</script>
</body>
</html>