<nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="background-color:white;">
    <div class="container">

        <!-- logo&header -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
                <!--<img class="img-circle" src="<?php // echo BRAND;     ?>" style="height: 30px;" alt="justease.id">-->
                <img src="<?php echo BRAND; ?>" style="height: 30px;" alt="justease.id">
            </a>
        </div>

        <!-- navbar items -->
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-left">
                <li><a href="#">Blog</a></li>

                <!-- dropdown menus -->
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Support <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Untuk klien</a></li>
                        <li><a href="#">Untuk lawyer</a></li>
                    </ul>
                </li>
            </ul>	
            <ul class="nav navbar-nav navbar-right">	
                <!--                <button type="button" class="btn btn-default button-1 navbar-btn"><a href="#">Buat campaign</a></button>
                                <button type="button" class="btn btn-default button-2 navbar-btn"><a href="#">Donasi</a></button>-->
                <!--<button type="button" style="visibility: hidden;"><a href="#">Donasi</a></button>-->
                <button type="button" class="btn btn-default button-1 navbar-btn"><a href="#">Masuk</a></button>	
            </ul>
        </div>
    </div>
</nav>