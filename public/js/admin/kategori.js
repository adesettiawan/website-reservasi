$('.edit-kategori').click(function(){
    let tr = $(this).parents()[1];
    let td = tr.getElementsByTagName('td');
    $('#title-modal').text('Edit Kategori');
    $('#idkategori').val(td[0].innerText)
    $('#nama_kategori').val(td[1].innerText);
    


})

$('#btn-Tambah-kategori').click(function(){
    let tr = $(this).parents()[1];
    let td = tr.getElementsByTagName('td');
    $('#title-modal').text('Tambah Kategori');
    $('#nama_kategori').val("");
})

$('.tutup-modal').click(()=>{
    $('#FormKategori')[0].reset();
})

$('#FormKategori').submit(()=>{

    event.preventDefault();
    let id = $('#idkategori').val();
    let nama_kategori = $('#nama_kategori').val();
    if (nama_kategori == "") {
        $('.errornama').css({
            'display' : 'block'
        });
        event.preventDefault();
    }else{
        
        $('.errornama').css({
            'display' : 'none'
        });
    
    let data = {
        nama_kategori
    }

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('input[name=_token]').val()
        }
    });
    if ($('#title-modal').text() == "Tambah Kategori") {
        $.ajax({
                url: '/admin/tambah_kategori',
                type: 'POST',
                data: data,
                success: function(data) {
                    Swal.fire(
                        "Tambah Kategori",
                        "Kategori Berhasil Ditambah",
                        "success"
                    ).then((result)=>{
                        window.location.reload();
                    });
            }
        }).fail(function(jqxhr,setting,ex) {
            Swal.fire(
                "Data Tidak Valid",
                "Kategori Gagal Ditambahkan",
                "error"
            );
            }); 
    }else if($('#title-modal').text() == "Edit Kategori"){
        $.ajax({
            url: '/admin/edit_kategori/'+id,
            type: 'PUT',
            data: data,
        });
        Swal.fire(
            "Edit Kategori",
            "Kategori Berhasil diedit",
            "success"
        ).then((result)=>{
            window.location.reload();
        });

    }
}
})


$('.hapus-kategori').submit(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('input[name=_token]').val()
        }
    });
    event.preventDefault();
    let nama = $(this).attr('data-nama-kat');
    let id = $(this).attr('data-id-ket');
    Swal.fire({
        icon:"question",
        title:"Hapus Kategori",
        text:"Apa anda yakin akan menghapus kategori: "+nama,
        showCancelButton: true,
        showConfirmButton:true,
        reverseButtons:true,
    }).then((result)=>{
        if (result.isConfirmed) {
            $.ajax({
                url: '/admin/hapus_kategori/'+id,
                type: 'DELETE',
            });
            Swal.fire(
                "Kategori Terhapus",
                "Kategori "+nama+" Berhasil dihapus",
                "success"
            ).then((result)=>{
                window.location.reload();
            });
            
        }
    })
})