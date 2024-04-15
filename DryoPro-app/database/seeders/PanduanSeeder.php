<?php

namespace Database\Seeders;

use App\Models\Panduan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PanduanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Panduan::create([
            'title' => 'A. Prosedur melihat panduan penggunaan alat dan sistem',
            'content' => '1. Alat ini dirancang untuk mengoptimalkan proses pengeringan bunga mawar dengan memanfaatkan sensor-sensor yang terintegrasi dan teknologi IoT untuk pengendalian otomatis.<br><br>
            2. ​​Alat ini bertujuan untuk menyediakan solusi efisien dalam pengeringan bunga mawar dengan proses pengeringan yang lebih canggih dan efisien, sehingga menghasilkan bunga mawar berkualitas tinggi.<br><br>
            3. Sistem hanya bisa diakses jika pengguna sudah melakukan log in<br><br>
            4. Pastikan sumber listrik yang memadai karena perangkat keras IoT harus terhubung dengan sumber listrik<br><br>
            5. Pastikan koneksi internet seperti wifi atau data seluler benar-benar memadai karena alat akan terkoneksi ke website DryoPro<br><br>
            6. Pastikan alat terpasang dengan benar dan terhubung ke sumber daya listrik yang sesuai.<br><br>
            7. Gunakan website DryoPro untuk memulai proses pengeringan <br><br>
            8. Pengguna dapat memulai dan mengakhiri proses pengeringan dengan adanya fitur turn on dan turn off pada dashboard<br><br>
            9. Pengguna dapat melihat fitur panduan untuk memahami cara menggunakan alat dan sistem pada IoT alat pengeringan bunga mawar, serta memperoleh informasi yang diperlukan untuk mengoptimalkan penggunaan alat<br><br>
            11. Pantau proses pengeringan secara berkala untuk menjaga kualitas bunga mawar yang dihasilkan.<br><br>
            10. Pengguna dapat melihat riwayat dari proses pengeringan yang telah selesai'
            
        ]);
        Panduan::create([
            'title' => 'B. Prosedur melihat cara kerja alat',
            'content' => '1. Pastikan perangkat keras IoT terhubung dengan sumber listrik<br><br>

            2. Pastikan sumber listrik yang memadai karena perangkat keras IoT harus terhubung dengan sumber listrik<br><br>

            3. Buka website DryoPro di perangkat smartphone atau tablet Anda.<br><br>

            4. Pastikan anda login terlebih dahulu karena sistem hanya bisa diakses jika pengguna sudah melakukan log in<br><br>

            5. Pastikan bunga mawar sudah ditempatkan di dalam ruang pengeringan sebelum proses pengeringan berjalan.<br><br>

            6. Setelah alat hidup dan terkoneksi ke website, maka website pada bagian dashboard akan secara otomatis menampilkan suhu dan kelembaban di dalamnya.<br><br>

            7. Alat akan berhenti bekerja ketika bunga sudah kering kurang lebih prosesnya berlangsung selama 2 jam. Anda tidak perlu khawatir tentang overheat karena alat akan berhenti jika suhu terlalu tinggi (< 50°C).'
            
        ]);
        Panduan::create([
            'title' => 'C. Prosedur melihat persyaratan dan batasan penggunaan alat',
            'content' => '1. Alat harus diletakkan di ruangan dengan sirkulasi udara yang baik, dan terhindar dari kontak matahari secara langsung untuk menghindari overheat yang nantinya dapat merusak komponen-komponen pada alat<br><br>
            2. Daya yang dibutuhkan alat adalah 120 Watt. Jadi, pastikan listrik yang cukup untuk menyediakan daya ke alat IoT.<br><br>
            3. Alat tidak diperkenankan untuk dekat dengan air atau lingkungan yang basah <br><br>
            4. Pastikan koneksi internet seperti wifi atau data seluler benar-benar memadai karena alat akan terkoneksi ke website DryoPro<br><br>
            5. Kapasitas alat adalah 1 kg bunga mawar tiap satu kali produksi.<br><br>
            6. Suhu maksimal alat saat sedang beroperasi pada 50°C, jika suhu diatas itu maka lampu akan otomatis mati dan alat akan berhenti melakukan proses pengeringan<br><br>
            7. Saat pengeringan berhenti karena adanya overheat, proses pengeringan akan berlanjut ketika suhu kembali ke level optimal lampu akan menyala kembali '
            
        ]);
        Panduan::create([
            'title' => 'D. Prosedur melihat cara perawatan alat',
            'content' => '1. Maintenance alat dilakukan minimal setiap 1-2 bulan sekali tergantung pada intensitas pemakaian<br><br>
            2. Pastikan untuk membersihkan alat secara berkala setelah pemakaian dengan lap yang lembut dan kering untuk menghilangkan debu, kotoran, atau sisa-sisa yang mungkin menempel pada permukaannya. Jangan gunakan cairan pembersih yang keras atau bahan abrasif yang dapat merusak komponen alat.<br><br>
            3. Jaga kebersihan sensor yang digunakan oleh alat. Bersihkan sensor secara lembut menggunakan bahan yang sesuai, seperti alkohol isopropil, untuk menghindari akumulasi kotoran yang dapat mempengaruhi kinerja alat.<br><br>
            4. Periksa secara berkala kekokohan dan kebersihan koneksi serta kabel yang terhubung ke alat. Pastikan tidak ada kabel yang rusak atau terkelupas, dan pastikan semua koneksi tetap kuat dan aman.<br><br>
            5. Pastikan alat ditempatkan di lingkungan yang sesuai dan tidak terkena paparan langsung dari air, panas berlebih, atau kelembaban yang tinggi. Hindari 6. penggunaan alat di tempat yang rentan terhadap getaran atau guncangan yang berlebihan.<br><br>
            7. Jika ada bagian alat yang rusak atau mengalami keausan yang signifikan, segera hubungi tim developer untuk mendapatkan panduan tentang penggantian atau perbaikan yang diperlukan. '
            
        ]);
        Panduan::create([
            'title' => 'E. Permasalahan Umum dan Pemecahannya',
            'content' => '1. Masalah: Lampu pengering tidak menyala saat suhu melebihi 50°C.
            - Pemecahan: Pastikan koneksi antara sensor suhu dan sistem kendali lampu berfungsi dengan baik. Periksa apakah sensor suhu mendeteksi suhu dengan benar. Selain itu, pastikan bahwa tidak ada gangguan pada sistem kelistrikan. Jika masalah tetap tidak teratasi pengguna bisa menghubungi developer team untuk tindakan lebih lanjut.<br><br>
          2. Masalah: Lampu pengering tidak mati meskipun suhu telah turun di bawah 50°C.
            - Pemecahan: Pastikan koneksi antara sensor suhu dan sistem kendali lampu berfungsi dengan baik. Periksa apakah sensor suhu mendeteksi suhu dengan benar. Selain itu, pastikan bahwa tidak ada gangguan pada sistem kelistrikan. Jika masalah tetap tidak teratasi pengguna bisa menghubungi developer team untuk tindakan lebih lanjut.<br><br>
          3. Masalah: Durasi proses pengeringan terlalu lama atau terlalu pendek.
            - Pemecahan: Pastikan sensor pada alat sudah terintegrasi dengan baik pada alat. Pastikan juga tidak terjadi overheat saat proses pengeringan berlangsung. Jika masalah tetap tidak teratasi pengguna bisa menghubungi developer team untuk tindakan lebih lanjut.<br><br>
          4. Masalah: Sensor suhu memberikan pembacaan yang tidak akurat.
            - Pemecahan: Pastikan  koneksi internet yg digunakan apakah stabil atau tidak.  Pastikan kembali alat nya sudah dalam kondisi hidup atau belum. Jika alat sudah tersambung tapi tetap suhu kelembaban tidak terbaca dengan akurat, maka periksa apakah sensor suhu terkena paparan langsung sinar matahari atau sumber panas lainnya yang dapat mempengaruhi pembacaan. Pastikan juga sensor suhu tidak terkena debu atau kotoran yang dapat mengganggu kinerjanya. Jika masalah tetap tidak teratasi pengguna bisa menghubungi developer team untuk tindakan lebih lanjut. <br><br>
          5. Masalah: Lampu pengering sering mati secara tiba-tiba.
            - Pemecahan: Periksa kondisi sumber daya dan jaringan listrik yang digunakan . Pastikan tidak ada gangguan pada pasokan listrik yang dapat menyebabkan mati mendadak pada lampu pengering. Selain itu, periksa juga koneksi listrik dan pastikan tidak ada komponen kabel yang terputus atau rusak. Jika masalah tetap tidak teratasi pengguna bisa menghubungi developer team untuk tindakan lebih lanjut.<br><br>
          6. Masalah: Sistem tidak merespons perubahan suhu dengan cepat.
            - Pemecahan: Periksa koneksi jaringan internet sistem dan antara perangkat untuk memastikan responsivitas yang optimal. Jika masalah tetap tidak teratasi pengguna bisa menghubungi developer team untuk tindakan lebih lanjut.<br><br>
          7. Masalah: Sistem mengalami kesulitan terhubung ke jaringan IoT.
            - Pemecahan: Periksa koneksi jaringan dan kekuatan sinyal internet. Pastikan bahwa sistem memiliki akses yang stabil ke jaringan internet dan tidak ada hambatan dalam koneksi. Jika masalah tetap tidak teratasi pengguna bisa menghubungi developer team untuk tindakan lebih lanjut.<br><br>
          '
            
        ]);
    }
}
