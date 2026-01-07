<?php 
// Jika URL mengandung kata 'admin', jangan tampilkan navbar publik
if (strpos($_SERVER['REQUEST_URI'], '/admin') !== false && strpos($_SERVER['REQUEST_URI'], '/login') === false) {
    return; 
}
?>
<nav id="navbar" class="fixed w-full z-50 top-0 transition-all duration-300 py-4 bg-transparent">
    <div class="max-w-7xl mx-auto px-6 flex justify-between items-center">
        <a href="<?= BASE_URL ?>/" class="flex items-center gap-2 group">
            <div class="bg-npcGreen text-white font-bold text-2xl px-3 py-1 rounded-lg shadow-lg group-hover:scale-105 transition">
                <i class="fa-solid fa-shop"></i>
            </div>
            <div class="flex flex-col">
                <span id="logo-text" class="font-extrabold text-white text-lg leading-tight transition-colors">UMKM GMB</span>
                <span id="logo-sub" class="text-[10px] font-medium text-gray-300 tracking-widest uppercase transition-colors">Gedong Meneng Baru</span>
            </div>
        </a>

        <div class="hidden md:flex items-center space-x-8">
            <a href="<?= BASE_URL ?>/" class="nav-link text-sm font-medium text-white/90 hover:text-npcGreen transition">Beranda</a>
            <a href="<?= BASE_URL ?>/umkm" class="nav-link text-sm font-medium text-white/90 hover:text-npcGreen transition">Daftar UMKM</a>
            <a href="<?= BASE_URL ?>/kategori" class="nav-link text-sm font-medium text-white/90 hover:text-npcGreen transition">Kategori</a>
            <a href="<?= BASE_URL ?>/kontak" class="nav-link text-sm font-medium text-white/90 hover:text-npcGreen transition">Kontak</a>
        </div>

        <div class="flex items-center gap-4">
            <a href="<?= BASE_URL ?>/admin/login" class="bg-white text-npcDark border border-transparent px-6 py-2.5 rounded-full text-sm font-bold hover:bg-gray-100 transition shadow-lg flex items-center gap-2">
                <i class="fa-regular fa-user"></i> Admin
            </a>
        </div>
    </div>
</nav>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const navbar = document.getElementById('navbar');
    const logoText = document.getElementById('logo-text');
    const logoSub = document.getElementById('logo-sub');
    const navLinks = document.querySelectorAll('.nav-link');

    function applyScrollEffect() {
        // Cek apakah ini halaman beranda (path "/" atau kosong)
        const isHomePage = window.location.pathname === "<?= str_replace(parse_url(BASE_URL, PHP_URL_SCHEME) . '://' . parse_url(BASE_URL, PHP_URL_HOST), '', BASE_URL) ?>/" || 
                           window.location.pathname === "<?= str_replace(parse_url(BASE_URL, PHP_URL_SCHEME) . '://' . parse_url(BASE_URL, PHP_URL_HOST), '', BASE_URL) ?>";
        
        // Kondisi: Jika di-scroll LEBIH dari 50 ATAU jika BUKAN halaman beranda
        if (window.scrollY > 50 || !isHomePage) {
            navbar.classList.add('bg-white/90', 'backdrop-blur-md', 'shadow-md', 'py-2');
            navbar.classList.remove('bg-transparent', 'py-4');
            logoText.classList.replace('text-white', 'text-npcDark');
            logoSub.classList.replace('text-gray-300', 'text-gray-500');
            navLinks.forEach(link => link.classList.replace('text-white/90', 'text-gray-600'));
        } else {
            // Kembali transparan hanya di beranda saat scroll di atas (scrollY < 50)
            navbar.classList.remove('bg-white/90', 'backdrop-blur-md', 'shadow-md', 'py-2');
            navbar.classList.add('bg-transparent', 'py-4');
            logoText.classList.replace('text-npcDark', 'text-white');
            logoSub.classList.replace('text-gray-500', 'text-gray-300');
            navLinks.forEach(link => link.classList.replace('text-gray-600', 'text-white/90'));
        }
    }

    window.addEventListener('scroll', applyScrollEffect);
    applyScrollEffect(); // Jalankan langsung saat halaman dimuat
});
</script>