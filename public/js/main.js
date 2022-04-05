let SESSION_KEY = "pesanan_cos";
let orders = [];

const composeDatapesanan = (
    nama_cos,
    telp_cos,
    tgl_reservasi,
    jml_orang,
    no_meja,
    pesanan,
    // status_bayar,
    tgl_pesan
) => {
    return {
        id: +new Date(),
        nama_cos,
        telp_cos,
        tgl_reservasi,
        jml_orang,
        no_meja,
        status_bayar: 1,
        tgl_pesan,
        pesanan,
    };
};

function makeorder(nama_psn, dtfoto, harga, qty, id) {
    let box = document.createElement("div");
    $(box).attr({
        class: "box-order d-flex mb-2",
    });

    let foto = document.createElement("img");
    $(foto).attr({
        class: "img-fluid rounded",
        style: "height: 100px; width: 200px",
        src: "storage/" + dtfoto,
        alt: nama_psn,
    });

    let dtorder = document.createElement("div");
    $(dtorder).attr({
        class: "dtorder ms-3",
    });
    dtorder.innerHTML = `
   <h2 style='font-size:24px;color:#fff;margin-bottom:8px'>${nama_psn}</h2>
   <span style='font-size:15px;color:#fff;margin-bottom:8px'>Harga : Rp ${harga}</span> <br>
   <span style='font-size:15px;color:#fff;margin-bottom:8px'>x${qty}</span>
    `;

    let btnhapus = document.createElement("div");
    $(btnhapus).attr({
        class: "tombol-pesan ms-auto align-self-center",
    });
    btnhapus.innerHTML = `<button class="btn btn-danger hapus-pesanan" dt-id="${id}"><i class="fas fa-trash-alt"></i> Hapus Pesanan</button>`;

    box.append(foto, dtorder, btnhapus);

    return box;
}
