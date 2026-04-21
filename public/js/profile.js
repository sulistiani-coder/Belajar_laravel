// Script khusus untuk halaman Profile
console.log('Profile JavaScript loaded - Script ini hanya dimuat di halaman profile');

// Menampilkan pesan welcome di console
console.warn('Anda sedang membuka halaman profile pengguna');

// Function untuk menampilkan alert
function showProfileAlert() {
    alert('Ini adalah halaman profile - Script dimuat khusus untuk halaman ini');
}

// Jalankan saat dokumen siap
document.addEventListener('DOMContentLoaded', function() {
    console.log('DOM Ready - Profile page initialized');
});
