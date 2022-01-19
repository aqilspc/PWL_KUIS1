@extends('layouts.header')
@section('content')
 <div class="tm-about-img-container" style="background-image: url('https://objectstorage.ap-sydney-1.oraclecloud.com/p/5Il4d0hojOyP71aKV9Ybg7idpTId4h8YBLUI-1IHpUDcRrCk2wRsz4SYaqHhLP3a/n/sdkn9cttvr6z/b/Annisa/o/img/tm-about-img1.jpg');">
            
        </div>
        <section class="tm-section">
            <div class="container-fluid">
                <div class="row tm-2-rows-sm-swap">
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 col-xl-3 tm-2-rows-sm-down-2">
                        
                        <h3 class="tm-gold-text">Sidebar Links</h3>
                        
                        <nav>
                            <ul class="nav">
                                <li><a href="#" class="tm-text-link">Lorem ipsum dolor sit</a></li>
                                <li><a href="#" class="tm-text-link">Tincidunt non faucibus placerat</a></li>
                                <li><a href="#" class="tm-text-link">Vestibulum tempor ac lectus</a></li>
                                <li><a href="#" class="tm-text-link">Fusce non turpis euismod</a></li>
                                <li><a href="#" class="tm-text-link">Nam in augue consectetur</a></li>
                                <li><a href="#" class="tm-text-link">Text Link Color #006699</a></li>
                            </ul>
                        </nav>   

                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9 col-xl-9 tm-2-rows-sm-down-1">
                        <h3 class="tm-gold-text">{{$title}}s</h3>
                        <p>{{$message}}</p>
                      <?php echo $data->wording_about_satu?>
                    </div>
                </div>
                
                <div class="row tm-margin-t-mid">
                    <div class="col-xs-12">
                      <?php echo $data->wording_about_dua?>
                    </div>
                </div>

                <div class="row tm-margin-t-mid">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 tm-sm-m-b">
                      <?php echo $data->wording_about_tiga?>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                       <?php echo  $data->wording_about_empat?>
                    </div>

                </div>


                <div class="row tm-margin-t-mid">
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3">

                        <div class="tm-content-box">
                            <img src="img/tm-img-310x180-1.jpg" alt="Image" class="tm-margin-b-30 img-fluid">
                            <h4 class="tm-margin-b-20 tm-gold-text">Lorem ipsum dolor #1</h4>
                            <p class="tm-margin-b-20">Aenean cursus tellus mauris, quis
                            consequat mauris dapibus id. Donec
                            scelerisque porttitor pharetra</p>
                            <a href="#" class="tm-btn text-uppercase">Detail</a>    
                        </div>  

                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3">

                        <div class="tm-content-box">
                            <img src="img/tm-img-310x180-2.jpg" alt="Image" class="tm-margin-b-30 img-fluid">
                            <h4 class="tm-margin-b-20 tm-gold-text">Lorem ipsum dolor #2</h4>
                            <p class="tm-margin-b-20">Aenean cursus tellus mauris, quis
                            consequat mauris dapibus id. Donec
                            scelerisque porttitor pharetra</p>
                            <a href="#" class="tm-btn text-uppercase">Read More</a>    
                        </div>  

                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3">

                        <div class="tm-content-box">
                            <img src="img/tm-img-310x180-3.jpg" alt="Image" class="tm-margin-b-30 img-fluid">
                            <h4 class="tm-margin-b-20 tm-gold-text">Lorem ipsum dolor #3</h4>
                            <p class="tm-margin-b-20">Aenean cursus tellus mauris, quis
                            consequat mauris dapibus id. Donec
                            scelerisque porttitor pharetra</p>
                            <a href="#" class="tm-btn text-uppercase">Detail</a>    
                        </div>  

                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3">

                        <div class="tm-content-box tm-margin-b-30">
                            <a href="#" class="tm-text-link"><h4 class="tm-margin-b-20 tm-thin-font">Duis sit amet tristique #1</h4></a>
                            <p class="tm-margin-b-30">Vestibulum arcu erat, lobortis sit amet tellus ut, semper tristique nibh. Nunc in molestie elit.</p><hr>
                        </div>
                        <div class="tm-content-box">
                            <a href="#" class="tm-text-link"><h4 class="tm-margin-b-20 tm-thin-font">Duis sit amet tristique #2</h4></a>
                            <p>Vestibulum arcu erat, lobortis sit amet tellus ut, semper tristique nibh. Nunc in molestie elit.</p>
                        </div>  

                    </div>
                </div> <!-- row -->

            </div>
        </section>
@endsection