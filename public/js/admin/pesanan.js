$(".edit-pesan").click(function () {
    let tr = $(this).parents()[1];
    console.log(tr);
});

$(".edit-pembayaran").click(function () {
    // let tr = $(this).parents()[1];
    // let td = tr.getElementsByTagName("td");
    $("#title-modal").text("Edit Status Pembayaran");

    $("#idPesanan").val($(this).attr("data-id"));
    if ($(this).attr("data-nama") == 2) {
        $("#status1").removeAttr("checked");
        $("#status2").attr("checked", true);
    } else {
        $("#status2").removeAttr("checked");
        $("#status1").attr("checked", true);
    }
});

$(".hapus-pesan").submit(function () {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $("input[name=_token]").val(),
        },
    });
    event.preventDefault();
    let nama = $(this).attr("data-nama");
    let id = $(this).attr("data-id");
    Swal.fire({
        icon: "question",
        title: "Hapus Pesanan",
        text: "Apa anda yakin akan menghapus Pesanan: " + nama,
        showCancelButton: true,
        showConfirmButton: true,
        reverseButtons: true,
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: "/admin/hapus_pesan/" + id,
                type: "DELETE",
            });
            Swal.fire(
                "Pesanan Terhapus",
                "Pesanan " + nama + " Berhasil dihapus",
                "success"
            ).then((result) => {
                window.location.reload();
            });
        }
    });
});

$(".tutup-modal").click(() => {
    $("#FormPesananEdit")[0].reset();
});

$("#FormPesananEdit").submit(function () {
    let id = $("#idPesanan").val();
    let status = $("[name=status_bayar]");
    for (let i = 0; i < status.length; i++) {
        if (status[i].checked) {
            status = status[i].value;
        }
    }
    event.preventDefault();

    let data = {
        status,
    };
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $("input[name=_token]").val(),
        },
    });
    $("#title-modal").text() == "Edit Status Pembayaran";
    $.ajax({
        url: "/admin/edit_pembayaran/" + id,
        type: "POST",
        data: data,
    })
        .done(function () {
            Swal.fire(
                "Edit Status Pembayaran",
                "Status Pembayaran Berhasil diedit",
                "success"
            ).then((result) => {
                window.location.reload();
            });
        })
        .fail(function (data) {
            Swal.fire(
                "Data Tidak Valid",
                "Status Pembayaran Gagal DiEdit",
                "error"
            );
        });
});
