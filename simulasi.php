<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Karierpedia</title>
  <style>
    body {
      font-family: 'Arial', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #d3d3d3;
    }

    header {
      background-color: #6495ED;
      color: #fff;
      padding: 20px;
      text-align: center;
    }

    nav {
      background-color: #6495ED;
    }

    nav ul {
      list-style-type: none;
      padding: 0;
      margin: 0;
      display: flex;
      justify-content: center;
    }

    nav ul li {
      margin: 0 10px;
    }

    nav ul li a {
      display: block;
      color: white;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }

    nav ul li a:hover {
      background-color: #555;
    }

    section {
      background-color: #fff;
      padding: 40px;
      margin-bottom: 40px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      display: none; /* Hide sections by default */
    }

    .profile-container {
      display: flex;
      align-items: center;
    }

    .profile-foto {
      width: 100px;  /* Smaller size */
      height: 100px; /* Smaller size */
      border-radius: 50%;
      margin-right: 20px;
    }

    .profile-deskripsi p {
      margin: 5px 0;
    }

    .forum-container {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
    }

    .komunitas {
      flex: 1 1 calc(50% - 20px); /* Two columns with space between */
      background-color: #f9f9f9;
      padding: 20px;
      border: 1px solid #ddd;
      border-radius: 8px;
      text-align: center;
      cursor: pointer;
      transition: transform 0.3s, box-shadow 0.3s;
    }

    .komunitas:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 20px rgba(0,0,0,0.2);
    }

    .komunitas h3 {
      margin-top: 0;
    }

    .blog-container {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
    }

    .blog-post {
      flex: 1 1 calc(50% - 20px); /* Two columns with space between */
      background-color: #f9f9f9;
      padding: 20px;
      border: 1px solid #ddd;
      border-radius: 8px;
      text-align: left;
      cursor: pointer;
      transition: transform 0.3s, box-shadow 0.3s;
    }

    .blog-post:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 20px rgba(0,0,0,0.2);
    }

    .blog-post img {
      max-width: 100%;
      height: auto;
      border-radius: 8px;
    }

    .blog-post h3 {
      margin-top: 15px;
    }

    .blog-post p {
      margin: 10px 0;
    }

    .training-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-around;
    }

    .training-box {
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      width: 200px;
      height: 300px;
      margin: 10px;
      padding: 20px;
      background-color: #6495ED;
      color: white;
      text-align: center;
      border-radius: 10px;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .training-box:hover {
      background-color: #555;
    }

    .training-box img {
      width: 100%;
      height: auto;
      border-radius: 8px;
    }

.internship-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-around;
  margin: 20px 0;
}

.internship-box {
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  width: 250px;
  height: 350px;
  margin: 10px;
  padding: 20px;
  background-color: #6495ED;
  color: white;
  text-align: center;
  border-radius: 10px;
  cursor: pointer;
  transition: background-color 0.3s, transform 0.3s;
}

.internship-box:hover {
  background-color: #555;
  transform: scale(1.05);
}

.internship-box img {
  width: 100%;
  height: auto;
  border-radius: 8px;
}

.internship-box h3 {
  margin: 15px 0 10px 0;
  font-size: 18px;
}

.internship-box p {
  font-size: 14px;
  line-height: 1.5;
}

.job-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-around;
  margin: 20px 0;
}

.job-box {
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  width: 250px;
  margin: 10px;
  padding: 20px;
  background-color: #6495ED;
  color: white;
  text-align: left;
  border-radius: 10px;
  cursor: pointer;
  transition: background-color 0.3s, transform 0.3s;
}

.job-box:hover {
  background-color: #555;
  transform: scale(1.05);
}

.job-box h3 {
  margin: 15px 0 10px 0;
  font-size: 18px;
}

.job-box p {
  font-size: 14px;
  line-height: 1.5;
}

.search-container {
  display: flex;
  justify-content: center;
  margin: 20px 0;
}

#search-input {
  width: 300px;
  padding: 10px;
  border: 1px solid #333;
  border-radius: 5px 0 0 5px;
}

button {
  padding: 10px 20px;
  background-color: #333;
  color: white;
  border: none;
  border-radius: 0 5px 5px 0;
  cursor: pointer;
  transition: background-color 0.3s;
}

button:hover {
  background-color: #555;
}

.notification-container {
  display: flex;
  flex-direction: column;
  margin: 20px 0;
}

.notification-box {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 15px;
  margin: 10px 0;
  background-color: #e0f7fa;
  border-left: 5px solid #00838f;
  border-radius: 5px;
  transition: background-color 0.3s, border-left-color 0.3s;
}

.notification-box.unread {
  background-color: #ffffff;
  border-left-color: #f44336;
}

.notification-box p {
  margin: 0;
}

.notification-box span {
  font-size: 12px;
  color: #666;
}

button {
  padding: 10px 20px;
  background-color: #333;
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s;
}

button:hover {
  background-color: #555;
}

.history-table {
  width: 100%;
  border-collapse: collapse;
  margin: 20px 0;
  font-size: 18px;
  text-align: left;
}

.history-table thead tr {
  background-color: #333;
  color: white;
  text-align: left;
}

.history-table th, .history-table td {
  padding: 12px 15px;
  border: 1px solid #ddd;
}

.history-table tbody tr {
  background-color: #f9f9f9;
}

.history-table tbody tr:nth-of-type(even) {
  background-color: #f1f1f1;
}

.history-table tbody tr:hover {
  background-color: #f5f5f5;
}

.history-table th {
  background-color: #333;
  color: white;
}

    footer {
      background-color: #6495ED;
      color: #fff;
      text-align: center;
      padding: 5px;
      position: fixed;
      bottom: 0;
      width: 100%;
    }
  </style>
</head>
<body>

<!-- Header Section -->
<header>
  <h1>Welcome to Karierpedia</h1>
  <p class="slogan">Building Your Successful Career</p>
</header>

<!-- Navigation Section -->
<nav>
  <ul>
    <!-- Navigation Links (Vertical) -->
    <li><a href="#profile">Profile</a></li>
    <li><a href="#community">Community</a></li>
    <li><a href="#blog">Blog Carrier</a></li>
    <li><a href="#pelatihan">Training</a></li>
    <li><a href="#informasi">Internship</a></li>
    <li><a href="#pencarian">Job</a></li>
    <li><a href="#pengingat">Notification</a></li>
    <li><a href="#history">History</a></li>
  </ul>
</nav>

<!-- Profile Section -->
<section id="profile">
  <h2>Profile</h2>
  <div class="profile-container">
    <img src="khail.jpg" alt="Foto Profile" class="profile-foto">
    <div class="profile-deskripsi">
      <p>Nama: Khail Adnan</p>
      <p>Email: adnankhail@gmail.com</p>
      <p>Deskripsi: Saya adalah seorang fresh graduate dari Universitas Negeri Surabaya dengan gelar Sarjana Teknik Informatika. Saya memiliki ketertarikan yang besar pada pengembangan perangkat lunak dan kecerdasan buatan. Selama studi, saya aktif terlibat dalam berbagai proyek dan magang yang memberikan pengalaman praktis dalam pengembangan aplikasi web dan mobile. Saya bersemangat untuk memulai karir saya di industri teknologi dan siap untuk belajar serta berkontribusi dalam tim yang dinamis.</p>
    </div>
  </div>
</section>

<!-- Community Section -->
<section id="community">
  <h2>Community</h2>
  <p>Join the conversation in our forum. Discuss career tips, share experiences, and network with other professionals.</p>
  <div class="forum-container">
    <div class="komunitas" onclick="alert('Komunitas Pengembang Perangkat Lunak')">
      <h3>Komunitas Pengembang Perangkat Lunak</h3>
      <p>Bergabunglah dengan komunitas pengembang perangkat lunak untuk berbagi pengalaman, mendapatkan bantuan, dan berdiskusi tentang tren terbaru dalam pengembangan perangkat lunak.</p>
    </div>
    <div class="komunitas" onclick="alert('Komunitas Desainer Grafis')">
      <h3>Komunitas Desainer Grafis</h3>
      <p>Bergabunglah dengan komunitas desainer grafis untuk berbagi karya, mendapatkan umpan balik, dan berdiskusi tentang teknik desain terbaru.</p>
    </div>
    <div class="komunitas" onclick="alert('Komunitas Manajemen Proyek')">
      <h3>Komunitas Manajemen Proyek</h3>
      <p>Bergabunglah dengan komunitas manajemen proyek untuk berdiskusi tentang metode manajemen proyek, berbagi alat, dan tips untuk menjadi manajer proyek yang lebih baik.</p>
    </div>
    <div class="komunitas" onclick="alert('Komunitas Keamanan Siber')">
      <h3>Komunitas Keamanan Siber</h3>
      <p>Bergabunglah dengan komunitas keamanan siber untuk mempelajari praktik terbaik dalam melindungi informasi dan sistem, serta berbagi pengetahuan tentang ancaman terbaru.</p>
    </div>
  </div>
</section>

<!-- Blog Karir Section -->
<section id="blog">
<h2>Blog Carrier</h2>
  <div class="blog-container">
    <div class="blog-post" onclick="alert('Web Development Strategy')">
      <img src="blog1.png" alt="Berita 1">
      <h3>Web Development Strategy</h3>
      <p>
    Dalam era digital yang terus berkembang, memiliki strategi pengembangan web yang efektif sangat penting untuk keberhasilan bisnis. Strategi ini mencakup berbagai aspek, mulai dari perencanaan awal, desain yang responsif, hingga pengujian dan peluncuran. Penting untuk memastikan bahwa situs web tidak hanya menarik secara visual tetapi juga mudah digunakan dan diakses oleh pengguna dari berbagai perangkat. Pengembangan web modern juga harus memperhatikan kecepatan loading halaman, SEO (Search Engine Optimization), dan integrasi dengan media sosial untuk meningkatkan visibilitas dan keterlibatan pengguna. Dengan mengikuti praktik terbaik ini, bisnis dapat menciptakan pengalaman online yang unggul dan memaksimalkan potensi digital mereka. 
    <span id="more-content" style="display: none;">
      Langkah pertama dalam strategi pengembangan web adalah memahami tujuan bisnis dan kebutuhan audiens target. Ini membantu dalam menentukan fitur dan fungsionalitas yang diperlukan di situs web. Selanjutnya, desain harus dikerjakan dengan fokus pada UX/UI untuk memastikan pengalaman pengguna yang lancar dan intuitif. Pengembangan konten yang relevan dan berkualitas juga memainkan peran penting dalam menarik dan mempertahankan pengunjung. Setelah situs web selesai dibangun, pengujian yang menyeluruh harus dilakukan untuk menemukan dan memperbaiki bug atau masalah kinerja. Terakhir, pemeliharaan rutin dan pembaruan diperlukan untuk memastikan situs web tetap aman dan fungsional sesuai perkembangan teknologi dan tren pasar.
    </span>
  </p>
  <button id="read-more-btn">Read More</button>
    </div>
    <div class="blog-post" onclick="alert('Berita 2')">
      <img src="blog2.jpg" alt="Berita 2">
      <h3>Prospek Karir Lulusan Informatika</h3>
      <p>
      Di era digital ini, perkembangan teknologi dan informasi yang pesat memunculkan jenis-jenis pekerjaan baru yang bisa menjadi pilihan bagi para mahasiswa lulusan teknik informatika. Siapa yang mengira coba, bahwa sekarang saja kita sudah bisa masuk ke dalam dunia didalam dunia realita kita, seperti metaverse, VR, jaringan cloud yang bisa menyimpan data-data tanpa hardware, hingga AI seperti Alexa yang bisa mengunci pintu, menyalakan lampu, memberitahu dan mencarikan kita informasi yang diingin dalam hitungan detik begitu saja. Semua sudah serba terdigitalisasi. 
    <span id="more-content" style="display: none;">
    Oleh karena itu, tenaga kerja dari jurusan teknik informatika (TI) sangat dibutuhkan dalam era digital saat ini. Selain itu, karena peluang dan pasarnya memang sangat luas dan banyak dicari untuk perusahaan saat ini. Maka, tak heran juga sarjana teknik informatika ini memiliki beberapa prospek karir yang dibayar / digaji relatif tinggi. Nah, berikut 8 prospek kerja teknik informatika dan gajinya.
    </span>
  </p>
  <button id="read-more-btn">Read More</button>
    </div>
    <div class="blog-post" onclick="alert('Berita 3')">
      <img src="blog3.jpeg" alt="Berita 3">
      <h3>Web Designer</h3>
      <p>
      Web Designer adalah seseorang yang memiliki keahlian dalam merancang tampilan visual dan pengalaman pengguna sebuah website. Tugas seorang web designer meliputi merancang tata letak, memilih elemen desain yang tepat, dan mengimplementasikan desain ke dalam kode. Mereka fokus pada aspek estetika dan user experience agar website mudah digunakan oleh pengunjung. Selain kemampuan mendesain, web designer juga perlu memahami bahasa pemrograman seperti HTML dan CSS.
    <span id="more-content" style="display: none;">
    Web Designer adalah seseorang yang memiliki keahlian dalam merancang tampilan visual dan pengalaman pengguna sebuah website. Tugas seorang web designer meliputi merancang tata letak, memilih elemen desain yang tepat, dan mengimplementasikan desain ke dalam kode. Mereka fokus pada aspek estetika dan user experience agar website mudah digunakan oleh pengunjung. Selain kemampuan mendesain, web designer juga perlu memahami bahasa pemrograman seperti HTML dan CSS.
    </span>
  </p>
  <button id="read-more-btn">Read More</button>
    </div>
    <div class="blog-post" onclick="alert('Berita 3')">
      <h3>Already read the blogs.</h3>
  <button id="read-more-btn">More Content</button>
    </div>
  </div>
</section>

<!-- Training Section -->
<section id="pelatihan">
  <h2>Training</h2>
  <div class="training-container">
    <div class="training-box">
      <img src="training1.jpeg" alt="Course 1">
      <h3>Pelatihan Pengembangan Web</h3>
      <p>Pahami dasar-dasar pengembangan web dengan kursus ini.</p>
    </div>
    <div class="training-box">
      <img src="training2.jpg" alt="Course 2">
      <h3>Pelatihan Desain UI/UX</h3>
      <p>Belajar tentang prinsip-prinsip desain antarmuka pengguna dan pengalaman pengguna.</p>
    </div>
    <div class="training-box">
      <img src="training3.jpg" alt="Course 3">
      <h3>Pelatihan Analisis Data</h3>
      <p>Kembangkan keterampilan analisis data dengan alat dan teknik terbaru.</p>
    </div>
    <div class="training-box">
      <img src="training4.jpg" alt="Course 4">
      <h3>Pelatihan Manajemen Proyek</h3>
      <p>Pelajari cara mengelola proyek dengan efektif dan efisien.</p>
    </div>
  </div>
</section>

<!-- Internship Section -->
<section id="informasi">
  <h2>Internship</h2>
  <div class="internship-container">
    <div class="internship-box">
      <img src="internship1.jpeg" alt="Internship 1">
      <h3>Magang Pengembangan Web</h3>
      <p>Kesempatan untuk bekerja dengan tim pengembangan web profesional.</p>
    </div>
    <div class="internship-box">
      <img src="internship1.jpeg" alt="Internship 2">
      <h3>Magang Desain Grafis</h3>
      <p>Pengalaman praktis dalam desain grafis dan branding.</p>
    </div>
    <div class="internship-box">
      <img src="internship1.jpeg" alt="Internship 3">
      <h3>Magang Pemasaran Digital</h3>
      <p>Pelajari strategi pemasaran digital dari para ahli.</p>
    </div>
    <div class="internship-box">
      <img src="internship1.jpeg" alt="Internship 4">
      <h3>Magang Analisis Data</h3>
      <p>Kembangkan keterampilan analisis data di lingkungan profesional.</p>
    </div>
    <div class="internship-box">
      <img src="internship1.jpeg" alt="Internship 4">
      <h3>Magang Design UI/UX</h3>
      <p>Kembangkan keterampilan design UI/UX.</p>
    </div>
    <div class="internship-box">
      <img src="internship1.jpeg" alt="Internship 4">
      <h3>Magang Back-End Designer</h3>
      <p>Kembangkan keterampilan back-end design.</p>
    </div>
  </div>
</section>

<!-- Job Section -->
<section id="pencarian">
    <h2>Job</h2>
    <div class="search-container">
      <input type="text" id="search-input" placeholder="Cari pekerjaan...">
      <button onclick="searchJobs()">Cari</button>
    </div>
    <div class="job-container">
      <div class="job-box">
        <h3>Software Engineer</h3>
        <p>Perusahaan: ABC Tech</p>
        <p>Lokasi: Jakarta</p>
        <p>Deskripsi: Mengembangkan aplikasi berbasis web.</p>
      </div>
      <div class="job-box">
        <h3>Desainer Grafis</h3>
        <p>Perusahaan: Creative Studio</p>
        <p>Lokasi: Bandung</p>
        <p>Deskripsi: Membuat desain grafis untuk kampanye pemasaran.</p>
      </div>
      <div class="job-box">
        <h3>Manajer Proyek</h3>
        <p>Perusahaan: BuildIt</p>
        <p>Lokasi: Surabaya</p>
        <p>Deskripsi: Mengelola proyek konstruksi dan tim.</p>
      </div>
      <div class="job-box">
        <h3>Data Analyst</h3>
        <p>Perusahaan: Data Insights</p>
        <p>Lokasi: Yogyakarta</p>
        <p>Deskripsi: Menganalisis data untuk laporan bisnis.</p>
      </div>
      <div class="job-box">
        <h3>Data Analyst</h3>
        <p>Perusahaan: Data Company</p>
        <p>Lokasi: Bali</p>
        <p>Deskripsi: Menganalisis data keuangan.</p>
      </div>
      <div class="job-box">
        <h3>Web Developer</h3>
        <p>Perusahaan: Data Company</p>
        <p>Lokasi: Bali</p>
        <p>Deskripsi: Pengembangan website.</p>
      </div>
    </div>
  </section>

  <script>
    function searchJobs() {
      const input = document.getElementById('search-input').value.toLowerCase();
      const jobBoxes = document.querySelectorAll('.job-box');

      jobBoxes.forEach(box => {
        const title = box.querySelector('h3').textContent.toLowerCase();
        const company = box.querySelector('p:nth-of-type(1)').textContent.toLowerCase();
        const location = box.querySelector('p:nth-of-type(2)').textContent.toLowerCase();
        const description = box.querySelector('p:nth-of-type(3)').textContent.toLowerCase();

        if (title.includes(input) || company.includes(input) || location.includes(input) || description.includes(input)) {
          box.style.display = 'block';
        } else {
          box.style.display = 'none';
        }
      });
    }
  </script>

<!-- Notification Section -->
<section id="pengingat">
  <h2>Notification</h2>
  <div class="notification-container">
    <div class="notification-box unread">
      <p><strong>Lowongan Baru:</strong> Software Engineer di ABC Tech</p>
      <span>1 jam yang lalu</span>
    </div>
    <div class="notification-box unread">
      <p><strong>Pesan Baru:</strong> Ada balasan di forum karir Anda</p>
      <span>2 jam yang lalu</span>
    </div>
    <div class="notification-box">
      <p><strong>Pengingat:</strong> Pelatihan manajemen proyek besok</p>
      <span>1 hari yang lalu</span>
    </div>
    <div class="notification-box">
      <p><strong>Artikel Baru:</strong> Tips sukses dalam wawancara kerja</p>
      <span>2 hari yang lalu</span>
      </div>
  </div>
  <button onclick="markAllAsRead()">Tandai Semua Sebagai Sudah Dibaca</button>
</section>

<script>
  function markAllAsRead() {
    const notifications = document.querySelectorAll('.notification-box');
    notifications.forEach(notification => {
      notification.classList.remove('unread');
    });
  }
</script>

<!-- History Section -->
<section id="history">
  <h2>History</h2>
  <table class="history-table">
    <thead>
      <tr>
        <th>Nama Simulasi</th>
        <th>Tanggal</th>
        <th>Hasil</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Wawancara Kerja</td>
        <td>05 Mei 2024</td>
        <td>Lulus</td>
      </tr>
      <tr>
        <td>Tes Aptitude</td>
        <td>20 April 2024</td>
        <td>Skor: 85%</td>
      </tr>
      <tr>
        <td>Negosiasi Gaji</td>
        <td>15 Maret 2024</td>
        <td>Lulus</td>
      </tr>
      <tr>
        <td>Tes Manajemen Waktu</td>
        <td>10 Februari 2024</td>
        <td>Skor: 78%</td>
      </tr>
    </tbody>
  </table>
</section>

<!-- Footer Section -->
<footer>
  <p>&copy; 2024 Karierpedia. All rights reserved.</p>
</footer>

<script>
  // Ambil semua tautan navigasi
  const navLinks = document.querySelectorAll('nav ul li a');

  // Loop melalui setiap tautan navigasi
  navLinks.forEach(link => {
    link.addEventListener('click', function(e) {
      e.preventDefault(); // Mencegah perilaku default tautan

      // Ambil ID bagian yang sesuai dari atribut href
      const sectionId = this.getAttribute('href').slice(1); // Potong karakter '#' di depan

      // Ambil semua bagian yang ada
      const sections = document.querySelectorAll('section');

      // Sembunyikan semua bagian
      sections.forEach(section => {
        section.style.display = 'none';
      });

      // Tampilkan hanya bagian yang sesuai dengan ID
      const selectedSection = document.getElementById(sectionId);
      if (selectedSection) {
        selectedSection.style.display = 'block';
      }
    });
  });

  // Tampilkan profile secara default
  document.getElementById('profile').style.display = 'block';
</script>

</body>
</html>
