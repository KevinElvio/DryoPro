// document.addEventListener('DOMContentLoaded', () => {
//     const log = document.querySelector('.log');
//     const text = document.querySelector('.text');

//     log.addEventListener('click', () => {
//         if (text.innerHTML === 'On') {
//             alert('Mesin menyala, kembali ke mesin.');
//         } else if (text.innerHTML === 'Off') {
//             // const confirmation = confirm('Anda yakin ingin keluar?');
//             if (confirmation) {
//                 // Jika pengguna yakin ingin logout, kirim permintaan logout ke server
//                 window.location.href = "/logout?confirmed=true";
//             } else {
//                 // Jika pengguna membatalkan konfirmasi logout, tidak melakukan apa-apa
//                 console.log('Logout dibatalkan');
//             }
//         }
//     });
// });





// document.addEventListener('DOMContentLoaded', () => {
//     const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
//     const log = document.querySelector('.log');
//     const text = document.querySelector('.text');

//     log.addEventListener('click', () => {
//         if (text.innerHTML === 'On') {
//             alert('Mesin menyala, kembali ke mesin.');
//         } else if (text.innerHTML === 'Off') {
//             const confirmation = confirm('Apakah Anda yakin ingin keluar?');
//             if (confirmation) {
//                 // Kirim permintaan logout menggunakan AJAX
//                 fetch('/logout', {
//                     method: 'POST',
//                     headers: {
//                         'Content-Type': 'application/json',
//                         'X-CSRF-TOKEN': '{{ csrf_token() }}' // Perhatikan bagian ini
//                     },
//                     body: JSON.stringify({ confirmed: true })
//                 }).then(response => {
//                     if (response.ok) {
//                         // Jika permintaan logout berhasil, redirect ke halaman beranda
//                         window.location.href = "/";
//                     } else {
//                         console.error('Gagal logout');
//                     }
//                 }).catch(error => {
//                     console.error('Gagal logout:', error);
//                 });
//             } else {
//                 // Jika pengguna membatalkan konfirmasi logout, tidak melakukan apa-apa
//                 console.log('Logout dibatalkan');
//             }
//         }
//     });
// });



