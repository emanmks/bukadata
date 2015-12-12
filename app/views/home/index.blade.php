@extends('layouts/base')

@section('content')

<!-- Page Contents -->
<div class="pusher">
    <div class="ui inverted vertical masthead center aligned segment">

        <div class="ui container">
            <div class="ui large secondary inverted pointing menu">
                <a class="toc item">
                    <i class="sidebar icon"></i>
                </a>
            
                <a class="active item">Beranda</a>
                <a class="item">Organisasi</a>
                <a class="item">Dashboard</a>
                <a class="item">Kontributor</a>
                <div class="right item">
                    <a class="ui inverted button">Masuk</a>
                    <a class="ui inverted button">Daftar</a>
                </div>
          </div>
        </div>

        <div class="ui text container">
            <h1 class="ui inverted header">
                BukaData
            </h1>
            <h2>Berani Jujur Berani Terbuka.</h2>
            <div class="ui huge primary button">Bergabung <i class="right arrow icon"></i></div>
        </div>

    </div>

    <div class="ui vertical stripe quote segment">
        <div class="ui equal width stackable internally celled grid">
            <div class="center aligned row">
                <div class="column">
                    <h3>Keterbukaan Stakeholder</h3>
                    <p>
                        Membuka informasi stakeholder perusahaan-perusahaan yang selama ini sering menjadi bahan diskusi publik dan koneksi bisnis pejabat pemerintahan.
                    </p>
                </div>
                <div class="column">
                    <h3>Keterbukaan Transaksi</h3>
                    <p>
                        Melaporkan ke publik aliran dana uang negara yang merupakan manifestasi uang rakyat sebagai audit publik / pertanggung jawaban kepada publik.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="ui vertical stripe segment">
        <div class="ui text container">
            <h3 class="ui header">Apakah BukaData ini?</h3>
            <p>BukaData adalah gerakan untuk berani jujur dan terbuka. Alat bagi pejabat publik untuk membuktikan integritas kepada publik.</p>
            <a class="ui large button">Selengkapnya</a>

            <h3 class="ui header">Mengapa Harus Buka Data</h3>
            <p>Karena tidak adanya sumber informasi yang berisi fakta. Disaat media massa hanya berisi opini, prasangka & pengalihan isu. Buka Data hadir untuk . Buka Data akan mejadi sumber referensi valid karena data yang ada adalah klaim dari organisasi terkait.</p>
            <a class="ui large button">Selengkapnya</a>

            <h3 class="ui header">Manfaat BukaData</h3>
            <p>Data yang dikumpulkan berhak diakses oleh publik, sebagai bahan evaluasi bagi publik bahkan bagi pemerintah. Data yang ada dapat dijadikan bahan studi analisa transaksi korupsi, monitoring penyerapan anggaran, dll</p>
            <a class="ui large button">Selengkapnya</a>
        </div>
    </div>
</div>
@stop
