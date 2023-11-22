// swal jurusan
const flashDataJurusan = $(".flashdata-jurusan").data("flashdata");
if (flashDataJurusan) {
	Swal.fire({
		title: "Data Jurusan",
		text: "Berhasil " + flashDataJurusan,
		icon: "success",
	});
}

$(".tombol-delete-jurusan").on("click", function (e) {
	e.preventDefault();
	const href = $(this).attr("href");

	Swal.fire({
		title: "Are you sure?",
		text: "You won't be able to revert this!",
		icon: "warning",
		showCancelButton: true,
		confirmButtonColor: "#3085d6",
		cancelButtonColor: "#d33",
		confirmButtonText: "Yes, delete it!",
	}).then((result) => {
		if (result.isConfirmed) {
			document.location.href = href;
		}
	});
});
// END swal jurusan

// swal program studi
const flashDataProgramStudi = $(".flashdata-programStudi").data("flashdata");
if (flashDataProgramStudi) {
	Swal.fire({
		title: "Data Program Studi",
		text: "Berhasil " + flashDataProgramStudi,
		icon: "success",
	});
}

$(".tombol-delete-programStudi").on("click", function (e) {
	e.preventDefault();
	const href = $(this).attr("href");

	Swal.fire({
		title: "Are you sure?",
		text: "You won't be able to revert this!",
		icon: "warning",
		showCancelButton: true,
		confirmButtonColor: "#3085d6",
		cancelButtonColor: "#d33",
		confirmButtonText: "Yes, delete it!",
	}).then((result) => {
		if (result.isConfirmed) {
			document.location.href = href;
		}
	});
});
// END swal program studi

// swal metode asesmen
const flashDataMetodeAsesmen = $(".flashdata-metodeAsesmen").data("flashdata");
if (flashDataMetodeAsesmen) {
	Swal.fire({
		title: "Data Metode Asesmen",
		text: "Berhasil " + flashDataMetodeAsesmen,
		icon: "success",
	});
}

$(".tombol-delete-metodeAsesmen").on("click", function (e) {
	e.preventDefault();
	const href = $(this).attr("href");

	Swal.fire({
		title: "Are you sure?",
		text: "You won't be able to revert this!",
		icon: "warning",
		showCancelButton: true,
		confirmButtonColor: "#3085d6",
		cancelButtonColor: "#d33",
		confirmButtonText: "Yes, delete it!",
	}).then((result) => {
		if (result.isConfirmed) {
			document.location.href = href;
		}
	});
});
// END swal metode asesmen

// swal course
const flashDataCourse = $(".flashdata-course").data("flashdata");
if (flashDataCourse) {
	Swal.fire({
		title: "Data Course",
		text: "Berhasil " + flashDataCourse,
		icon: "success",
	});
}

$(".tombol-delete-course").on("click", function (e) {
	e.preventDefault();
	const href = $(this).attr("href");

	Swal.fire({
		title: "Are you sure?",
		text: "You won't be able to revert this!",
		icon: "warning",
		showCancelButton: true,
		confirmButtonColor: "#3085d6",
		cancelButtonColor: "#d33",
		confirmButtonText: "Yes, delete it!",
	}).then((result) => {
		if (result.isConfirmed) {
			document.location.href = href;
		}
	});
});
// END swal course

// swal clo
const flashDataAsesmen = $(".flashdata-asesmen").data("flashdata");
if (flashDataAsesmen) {
	Swal.fire({
		title: "Data Asesmen",
		text: "Berhasil " + flashDataAsesmen,
		icon: "success",
	});
}

$(".tombol-delete-asesmen").on("click", function (e) {
	e.preventDefault();
	const href = $(this).attr("href");

	Swal.fire({
		title: "Are you sure?",
		text: "You won't be able to revert this!",
		icon: "warning",
		showCancelButton: true,
		confirmButtonColor: "#3085d6",
		cancelButtonColor: "#d33",
		confirmButtonText: "Yes, delete it!",
	}).then((result) => {
		if (result.isConfirmed) {
			document.location.href = href;
		}
	});
});
// END swal clo

// swal asesmen
const flashDataCLO = $(".flashdata-CLO").data("flashdata");
if (flashDataCLO) {
	Swal.fire({
		title: "Data Course Learning Outcome",
		text: "Berhasil " + flashDataCLO,
		icon: "success",
	});
}

$(".tombol-delete-CLO").on("click", function (e) {
	e.preventDefault();
	const href = $(this).attr("href");

	Swal.fire({
		title: "Are you sure?",
		text: "You won't be able to revert this!",
		icon: "warning",
		showCancelButton: true,
		confirmButtonColor: "#3085d6",
		cancelButtonColor: "#d33",
		confirmButtonText: "Yes, delete it!",
	}).then((result) => {
		if (result.isConfirmed) {
			document.location.href = href;
		}
	});
});
// END swal asesmen

// swal detail asesmen
const flashDataDetail = $(".flashdata-detail").data("flashdata");
if (flashDataDetail) {
	Swal.fire({
		title: "Data Nilai Mahasiswa",
		text: "Berhasil " + flashDataDetail,
		icon: "success",
	});
}

$(".tombol-delete-detail").on("click", function (e) {
	e.preventDefault();
	const href = $(this).attr("href");

	Swal.fire({
		title: "Are you sure?",
		text: "You won't be able to revert this!",
		icon: "warning",
		showCancelButton: true,
		confirmButtonColor: "#3085d6",
		cancelButtonColor: "#d33",
		confirmButtonText: "Yes, delete it!",
	}).then((result) => {
		if (result.isConfirmed) {
			document.location.href = href;
		}
	});
});
// END swal detail asesmen
