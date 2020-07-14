<ul class="sidebar-menu" id="nav-accordion">
    <li>
        <a <?php if($page == 'home'){echo 'class="active"'; } ?> href="<?=site_url()?>">
        <i class="fa fa-dashboard"></i>
        <span>Home</span>
        </a>
    </li>
    <li class="sub-menu">
        <a href="javascript:;" <?php if($page == 'hitung' || $page == 'mengurutkan' || $page == 'perkalian' || $page == 'hitung_campuran' || $page == 'pembulatan'){echo 'class="active"'; } ?>>
            <i class="fa fa-book"></i>
            <span>Bilangan Cacah</span>
        </a>
        <ul class="sub">
            <li <?php if($page == 'hitung'){echo 'class="active"'; } ?>><a href="<?=site_url('home/hitung')?>">Operasi Hitung</a></li>
            <li <?php if($page == 'mengurutkan'){echo 'class="active"'; } ?>><a href="<?=site_url('home/mengurutkan')?>">Mengurutkan Bilangan</a></li>
            <li <?php if($page == 'perkalian'){echo 'class="active"'; } ?>><a href="<?=site_url('home/perkalian')?>">Operasi Perkalian dan Pembagian</a></li>
            <li <?php if($page == 'hitung_campuran'){echo 'class="active"'; } ?>><a href="<?=site_url('home/hitung_campuran')?>">Operasi Hitung Campuran</a></li>
            <li <?php if($page == 'pembulatan'){echo 'class="active"'; } ?>><a href="<?=site_url('home/pembulatan')?>">Penaksiran dan Pembulatan</a></li>
        </ul>
    </li>
    <li>
        <a href="<?=site_url('home/faktor')?>" <?php if($page == 'faktor'){echo 'class="active"'; } ?>>
            <i class="fa fa-book"></i>
            <span>Faktor dan Kelipatan</span>
        </a>
    </li>
    <li>
        <a href="<?=site_url('home/pengukuran')?>" <?php if($page == 'pengukuran'){echo 'class="active"'; } ?>>
            <i class="fa fa-book"></i>
            <span>Pengukuran</span>
        </a>
    </li>
    <li>
        <a href="<?=site_url('home/bangun_datar')?>" <?php if($page == 'bangun_datar'){echo 'class="active"'; } ?>>
            <i class="fa fa-book"></i>
            <span>Bangun Datar</span>
        </a>
    </li>
    <li>
        <a href="<?=site_url('home/bil_bulat')?>" <?php if($page == 'bil_bulat'){echo 'class="active"'; } ?>>
            <i class="fa fa-book"></i>
            <span>Bilangan Bulat</span>
        </a>
    </li>
    <li>
        <a href="<?=site_url('home/pecahan')?>" <?php if($page == 'pecahan'){echo 'class="active"'; } ?>>
            <i class="fa fa-book"></i>
            <span>Pecahan</span>
        </a>
    </li>
    <li>
        <a href="<?=site_url('home/bil_romawi')?>" <?php if($page == 'bil_romawi'){echo 'class="active"'; } ?>>
            <i class="fa fa-book"></i>
            <span>Bilangan Romawi</span>
        </a>
    </li>
    <li>
        <a href="<?=site_url('home/bangun_ruang')?>" <?php if($page == 'bangun_ruang'){echo 'class="active"'; } ?>>
            <i class="fa fa-book"></i>
            <span>Bangun Ruang dan Datar</span>
        </a>
    </li>
</ul>