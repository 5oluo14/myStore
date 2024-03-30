// function toggleBoolean(el, url) {
//     Swal.fire({
//         title: "{{__('admin.status')}}",
//         text: "{{__('admin.are_you_sure')}}?",
//         type: 'warning',
//         showCancelButton: true,
//         confirmButtonColor: '#3085d6',
//         cancelButtonColor: '#d33',
//         confirmButtonText: "{{__('admin.yes')}}",
//         cancelButtonText: "{{__('admin.no')}}",
//     }).then((result) => {
//         if (!result.dismiss && result.value == true) {
//             var checked = $(el).is(':checked');
//             $.ajax({
//                 url: url,
//                 type: 'get',
//                 dataType: 'json',
//                 success: function (data) {
//                     if (data.status === 0) {
//                         $(el).prop('checked', !checked);
//                         $(el).next().remove();
//                         initSingleSwitchery(el);
//                         $("#removable" + data.id).remove();
//                         Swal.fire("{{__('admin.error')}}!", data.message, "error");
//                     }
//                     Swal.fire({
//                         type: 'success',
//                         icon: 'success',
//                         title: "{{__('admin.successfully_updates')}}",
//                         showConfirmButton: false,
//                         timer: 1500
//                     })
//                 }, error: function () {
//                     $(el).prop('checked', !checked);
//                     $(el).next().remove();
//                     initSingleSwitchery(el);
//                     Swal.fire("{{__('admin.error')}}!", "{{__('admin.error_occurred')}}", "error");
//                 }
//             });
//         } else {
//             $(el).prop('checked', !checked);
//             $(el).next().remove();
//             initSingleSwitchery(el);
//             location.reload();
//         }
//     })
// }