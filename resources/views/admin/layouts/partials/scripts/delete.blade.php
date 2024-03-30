<script>
    $(document).on('click', '.destroy', function () {
        var route = $(this).data('route');
        var token = $(this).data('token');

        Swal.fire({
            icon: 'question',
            title: '{{__("تأكيد عملية الحذف")}}',
            text: '{{__("هل أنت متأكد من الحذف ؟")}}',
            showCancelButton: true,
            confirmButtonClass: 'btn-outline',
            cancelButtonClass: 'btn-outline',
            confirmButtonText: '{{__("نعم")}}',
            cancelButtonText: '{{__("لا")}}',
            reverseButtons: true,
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: route,
                    type: 'post',
                    data: {_method: 'delete', _token: token},
                    dataType: 'json',
                    success: function (data) {
                        if (data.status === 0) {
                            Swal.fire("{{__('حدث خطأ')}}", data.message, "error");
                        } else {
                            $("#removable" + data.id).remove();
                            Swal.fire("{{__('تم')}}", data.message, "success");
                        }
                    }
                });
            }
        });
    });
</script>