<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMK AL-AqSyar</title>
    <link rel="shortcut icon" href="../img/logo/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body>
    <!-- Medsos -->
    <div class="medsos">
        <div class="container">
            <ul>
                <li><a class="icon" href="#"><i class="fa-brands fa-facebook"></i></a></li>
                <li><a class="icon" href="#"><i class="fa-brands fa-instagram"></i></a></li>
                <li><a class="icon" href="#"><i class="fa-brands fa-youtube"></i></a></li>
            </ul>
        </div>
    </div>
    <header>
        <div class="navigasi">
        <input type="checkbox" id="check">
            <label for="check" class="btn-bar">
                <i class="fa-solid fa-bars"></i>
            </label>
            <div class="logo">
                <a href="../../index.html"><img src="../img/logo/logo.png"></a>
            </div>
            <din class="nav-links">
                <ul>
                    <li>
                        <a class="nav-link " href="../../index.html">Beranda</a>
                    </li>
                    <li>
                        <a class="nav-link " href="../pages/profil.html">Profil Sekolah</a>
                    </li>
                    <li>
                        <a class="nav-link" href="../pages/kejuruan.html">Kejuruan</a>
                    </li>
                    <li>
                        <a class="nav-link " href="../pages/gallery.html">Gallery</a>
                    </li>
                    <li>
                        <a class="nav-link active" href="../pages/ppdb.php">PPDB</a>
                    </li>
                    <li>
                        <a class="nav-link " href="../pages/kontak.html">Kontak</a>
                    </li>
                </ul>
            </din>
        </div>
    </header>

    <!--label-->
    <section class="label">
        <div class="con-label">
            <p class="line">Beranda > PPDB</p>
        </div>
    </section>
    <!-- Info PPDB -->
    <section class="ppdb bg-pages">
        <div class="con-ppdb">
            <div class="box-ppdb " id="print">
                <h3 class="judul-pages">SMK AL-AQSYAR</h3>
                <table border="0" cellpadding="10px" cellspacing="0">
                    <!-- memanggil Inputan form -->
                    <?php if(isset($_POST['submit'])) :
                        $smp = $_POST['smp'];
                        $nisn  = $_POST['nisn'];
                        $nama   = $_POST['nama'];
                        $tempat_lahir = $_POST['tempat_lahir'];
                        $tgl_lahir = $_POST['tgl_lahir'];
                        $jenis_kelamin = $_POST['jenis_kelamin'];
                        $agama = $_POST['agama'];
                        $ayah = $_POST['ayah'];
                        $kejuruan = $_POST['kejuruan'];
                        $no_tlp = $_POST['no_tlp'];
                        $alamat = $_POST['alamat'];
                    ?>
                    <tr >
                        <th id="judul" width="50%" colspan="2">PENDAFTARAN</th>
                        <th id="judul" width="50%" colspan="2">TAHUN 2022</th>
                    </tr>
                    <tr>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td>NO PENDAFTARAN</td>
                        <td>: 00898796</td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td>NISN</td>
                        <td>: <?= $nisn; ?></td>
                        <td>Jenis Kelamin</td>
                        <td>: <?= $jenis_kelamin; ?></td>
                        
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>: <?= $nama; ?></td>
                        <td>Agama</td>
                        <td>: <?= $agama; ?></td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>: <?= $tempat_lahir .', '. $tgl_lahir; ?></td>
                        <td>Kejuruan</td>
                        <td>: <?= $kejuruan; ?></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>: <?= $alamat; ?></td>
                        <td>No. Handphone</td>
                        <td>: <?= $no_tlp; ?></td>
                    </tr>
                    <tr>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td rowspan="8" class="td-ico"><i class="ico-ppdb fa-solid fa-user"></i></td>
                        <td>Bogor, <?php echo date('d F Y', strtotime('now')); ?></td>
                        <td> </td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td>Orang Tua/WALI</td>
                        <td> </td>
                        <td>Pengesah</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td> </td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td> </td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td> </td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td> </td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td><?= $ayah; ?></td>
                        <td> </td>
                        <td>..................</td>
                    </tr>
                    <tr>
                        <td> </td>
                        <td>**Panitia**</td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                    </tr>
                    
                    <tr>
                        <td colspan="4">Untuk selanjutnya mohon melakukan transfer uang Formulir sebesar Rp. 16x,xxx, melalui nomor rekening VA
berikut 8883xxxxxxxx A.n. <?= $nama; ?> ke Bank Jabar Banten Syariah (BJB SYariah)</td>
                    </tr>
                    <?php endif ?>
                </table>
            </div>
        </div>
    </section>

    <footer>
        <div class="foo">
            <small>Copyright &copy; 2022 - SMK AL-AQSYAR, Design By : <a href="../pages/team.html" id="team">Kelompok 1</a></small>
        </div>
    </footer>
</body>
</html>