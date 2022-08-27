/**
 *
 * You can write your JS code here, DO NOT touch the default style file
 * because it will make it harder for you to update.
 *
 */

"use strict";

$(document).on("click", "#btn-ubah", function () {
	$(".modal-body #id").val($(this).data("id"));
	$(".modal-body #nama").val($(this).data("nama"));
});

// const flashData = $(".flash-data").data("flashdata");
// if (flashData) {
// 	iziToast.success({
// 		title: "Data Berhasil",
// 		message: flashData,
// 		position: "topRight",
// 	});
// }

const flashData = $(".flash-data").data("flashdata");
if (flashData) {
	swal("Data Berhasil", flashData, "success");
}

$(".btn-hapus").on("click", function (e) {
	e.preventDefault();
	const href = $(this).attr("href");
	swal({
		title: "Apakah Anda Yakin?",
		text: "DATA YANG DIHAPUS TIDAK DAPAT DIKEMBALIKAN KEMBALI!",
		icon: "warning",
		buttons: true,
		dangerMode: true,
	}).then((willDelete) => {
		if (willDelete) {
			document.location.href = href;
		} else {
			swal("Data Batal Dihapus", {
				icon: "error",
			});
		}
	});
});
