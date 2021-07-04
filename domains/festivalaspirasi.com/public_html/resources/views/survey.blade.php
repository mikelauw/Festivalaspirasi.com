@extends('part.main')


@section('content')



@if( request()->is('komisi-a/*') )
    @php 
        $ctg = 'Hukum & Pemerintahan';
    @endphp
@elseif( request()->is('komisi-b/*') )
    @php
        $ctg = 'Perekonomian & Keuangan Daerah';
    @endphp
@elseif( request()->is('komisi-c/*') )
    @php
        $ctg = 'Pembangunan';
    @endphp
@elseif( request()->is('komisi-d/*') )
    @php
        $ctg = 'Kesejahteraan Rakyat';
    @endphp
@endif

<div class="wrapper_centering">
    <div class="container_centering">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-5 col-lg-5 d-flex align-items-center">
                    <div class="main_title_1">
                        <h3><img src="{{env('APP_URL')}}img/main_icon_1.svg" width="60" height="60" alt=""> {{$ctg}}</h3>
                        <p id="title_tema"></p>
                        <p><em>- Festival Aspirasi</em></p>
                        <br/>
                        <span class="back_arrow"><i class="fa fa-arrow-circle-left"></i> <a href="{{ url()->previous() }}">Back</a></span>
                    </div>
                </div>
                
                <div class="col-xl-6 col-lg-6" style="margin-top:30px">
                    <div id="wizard_container">
                        <div id="top-wizard">
                            <div id="progressbar"></div>
                        </div>
                        <form id="wrapped" autocomplete="off">
                            <input id="website" name="website" type="text" value="">
                            <!-- Leave for security protection, read docs for details -->
                            <div id="middle-wizard">
                                <div id="list_data"></div>
                            </div>

                            <div id="bottom-wizard">
                                <button type="button" name="backward" class="backward">Prev</button>
                                <button type="button" name="forward" class="forward">Next</button>
                                <button id="add_voters" name="process" class="submit">Submit</button>
                                
                            </div>
                            <!-- /bottom-wizard -->

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /container_centering -->
    @include('part.footer')
    <!-- /footer -->
</div>


<div id="last_form" class="submit step hide">
    <h3 class="main_question" style="font-size:24px !important">Informasi User</h3>
    <div class="row">
        <div class="col-12">
            <div class="form-group">
                <label for="firstname">Nama Lengkap</label>
                <input type="text" name="fullname" id="fullname" class="form-control required">
            </div>
        </div>
        <!-- <div class="col-2">
            <div class="form-group">
                <label for="age">Usia (Th)</label>
                <input type="text" name="age" id="age" class="form-control">
            </div>
        </div> -->
    </div>
    <div class="row">
        <div class="col-6">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control required">
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label for="telephone">No Hp</label>
                <input type="text" name="telephone" id="telephone" class="form-control required">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" id="alamat" class="form-control required">
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label for="telephone">Kecamatan</label>
                <input type="text" name="kecamatan" id="kecamatan" class="form-control  required">
            </div>
        </div>
    </div>
    <!-- <div class="row">
        <div class="col-12">
            <div class="form-group radio_input">
                <label class="container_radio">Laki-Laki
                    <input type="radio" name="gender" value="Male" class="required">
                    <span class="checkmark"></span>
                </label>
                <label class="container_radio">Perempuan
                    <input type="radio" name="gender" value="Female" class="required">
                    <span class="checkmark"></span>
                </label>
            </div>
        </div>
    </div>

    <div class="form-group terms">
        <label class="container_check">Please accept our 
            <a href="#" data-toggle="modal" data-target="#terms-txt" style="color:#fff; text-decoration: underline;">Terms and conditions</a>
            <input type="checkbox" name="terms" value="Yes" class="required">
            <span class="checkmark"></span>
        </label>
    </div> -->
</div>

<script src="{{env('APP_URL')}}js/web/survey.js" defer></script>
@endsection