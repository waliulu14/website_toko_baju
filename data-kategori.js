$(this).ready(function(){
	loadTable();
	function loadTable(){	
		$.ajax({
			url: 'data-kategori.php',
			dataType: 'json',
			success: function(data){
				var table = "";
				var i = 1;
				
				$.each(data, function(key,value){
					table += '<tr>'
					table += '<td>'+i+'</td>'
					table += '<td>'+value.No+'</td>'				
					table += '<td>'+value.Kategori+'</td>'
					table += '<td>'+value.Aksi+'</td>'
					table += '</tr>'
					i++;
				});
				$('table').append(table);
			}
		});
	}
	
});


