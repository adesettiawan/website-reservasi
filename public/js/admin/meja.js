// console.log(datajs.meja);

$(".edit-meja").click(function () {
    let tr = $(this).parents()[1];
    let td = tr.getElementsByTagName("td");
    $("#title-modal").text("Edit Meja");

    $("#idmeja").val(td[0].innerText);
    $("#no_meja").val(td[1].innerText);
    if (td[2].innerText == "Tersedia") {
        $("#status1").removeAttr("checked");
        $("#status2").attr("checked", true);
    } else {
        $("#status2").removeAttr("checked");
        $("#status1").attr("checked", true);
    }
});
$("#btn-Tambah-meja").click(function () {
    let tr = $(this).parents()[1];
    let td = tr.getElementsByTagName("td");
    $("#title-modal").text("Tambah Meja");

    $("#no_meja").val("");
    $("#status1").removeAttr("checked");
    $("#status2").removeAttr("checked");
});

$(".tutup-modal").click(() => {
    $("#FormMeja")[0].reset();
});

$("#FormMeja").submit(function () {
    let id = $("#idmeja").val();
    let no_meja = $("#no_meja").val();
    let status = $("[name=status]");
    for (let i = 0; i < status.length; i++) {
        if (status[i].checked) {
            status = status[i].value;
        }
    }
    event.preventDefault();

    let data = {
        no_meja,
        status,
    };
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $("input[name=_token]").val(),
        },
    });
    if ($("#title-modal").text() == "Tambah Meja") {
        $.ajax({
            url: "/admin/tambah_meja",
            type: "POST",
            data: data,
            success: function (data) {
                Swal.fire(
                    "Tambah Meja",
                    "Meja Berhasil Ditambah",
                    "success"
                ).then((result) => {
                    window.location.reload();
                });
            },
        }).fail(function (data) {
            Swal.fire("Data Tidak Valid", "Meja Gagal Ditambahkan", "error");
        });
    } else if ($("#title-modal").text() == "Edit Meja") {
        $.ajax({
            url: "/admin/edit_meja/" + id,
            type: "PUT",
            data: data,
        })
            .done(function () {
                Swal.fire("Edit Meja", "Meja Berhasil diedit", "success").then(
                    (result) => {
                        window.location.reload();
                    }
                );
            })
            .fail(function (data) {
                Swal.fire("Data Tidak Valid", "Meja Gagal DiEdit", "error");
            });
    }
});

$(".hapus-meja").submit(function () {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $("input[name=_token]").val(),
        },
    });
    event.preventDefault();
    let nama = $(this).attr("data-nomor");
    let id = $(this).attr("data-id");
    Swal.fire({
        icon: "question",
        title: "Hapus Meja",
        text: "Apa anda yakin akan menghapus Meja nomor: " + nama,
        showCancelButton: true,
        showConfirmButton: true,
        reverseButtons: true,
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: "/admin/hapus_meja/" + id,
                type: "DELETE",
            });
            Swal.fire(
                "Meja Terhapus",
                "Meja Nomor " + nama + " Berhasil dihapus",
                "success"
            ).then((result) => {
                window.location.reload();
            });
        }
    });
});
