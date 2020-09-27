<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Covid - 19</title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style.css">
</head>

<body>
    <header>

        <nav>
            <li><a href="#" class="nav-link">Beranda</a></li>
            <li><a href="#sebaran" class="nav-link">Sebaran</a></li>
            <li><a href="#edukasi" class="nav-link">Edukasi</a></li>
            <li><a href="#kontak" class="nav-link">Kontak</a></li>
        </nav>
    </header>
    <section class="banner-area">
        <div class="banner-img"></div>
        <img src="" alt="" class="banner-img">
        <div class="banner-text">
            <h1>Covid-19</h1>
            <p>COVID-19 adalah penyakit menular yang disebabkan oleh jenis coronavirus yang baru ditemukan. Virus baru dan penyakit yang disebabkannya ini tidak dikenal sebelum mulainya wabah di Wuhan, Tiongkok, bulan Desember 2019. COVID-19 ini sekarang menjadi sebuah pandemi yang terjadi di banyak negara di seluruh dunia.</p>
        </div>
    </section>
    <section class="statistik-area" id="sebaran">
        <h1>Kasus Covid-19 di Indonesia</h1>
        <div class="kasus-statistik">
            <div class="kotak positif">
                <h3>Positif</h3>
                <h3><?= $data['ks']['positif']; ?></h3>
            </div>
            <div class="kotak sembuh">
                <h3>Sembuh</h3>
                <h3><?= $data['ks']['sembuh']; ?></h3>
            </div>
            <div class="kotak meninggal">
                <h3>Meninggal</h3>
                <h3><?= $data['ks']['meninggal']; ?></h3>
            </div>
        </div>
        <h1 style="margin-top: 60px;" id="urut">Berdasarkan Provinsi di Indonesia</h1>

        <div class="baris-select">

            <form action="#urut" method="POST">

                <div class="urutkan">
                    <label for="urutkan">Urutkan:</label>
                    <select name="urutkan" id="urutkan">
                        <option value="1">provinsi a - z</option>
                        <option value="2">provinsi z - a</option>
                        <option value="3">positif dari kecil</option>
                        <option value="4">positif dari besar</option>
                        <option value="5">sembuh dari kecil</option>
                        <option value="6">sembuh dari besar</option>
                        <option value="7">meninggal dari kecil</option>
                        <option value="8">meninggal dari besar</option>
                    </select>
                    <input type="submit" name="submit" value="Submit" />
                </div>
            </form>

            <form action="#urut" method="POST">

                <div class="urutkan">
                    <label for="cari">Cari berdasarkan:</label>
                    <select name="cari" id="cari">
                        <option value="1">jumlah positif di atas rata - rata</option>
                        <option value="2">jumlah positif di bawah rata - rata</option>
                        <option value="3">jumlah sembuh di atas rata - rata</option>
                        <option value="4">jumlah sembuh di bawah rata - rata</option>
                        <option value="5">jumlah meninggal di atas rata - rata</option>
                        <option value="6">jumlah meninggal di bawah rata - rata</option>
                    </select>
                    <input type="submit" name="submit1" value="Submit" />
                </div>
            </form>
        </div>

        <div class="kolom">
            <div class="baris judul">
                <div class="sub">Provinsi</div>
                <div class="sub">Positif</div>
                <div class="sub">Sembuh</div>
                <div class="sub">Meninggal</div>
            </div>
            <?php foreach ($data['mhs'] as $mhs) : ?>
                <div class="baris data">
                    <div class="sub"><?= $mhs['nama_provinsi']; ?></div>
                    <div class="sub"><?= $mhs['jml_positif']; ?></div>
                    <div class="sub"><?= $mhs['jml_sembuh']; ?></div>
                    <div class="sub"><?= $mhs['jml_meninggal']; ?></div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>


    <section class="edukasi-area" id="edukasi">
        <h1>Edukasi Pencegahan Covid-19</h1>
        <div class="edukasi-img"></div>
        <div class="edukasi-kolom">
            <div class="edukasi-baris">
                <img src="<?= BASEURL; ?>/img/wash-your-hands.png" alt="" class="img-sub">
                <div class="img-sub-text">
                    <p>Cuci tangan dengan sabun dan air mengalir selama minimal 20 detik atau dengan hand sanitizer yang mengandung alkohol, terutama sebelum dan sesudah bersin, batuk, atau makan, juga sehabis dari toilet</p>
                </div>
            </div>
            <div class="edukasi-baris">
                <img src="<?= BASEURL; ?>/img/cough.png" alt="" class="img-sub">
                <div class="img-sub-text">
                    <p>Saat batuk atau bersin, tutup mulut dan hidung dengan tisu atau tangan bagian dalam, lalu segera buang tisu yang sudah digunakan ke tempat sampah</p>
                </div>
            </div>
            <div class="edukasi-baris">
                <img src="<?= BASEURL; ?>/img/prohibited.png" alt="" class="img-sub">
                <div class="img-sub-text">
                    <p>Hindari kontak atau berkomunikasi jarak dekat dengan penderita flu atau batuk</p>
                </div>
            </div>
            <div class="edukasi-baris">
                <img src="<?= BASEURL; ?>/img/doctor.png" alt="" class="img-sub" style="background-size: cover">
                <div class="img-sub-text">
                    <p>Jika anda mengalami demam, batuk atau sesak napas segera menghubungi fasilitas kesehatan terdekat</p>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer-area">
        <div class="kontak" id="kontak">
            <p>Layanan Telepon Darurat COVID - 19</p>
            <p style="font-size: 10pt">Kemenkes RI (Emerging Operation Center)</p>
            <div class="nomor">
                <div class="nomor-kotak">
                    <p>021 521 0411</p>
                </div>
                <div class="nomor-kotak">
                    <p>0812 1212 3119</p>
                </div>
            </div>
        </div>

    </footer>

</body>

</html>