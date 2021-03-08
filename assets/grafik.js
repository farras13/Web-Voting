$(document).ready(function() {
	grafik();
	
	function grafik() {
		$.ajax({
			url: "http://localhost/voting/Main/getVote",
			type  : 'GET',
			async : true,
			dataType : 'json',
			success: function(data) {
				
				var value = [];
				for (var i in data) {
					value.push(data[i].hasil);
				}
				document.getElementById("c1").innerHTML = data[0].hasil;
				document.getElementById("c2").innerHTML = data[1].hasil;
				
				var ctx = document.getElementById('myChart').getContext('2d');
				var myChart = new Chart(ctx, {
					type: 'doughnut',
					data: {
						datasets: [{
							data: value,
							backgroundColor:[
								'red','black',
							]
						}],
					
						// These labels appear in the legend and in the tooltips when hovering different arcs
						labels: [
							'Paslon 1',
							'Paslon 2'
						]
					},
					options: {
						animation: {
							duration: 0
						}
					}
				});
			}
		});	
	}setInterval(function(){ grafik(); }, 200);
});
