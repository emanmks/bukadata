<header class="main-header">

    <nav class="navbar navbar-static-top">

        <div class="container">

            <div class="navbar-header">
                <a href="{{ URL::to('') }}" class="navbar-brand"><b>BukaData</b></a>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                    <i class="fa fa-bars"></i>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="{{ URL::to('about') }}">About</a></li>
                    <li><a href="{{ URL::to('manfaat') }}">Manfaat</a></li>
                    <li><a href="{{ URL::to('partisipasi') }}">Partisipasi</a></li>
                    <li><a href="{{ URL::to('bergabung') }}">Bergabung</a></li>
                    <li><a href="{{ URL::to('dokumentasi-api') }}">Dokumentasi API</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dashboard <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ URL::to('publikasi/ranking-integritas') }}">Ranking Integritas</a></li>
                            <li><a href="{{ URL::to('publikasi/penyerapan-anggaran') }}">Penyerapan Anggaran</a></li>
                            <li><a href="{{ URL::to('publikasi/estimasi-pajak') }}">Estimasi Pajak</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

         </div><!-- /.container-fluid -->
    </nav>

</header>
