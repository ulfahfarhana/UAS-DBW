<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Pendaftaran - Bimbingan Belajar GROW</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
	</head>
	<body>
		<!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav">
            <div class="container px-5">
                <a class="navbar-brand fw-bold" href="index.html">Bimbingan Belajar GROW</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="bi-list"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                        <li class="nav-item"><a class="nav-link me-lg-3" href="index.html">Beranda</a></li>
                        <li class="nav-item"><a class="nav-link me-lg-3" href="classlist.html">Daftar Kelas</a></li>
                        <li class="nav-item"><a class="nav-link me-lg-3" href="#aboutus">Tentang Kami</a></li>
                        <li class="nav-item"><a class="nav-link me-lg-3" href="#callus">Hubungi Kami</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!--section form pendaftaran-->
        <section class="bg-white text-primary">
        	<h2 class="text-center font-alt mb-4">FORM PENDAFTARAN</h2>
        	<div class="form-row">
            <form action="simpan-siswa.php" method="POST">
				<div class="col-sm-7">
        			<label for="kode" class="form-label">Kode</label>
        			<input type="number" class="form-control" name="kode" id="namalengkap" placeholder="" required>
        		</div>
        		<div class="col-sm-7">
        			<label for="nama_lengkap" class="form-label">Nama Lengkap</label>
        			<input type="text" class="form-control" name="nama_lengkap" id="namalengkap" placeholder="" value="" required="">
        			<div class="invalid-feedback">nama diperlukan</div>
        		</div>
        		<div class="col-sm-7">
        			<label for="email" class="form-label">Email</label>
        			<input type="email" class="form-control" name="Email" id="email" placeholder="you@example.com">
        			<div class="invalid-feedback">email diperlukan</div>
        		</div>
        		<div class="col-sm-7">
        			<label for="nomor_telepon" class="form-label">Nomor Handphone</label>
        			<input type="text" class="form-control" name="nomor_telepon" id="phone" placeholder="" value="" required="">
        			<div class="invalid-feedback">nomor handphone diperlukan</div>
        		</div>
        		<div class="col-sm-7">
        			<label for="pilihan_kelas" class="form-label">Pilihan Kelas</label>
        			<select class="form-select" name="pilihan_kelas" id="pilihankelas" required="">
                		<option value="">--HARUS DIPILIH--</option>
                		<option value="SD Reguler">SD Reguler</option>
                		<option>SMP Reguler</option>
                		<option>SMA Reguler</option>
                		<option>Intensif PTN</option>
                		<option>OSK</option>
                		<option>OSN</option>
              		</select>
              		<div class="invalid-feedback">harus dipilih</div>
        		</div>
        		<div class="col-sm-7">
        			<label for="pilihan_hari" class="form-label">Pilihan Hari</label>
        			<select class="form-select" name="pilihan_hari" id="pilihanhari" required="">
                		<option value="">--HARUS DIPILIH--</option>
                		<option value="Senin-Selasa">Senin-Selasa</option>
                		<option>Rabu-Kamis</option>
                		<option>Jumat-Sabtu</option>
              		</select>
              		<div class="invalid-feedback">harus dipilih</div>
        		</div>
        		<div class="col-sm-7">
        			<label>Periode Tanggal</label>
                    <div class="input-group">
                        <input type="date" name="tanggal_mulai" id="tanggal_mulai"  
						class="form-control datetimepicker-input" autocomplete="off" />
                        <div class="input-group-append">
                            <span class="input-group-text">s/d</span>
                        </div>
                        <input type="date" name="tanggal_berakhir" id="tanggal_berakhir" class="form-control datetimepicker-input" data-toggle="datetimepicker" data-target="#enddate" autocomplete="off" />
                    </div>
                    <script src="js/custom.js"></script>
                    <script>
   						$(document).ready(function(){
      					setDateRangePicker("#startdate", "#enddate")
    					})
    				</script>
        		</div>
        		<button type="submit" class="btn btn-success">SUBMIT</button>
                </form>
        	</div>
        </section>
	</body>
</html>