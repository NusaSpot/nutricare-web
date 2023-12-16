// datatable init
$('document').ready(function(){
	$('.data-table').DataTable({
		scrollCollapse: true,
		autoWidth: false,
		responsive: true,
		searching: true,
		bLengthChange: true,
		bPaginate: true,
		bInfo: true,
		columnDefs: [{
			targets: "datatable-nosort",
			orderable: false,
		}],
		"lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
		"language": {
			"info": "Menampilkan _START_ sampai _END_ dari _TOTAL_ entri",
			"emptyTable": "Tidak ada data",
			"lengthMenu":     "Menampilkan _MENU_ entri",
			"loadingRecords": "Memuat...",
			"processing":     "Sedang proses...",
			"search":         "Cari:",
			"zeroRecords":    "Tidak ada data yang ditemukan",
			"infoEmpty":      "Menampilkan 0 sampai 0 dari 0 entri",
			"infoFiltered":   "(difilter dari _MAX_ total entri)",
			paginate: {
				next: '<i class="ion-chevron-right"></i>',
				previous: '<i class="ion-chevron-left"></i>'  
			}
		},
	});
});