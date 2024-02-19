    @if (session()->has('success'))
    <script>
        swal({
            title: "Berhasil!",
            text: "{{ session('success') }}",
            icon: "success",
            buttons: {
                confirm: {
                    text: "Okey",
                    value: true,
                    visible: true,
                    className: "btn btn-success",
                    closeModal: true
                }
            }
        });
    </script>
    @elseif(session()->has('error'))
    <script>
        swal({
            title: "Gagal!",
            text: "{{ session('error') }}",
            icon: "error",
            buttons: {
                confirm: {
                    text: "Okey",
                    value: true,
                    visible: true,
                    className: "btn btn-danger",
                    closeModal: true
                }
            }
        });
    </script>
    @endif
