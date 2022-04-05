let bayar = document.getElementById("bayar");
let TOTAL_PEMBAYARAN = 0;

orders = JSON.parse(sessionStorage.getItem(SESSION_KEY));
console.log(orders);
if (orders[0].pesanan.length > 0) {
    let list = document.getElementById("daftar");
    for (let i = 0; i < orders[0].pesanan.length; i++) {
        if (orders[0].pesanan[i] != null) {
            TOTAL_PEMBAYARAN +=
                orders[0].pesanan[i].qty * orders[0].pesanan[i].harga;
            list.append(
                makeorder(
                    orders[0].pesanan[i].nama,
                    orders[0].pesanan[i].foto,
                    orders[0].pesanan[i].harga,
                    orders[0].pesanan[i].qty,
                    i
                )
            );
        }
    }
}

$("#total-bayar").text(`Total Pembayaran = Rp ${TOTAL_PEMBAYARAN}`);
$(".pemesan #nama").text(`Nama: ${orders[0].nama_cos}`);
$(".pemesan #no_meja").text(`No. Meja: ${orders[0].no_meja}`);

$(".hapus-pesanan").click(function () {
    let id = $(this).attr("dt-id");
    let parent = this.parentElement.parentNode;
    let namapesan = parent.querySelector(".dtorder h2");
    Swal.fire({
        icon: "question",
        title: "Hapus Pesan",
        text: "Anda yakin ingin menghapus pesanan ini ?",
        confirmButtonText: "Iya",
        cancelButtonText: "Tidak",
        showCancelButton: true,
        reverseButtons: true,
    }).then((result) => {
        if (result.isConfirmed) {
            delete orders[0].pesanan[id];
            sessionStorage.setItem(SESSION_KEY, JSON.stringify(orders));
            TOTAL_PEMBAYARAN = 0;
            for (let i = 0; i < orders[0].pesanan.length; i++) {
                if (orders[0].pesanan[i] != null) {
                    TOTAL_PEMBAYARAN +=
                        orders[0].pesanan[i].qty * orders[0].pesanan[i].harga;
                }
            }
            $("#total-bayar").text(`Total Pembayaran = Rp ${TOTAL_PEMBAYARAN}`);
            parent.remove();

            Swal.fire({
                icon: "success",
                title: "Berhasil Dihapus",
                text: `Pesanan dengan nama ${namapesan.innerHTML} Berhasil dihapus`,
            });
        }
    });
});

bayar.addEventListener("click", function () {
    Swal.fire(
        "Pemesanan Reservasi",
        // input: "text",
        `Total Pembayaran: Rp ${TOTAL_PEMBAYARAN}`
        // inputPlaceholder: "Masukkan pembayaran..",
        // showCancelButton: true,
        // reverseButtons: true,
    ).then((result) => {
        // if (value > TOTAL_PEMBAYARAN) {
        orders[0]["total"] = TOTAL_PEMBAYARAN;
        //     let angsul = value - TOTAL_PEMBAYARAN;
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $("input[name=_token]").val(),
            },
        });
        $.ajax({
            url: "/pesan/tambah_pesan",
            type: "POST",
            data: orders[0],
            success: function (data) {
                Swal.fire(
                    "Pemesanan Reservasi Berhasil!",
                    // `Kembalian: Rp ${angsul}`,
                    "success"
                ).then((result) => {
                    sessionStorage.removeItem(SESSION_KEY);
                    window.open("/cetak/" + orders[0].id, "_blank");
                    window.location.href = "/";
                });
            },
        });
        // } else {
        //     return Swal.fire(
        //         "Maaf, Pembayaran Tidak Mencukupi!",
        //         "",
        //         "warning"
        //     );
        // }
    });
});
