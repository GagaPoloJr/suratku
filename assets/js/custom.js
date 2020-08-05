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

/* 
    1 = kk
    2 = ktp
    3= domisili
    4= pindah
    5= akte lahir
    6=tambah anggota keluarga
    7= pengantar pendatang baru

*/

function showDiv(select) {

    if (select.value == 1) {
        document.getElementById('no_ktp').style.display = "block";
        document.getElementById('no_kk').style.display = "block";
        document.getElementById('lainnya').style.display = "none";

        for (i = 1; i <= 4; i++) {
            document.getElementById('akte_lahir' + i).style.display = "none";
        }
        for (i = 1; i <= 3; i++) {
            document.getElementById('domisili' + i).style.display = "none";
        }
        for (i = 1; i <= 2; i++) {
            document.getElementById('kk' + i).style.display = "block";
        }



    } else if (select.value == 2) {
        document.getElementById('no_ktp').style.display = "block";
        document.getElementById('lainnya').style.display = "none";
        document.getElementById('no_kk').style.display = "block";

        for (i = 1; i <= 4; i++) {
            document.getElementById('akte_lahir' + i).style.display = "none";
        }
        for (i = 1; i <= 3; i++) {
            document.getElementById('domisili' + i).style.display = "none";
        }
        for (i = 1; i <= 2; i++) {
            document.getElementById('kk' + i).style.display = "none";
        }



    } else if (select.value == 3) {
        document.getElementById('no_ktp').style.display = "block";
        document.getElementById('lainnya').style.display = "none";
        document.getElementById('no_kk').style.display = "block";

        for (i = 1; i <= 4; i++) {
            document.getElementById('akte_lahir' + i).style.display = "none";
        }
        for (i = 1; i <= 3; i++) {
            document.getElementById('domisili' + i).style.display = "block";
        }
        for (i = 1; i <= 2; i++) {
            document.getElementById('kk' + i).style.display = "none";
        }


    } else if (select.value == 4) {
        document.getElementById('no_ktp').style.display = "block";
        document.getElementById('lainnya').style.display = "none";
        document.getElementById('no_kk').style.display = "block";
        // document.getElementById('akte_lahir').style.display = "none";

        for (i = 1; i <= 4; i++) {
            document.getElementById('akte_lahir' + i).style.display = "none";
        }
        for (i = 1; i <= 3; i++) {
            document.getElementById('domisili' + i).style.display = "none";
        }
        for (i = 1; i <= 2; i++) {
            document.getElementById('kk' + i).style.display = "none";
        }



    } else if (select.value == "5") {
        for (i = 1; i <= 4; i++) {
            document.getElementById('akte_lahir' + i).style.display = "block";
        }
        document.getElementById('no_ktp').style.display = "none";
        // document.getElementById('no_ktp').reset();
        document.getElementById('no_kk').style.display = "none";
        document.getElementById('lainnya').style.display = "none";

        for (i = 1; i <= 2; i++) {
            document.getElementById('kk' + i).style.display = "none";
        }
        for (i = 1; i <= 3; i++) {
            document.getElementById('domisili' + i).style.display = "none";
        }


    } else if (select.value == 6) {
        document.getElementById('no_ktp').style.display = "block";
        document.getElementById('lainnya').style.display = "none";
        document.getElementById('no_kk').style.display = "block";
        for (i = 1; i <= 4; i++) {
            document.getElementById('akte_lahir' + i).style.display = "none";
        }
        for (i = 1; i <= 3; i++) {
            document.getElementById('domisili' + i).style.display = "none";
        }
        for (i = 1; i <= 2; i++) {
            document.getElementById('kk' + i).style.display = "none";
        }




    } else if (select.value == 7) {
        document.getElementById('no_ktp').style.display = "block";
        document.getElementById('no_kk').style.display = "block";
        document.getElementById('lainnya').style.display = "none";
        for (i = 1; i <= 4; i++) {
            document.getElementById('akte_lahir' + i).style.display = "none";
        }
        for (i = 1; i <= 3; i++) {
            document.getElementById('domisili' + i).style.display = "none";
        }
        for (i = 1; i <= 2; i++) {
            document.getElementById('kk' + i).style.display = "none";
        }



    } else if (select.value == 8) {
        document.getElementById('lainnya').style.display = "block";
        document.getElementById('no_ktp').style.display = "block";
        document.getElementById('no_kk').style.display = "block";
        for (i = 1; i <= 4; i++) {
            document.getElementById('akte_lahir' + i).style.display = "none";
        }
        for (i = 1; i <= 3; i++) {
            document.getElementById('domisili' + i).style.display = "none";
        }
        for (i = 1; i <= 2; i++) {
            document.getElementById('kk' + i).style.display = "none";
        }


    } else {
        document.getElementById('no_ktp').style.display = "none";
        document.getElementById('no_kk').style.display = "none";
        for (i = 1; i <= 4; i++) {
            document.getElementById('akte_lahir' + i).style.display = "none";
        }
        for (i = 1; i <= 3; i++) {
            document.getElementById('domisili' + i).style.display = "none";
        }
        for (i = 1; i <= 2; i++) {
            document.getElementById('kk' + i).style.display = "none";
        }




    }
}