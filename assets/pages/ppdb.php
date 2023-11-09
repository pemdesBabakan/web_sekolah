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
        <h3 class="judul-pages">Pendaftaran</h3>
        <div class="con-ppdb">
            <div class="box-ppdb">
                <form action="output.php" method="POST">
                    <fieldset class="myForm">
                        <legend>Form Pendaftaran Murid Baru</legend>
                        <fieldset class="item">            
                            <label>Asal Sekolah:</label>
                            <input type="text" name="smp" placeholder="SMP..." required/>
                            
                            <label>NISN:</label>
                            <input type="text" name="nisn" placeholder="NISN..." required/>
                          
                            <label>Nama:</label>
                            <input type="text" name="nama" placeholder="Nama Lengkap..." required/>
                            
                            <label>Tempat Lahir:</label>
                            <input type="text" name="tempat_lahir" placeholder="Tempat Lahir..." required/>
                            <label>Tanggal Lahir:</label><br>
                            <input type="date" name="tgl_lahir" required/>
                        </fieldset>
                        <fieldset class="item">  
                            <label>Jenis kelamin:</label><br>
                            <label><input type="radio" name="jenis_kelamin" value="Laki-laki" /> Laki-laki</label>
                            <label><input type="radio" name="jenis_kelamin" value="Perempuan" /> Perempuan</label><br>
                       
                            <label>Agama:</label>
                            <select name="agama" required>
                                <option>Pilih Agama</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                            </select>
                       
                            <label>Nama Orang Tua/Wali:</label>
                            <input type="text" name="ayah" placeholder="Nama Orang Tua/Wali..." required />
                       
                            <label>Kejuruan:</label>
                            <select name="kejuruan" required>
                                <option>Pilih Kejuruan</option>
                                <option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan</option>
                                <option value="Multimedia">Multimedia</option>
                                <option value="Bisnis Daring dan Pemasaran">Bisnis Daring dan Pemasaran</option>
                                <option value="Otomatisasi Tata Kelola Perkantoran">Otomatisasi Tata Kelola Perkantoran</option>
                                <option value="Akuntansi dan Keuangan Lembaga" >Akuntansi dan Keuangan Lembaga</option>
                           </select>
                           <label>No. Handphone:</label>
                            <input type="text" name="no_tlp" placeholder="No..." required />
                        </fieldset>  
                        <fieldset class="item">
                                <label>Alamat:</label>
                                <textarea name="alamat" placeholder="Alamat..." required></textarea>
                            
                                <input type="submit" name="submit" value="Daftar"/>
                            </p>
                        </fieldset>
                    </fieldset>
                </form>
            </div>
        </div>
    </section>

    <footer>
        <div class="foo">
            <small>Copyright &copy; 2022 - SMK AL-AQSYAR, Design By : <a href="../pages/team.html" id="team">Kelompok 1</a></small>
        </div>
    </footer>

<script src=""></script>
</body>
</html>