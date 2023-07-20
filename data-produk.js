$(this).ready(function(){
	loadTable();
	function loadTable(){	
		$.ajax({
			url: 'data-produk.php',
			dataType: 'json',
			success: function(data){
				var table = "";
				var i = 1;
				
				$.each(data, function(key,value){
					table += '<tr>'
					table += '<td>'+i+'</td>'
					table += '<td>'+value.Kategori+'</td>'				
					table += '<td>'+value.Namapoduk+'</td>'
					table += '<td>'+value.Harga+'</td>'
					table += '<td>'+value.img+'</td>'
					table += '<td>'+value.Status+'</td>'
					table += '<td>'+value.Aksi+'</td>'
					table += '</tr>'
					i++;
				});
				$('table').append(table);
			}
		});
	}
	
});


