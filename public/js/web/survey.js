var i = 0;
var kodequest = [];
$(document).ready(function() {		
    var url_now = $(location).attr('href');
    //$('#title_tema').html(url_now);
    var res         = url_now.split('/');
    var res_tema    = res[3];
    var res_kode    = res[4];
    var res_title   = res[5];
    res_title       = res_title.replace('-', ' ');

    $('#title_tema').html( '" ' +res_title+ ' "');

    
    $.getJSON("/api/list-questioner/" + res_kode, function(obj) {
        var jmlQuestioner = Object.keys(obj).length;
        $.each(obj, function(key, value){
            var tema    = value.title;
            tema        = tema.replace(/ /g, '-');
            i++;
            kodequest.push(value.kode);
            $('#list_data').append(
                '<div class="step">'+
                    '<h3 class="main_question mb-4" style="font-size:16px !important"><strong>'+  i +' of '+ jmlQuestioner +'</strong>'+value.title+'</h3>'+
                    '<div class="review_block">'+
                        '<ul>'+
                            '<li>'+
                                '<div class="checkbox_radio_container">'+
                                    '<input type="radio" id="quest_a_'+ value.kode +'" name="question_'+ value.kode +'" class="required" value="1" >'+
                                    '<label class="radio" for="quest_a_'+ value.kode +'"></label>'+
                                    '<label for="quest_a_'+ value.kode +'" class="wrapper">'+value.a+'</label>'+
                                '</div>'+
                            '</li>'+
                            '<li>'+
                                '<div class="checkbox_radio_container">'+
                                    '<input type="radio" id="quest_b_'+ value.kode +'" name="question_'+ value.kode +'" class="required" value="2" >'+
                                    '<label class="radio" for="quest_b_'+ value.kode +'"></label>'+
                                    '<label for="quest_b_'+ value.kode +'" class="wrapper">'+value.b+'</label>'+
                                '</div>'+
                            '</li>'+
                            '<li>'+
                                '<div class="checkbox_radio_container">'+
                                    '<input type="radio" id="quest_c_'+ value.kode +'" name="question_'+ value.kode +'" class="required" value="3" >'+
                                    '<label class="radio" for="quest_c_'+ value.kode +'"></label>'+
                                    '<label for="quest_c_'+ value.kode +'" class="wrapper">'+value.c+'</label>'+
                                '</div>'+
                            '</li>'+
                            '<li>'+
                                '<div class="checkbox_radio_container">'+
                                    '<input type="radio" id="quest_d_'+ value.kode +'" name="question_'+ value.kode +'" class="required" value="4" >'+
                                    '<label class="radio" for="quest_d_'+ value.kode +'"></label>'+
                                    '<label for="quest_d_'+ value.kode +'" class="wrapper">'+value.d+'</label>'+
                                '</div>'+
                            '</li>'+

                        '</ul>'+
                    '</div>'+
                '</div>'
            )
        });
        addingSubmitForm();
        jQuery(function ($) {
            "use strict";
            //$('form#wrapped').attr('action', 'survey.php');
            $("#wizard_container").wizard({
                stepsWrapper: "#wrapped",
                submit: ".submit",
                beforeSelect: function (event, state) {
                    if ($('input#website').val().length != 0) {
                        return false;
                    }
                    if (!state.isMovingForward)
                        return true;
                    var inputs = $(this).wizard('state').step.find(':input');
                    return !inputs.length || !!inputs.valid();
                }
            }).validate({
                errorPlacement: function (error, element) {
                    if (element.is(':radio') || element.is(':checkbox')) {
                        error.insertBefore(element.next());
                    } else {
                        error.insertAfter(element);
                    }
                }
            });
            //  progress bar
            $("#progressbar").progressbar();
            $("#wizard_container").wizard({
                afterSelect: function (event, state) {
                    $("#progressbar").progressbar("value", state.percentComplete);
                    $("#location").text("(" + state.stepsComplete + "/" + state.stepsPossible + ")");
                }
            });
            // Validate select
            $('#wrapped').validate({
                ignore: [],
                rules: {
                    select: {
                        required: true
                    }
                },
                errorPlacement: function (error, element) {
                    if (element.is('select:hidden')) {
                        error.insertAfter(element.next('.nice-select'));
                    } else {
                        error.insertAfter(element);
                    }
                }
            });
        });
    })
});

function addingSubmitForm(){
    $("#last_form").clone().appendTo("#list_data");  
}

function dataform(){
    var l = 0;
    var answer = [];
    for (l = 0; l < kodequest.length; l++) {
        var obj = {};
        var value = $('input[name="question_'+ kodequest[l] +'"]:checked').val();
        obj[kodequest[[l]]] = value;
        answer.push(obj);
        //answer.push({ questioner[l] : kodequest[l] }, { answer : value });
    }
}

// document.getElementById("add_voters").onsubmit = function(event) {
//     event.preventDefault();
//     dataform();
// };

document.getElementById("add_voters").addEventListener("click", function(event){
    event.preventDefault();
    
    var name        = $('#fullname').val();
    var email       = $('#email').val();
    var hp          = $('#telephone').val();
    var alamat      = $('#alamat').val();
    var kecamatan   = $('#kecamatan').val();

    if(name == '' || email == '' || hp == '' || alamat == '' || kecamatan == ''){
        swal({
			title: 'error',  
			text: "mohon isi form voters",
			type: 'warning', //warning, error, success, info, and question
			showCancelButton: false,
			allowOutsideClick: false,
			buttonsStyling: true,
			cancelButtonClass: 'btn bg-red',
			confirmButtonClass: 'btn bg-green',
			confirmButtonText: 'OK',
			background: 'rgba(255, 255, 255, 0.96)'
		})
    }else{
        swal({
			title: 'success',  
			text: "terima kasih atas partisipasinya dalam Festival Aspirasi",
			type: 'success', //warning, error, success, info, and question
			showCancelButton: false,
			allowOutsideClick: false,
			buttonsStyling: true,
			cancelButtonClass: 'btn bg-red',
			confirmButtonClass: 'btn bg-green',
			confirmButtonText: 'OK',
			background: 'rgba(255, 255, 255, 0.96)'
		}).then(function() {
            
            var l = 0;
            var answer = [];
            for (l = 0; l < kodequest.length; l++) {
                var obj = {};
                var value = $('input[name="question_'+ kodequest[l] +'"]:checked').val();
                obj[kodequest[[l]]] = value;
                answer.push(obj);
                //answer.push({ questioner[l] : kodequest[l] }, { answer : value });
            } 
            
            console.log(answer);
            
            window.location = "/";
        });

        // var l = 0;
        // var answer = [];
        // for (l = 0; l < kodequest.length; l++) {
        //     var obj = {};
        //     var value = $('input[name="question_'+ kodequest[l] +'"]:checked').val();
        //     obj[kodequest[[l]]] = value;
        //     answer.push(obj);
        //     //answer.push({ questioner[l] : kodequest[l] }, { answer : value });
        // }
    }
  });