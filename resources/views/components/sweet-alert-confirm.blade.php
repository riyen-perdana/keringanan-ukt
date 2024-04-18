<div
    x-data="{open:false}"
    x-show="open"
    @sweet-alert-confirm.window="
        const nip = event.detail.nip;
        const nm = event.detail.nama;
        const id = event.detail.id
        Swal.fire({
            title: 'NIP '+nip+',<br>Nama '+nm+' Akan Dihapus',
            text: 'Apakah Anda Yakin ?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Hapus!',
            cancelButtonText: 'Batal',
        }).then((result) => {
            if (result.isConfirmed) {
                {{-- $wire.delete(id).then(result => {
                    Swal.fire({
                        text: 'Data Sukses Dihapus',
                        icon: 'success'
                    });
                }) --}}
                $wire.delete(id)
            }
        });
    "
>
</div>
