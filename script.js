$('#random').click(function(){
    $.ajax({
        type: 'POST',
        url: 'functions.php',
        data:{
            function: 'call_quicksort'
        },	
        success: function(result){
            //console.log(jQuery.parseJSON(result));
            var data = jQuery.parseJSON(result);
            var html = '';
            var time = new Array();
            $.each(data, function(i, item){
                html += '<h5 class="mt-3">Array desordenado:</h5><pre class="m-0 card card-body">'+item.desordenado+'</pre>';
                html += '<h5 class="mt-3">Array ordenado:</h5><pre class="m-0 card card-body">'+item.ordenado+'</pre>';
                time.push(item.time);
            });
            $('#result').removeAttr('hidden');
            $('#result').html(html);
            $('#graph').removeAttr('hidden');
			var ctx = document.getElementById('graph').getContext('2d');
			var myChart = new Chart(ctx, {
				type: 'line',
				data: {
					labels: [100,500,1000,5000],
					datasets: [{
						label: 'Tempo em segundos',
						data: time,
						backgroundColor: [
							'rgba(228,187,33,0.1)'
						],
						borderColor: [
							'rgba(95,112,76,1)'
						],
						borderWidth: 2
					}]
				},
				options: {
					title:{
						display: true,
						text: 'Tempo de execução QuickSort'
					},
					scales: {
						yAxes: [{
							ticks: {
								beginAtZero: true
							}
						}]
					}
				}
			});           
        }
    });
});

$('#index').click(function(){

});

$('#achaPivo').click(function(){

});

$('#median').click(function(){

});
