let temp_Order = [];

orders = JSON.parse(sessionStorage.getItem(SESSION_KEY));
if (orders == null) {
    orders = [];
} else {
    $("#nama").val(orders[0].nama_cos);
    $("#telp").val(orders[0].telp_cos);
    $("#tgl_reservasi").val(orders[0].tgl_reservasi);
    $("#jml_orang").val(orders[0].jml_orang);
    $("#meja option").each(async function (i) {
        if (orders[0].no_meja == $(this).text()) {
            await $(this).attr("selected", true);
        }
    });
    $(".card-body.makan").each(function (i) {
        let idmenu = $(this).attr("data-id");
        let btn_muncul = this.querySelector(".tambah_pesan");
        let btn_hilang = this.querySelector("button.btn");
        for (let i = 0; i < orders[0].pesanan.length; i++) {
            if (orders[0].pesanan[i] != null) {
                if (orders[0].pesanan[i].id == idmenu) {
                    $(btn_muncul).attr("class", "tambah_pesan muncul");
                    $(btn_hilang).attr(
                        "class",
                        "btn btn-primary me-auto hilang"
                    );
                    btn_muncul.querySelector(".qty-pesan").value =
                        orders[0].pesanan[i].qty;
                    temp_Order.push(
                        composeMenu(
                            orders[0].pesanan[i].id,
                            orders[0].pesanan[i].nama,
                            orders[0].pesanan[i].qty,
                            orders[0].pesanan[i].harga,
                            orders[0].pesanan[i].foto
                        )
                    );
                }
            }
        }
    });
    orders = [];
}

function composeMenu(id, nama, qty, harga, foto) {
    return {
        id,
        nama,
        qty,
        harga,
        foto,
    };
}

$("#next").click(function () {
    let nama = $("#nama").val();
    let telp = $("#telp").val();
    let tgl_reservasi = $("#tgl_reservasi").val();
    let jml_orang = $("#jml_orang").val();
    let meja = $("#meja").val();

    if (
        nama === "" ||
        meja === "" ||
        telp === "" ||
        tgl_reservasi === "" ||
        jml_orang === "" ||
        temp_Order.length == 0
    ) {
        Swal.fire({
            icon: "error",
            title: "Data Belum Lengkap",
            text: "Silahkan lengkapi data nama, meja, dan pesanan terlebih dahulu",
        });
    } else {
        const tgl_pesan = `${getTanggal()}  ${showTime()}`;
        orders.push(
            composeDatapesanan(
                nama,
                telp,
                tgl_reservasi,
                jml_orang,
                meja,
                temp_Order,
                tgl_pesan
            )
        );
        sessionStorage.setItem(SESSION_KEY, JSON.stringify(orders));
        window.location.href = "/list";
    }
});

$(".makan > button").click(async function () {
    let a = this;

    setTimeout(function () {
        a.style.display = "none";
        let parent = a.parentElement;
        let pesan = parent.querySelector(".tambah_pesan");
        let psnvalue = pesan.querySelector(".qty-pesan");
        psnvalue.value = 1;
        let nama_mn = parent.querySelector(".card-title").innerText;
        let harga = parent.querySelector(".card-text").innerText;
        harga = harga.slice(3);
        let foto = $(parent.querySelector(".card-title")).attr("data-foto");
        let id = $(parent).attr("data-id");
        temp_Order.push(composeMenu(id, nama_mn, psnvalue.value, harga, foto));
        pesan.classList.add("muncul");
    }, 300);
    await this.classList.add("hilang");
});

$(".tambah_pesan .tambah").click(function () {
    let parent = this.parentElement;
    let inputEl = parent.querySelector(".qty-pesan");
    let oldvalue = parseInt(inputEl.value);
    let nowvalue = oldvalue + 1;
    let idmenu = $(parent).parent().attr("data-id");
    for (let i = 0; i < temp_Order.length; i++) {
        if (temp_Order[i] != null) {
            if (temp_Order[i].id == idmenu) {
                temp_Order[i].qty = nowvalue;
            }
        }
    }
    inputEl.value = nowvalue;
});

$(".tambah_pesan .kurang").click(function () {
    let parent = this.parentElement;
    let inputEl = parent.querySelector(".qty-pesan");
    let oldvalue = parseInt(inputEl.value);
    let nowvalue = oldvalue - 1;
    let idmenu = $(parent).parent().attr("data-id");
    let index_or;
    for (let i = 0; i < temp_Order.length; i++) {
        if (temp_Order[i] != null) {
            if (temp_Order[i].id == idmenu) {
                temp_Order[i].qty = nowvalue;
                index_or = i;
            }
        }
    }
    inputEl.value = nowvalue;
    if (inputEl.value <= 0) {
        inputEl.value = 0;
        delete temp_Order[index_or];
        parent.classList.remove("muncul");
        let buttonOr = parent.parentElement.querySelector(".hilang");
        buttonOr.style.display = "block";
        setTimeout(function () {
            buttonOr.classList.remove("hilang");
        }, 50);
    }
});

$("#back").click(function () {
    sessionStorage.removeItem(SESSION_KEY);
    window.location.href = "/";
});

function showTime() {
    var a_p = "";
    var today = new Date();
    var curr_hour = today.getHours();
    var curr_minute = today.getMinutes();
    var curr_second = today.getSeconds();
    if (curr_hour < 12) {
        a_p = "AM";
    } else {
        a_p = "PM";
    }
    if (curr_hour == 0) {
        curr_hour = 12;
    }
    if (curr_hour > 12) {
        curr_hour = curr_hour - 12;
    }
    curr_hour = checkTime(curr_hour);
    curr_minute = checkTime(curr_minute);
    curr_second = checkTime(curr_second);
    let time = curr_hour + ":" + curr_minute + ":" + curr_second + " " + a_p;
    return time;
}

function checkTime(i) {
    if (i < 10) {
        i = "0" + i;
    }
    return i;
}
function getTanggal() {
    var months = [
        "Januari",
        "Februari",
        "Maret",
        "April",
        "Mei",
        "Juni",
        "Juli",
        "Agustus",
        "September",
        "Oktober",
        "November",
        "Desember",
    ];
    var myDays = [
        "Minggu",
        "Senin",
        "Selasa",
        "Rabu",
        "Kamis",
        "Jum&#39;at",
        "Sabtu",
    ];
    var date = new Date();
    var day = date.getDate();
    var month = date.getMonth();
    var thisDay = date.getDay(),
        thisDay = myDays[thisDay];
    var yy = date.getYear();
    var year = yy < 1000 ? yy + 1900 : yy;
    let tanggal = thisDay + ", " + day + " " + months[month] + " " + year;
    return tanggal;
}
