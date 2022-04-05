$(".edit-menu").click(function () {
    $("#form_edit_menu").css({
        display: "block",
    });
    $("#form_tambah_menu").css({
        display: "none",
    });

    let tr = $(this).parents()[1];
    let td = tr.getElementsByTagName("td");
    $("#title-modal").text("Edit Menu");

    $("#form_edit_menu").attr("action", `/admin/edit_menu/${td[0].innerText}`);
    $("#nama_menu_up").val(td[2].innerText);

    $("#harga_up").val(Format_integer(td[3].innerText));

    $("#kategori_up option").each(function (index) {
        if (td[4].innerText == $(this).text()) {
            $(this).attr("selected", true);
        } else {
            $(this).removeAttr("selected");
        }
    });
});

$("#btn-Tambah-menu").click(function () {
    $("#form_tambah_menu").css({
        display: "block",
    });
    $("#form_edit_menu").css({
        display: "none",
    });
    $("#form_tambah_menu").attr("action", `/admin/tambah_menu/`);
    let tr = $(this).parents()[1];
    let td = tr.getElementsByTagName("td");
    $("#title-modal").text("Tambah Menu");
});

const Format_integer = (hargaS) => {
    let format_num = hargaS.slice(3);
    let arrNum = format_num.split(".");
    //let text1 = ["Hello","world!",'Banana'];
    let result = "";
    for (let i = 1; i < arrNum.length; i++) {
        arrNum[0] += arrNum[i];
    }
    result = arrNum[0];
    return result;
};

$(".tutup-modal").click(() => {
    $("#form_tambah_menu")[0].reset();
    $("#form_edit_menu")[0].reset();
});

$(".hapus-menu").submit(function () {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $("input[name=_token]").val(),
        },
    });
    event.preventDefault();
    let nama = $(this).attr("dt-nama");
    let id = $(this).attr("dt-id");
    Swal.fire({
        icon: "question",
        title: "Hapus Menu",
        text: "Apa anda yakin akan menghapus Menu: " + nama,
        showCancelButton: true,
        showConfirmButton: true,
        reverseButtons: true,
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: "/admin/hapus_menu/" + id,
                type: "DELETE",
            });
            Swal.fire(
                "Menu Terhapus",
                "Menu " + nama + " Berhasil dihapus",
                "success"
            ).then((result) => {
                window.location.reload();
            });
        }
    });
});
