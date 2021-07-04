@extends('part.main')


@section('content')


<div class="wrapper_centering">
    <div class="container_centering">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-6 col-lg-6 d-flex align-items-center">
                    <div class="main_title_1">
                        <h3><img src="{{env('APP_URL')}}img/main_icon_1.svg" width="80" height="80" alt=""> Festival Aspirasi</h3>
                        <p>Festivalaspirasi.com adalah platform yang dapat digunakan oleh masyarakat Kota Bandung untuk menyampaikan aspirasi, keluhan, kritik, opini, dan saran terkait jalannya sistem pemerintahan Kota Bandung</p>
                        <p><em>- The Team</em></p>
                    </div>
                </div>
                <!-- /col -->
                <div class="col-xl-5 col-lg-5">
                    <div id="wizard_container">
                        <div id="top-wizard">
                            <div id="progressbar"></div>
                        </div>
                        <!-- /top-wizard -->
                        <form id="wrapped" method="POST" autocomplete="off">
                            <input id="website" name="website" type="text" value="">
                            <!-- Leave for security protection, read docs for details -->
                            <div id="middle-wizard">

                                <div class="step">
                                    <h3 class="main_question"><strong>Sampaikan Aspirasimu!</strong>Kategori</h3>
                                    <div class="review_block_smiles">
                                        <div class="row">
                                            <div class="col-6">
                                                <a href="/komisi-a/list">
                                                    <img src="{{env('APP_URL')}}img/komisi-a.png" class="img-fluid"/>
                                                </a>
                                            </div>
                                            <div class="col-6 ">
                                                <a href="/komisi-b/list">
                                                    <img src="{{env('APP_URL')}}img/komisi-b.png" class="img-fluid"/>
                                                </a>
                                            </div>
                                            <div class="col-6 ">
                                                <a href="/komisi-c/list">
                                                    <img src="{{env('APP_URL')}}img/komisi-c.png" class="img-fluid"/>
                                                </a>
                                            </div>
                                            <div class="col-6 ">
                                                <a href="/komisi-d/list">
                                                    <img src="{{env('APP_URL')}}img/komisi-d.png" class="img-fluid"/>
                                                </a>
                                            </div>
                                            <!-- <div class="col-6 offset-3">
                                                <img src="../img/ctg_c.png" class="img-fluid"/>
                                            </div> -->
                                        </div>
                                    </div>
                         
                                </div>
                                <!-- /step 1-->

  
                                <!-- /step 5-->

                            </div>
                            <!-- /middle-wizard -->

                            <!-- /bottom-wizard -->

                        </form>
                    </div>
                    <!-- /Wizard container -->
                </div>
                <!-- /col -->
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container_centering -->
    @include('part.footer')
    <!-- /footer -->
</div>


@endsection