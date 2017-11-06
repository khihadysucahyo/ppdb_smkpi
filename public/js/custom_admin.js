//
// $().ready(function() {
//     $('#edit').click(function() {
//
//           $('input').not('#disabled').not('input[type=hidden]').each(function() {
//                 if ($(this).attr('disabled')) {
//                     $(this).removeAttr('disabled');
//                     document.getElementById('edit').innerHTML='<i class="material-icons">create</i> Edit';
//                 }
//                 else {
//                     $(this).attr({'disabled': 'disabled'});
//                     document.getElementById('edit').innerHTML='<i class="material-icons">cancel</i> Batal';
//                 }
//           });
//
//           $('select').each(function() {
//                 if ($(this).attr('disabled')) {
//                     $(this).removeAttr('disabled');
//                     $(this).material_select();
//                 }
//                 else {
//                     $(this).attr({'disabled': 'disabled'});
//                 }
//           });
//
//           $('textarea').each(function() {
//                 if ($(this).attr('disabled')) {
//                     $(this).removeAttr('disabled');
//                 }
//                 else {
//                     $(this).attr({'disabled': 'disabled'});
//                 }
//           });
//
//           $('button').each(function() {
//                 if ($(this).attr('disabled')) {
//                     $(this).removeAttr('disabled');
//                 }
//                 else {
//                     $(this).attr({'disabled': 'disabled'});
//                 }
//           });
//     });
// });


var ukuran = 0;
$('#lampiran-file').bind('change', function() {
ukuran = this.files[0].size/1500/1500;
   //alert('This file size is: ' + this.files[0].size/1024/1024 + "MB");
});

$('#input1').bind('change', function() {
ukuran = this.files[0].size/1500/1500;
   //alert('This file size is: ' + this.files[0].size/1024/1024 + "MB");
});

$().ready(function() {
  $('.datepicker').pickadate({
selectMonths: true, // Creates a dropdown to control month
selectYears: 15, // Creates a dropdown of 15 years to control year,
min: new Date(1990,3,20),
max: new Date(2010,7,14),
today: 'Today',
clear: 'Clear',
close: 'Ok',
format: 'yyyy-mm-dd',
closeOnSelect: false // Close upon selecting a date,
});
    $('#reply').click(function(){
        $('#reply_div').toggle();
        $(window).scrollTop($('#reply_div').offset().top-20);
    });

    $( window ).on( "load", function() {
      $('#jobayah').val($('#jobayah_select').val());
      $('#jobibu').val($('#jobibu_select').val());
    });
    $('#jobayah_select').on('change', function() {
      $('#jobayah').val($('#jobayah_select').val());
    });
    $('#jobibu_select').on('change', function() {
      $('#jobibu').val($('#jobibu_select').val());
    });


    // multi aksi
    $('#multi_aksi_select').on('change', function() {
      $('#multi_aksi_form').attr("action", $('#multi_aksi_select').val());
      $('#btn_multi_select').removeAttr('disabled');
    });
    $('#btn_multi_select').click(function(){
        $('#multi_aksi_form').submit();
    });
    // end multi

    //laporan action
    $('#select_laporan').on('change', function() {
      $('#btnSub').removeAttr('disabled');
      $('#form_laporan').attr("action", $('#select_laporan').val());
      // BUAT HIDDEN TA
      var val = $(this).val();
      if((val == "../laporan/data_pendaftar")||(val=="../laporan/data_kelulusan")){
         $("#div_ta").show();
      }else {
         $("#div_ta").hide();
      }
    });

    $('#edit').click(function() {

          $('input').not('#disabled').not('input[type=hidden]').each(function() {
                if ($(this).attr('readonly')) {
                    $(this).removeAttr('readonly');
                    document.getElementById('edit').innerHTML='<i class="material-icons">create</i> Edit';
                }
                else {
                    $(this).attr({'readonly': 'readonly'});
                    document.getElementById('edit').innerHTML='<i class="material-icons">cancel</i> Batal';
                }
          });

          $('select').each(function() {
                if ($(this).attr('readonly')) {
                    $(this).removeAttr('readonly');
                    $(this).material_select();
                }
                else {
                    $(this).attr({'readonly': 'readonly'});
                }
          });

          $('textarea').each(function() {
                if ($(this).attr('readonly')) {
                    $(this).removeAttr('readonly');
                }
                else {
                    $(this).attr({'readonly': 'readonly'});
                }
          });

          $('button').each(function() {
                if ($(this).attr('readonly')) {
                    $(this).removeAttr('readonly');
                }
                else {
                    $(this).attr({'readonly': 'readonly'});
                }
          });
    });

});


//modal
$(document).ready(function(){
  // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
  $('.modal').modal();

  $('.modal').modal({
      dismissible: true, // Modal can be dismissed by clicking outside of the modal
      opacity: .5, // Opacity of modal background
      inDuration: 300, // Transition in duration
      outDuration: 200, // Transition out duration
      startingTop: '4%', // Starting top style attribute
      endingTop: '15%', // 10% Ending top style attribute
      // ready: function(modal, trigger) { // Callback for Modal open. Modal and trigger parameters available.
      //   alert("Ready");
      //   console.log(modal, trigger);
      // },
      // complete: function() { alert('Closed'); } // Callback for Modal close
    }
  );

});






//preview upload foto

 function tampilkanPreview(gambar,idpreview){
     var gb = gambar.files;
     for (var i = 0; i < gb.length; i++){
         var gbPreview = gb[i];
         var imageType = /image.*/;
         var preview=document.getElementById(idpreview);
         var reader = new FileReader();

         if (gbPreview.type.match(imageType)) {
             preview.file = gbPreview;
             reader.onload = (function(element) {
                 return function(e) {
                     element.src = e.target.result;
                 };
             })(preview);
             reader.readAsDataURL(gbPreview);
         }else{
             alert("file yang anda upload tidak sesuai. Khusus mengunakan image.");
         }

     }
 }



 function batalUpload(gambar){
    //  document.getElementById('input1').value=null;
     $("#preview").attr("src",gambar);
 }
