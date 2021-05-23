$('#random').click(function(){
    $.ajax({
        type: 'POST',
        url: 'functions.php',
        data:{
            function: 'call_quicksort'
        },	
        success: function(result){
            //console.log(result);
            var data = jQuery.parseJSON(result);
            html = '';
            $('#result').removeAttr('hidden');
            html += '<h5>Array desordenado:</h5><pre class="m-0">'+data.desordenado+'</pre>';
            html += '<h5 class="mt-3">Array ordenado:</h5><pre class="m-0">'+data.ordenado+'</pre>';
            $('#result').html(html);
        }
    });
});

$('#index').click(function(){

});

$('#achaPivo').click(function(){

});

$('#median').click(function(){

});
