        <footer class="tm-footer">
            <div class="container-fluid">
                <div class="row">
                    @php $m = new App\Models\Home();@endphp
                    @php $ft = $m->index(); @endphp
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                        
                        <div class="tm-footer-content-box">
                            <h3 class="tm-gold-text tm-title tm-footer-content-box-title">Hola</h3>
                            <div class="tm-gray-bg">
                             <?php echo $ft->wording_footer_satu?>
                            </div>    
                        </div>
                                                
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                        <div class="tm-footer-content-box tm-footer-links-container">
                        
                            <h3 class="tm-gold-text tm-title tm-footer-content-box-title">Halo</h3>
                            <nav>
                                <ul class="nav">
                                   <?php echo $ft->wording_footer_dua?>
                                </ul>
                            </nav>

                        </div>
                        
                    </div>

                    <div class="clearfix hidden-lg-up"></div>

                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">

                        <div class="tm-footer-content-box">
                        
                            <h3 class="tm-gold-text tm-title tm-footer-content-box-title">Hallo</h3>
                           <?php echo $ft->wording_footer_tiga?>

                        </div>
                        
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">

                        <div class="tm-footer-content-box">
                        
                            <?php echo $ft->wording_footer_empat?>

                        </div>
                        
                    </div>


                </div>

                <div class="row">
                    <div class="col-xs-12 tm-copyright-col">
                        <p class="tm-copyright-text">Copyright 2016 Your Company Name</p>
                    </div>
                </div>
            </div>
        </footer>

        <!-- load JS files -->
        <script src="https://objectstorage.ap-sydney-1.oraclecloud.com/p/5Il4d0hojOyP71aKV9Ybg7idpTId4h8YBLUI-1IHpUDcRrCk2wRsz4SYaqHhLP3a/n/sdkn9cttvr6z/b/Annisa/o/js/jquery-1.11.3.min.js"></script>             <!-- jQuery (https://jquery.com/download/) -->
        <script src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script> <!-- Tether for Bootstrap, http://stackoverflow.com/questions/34567939/how-to-fix-the-error-error-bootstrap-tooltips-require-tether-http-github-h --> 
        <script src="https://objectstorage.ap-sydney-1.oraclecloud.com/p/5Il4d0hojOyP71aKV9Ybg7idpTId4h8YBLUI-1IHpUDcRrCk2wRsz4SYaqHhLP3a/n/sdkn9cttvr6z/b/Annisa/o//js/bootstrap.min.js"></script>                 <!-- Bootstrap (http://v4-alpha.getbootstrap.com/) -->
       
</body>
</html>