<?php
include "config/database.php";
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kelompok 7 - 3KA25</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="style/style.css">
</head>

<body class="bg-black text-black">

  <nav class="bg-white rounded-b-[40px] shadow-md z-[70] sticky top-0">
    <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
      
      <div class="flex items-center gap-2">
        <span class="font-bold text-lg">3KA25</span>
      </div>

      <ul class="hidden md:flex items-center gap-8 font-medium">
        <li><a href="#tentang" class="hover:text-blue-600 transition">Tentang</a></li>
        <li><a href="#kegiatan" class="hover:text-blue-600 transition">Kegiatan</a></li>
        <li><a href="#jadwal" class="hover:text-blue-600 transition">Jadwal</a></li>
        <li><a href="#quicklink" class="hover:text-blue-600 transition">Quick Link</a></li>
      </ul>

      <button id="menu-btn" class="md:hidden focus:outline-none" aria-label="Toggle menu">
        <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </button>
    </div>

    <div id="menu" class="hidden md:hidden px-6 pb-6">
      <ul class="flex flex-col gap-4 font-medium">
        <li><a href="#tentang" class="hover:text-blue-600">Tentang</a></li>
        <li><a href="#kegiatan" class="hover:text-blue-600">Kegiatan</a></li>
        <li><a href="#jadwal" class="hover:text-blue-600">Jadwal</a></li>
        <li><a href="#quicklink" class="hover:text-blue-600">Quick Link</a></li>
      </ul>
    </div>
  </nav>

  <main>
    
    <section id="home" class="bg-white rounded-[40px] my-[2px] overflow-hidden">
      <div class="relative h-[400px] flex items-center justify-center bg-cover bg-center"
           style="background-image: url('images/bg-hero.jpg');">
        <div class="absolute inset-0 bg-black/40"></div>
        <h1 class="relative z-10 text-8xl font-bold text-white drop-shadow-lg">3KA25</h1>
      </div>

      <div class="flex items-center justify-end pr-10 text-black mb-28 mt-10">
        <p class="text-2xl font-lexend text-gray-500 text-right">
          Universitas Gunadarma<br>
          Sistem Informasi<br>
          Fakultas Ilmu Komputer dan Teknologi Informasi
        </p>
      </div>

      <div class="p-8 text-4xl md:text-[100px] font-semibold font-roboto leading-[0.9] text-gray-900">
        Website informasi untuk<br>
        Mahasiswa pengulangan kelas 3KA25
      </div>
    </section>

    <section id="tentang" class="bg-white rounded-[40px] mb-[2px] px-8 py-16">
      <div class="flex flex-row justify-center gap-4">
        <div class="w-1/2">
          <span class="text-5xl font-bold">///</span>
        </div>
        <div class="w-1/2 space-y-4">
          <p class="text-3xl">
            Website ini dibuat oleh Kelompok 7 guna untuk memenuhi tugas akhir kami sebagai media informasi yang ditujukan khusus bagi mahasiswa pengulangan. Website ini dirancang untuk membantu mahasiswa dalam memperoleh informasi akademik secara lebih terstruktur, jelas, dan mudah diakses.
          </p>

          <p class="text-3xl">
            Melalui website ini, mahasiswa pengulangan dapat menemukan berbagai informasi penting seperti jadwal kelas, mata kuliah, ketentuan akademik, serta informasi pendukung lainnya yang relevan dengan kebutuhan perkuliahan. Dengan tampilan yang sederhana dan responsif, kami berharap website ini dapat memberikan pengalaman pengguna yang nyaman serta memudahkan mahasiswa dalam mengelola aktivitas akademiknya.
          </p>

          <p class="text-3xl">
            Kami berharap website ini dapat menjadi sarana informasi yang bermanfaat, efektif, dan membantu mahasiswa pengulangan dalam menjalani proses perkuliahan dengan lebih terarah.
          </p>
        </div>
      </div>
    </section>

    <section class="bg-white rounded-[40px] overflow-hidden py-12">
      <h2 class="text-5xl font-semibold mb-20 px-6">Anggota Kelompok</h2>

      <div class="marquee-wrapper py-8">
        <div class="marquee text-4xl text-white font-semibold">
          <?php
          $members = [
            ['name' => 'Muhamad Irfan', 'gradient' => 'from-pink-500 to-red-500'],
            ['name' => 'Ara Hasiat', 'gradient' => 'from-blue-500 to-cyan-500'],
            ['name' => 'Alif', 'gradient' => 'from-green-500 to-emerald-500'],
            ['name' => 'Ludio Geltiri', 'gradient' => 'from-purple-500 to-indigo-500'],
            ['name' => 'Yosi Fathahilah', 'gradient' => 'from-yellow-400 to-orange-500']
          ];

          for ($i = 0; $i < 3; $i++):
            foreach ($members as $member):
          ?>
            <span class="p-14 rounded-[999px] bg-gradient-to-r <?= $member['gradient'] ?>">
              <?= $member['name'] ?>
            </span>
          <?php 
            endforeach;
          endfor;
          ?>
        </div>
      </div>
    </section>

    <section id="kegiatan" class="bg-white rounded-[40px] my-[2px] p-6 shadow-sm">
      <h2 class="text-3xl font-semibold text-center mb-6 text-gray-800">Kegiatan Kampus</h2>

      <div class="overflow-x-auto rounded-2xl border border-gray-200 w-full lg:max-w-[66.666%] mx-auto">
        <table class="w-full text-sm text-center">
          <thead class="bg-gray-100 text-gray-700 sticky top-0 z-10">
            <tr>
              <th class="p-4">Kegiatan</th>
              <th class="p-4">Tanggal</th>
            </tr>
          </thead>

          <tbody class="divide-y divide-gray-100">
            <?php
            $query_kegiatan = mysqli_query($conn, "SELECT * FROM kegiatan");
            while ($kegiatan = mysqli_fetch_assoc($query_kegiatan)):
            ?>
              <tr class="bg-white hover:bg-gray-400 transition-all duration-300">
                <td class="p-4 font-medium text-gray-800">
                  <?= htmlspecialchars($kegiatan['nama_kegiatan']) ?>
                </td>
                <td class="p-4 text-gray-600">
                  <?= htmlspecialchars($kegiatan['tanggal']) ?>
                </td>
              </tr>
            <?php endwhile; ?>
          </tbody>
        </table>
      </div>
    </section>

    <section id="jadwal" class="bg-white rounded-[40px] mb-[2px] p-6 shadow-sm">
      <h2 class="text-3xl font-semibold text-center mb-6 text-gray-800">Jadwal Kelas</h2>

      <div class="overflow-x-auto rounded-2xl border border-gray-200 w-full lg:max-w-[66.666%] mx-auto">
        <table class="w-full text-sm text-center">
          <thead class="bg-gray-100 text-gray-700 sticky top-0 z-10">
            <tr>
              <th class="p-4">Kelas</th>
              <th class="p-4">Hari</th>
              <th class="p-4">Mata Kuliah</th>
              <th class="p-4">Waktu</th>
              <th class="p-4">Ruang</th>
              <th class="p-4">Dosen</th>
            </tr>
          </thead>

          <tbody class="divide-y divide-gray-100">
            <?php
            $query_jadwal = mysqli_query($conn, "SELECT * FROM jadwal_kuliah");
            while ($jadwal = mysqli_fetch_assoc($query_jadwal)):
            ?>
              <tr class="bg-white hover:bg-gray-400 transition-all duration-300">
                <td class="p-4 font-medium text-gray-800"><?= htmlspecialchars($jadwal['kelas']) ?></td>
                <td class="p-4 text-gray-600"><?= htmlspecialchars($jadwal['hari']) ?></td>
                <td class="p-4 font-semibold text-gray-900"><?= htmlspecialchars($jadwal['matakuliah']) ?></td>
                <td class="p-4 text-gray-600"><?= htmlspecialchars($jadwal['waktu']) ?></td>
                <td class="p-4">
                  <span class="px-3 py-1 rounded-full bg-gray-100 text-gray-700 text-xs">
                    <?= htmlspecialchars($jadwal['ruang']) ?>
                  </span>
                </td>
                <td class="p-4 text-gray-700"><?= htmlspecialchars($jadwal['dosen']) ?></td>
              </tr>
            <?php endwhile; ?>
          </tbody>
        </table>
      </div>
    </section>

    <section id="tugas" class="bg-white rounded-[40px] my-[2px] p-8">
      <div class="max-w-6xl mx-auto">
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8 gap-4">
          <div>
            <h2 class="text-4xl font-semibold text-gray-900">Daftar Tugas</h2>
            <p class="text-gray-500 mt-2">
              Preview tugas aktif untuk mahasiswa kelas 3KA25
            </p>
          </div>

          <div class="px-4 py-2 rounded-full bg-yellow-100 text-yellow-700 text-sm font-medium">
            🔒 Premium Feature
          </div>
        </div>

        <div class="relative overflow-hidden rounded-3xl border border-gray-200">
          <table class="w-full text-sm text-center">
            <thead class="bg-gray-100 text-gray-700">
              <tr>
                <th class="p-4">Mata Kuliah</th>
                <th class="p-4">Judul Tugas</th>
                <th class="p-4">Deadline</th>
                <th class="p-4">Status</th>
              </tr>
            </thead>

            <tbody class="divide-y divide-gray-100">
              <tr class="bg-white">
                <td class="p-4 font-medium">Pemrograman Web</td>
                <td class="p-4 text-gray-600">Laporan CRUD Laravel</td>
                <td class="p-4 text-gray-600">12 Feb 2026</td>
                <td class="p-4">
                  <span class="px-3 py-1 rounded-full bg-blue-100 text-blue-700 text-xs">
                    Aktif
                  </span>
                </td>
              </tr>

              <tr class="bg-white">
                <td class="p-4 font-medium">Basis Data</td>
                <td class="p-4 text-gray-600">Normalisasi Database</td>
                <td class="p-4 text-gray-600">15 Feb 2026</td>
                <td class="p-4">
                  <span class="px-3 py-1 rounded-full bg-blue-100 text-blue-700 text-xs">
                    Aktif
                  </span>
                </td>
              </tr>

              <tr class="bg-white blur-sm select-none">
                <td class="p-4">Sistem Informasi</td>
                <td class="p-4">Analisis Use Case</td>
                <td class="p-4">—</td>
                <td class="p-4">—</td>
              </tr>

              <tr class="bg-white blur-sm select-none">
                <td class="p-4">Statistika</td>
                <td class="p-4">Pengolahan Data</td>
                <td class="p-4">—</td>
                <td class="p-4">—</td>
              </tr>
            </tbody>
          </table>

          <div class="absolute inset-0 bg-white/80 backdrop-blur-sm flex flex-col items-center justify-center text-center px-6">
            <svg class="w-14 h-14 text-gray-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                d="M12 11c1.657 0 3 1.343 3 3v3H9v-3c0-1.657 1.343-3 3-3zm6-3V7a6 6 0 10-12 0v1" />
            </svg>

            <h3 class="text-2xl font-semibold text-gray-900 mb-2">
              Unlock Premium
            </h3>

            <p class="text-gray-500 max-w-md mb-6">
              Akses penuh semua daftar tugas, detail instruksi, file pendukung,
              dan update deadline secara real-time.
            </p>

            <a href="#"
              class="px-8 py-3 rounded-full bg-black text-white font-medium hover:bg-gray-900 transition">
              Upgrade ke Premium
            </a>
          </div>
        </div>
      </div>
    </section>

    <section id="quicklink" class="bg-white rounded-[40px] p-8">
      <div class="flex flex-col md:flex-row gap-12">
        <div class="w-full md:w-1/3">
          <h3 class="text-xl md:text-6xl font-semibold mb-4 text-gray-900">Quick Links</h3>
          <ul class="space-y-2">
            <li><a href="https://baak.gunadarma.ac.id/" target="_blank" class="md:text-4xl font-semibold text-gray-400 hover:text-black transition">BAAK Gunadarma</a></li>
            <li><a href="https://studentsite.gunadarma.ac.id/index.php/site/login" target="_blank" class="md:text-4xl font-semibold text-gray-400 hover:text-black transition">Studentsite</a></li>
            <li><a href="https://v-class.gunadarma.ac.id/login/index.php" target="_blank" class="md:text-4xl font-semibold text-gray-400 hover:text-black transition">V-Class</a></li>
            <li><a href="https://library.gunadarma.ac.id/" target="_blank" class="md:text-4xl font-semibold text-gray-400 hover:text-black transition">Perpustakaan Digital</a></li>
          </ul>
        </div>
        
        <div class="w-full md:w-2/3 relative">
          <div class="absolute inset-0 bg-gradient-to-br from-blue-50 via-purple-50 to-pink-50 rounded-3xl opacity-80"></div>
          
          <div class="relative h-full min-h-[300px] overflow-hidden rounded-3xl">
            <div class="absolute top-10 right-20 w-32 h-32 bg-blue-400 rounded-full opacity-20 animate-pulse"></div>
            
            <div class="absolute bottom-20 left-10 w-24 h-24 bg-purple-400 rounded-full opacity-30 animate-bounce" style="animation-duration: 3s;"></div>
            
            <div class="absolute top-1/2 left-1/3 w-20 h-20 bg-pink-400 rounded-lg opacity-25 rotate-12 transform hover:rotate-45 transition-transform duration-500"></div>
            
            <div class="absolute bottom-10 right-1/3 w-0 h-0 border-l-[40px] border-l-transparent border-r-[40px] border-r-transparent border-b-[70px] border-b-yellow-400 opacity-20"></div>
            
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
              <svg class="w-48 h-48 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"/>
              </svg>
            </div>
            
            <div class="absolute top-5 left-5 grid grid-cols-3 gap-2">
              <div class="w-2 h-2 bg-indigo-400 rounded-full opacity-40"></div>
              <div class="w-2 h-2 bg-indigo-400 rounded-full opacity-40"></div>
              <div class="w-2 h-2 bg-indigo-400 rounded-full opacity-40"></div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="bg-white rounded-[40px] my-[2px] overflow-hidden">
      <div class="marquee-wrapper py-5">
        <div class="marquee">
          <p class="font-roboto text-base font-medium whitespace-nowrap px-12">
            © 2026 Kelompok 7 – 3KA25 • Universitas Gunadarma • Sistem Informasi • Fakultas Ilmu Komputer dan Teknologi Informasi • All rights reserved •
          </p>
          <p class="font-roboto text-base font-medium whitespace-nowrap px-12">
            © 2026 Kelompok 7 – 3KA25 • Universitas Gunadarma • Sistem Informasi • Fakultas Ilmu Komputer dan Teknologi Informasi • All rights reserved •
          </p>
          <p class="font-roboto text-base font-medium whitespace-nowrap px-12">
            © 2026 Kelompok 7 – 3KA25 • Universitas Gunadarma • Sistem Informasi • Fakultas Ilmu Komputer dan Teknologi Informasi • All rights reserved •
          </p>
        </div>
      </div>
    </section>

    <section class="bg-white rounded-[40px]">
      <div class="w-full py-8">
        <div class="flex items-center justify-center gap-6">
          <div class="w-60 h-60 flex items-center justify-center">
            <img src="images/logo.png" alt="Logo" class="w-full h-full object-contain">
          </div>
          <span class="text-[15rem] font-bold leading-none">
            3KA25
          </span>
        </div>
      </div>
    </section>
  </main>

  <script>
    document.getElementById("menu-btn").addEventListener("click", () => {
      document.getElementById("menu").classList.toggle("hidden");
    });

    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener("click", function(e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute("href"));
        if (target) {
          target.scrollIntoView({ behavior: "smooth", block: "start" });
          document.getElementById("menu").classList.add("hidden");
        }
      });
    });
  </script>

</body>
</html>