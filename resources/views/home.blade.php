@extends('layouts.header')
@section('content')

 <div class="tm-about-img-container" style="background-image: url('https://objectstorage.ap-sydney-1.oraclecloud.com/p/5Il4d0hojOyP71aKV9Ybg7idpTId4h8YBLUI-1IHpUDcRrCk2wRsz4SYaqHhLP3a/n/sdkn9cttvr6z/b/Annisa/o/img/tm-about-img1.jpg');">
             <img src="https://objectstorage.ap-sydney-1.oraclecloud.com/p/5Il4d0hojOyP71aKV9Ybg7idpTId4h8YBLUI-1IHpUDcRrCk2wRsz4SYaqHhLP3a/n/sdkn9cttvr6z/b/Annisa/o/img/tm-about-img1.jpg" alt="Image" class="hidden-lg-up img-fluid">
        </div>
        <section class="tm-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-xs-center">
                        <h2 class="tm-gold-text tm-title">{{$title}}</h2>
                        <p class="tm-subtitle">{{$message}}</p>

                    </div>
                </div>
                <div class="row">
                    @foreach($blog as $b)
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                        <div class="tm-content-box">
                            <img src="https://objectstorage.ap-sydney-1.oraclecloud.com/p/5Il4d0hojOyP71aKV9Ybg7idpTId4h8YBLUI-1IHpUDcRrCk2wRsz4SYaqHhLP3a/n/sdkn9cttvr6z/b/Annisa/o/img/tm-img-660x330-1.jpg" alt="Image" class="tm-margin-b-20 img-fluid">
                            <h4 class="tm-margin-b-20 tm-gold-text">{{$b->judul}}</h4>
                            <p class="tm-margin-b-20">{{$b->isi}}</p>
                            <a  class="tm-btn text-uppercase">Detail</a>    
                        </div>  

                    </div>
                    @endforeach
                </div> <!-- row -->

                <div class="row tm-margin-t-big">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                        <div class="tm-2-col-left">
                            
                            <h3 class="tm-gold-text tm-title">Pellentesque fermentum mauris et posuere</h3>
                            <p class="tm-margin-b-30">Vivamus accumsan blandit ligula. Sed lobortis efficitur sapien</p>
                            <img src="{{url('assets/img/tm-img-660x330-1.jpg')}}" alt="Image" class="tm-margin-b-40 img-fluid">
                            <p>
                                Donec tempor lobortis tortor, in feugiat massa facilisis sed. Ut dignissim viverra pretium. In eu justo maximus turpis feugiat finibus scelerisque nec eros. Cras nec lectus tempor nibh vestibulum eleifend et ac elit.
                            </p>
                            <p>Morbi vel pharetra massa, non iaculis tortor. Nulla porttitor tincidunt felis et feugiat. Vivamus fermentum ligula justo, sit amet blandit nisl volutpat id. Fusce sagittis ultricies felis, non luctus mauris lacinia quis.</p>
                            <p class="m-b-2"> Ut fringilla lacus ac tempor ullamcorper. Mauris iaculis placerat ex et mattis. Mauris id vulputate lectus, id fermentum sapien.
                            </p>
                            <a  class="tm-btn text-uppercase">Read More</a>

                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">

                        <div class="tm-2-col-right">

                            <div class="tm-2-rows-md-swap">
                                <div class="tm-overflow-auto row tm-2-rows-md-down-2">
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                        <h3 class="tm-gold-text tm-title">
                                            Categories
                                        </h3>
                                        <nav>
                                            <ul class="nav">
                                                @foreach($category as $c)
                                                <li><a href="" class="tm-text-link">{{$c->name}}</a></li>
                                                @endforeach
                                            </ul>
                                        </nav>    
                                    </div> <!-- col -->

                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 tm-xs-m-t">
                                        <h3 class="tm-gold-text tm-title">
                                            Useful Links
                                        </h3>
                                        <nav>
                                            <ul class="nav">
                                                <li><a href="" class="tm-text-link">Suspendisse sed dui nulla</a></li>
                                                <li><a href="" class="tm-text-link">Lorem ipsum dolor sit</a></li>
                                                <li><a href="" class="tm-text-link">Duiss nec purus et eros</a></li>
                                                <li><a href="#" class="tm-text-link">Etiam pulvinar et ligula sed</a></li>
                                                <li><a href="" class="tm-text-link">Proin egestas eu felis et iaculis</a></li>
                                            </ul>
                                        </nav>    
                                    </div> <!-- col -->
                                </div>                        
                                
                                <div class="row tm-2-rows-md-down-1 tm-margin-t-mid">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                        <h3 class="tm-gold-text tm-title tm-margin-b-30">Related Posts</h3>
                                        <div class="media tm-related-post">
                                          <div class="media-left media-middle">
                                            <a >
                                              <img class="media-object" src="https://objectstorage.ap-sydney-1.oraclecloud.com/p/5Il4d0hojOyP71aKV9Ybg7idpTId4h8YBLUI-1IHpUDcRrCk2wRsz4SYaqHhLP3a/n/sdkn9cttvr6z/b/Annisa/o/img/tm-img-240x120-1.jpg" alt="Generic placeholder image">
                                            </a>
                                          </div>
                                          <div class="media-body">
                                            <a href=""><h4 class="media-heading tm-gold-text tm-margin-b-15">Lorem ipsum dolor</h4></a>
                                            <p class="tm-small-font tm-media-description">Aenean cursus tellus mauris, quis consequat mauris dapibus id. Donec scelerisque porttitor pharetra.</p>
                                          </div>
                                        </div>
                                        <div class="media tm-related-post">
                                          <div class="media-left media-middle">
                                            <a >
                                              <img class="media-object" src="https://objectstorage.ap-sydney-1.oraclecloud.com/p/5Il4d0hojOyP71aKV9Ybg7idpTId4h8YBLUI-1IHpUDcRrCk2wRsz4SYaqHhLP3a/n/sdkn9cttvr6z/b/Annisa/o/img/tm-img-240x120-2.jpg" alt="Generic placeholder image">
                                            </a>
                                          </div>
                                          <div class="media-body">
                                            <a ><h4 class="media-heading tm-gold-text tm-margin-b-15">Lorem ipsum dolor</h4></a>
                                            <p class="tm-small-font tm-media-description">Aenean cursus tellus mauris, quis consequat mauris dapibus id. Donec scelerisque porttitor pharetra.</p>
                                          </div>
                                        </div>
                                        <div class="media tm-related-post">
                                          <div class="media-left media-middle">
                                            <a >
                                              <img class="media-object" src="https://objectstorage.ap-sydney-1.oraclecloud.com/p/5Il4d0hojOyP71aKV9Ybg7idpTId4h8YBLUI-1IHpUDcRrCk2wRsz4SYaqHhLP3a/n/sdkn9cttvr6z/b/Annisa/o/img/tm-img-240x120-3.jpg" alt="Generic placeholder image">
                                            </a>
                                          </div>
                                          <div class="media-body">
                                            <a ><h4 class="media-heading tm-gold-text tm-margin-b-15">Lorem ipsum dolor</h4></a>
                                            <p class="tm-small-font tm-media-description">Aenean cursus tellus mauris, quis consequat mauris dapibus id. Donec scelerisque porttitor pharetra.</p>
                                          </div>
                                        </div>
                                    </div>
                                </div>    
                            </div>

                        </div>
                        
                    </div>
                </div> <!-- row -->

            </div>
        </section>
        @endsection