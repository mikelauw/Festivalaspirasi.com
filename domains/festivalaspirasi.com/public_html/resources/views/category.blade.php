@extends('part.main')


@section('content')



@if( request()->is('komisi-a/*') )
    @php 
        $ctg = 'Hukum & Pemerintahan';
    @endphp
    <script>var ctg = "komisi-a";</script>
@elseif( request()->is('komisi-b/*') )
    @php
        $ctg = 'Perekonomian & Keuangan Daerah';
    @endphp
    <script>var ctg = "komisi-b";</script>
@elseif( request()->is('komisi-c/*') )
    @php
        $ctg = 'Pembangunan';
    @endphp
    <script>var ctg = "komisi-c";</script>    
@elseif( request()->is('komisi-d/*') )
    @php
        $ctg = 'Kesejahteraan Rakyat';
    @endphp
    <script>var ctg = "komisi-d";</script>
@endif


<div class="wrapper_centering">
    <div class="container_centering">
        <div class="container">
            <div class="row justify-content-between">
                
                <div class="col-xl-5 col-lg-5 d-flex align-items-center">
                    <div class="main_title_1">
                        <h3><img src="{{env('APP_URL')}}img/main_icon_1.svg" width="60" height="60" alt=""> {{$ctg}}</h3>

                        <p><em>- Festival Aspirasi</em></p>
                        <br/>
                        <span class="back_arrow"><i class="fa fa-arrow-circle-left"></i> <a href="{{ url()->previous() }}">Back</a></span>
                    </div>
                </div>
                
                <div class="col-xl-6 col-lg-6">
                    <div id="wizard_container">
                        <div id="top-wizard">
                            <div id="progressbar"></div>
                        </div>
                        <div id="middle-wizard">
                            <div class="step">
                                <h4 class="main_question">List Survey</h4>
                                <br/>
                                <div class="summary tajuk">
                                    <ul id="list_data">
                                        <!-- <li>
                                            <strong>1</strong>
                                            <h5><a href="/gov/986797/question">e.g Layanan Transportasi Kota</a></h5>
                                            <p id="question_1" class="mb-2"></p>
                                            <p id="additional_message"></p>
                                        </li> -->
                                        
                                       
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /container_centering -->
    @include('part.footer')
    <!-- /footer -->
</div>


<script src="{{env('APP_URL')}}js/web/tema.js" defer></script>
@endsection