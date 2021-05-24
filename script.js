var dataGraph = {};
var ctx = $('#timeGraph').get(0).getContext('2d');
var graph = new Chart(ctx, {
    type: 'line',
    data: dataGraph,
    options: {
		scales: {
			y: {
				title: {
					display: true,
					text: 'Tempo em segundos'
				}
			},
			x: {
				title: {
					display: true,
					text: 'Tamanho do Array'
				}
			}			
		},		
        plugins: {
            title: {
                display: true,
                text: 'Tempo execução estrategias QuickSort'
            }			
        },		
    }	
});

$('#random').click(function(){
    $.ajax({
        type: 'POST',
        url: 'functions.php',
        data:{
            function: 'call_quicksort'
        },	
        success: function(result){
            console.log(jQuery.parseJSON(result));
            var dataInfos = jQuery.parseJSON(result);
            var time = new Array();
            $.each(dataInfos, function(i, item){
				if(!dataGraph.labels.includes(i)){
					dataGraph.labels.push(i);
				}
                time.push(item.time);
            });			  
			var newDataset = {
				label: 'Randômico uniforme',
				borderColor: '#0062cc',
				backgroundColor: '#0062cc',
				borderWidth: 3,
				data: time
			}
			dataGraph.datasets.push(newDataset);
			graph.update();	
			$('#timeGraph').removeAttr('hidden');	       
        }
    });
});

$('#index').click(function(){
    $.ajax({
        type: 'POST',
        url: 'functions.php',
        data:{
            function: 'call_quicksort'
        },	
        success: function(result){
            console.log(jQuery.parseJSON(result));
            var dataInfos = jQuery.parseJSON(result);
            var time = new Array();
            $.each(dataInfos, function(i, item){
				if(!dataGraph.labels.includes(i)){
					dataGraph.labels.push(i);
				}
                time.push(item.time);
            });			  
			var newDataset = {
				label: 'Média de 3 valores',
				borderColor: '#28a745',
				backgroundColor: '#28a745',
				borderWidth: 3,
				data: time
			}
			dataGraph.datasets.push(newDataset);
			graph.update();	
			$('#timeGraph').removeAttr('hidden');	       
        }
    });
});

$('#achaPivo').click(function(){
    $.ajax({
        type: 'POST',
        url: 'functions.php',
        data:{
            function: 'call_quicksort'
        },	
        success: function(result){
            console.log(jQuery.parseJSON(result));
            var dataInfos = jQuery.parseJSON(result);
            var time = new Array();
            $.each(dataInfos, function(i, item){
				if(!dataGraph.labels.includes(i)){
					dataGraph.labels.push(i);
				}
                time.push(item.time);
            });			  
			var newDataset = {
				label: 'AchaPivo',
				borderColor: '#bd2130',
				backgroundColor: '#bd2130',
				borderWidth: 3,
				data: time
			}
			dataGraph.datasets.push(newDataset);
			graph.update();	
			$('#timeGraph').removeAttr('hidden');	       
        }
    });
});

$('#median').click(function(){
    $.ajax({
        type: 'POST',
        url: 'functions.php',
        data:{
            function: 'call_quicksort'
        },	
        success: function(result){
            console.log(jQuery.parseJSON(result));
            var dataInfos = jQuery.parseJSON(result);
            var time = new Array();
            $.each(dataInfos, function(i, item){
				if(!dataGraph.labels.includes(i)){
					dataGraph.labels.push(i);
				}
                time.push(item.time);
            });			  
			var newDataset = {
				label: 'Mediana da lista',
				borderColor: '#17a2b8',
				backgroundColor: '#17a2b8',
				borderWidth: 3,
				data: time
			}
			dataGraph.datasets.push(newDataset);
			graph.update();	
			$('#timeGraph').removeAttr('hidden');	       
        }
    });
});
