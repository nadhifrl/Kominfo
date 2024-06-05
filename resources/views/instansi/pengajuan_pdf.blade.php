<html>
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
	<title>Pengajuan Domain Dan Hosting</title>
	<script src =”https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js”></script>
	<link rel =”stylesheet”href=”https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css”/>
	<script src =”https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js”></script>
</head>
<body>
<style type="text/css">
   .satu {
   font-size: 18px;
   }
   body {
        height: 972px;
        width: 692px;
        /* to centre page on screen*/
        margin-left: auto;
        margin-right: auto;
    }
</style>
<div class="container">
				<div class="card-header bg-light" align="center">
                    <img src="coba/assets/img/kop.png"/>
                </div>
                <div class="card-body">
                    <form>
                    <h2 align="center" style="font-family:times"><b>Formulir Permohonan Domain dan Hosting</b></h2>
                    <br>
                    <h3 style="font-family:times"><b>Kepada</b></h3>
                    <h4 style="font-family:times"><b>Yth. Kepala Dinas Komunikasi dan Informatika</b></h4>
                    <h4 style="font-family:times"><b>Kabupaten Jember</b></h4>
                    <h3 style="font-family:times">Dengan ini mengajukan permohonan layanan domain dan hosting pada Data Center Diskominfo dengan data sebagai berikut: </h4>
                            <p class= "satu" style = "font-family:times" align="justivy">Nama Dinas	: {{$pengajuan->nama_dinas}} </p>
                            <p class= "satu" style = "font-family:times" align="justivy">Alamat		: {{$pengajuan->alamat}} </p>
                        <h3 style="font-family:times"><b>Penanggung Jawab Administratif (Pejabat di Dinas/Intansi)</b></h3>
                            <p class= "satu" style = "font-family:times">Nama				: {{$pengajuan->nama_penanggung}} </p>
                            <p class= "satu" style = "font-family:times">NIP/NIK			: {{$pengajuan->nip}} </p>
                            <p class= "satu" style = "font-family:times" align="justivy">Pangkat/Golongan	: {{$pengajuan->pangkat}} </p>
                            <p class= "satu" style = "font-family:times">No Telepon			: {{$pengajuan->notelepon}} </p>
                        <h3 style="font-family:times"><b>Penanggung Jawab Teknis</b></h3>
                            <p class= "satu" style = "font-family:times">Nama		: {{$pengajuan->nama_teknis}} </p>
                            <p class= "satu" style = "font-family:times">No Telepon	: {{$pengajuan->notelepon_teknis}} </p>
                        <h3 style="font-family:times"><b>Data Aplikasi Web</b></h3>
                            <p class= "satu" style = "font-family:times" align="justivy">Nama Aplikasi			: {{$pengajuan->nama_aplikasi}} </p>
                            <p class= "satu" style = "font-family:times">Usulan Nama sub-domain	: {{$pengajuan->sub_domain}}.jember.go.id</p>
                            <p class= "satu" style = "font-family:times" align="justivy">Alamat IP **)		: {{$pengajuan->ip}} </p>
                            <p class= "satu" style = "font-family:times" align="justivy">Fungsi Aplikasi		: {{$pengajuan->fungsi_app}} </p>
                    </form>
				</div>
         </div>
    </div>
</div>
</body>
</html>