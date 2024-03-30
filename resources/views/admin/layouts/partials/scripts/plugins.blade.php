<script>
    @if (session()->get('success'))
        Toastify({
            text: "{{ session('success') }}",
            duration: 4000,
            close: true,
            gravity: "top", // `top` or `bottom`
            position: "center", // `left`, `center` or `right`
            stopOnFocus: true, // Prevents dismissing of toast on hover
            style: {
                background: "#4FBE87",
            },
        }).showToast();
    @elseif (session()->get('error'))
        Toastify({
            text: "{{ session('error') }}",
            duration: 4000,
            close: true,
            gravity: "top", // `top` or `bottom`
            position: "center", // `left`, `center` or `right`
            stopOnFocus: true, // Prevents dismissing of toast on hover
            style: {
                background: "#fa3e3e",
            },
        }).showToast();
    @endif
</script>
