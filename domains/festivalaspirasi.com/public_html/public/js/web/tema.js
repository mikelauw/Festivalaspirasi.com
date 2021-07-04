$(document).ready(function() {		
    var i = 0;
    $.getJSON("/api/list-tema/" + ctg, function(obj) {
        var jmlQuestioner = Object.keys(obj).length;
        $.each(obj, function(key, value){
            var tema    = value.title;
            tema        = tema.replace(/ /g, '-');
            i++;
            $('#list_data').append(
                '<li>'+
                    '<strong>'+ i +'</strong>'+
                    '<h5><a href="/'+ctg+'/'+value.kode+'/'+tema+'/question">'+value.title+'</h5>'+
                    '<p id="question_1" class="mb-2"></p>'+
                    '<p id="additional_message"></p>'+
                '</li>'
            )
        });
    })
});