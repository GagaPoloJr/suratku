// $(window).load(function() {
//     $("#kebutuhan").change(function() {
//         console.log($("#kebutuhan option:selected").val());
//         if ($("#kebutuhan option:selected").val() == '1') {
//             $('#no_ktp').prop('hidden', false);
//             $('#no_kk').prop('hidden', false);
//         } else if ($("#kebutuhan option:selected").val() == '2') {
//             $('#no_ktp').prop('hidden', false);
//             $('#no_kk').prop('hidden', false);
//         } else if ($("#kebutuhan option:selected").val() == '3') {
//             $('#no_ktp').prop('hidden', false);
//             $('#no_kk').prop('hidden', false);
//         } else if ($("#kebutuhan option:selected").val() == '4') {
//             $('#no_ktp').prop('hidden', false);
//             $('#no_kk').prop('hidden', false);
//         } else if ($("#kebutuhan option:selected").val() == '5') {
//             $('#no_ktp').prop('hidden', false);
//             $('#no_kk').prop('hidden', false);
//         } else if ($("#kebutuhan option:selected").val() == '6') {
//             $('#no_ktp').prop('hidden', false);
//             $('#no_kk').prop('hidden', false);
//         } else if ($("#kebutuhan option:selected").val() == '7') {
//             $('#no_ktp').prop('hidden', false);
//             $('#no_kk').prop('hidden', false);
//         } else {
//             $('#no_ktp').prop('hidden', 'true');
//             $('#no_kk').prop('hidden', 'true');
//         }
//     });
// });


function showDiv(select) {
    if (select.value == 1) {
        document.getElementById('no_ktp').style.display = "block";
        document.getElementById('no_kk').style.display = "block";

    } else if (select.value == 2) {
        document.getElementById('no_ktp').style.display = "block";
        document.getElementById('no_kk').style.display = "block";

    } else if (select.value == 3) {
        document.getElementById('no_ktp').style.display = "block";
        document.getElementById('no_kk').style.display = "block";

    } else if (select.value == 4) {
        document.getElementById('no_ktp').style.display = "block";
        document.getElementById('no_kk').style.display = "block";

    } else if (select.value == 5) {
        document.getElementById('no_ktp').style.display = "block";
        document.getElementById('no_kk').style.display = "block";

    } else if (select.value == 6) {
        document.getElementById('no_ktp').style.display = "block";
        document.getElementById('no_kk').style.display = "block";

    } else if (select.value == 7) {
        document.getElementById('no_ktp').style.display = "block";
        document.getElementById('no_kk').style.display = "block";

    } else {
        document.getElementById('no_ktp').style.display = "none";
        document.getElementById('no_ktp').style.display = "none";

    }
}