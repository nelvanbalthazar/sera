<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />

<title>SERA Job Application Form</title>
<!-- Add to Head -->
<meta name="viewport" content="width=device-width,initial-scale=1.0" />
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js" type="text/javascript"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js" type="text/javascript"></script>
<script src='http://www.google.com/recaptcha/api.js'></script>
<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet" />
<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css" rel="stylesheet" />
<script language="JavaScript" type="text/javascript" src="{{ url('') }}/assets/js/jquery-1.11.1.min.js"></script>
<script language="JavaScript" type="text/javascript" src="{{ url('') }}/assets/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="http://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<link rel="stylesheet" type="text/css" href="http://cdn.jsdelivr.net/bootstrap/3/css/bootstrap.css" />
<script type="text/javascript" src="http://cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
<link rel="stylesheet" type="text/css" href="http://cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />
<link rel="stylesheet" href="{{ url('') }}/assets/css/html5reset.css" media="all">
<link rel="stylesheet" href="{{ url('') }}/assets/css/col.css" media="all">
<link rel="stylesheet" href="{{ url('') }}/assets/css/1cols.css" media="all">
<link rel="stylesheet" href="{{ url('') }}/assets/css/2cols.css" media="all">
<link rel="stylesheet" href="{{ url('') }}/assets/css/normalize.css" type='text/css'/>
<link rel="stylesheet" href="{{ url('') }}/assets/css/stylesheet.css" type='text/css'/>
<link rel="stylesheet" href="{{ url('') }}/dist/css/selectize.default.css" type='text/css'/>

<script src="{{ url('') }}/assets/js/jqueryui.js"></script>
<script src="{{ url('') }}/dist/js/standalone/selectize.js"></script>
<script src="{{ url('') }}/assets/js/index.js"></script>
<link rel="shortcut icon" href="https://www.sera.astra.co.id/assets/assets_frontend/images/logo/icon.png">
<!-- jQuery Form Validation code -->
<script type="text/javascript" language="JavaScript">

//File upload button
$(function() {

  // We can attach the `fileselect` event to all file inputs on the page
  $(document).on('change', ':file', function() {
    var input = $(this),
        numFiles = input.get(0).files ? input.get(0).files.length : 1,
        label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
    input.trigger('fileselect', [numFiles, label]);
	$("#field_10" ).trigger( "focus" );
	$("#field_10" ).trigger('keyup');
	$("#field_11" ).trigger( "focus" );
	$("#field_11" ).trigger('keyup');
  });

  // We can watch for our custom `fileselect` event like this
  $(document).ready( function() {
      $(':file').on('fileselect', function(event, numFiles, label) {

          var input = $(this).parents('.input-group').find(':text'),
              log = numFiles > 1 ? numFiles + ' files selected' : label;

          if( input.length ) {
              input.val(log);
          } else {
              if( log ) alert(log);
          }

      });
    

    //Hide satu_tglberakhir when is_masihkerja Ya
    if ($('#is_masihkerja').val()=="Ya" || $('#is_masihkerja').val()=="")
    {
        $('#satu_tglberakhir_row').hide().find(':input').attr('required',false);
        
    }
    $("#is_masihkerja").change(function () {
        if ($('#is_masihkerja').val()=="Ya" ||$('#is_mashkerja').val()=="")
        {
          $('#satu_tglberakhir_row').fadeOut().find(':input').attr('required',false);
        } else 
        {
          $('#satu_tglberakhir_row').fadeIn().find(':input').attr('required',true);
        }
    });


    //Hide Tanggal Menikah when status pernikahan Lajang
    if ($('#status_pernikahan').val()=="Lajang" ||$('#status_pernikahan').val()=="")
    {
        $('#tanggal_menikah_row').hide().find(':input').attr('required',false);
        
    }
    $("#status_pernikahan").change(function () {
        if ($('#status_pernikahan').val()=="Lajang" ||$('#status_pernikahan').val()=="")
        {
          $('#tanggal_menikah_row').fadeOut().find(':input').attr('required',false);
        } else 
        {
          $('#tanggal_menikah_row').fadeIn().find(':input').attr('required',true);
        }
    });


    //Hide kerjaastra_true when is_kerjastra Tidak
    if ($('#is_kerjaastra').val()=="Tidak" ||$('#is_kerjaastra').val()=="")
    {
        $('#kerjaastra_true_row').hide().find(':input').attr('required',false);
        
    }
    $("#is_kerjaastra").change(function () {
        if ($('#is_kerjaastra').val()=="Tidak" ||$('#is_kerjasatra').val()=="")
        {
          $('#kerjaastra_true_row').fadeOut().find(':input').attr('required',false);
        } else 
        {
          $('#kerjaastra_true_row').fadeIn().find(':input').attr('required',true);
        }
    });

    //Hide psikotesastra_true when is_kerjastra Tidak
    if ($('#is_psikotesastra').val()=="Tidak" || $('#is_psikotesastra').val()=="")
    {
        $('#psikotesastra_true_row').hide().find(':input').attr('required',false);
        
    }
    $("#is_psikotesastra").change(function () {
        if ($('#is_psikotesastra').val()=="Tidak" || $('#is_psikotessatra').val()=="")
        {
          $('#psikotesastra_true_row').fadeOut().find(':input').attr('required',false);
        } else 
        {
          $('#psikotesastra_true_row').fadeIn().find(':input').attr('required',true);
        }
    });

    //Hide seluruhindo_false when is_seluruhindo Ya
    if ($('#is_seluruhindo').val()=="Ya" || $('#is_seluruhindo').val()=="")
    {
        $('#seluruhindo_false_row').hide().find(':input').attr('required',false);
        
    }
    $("#is_seluruhindo").change(function () {
        if ($('#is_seluruhindo').val()=="Ya" ||$('#is_seluruhindo').val()=="")
        {
          $('#seluruhindo_false_row').fadeOut().find(':input').attr('required',false);
        } else 
        {
          $('#seluruhindo_false_row').fadeIn().find(':input').attr('required',true);
        }
    });


    //Hide sumber_lowongan when referensi_lowongan  Website SERA & Carrer Center Campuss
    if ($('#referensi_lowongan').val()=="Website SERA" || $('#referensi_lowongan').val()=="Career Center Kampus" || $('#referensi_lowongan').val()=="")
    {
        $('#sumber_lowongan_row').hide().find(':input').attr('required',false);
        
    }
    $("#referensi_lowongan").change(function () {
        if ($('#referensi_lowongan').val()=="Website SERA" || $('#referensi_lowongan').val()=="Career Center Kampus" || $('#referensi_lowongan').val()=="")
    {
          $('#sumber_lowongan_row').fadeOut().find(':input').attr('required',false);
        } else 
        {
          $('#sumber_lowongan_row').fadeIn().find(':input').attr('required',true);tan
        }
    });



  });

  
}); 
// Phone allows for internatonal numbers and ext 
jQuery.validator.addMethod("phone", function(phone_number, element) {
    phone_number = phone_number.replace(/\s+/g, ""); 
	return this.optional(element) || phone_number.length > 9 &&
		phone_number.match(/^((\+)?[1-9]{1,2})?([-\s\.\(\)\])?((\(\d{1,4}\))|\d{1,4})(([-\s\.\(\)\])?[0-9]{1,12}){1,2}(\s*(ext|x)\s*\.?:?\s*([0-9]+))?$/);
}, "Please specify a valid phone number"); 

// Removes Error Message When reCaptcha is Checked Valid
function recaptchaCallback() {
  $('#hiddenRecaptcha').valid();
};

// Set Max File Attachment Size 
$.validator.addMethod(
    "maxfilesize",
    function (value, element) {
        return this.optional(element) || (element.files && element.files[0]
                               && element.files[0].size < 1024 * 1024 * 4); // Set the * 4) 4MB to max mb and test
    },
    'Maximum file size limit is 4MB'
);

// Form Validation

$(function form_validation() {
   
$("#frmFormMail").validate({
        ignore: ".ignore",
        
        invalidHandler : function() {
            $('html, body').animate({
                scrollTop: $("#frmFormMail").offset().top // scroll top to your form on error
            }, 'slow' );
        },
        // Specify the validation rules
        rules: {
            posisi: { // Posisi yg dilamar
                required: true, // true required - false not required
            },
            pas_foto: { // Pas Foto
                required: true,
                accept: "jpg|jpe|jpeg|png|gif", // Add file types you wish to accept
                maxfilesize: true,
            },
            nama_lengkap: { // Nama Lengkap
                required: true,
                
            },
            tempat_lahir: { // Tempat Lahir
                required: true,
            },
            tanggal_lahir: { // Tanggal Lahir
                required: true,
                minlength: 3,
            },
            jenis_kelamin: { // Jenis Kelamin
                required: true,
            },
            golongan_darah: { // Golongan Darah
                required: true,
            },
            status_pernikahan: { // Status Pernikahan
                required: true,
            },
			      /*tanggal_menikah: { // Tanggal Menikah
                required: false,
                minlength: 3,
            },*/
            agama: { // Agama
                required: true,
            },
            nomor_ktp: { // Nomor KTP
                required: true, 
            },
            npwp: { // NPWP
                required: true, 
            },
            bpjs_tk: { // No. BPJS Ketenagakerjaan
                required: false,
            },
            bpjs_kes: { // No.BPJS Kesehatan
                required: false,
            },
            ktp_alamat: { //Alamat KTP
                required: true, 
            },
            ktp_rtrw: { // RT/RW KTP
                required: true, 
            },
            ktp_kelkec: { // Kelurahan/Kecamatan  KTP
                required: true, 
            },
            ktp_kota: { // Kotamadya/Kabupaten KTP
                required: true, 
            },
            ktp_propinsi: { // Propinsi KTP
                required: true, 
            },
            ktp_kodepos: { // Kodepos KTP
                required: true, 
            },
            saatini_alamat: { //Alamat Sekarang
                required: true, 
            },
            saatini_rtrw: { // RT/RW Sekarang
                required: true, 
            },
            saatini_kelkec: { // Kelurahan/Kecamatan  Sekarang
                required: true, 
            },
            saatini_kota: { // Kotamadya/Kabupaten Sekarang
                required: true, 
            },
            saatini_propinsi: { // Propinsi Sekarang
                required: true, 
            },
            saatini_kodepos: { // Kodepos Sekarang
                required: true, 
            },
            satu_perusahaan : { // Pengalaman Kerja 1 - Perusahaan
                required: false, 
            },
            satu_jabatan : { // Pengalaman Kerja 1 - Jabatan
                required: false, 
            },
            satu_tglmulai : { // Pengalaman Kerja 1 - Tgl Mulai
                required: false, 
            },
            is_masihkerja :{
                required: false,
            },
            satu_tglberakhir : { // Pengalaman Kerja 1 - Tgl Berakhir
                required: false, 
            },
            satu_gaji : { // Pengalaman Kerja 1 - gaji
                required: false, 
            },
            satu_alasanpindah : { // Pengalaman Kerja 1 - Alasan Pindah
                required: false, 
            },
            dua_perusahaan : { // Pengalaman Kerja 2 - Perusahaan
                required: false, 
            },
            dua_jabatan : { // Pengalaman Kerja 2 - Jabatan
                required: false, 
            },
            dua_tglmulai : { // Pengalaman Kerja 2 - Tgl Mulai
                required: false, 
                minlength: 3,
            },
            dua_tglberakhir : { // Pengalaman Kerja 2 - Tgl Berakhir
                required: false,
                minlength: 3, 
            },
            dua_gaji : { // Pengalaman Kerja 2 - Gaji
                required: false, 
            },
            dua_alasanpindah : { // Pengalaman Kerja 2 - Alasan Pindah
                required: false, 
            },
            tiga_perusahaan : { // Pengalaman Kerja 3 - Perusahaan
                required: false, 
            },
            tiga_jabatan : { // Pengalaman Kerja 3 - Jabatan
                required: false, 
            },
            tiga_tglmulai : { // Pengalaman Kerja 3 - Tanggal Mulai
                required: false, 
                minlength: 3,
            },
            tiga_tglberakhir : { // Pengalaman Kerja 3 - Tanggal Berakhir
                required: false, 
                minlength: 3,
            },
            tiga_gaji : { // Pengalaman Kerja 3 - Gaji
                required: false, 
            },
            tiga_alasanpindah : { // Pengalaman Kerja 3 - Alasan Pindah
                required: false, 
            },
            applicant_email : { // Email
                required: false, 
              email: true,
                minlength: 5,
            },
            telp_hp : { // Nomor Handphone
                required: true, 
            },
            telp_rumah : { // Nomor Telpon Rumah
                required: false, 
            },
            sma_institusi : { // Institusi SMA
                required: false, 
            },
            sma_jurusan : { // Jurusan SMA
                required: false, 
            },
            sma_progstudi : { // Program Studi SMA
                required: false, 
            },
            sma_mulai : { // Tanggal Mulai SMA
                required: false, 
                minlength: 3,
            },
            sma_akhir : { // Tanggal Berakhir SMA
                required: false, 
                minlength: 3,
            },
            sma_nilai: { // Nilai akhir rata-rata SMA
                required: false, 
            },
            sma_karyailmiah: { // Skripsi/karya Ilmiah SMA
                required: false, 
            },
            dipl_institusi : { // Institusi Diploma
                required: false, 
            },
            dipl_fakultas : { // Jurusan Diploma
                required: false, 
            },
            dipl_progstudi : { // Program Studi Diploma
                required: false, 
            },
            dipl_mulai : { // Tanggal Mulai Diploma
                required: false, 
                minlength: 3,
            },
            dipl_akhir : { // Tanggal Berakhir Diploma
                required: false, 
                minlength: 3,
            },
            dipl_ipk: { // Nilai akhir rata-rata Diploma
                required: false, 
            },
            dipl_skripsi : { // Skripsi/karya Ilmiah Diploma
                required: false, 
            },
            s1_institusi : { // Institusi S1
                required: false, 
            },
            s1_fakultas : { // Jurusan S1
                required: false, 
            },
            s1_progstudi : { // Program Studi S1
                required: false, 
            },
            s1_mulai : { // Tanggal Mulai S1
                required: false, 
                minlength: 3,
            },
            s1_akhir : { // Tanggal Berakhir S1
                required: false,
                minlength: 3, 
            },
            s1_ipk: { // Nilai akhir rata-rata S1
                required: false, 
            },
            s1_skripsi: { // Skripsi/karya Ilmiah S1
                required: false, 
            },
            s2_institusi : { // Institusi S2
                required: false, 
            },
            s2_fakultas : { // Jurusan S2
                required: false, 
            },
            s2_progstudi : { // Program Studi S2
                required: false, 
            },
            s2_mulai : { // Tanggal Mulai S2
                required: false,
                minlength: 3, 
            },
            s2_akhir : { // Tanggal Berakhir S2
                required: false, 
                minlength: 3,
            },
            s2_ipk: { // Nilai akhir rata-rata S2
                required: false, 
            },
            s2_thesis: { // Skripsi/karya Ilmiah S2
                required: false, 
            },
            satu_namakursus: { // Nama Kursus 1 
                required: false, 
            },
            satu_institusi: { // Institusi Penyelenggara Kursus 1 
                required: false, 
            },
            satu_mulaikursus: { // Tanggal Mulai Kursus 1 
                required: false, 
                minlength: 3,
            },
            satu_akhirkursus: { // Tanggal Berakhir Kursus 1 
                required: false,
                minlength: 3, 
            },
            satu_keterangan: { // Keterangan Kursus 1 
                required: false, 
            },
            dua_namakursus: { // Nama Kursus 1 
                required: false, 
            },
            dua_institusi: { // Institusi Penyelenggara Kursus 2 
                required: false, 
            },
            dua_mulaikursus: { // Tanggal Mulai Kursus 2 
                required: false, 
                minlength: 3,
            },
            dua_akhirkursus: { // Tanggal Berakhir Kursus 2 
                required: false,
                minlength: 3, 
            },
            dua_keterangan: { // Keterangan Kursus 2 
                required: false, 
            },
            satu_bahasaasing: { // Bahasa Asing yang dikuasai 1
                required: false, 
            },
            satu_lisan: { // Bahasa Asing yang dikuasai 1
                required: false, 
            },
            satu_tulisan: { // Bahasa Asing yang dikuasai 1
                required: false, 
            },
            dua_bahasaasing: { // Bahasa Asing yang dikuasai 2
                required: false, 
            },
            dua_lisan: { // Bahasa Asing yang dikuasai 2
                required: false, 
            },
            dua_tulisan: { // Bahasa Asing yang dikuasai 2
                required: false, 
            },
            satu_kel_hubungan: { // Anggota Keluarga 1 - Hubungan
                required: true, 
            },
            satu_kel_nama: { // Anggota Keluarga 1 - Nama
                required: true, 
            },
            satu_kel_tgllahir: { // Anggota Keluarga 1 - Tanggal Lahir
                required: true, 
                minlength: 3,
            },
            satu_kel_jeniskelamin: { // Anggota Keluarga 1 - Jenis Kelamin
                required: true, 
            },
            satu_kel_pekerjaan: { // Anggota Keluarga 1 - Pekerjaan
                required: true, 
            },
            dua_kel_hubungan: { // Anggota Keluarga 2 - Hubungan
                required: true, 
            },
            dua_kel_nama: { // Anggota Keluarga 2 - Nama
                required: true, 
            },
            dua_kel_tgllahir: { // Anggota Keluarga 2 - Tanggal Lahir
                required: true, 
                minlength: 3,
            },
            dua_kel_jeniskelamin: { // Anggota Keluarga 2 - Jenis Kelamin
                required: true, 
            },
            dua_kel_pekerjaan: { // Anggota Keluarga 2 - Pekerjaan
                required: true, 
            },
            tiga_kel_hubungan: { // Anggota Keluarga 3 - Hubungan
                required: false, 
            },
            tiga_kel_nama: { // Anggota Keluarga 3 - Nama
                required: false, 
            },
            tiga_kel_tgllahir: { // Anggota Keluarga 3 - Tanggal Lahir
                required: false,
                minlength: 3, 
            },
            tiga_kel_jeniskelamin: { // Anggota Keluarga 3 - Jenis Kelamin
                required: false, 
            },
            tiga_kel_pekerjaan: { // Anggota Keluarga 3 - Pekerjaan
                required: false, 
            },
            empat_kel_hubungan: { // Anggota Keluarga 4 - Hubungan
                required: false, 
            },
            empat_kel_nama: { // Anggota Keluarga 4 - Nama
                required: false, 
            },
            empat_kel_tgllahir: { // Anggota Keluarga 4 - Tanggal Lahir
                required: false, 
                minlength: 3,
            },
            empat_kel_jeniskelamin: { // Anggota Keluarga 4 - Jenis Kelamin
                required: false, 
            },
            empat_kel_pekerjaan: { // Anggota Keluarga 4 - Pekerjaan
                required: false, 
            },
            lima_kel_hubungan: { // Anggota Keluarga 5 - Hubungan
                required: false, 
            },
            lima_kel_nama: { // Anggota Keluarga 5 - Nama
                required: false, 
            },
            lima_kel_tgllahir: { // Anggota Keluarga 5 - Tanggal Lahir
                required: false, 
                minlength: 3,
            },
            lima_kel_jeniskelamin: { // Anggota Keluarga 5 - Jenis Kelamin
                required: false, 
            },
            lima_kel_pekerjaan: { // Anggota Keluarga 5 - Pekerjaan
                required: false, 
            },
            enam_kel_hubungan: { // Anggota Keluarga 6 - Hubungan
                required: false, 
            },
            enam_kel_nama: { // Anggota Keluarga 6 - Nama
                required: false, 
            },
            enam_kel_tgllahir: { // Anggota Keluarga 6 - Tanggal Lahir
                required: false, 
                minlength: 3,
            },
            enam_kel_jeniskelamin: { // Anggota Keluarga 6 - Jenis Kelamin
                required: false, 
            },
            enam_kel_pekerjaan: { // Anggota Keluarga 6 - Pekerjaan
                required: false, 
            },
            darurat_nama: { // Kontak Darurat - Nama
                required: true, 
            },
            darurat_hubungan: { // Kontak Darurat - hubungan 
                required: true, 
            },
            darurat_hp: { // Kontak Darurat - Nomor Handphone
                required: true, 
            },
            darurat_telp: { // Kontak Darurat - Nomor Telepon
                required: false, 
            },
            darurat_alamat: { // Kontak Darurat - Alamat
                required: true, 
            },
            darurat_rtrw: { // Kontak Darurat - RT/RW
                required: true, 
            },
            darurat_kelkec: { // Kontak Darurat - Kelurahan/Kecamatan
                required: true, 
            },
            darurat_kota: { // Kontak Darurat - Kota
                required: true, 
            },
            darurat_propinsi: { // Kontak Darurat - Propinsi
                required: true, 
            },
            darurat_kodepos: { // Kontak Darurat - Kode Pos
                required: true, 
            },
            penyakit: { // Penyakit yang pernah di derita
                required: false, 
            },
            akibat_penyakit: { // Akibat Penyakit yang pernah di derita
                required: false, 
            },
            penyakit_mulai: { // Penyakit yang pernah di derita - Periode Mulai
                required: false, 
                minlength: 3,
            },
            penyakit_akhir : { // Penyakit yang pernah di derita - Periode berakhir
                required: false,
                minlength: 3, 
            },
            nama_bank : { // Akun Bank - Nama bank
                required: true, 
            },
            nomor_rekening : { // Akun Bank - Nomor Rekening
                required: true, 
            },
            nama_rekening : { // Akun Bank - Nama Rekening
                required: true, 
            },
            cabang_rekening : { // Akun Bank - Cabang Rekening
                required: true, 
            },
            harapan_gaji : { // Gaji yang diharapkan
                required: true, 
            },
            harapan_fasilitas : { // Fasilitas yang diharapkan
                required: true, 
            },
            is_seluruhindo : { // Bersedia ditempatkan seluruh Indonesia
                required: true, 
            },
            /*seluruhindo_false : { // Bersedia ditempatkan seluruh Indonesia
                required: false, 
            },*/
            referensi_nama : { // Referensi Perusahaan Sebelum - Nama
                required: false, 
            },
            referensi_perusahaan : { // Referensi Perusahaan Sebelum - Perusahaan
                required: false, 
            },
            referensi_telp : { // Referensi Perusahaan Sebelum - Telepon
                required: false, 
            },
            referensi_jabatan : { // Referensi Perusahaan Sebelum - Nama
                required: false, 
            },
            cita_cita : { // cita-cita
                required: true, 
            },
            is_kerjaastra : { // Pernah bekerja di Astra
                required: true, 
            },
            /*kerjaastra_true : { // Pernah bekerja di Astra
                required: false, 
            },*/
            is_psikotesastra : { // Pernah psikotes di Astra
                required: true, 
            },
            /*psikotesastra_true : { // Pernah psikotes di Astra
                required: false, 
            },*/
            referensi_lowongan : { // Darimana tahu lowongan
                required: true, 
            },
            /*sumber_lowongan : { // Sumber
                required: false, 
            },*/
            urutan_peminatan : { // cita-cita
                required: false, 
            },
            linkedin : { // LinkedIn
                required: false, 
            },
            facebook : { // Facebook
                required: false, 
            },
            twitter : { // Twitter
                required: false, 
            },
            instagram : { // Instagram
                required: false, 
            },
            is_realdata : { // Check Box
                required: true, 
            },
      

            hiddenRecaptcha: {
                required: function () {
                if (grecaptcha.getResponse() == '') {
                     return true;
                } else {
                     return false;
			    }
			  }				
           },
       },
        // Specify the validation error messages
        messages: {
	        field_10: {
                required: "Required field", // Required will only show up if rules are set to true required above
                accept: "File type is not accepted"
            },
			field_11: {
	            required: "Required field", // Required will only show up if rules are set to true required above
                accept: "File type is not accepted"
            },
			hiddenRecaptcha: {
                required: "Human response required"
            },
			submitHandler: function(form) // CALLED ON SUCCESSFUL VALIDATION
                {
                window.location.replace='assets/redirect.html'; // Add your custom form submitted redirect page full path here the forward slash / will redirect to your home page
			}
        },
   });

});
// Date Picker
$(document).ready(function() {
  $("input.datepicker").singleDatePicker();
});

$.fn.singleDatePicker = function() {
  $(this).on("apply.daterangepicker", function(e, picker) {
    picker.element.val(picker.startDate.format(picker.locale.format));
  });
  return $(this).daterangepicker({
    locale: {
      format: 'YYYY-MM-DD' // Change to local formats YYYY-MM-DD - MM-DD-YYYY
    },
    singleDatePicker: true,
    autoUpdateInput: false
  });
};
// Textarea Countdown
function limitTextCount(limitField_id, limitCount_id, limitNum)
{
    var limitField = document.getElementById(limitField_id);
    var limitCount = document.getElementById(limitCount_id);
    var fieldLEN = limitField.value.length;

    if (fieldLEN > limitNum)
    {
        limitField.value = limitField.value.substring(0, limitNum);
    }
    else
    {
        limitCount.innerHTML = (limitNum - fieldLEN) + ' Countdown';
    }
}
// Submit button Please Wait... and loading gif
$(function () {
    $('#frmFormMail').submit(function () {
        if($(this).valid()) {
          $("#btn").val("Please Wait... ");
		  $('#divMsg').show();
        }
    });
});

</script>
<style type="text/css">

/* THIS FORM IS RESPONSIVE - MOBILE FRIENDLY */
.margin {
   margin:8px; /* Form outside margin */
}
.form-container{
	max-width:800px; /* change this to get your desired form width */
    width:100%;
	margin: 0 auto;
	border:solid 1px #7b7edb; /* Remove outer border if wished */
	padding:10px;
	margin-top:5px;
	margin-bottom:40px;
	padding-bottom:30px;
}
.header {
  font-size:18px;
  font-weight:normal;
  background-color:#2e3192; /* Header Backgroung Colour  */
  color:white; /* Header Text Colour  */
  max-width:100%;
  padding:10px;
}
.sub-header {
  font-size:20px;
  font-weight:normal;
  background-color:;
  border-bottom:solid 1px #2e3192; /* Divider Border Colour  */
  color:#2e3192; /* Sub-heading Text Text Colour  */
  max-width:100%;
  padding:5px;
}
/* Placeholder disappears on focus */
input:focus::-webkit-input-placeholder  {color:transparent !IMPORTANT;}
input:focus::-moz-placeholder   {color:transparent !IMPORTANT;}
input:-moz-placeholder   {color:transparent !IMPORTANT;}
textarea:focus::-webkit-input-placeholder  {color:transparent !IMPORTANT;}
textarea:focus::-moz-placeholder   {color:transparent !IMPORTANT;}
textarea:-moz-placeholder   {color:transparent !IMPORTANT;}
textarea{ height:70px !IMPORTANT;}
input[type="file"] {
  color:#000 !IMPORTANT;    
}
input.file[type="text"] {
  background-color:white !IMPORTANT;
}
input[type=checkbox] {
  transform: scale(3.0);
  margin-top:15px;
  margin-left:15px;
}
.control-label {font-size:14px; font-weight:bold; margin-bottom:5px; text-align: justify; !IMPORTANT;}
.input-row {
  display:block;
  min-height:85px;
  margin-bottom:-5px;
}
input:-webkit-autofill {
    -webkit-box-shadow:0 0 0 50px white inset !important; /* Change the color to your own background color */
    -webkit-text-fill-color: #333 !important;
}
input:-webkit-autofill:focus {
    -webkit-box-shadow: /*your box-shadow*/,0 0 0 50px white inset !important;
    -webkit-text-fill-color: #333 !important;
}
</style>
</head>
<body>
<div class="margin">
  <div class="form-container">
    <div>&nbsp;</div>
    <div>&nbsp;<img src="{{ url('') }}/assets/img/logo.png"></div><br>
    <div class="header">JOB APPLICATION FORM</div>
    <div>&nbsp;</div>
    <form name="frmFormMail" id="frmFormMail" action='{{route('form.store')}}' method='post' enctype='multipart/form-data' autocomplete="on">
      {{ csrf_field() }}
      <input type='hidden' name='formmail_submit' value='Y'>
      <input type='hidden' name='mod' value='ajax'>
      <input type='hidden' name='func' value='submit'>


      <!-- Column Full Start -->
      <div class="section group">
        <div class="col span_1_of_1">
          <div class="sub-header" style="margin-bottom:-15px;">Aplikasi Anda</div>
        </div>
        <!-- Column Left -->
        <div class="section group">
          <div class="col span_1_of_2">
            <div>&nbsp;</div>
          <div class="input-row">
            <label class="control-label" for="posisi">Posisi yang dilamar<span style="color:red;">*</span></label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-briefcase"></i></span>
                <input type="text" name="posisi" id="posisi" value="" maxlength="50" class="form-control" placeholder="Posisi" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="posisi" generated="true"></label>
            </div>
          </div>
          
          </div>

          <!-- Column Right -->
          <div class="col span_1_of_2">
          <div>&nbsp;</div>

           <div class="input-row">
            <label class="control-label" for="pas_foto">Masukan Pas Foto (3x4)<span style="color:red;">* Max 4 MB</span></label>
            <div class="input-group">
              <label class="input-group-btn"> <span class="btn btn-primary"> Browse
              <input type="file" id="pas_foto" name="pas_foto" style="display: none;">
              </span> </label>
              <input type="text" class="form-control file" readonly>
            </div>
            <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="pas_foto" generated="true"></label>
          </div>

          </div>
        </div>

      
      
      <!-- Left Column -->
      <div class="section group">
        <div class="col span_1_of_2">
          <div class="sub-header">Informasi Personal</div>
          <div>&nbsp;</div>

          <div class="input-row">
            <label class="control-label" for="nama_lengkap">Silakan isi data secara lengkap</label><br><br>
            <label class="control-label" for="nama_lengkap">Nama Lengkap<span style="color:red;">*</span></label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input type="text" name="nama_lengkap" id="nama_lengkap" value="" maxlength="50" class="form-control" placeholder="Your Name" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="nama_lengkap" generated="true"></label>
            </div>
          </div> <br><br>

          <div class="input-row">
            <label class="control-label" for="tempat_lahir">Tempat Lahir<span style="color:red;">*</span></label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input type="text" name="tempat_lahir" id="tempat_lahir" value="" maxlength="50" class="form-control" placeholder="Place of Birth" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="tempat_lahir" generated="true"></label>
            </div>
          </div>

          <div class="input-row">
            <label class="control-label" for="tanggal_lahir">Tanggal Lahir <span style="color:red;">*</span></label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                <input type="text" name="tanggal_lahir" id="tanggal_lahir" value="" maxlength="50" class="form-control datepicker" placeholder="Tanggal Lahir dd-mm-yyyy" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="tanggal_lahir" generated="true"></label>
            </div>
          </div>

          <div class="input-row">
            <label class="control-label" for="jenis_kelamin">Jenis Kelamin <span style="color:red;">*</span></label></label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                  <!-- Add take away change options - change text twice per option to show in email results -->
                  <option value="" selected="selected">- Please Select Option -</option>
                  <option value="Laki-laki">Laki-laki</option>
                  <option value="Perempuan">Perempuan</option>
                </select>
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="jenis_kelamin" generated="true"></label>
            </div>
          </div>

          <div class="input-row">
            <label class="control-label" for="golongan_darah">Golongan Darah<span style="color:red;">*</span></label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                <select name="golongan_darah" id="golongan_darah" class="form-control">
                  <!-- Add take away change options - change text twice per option to show in email results -->
                  <option value="" selected="selected">- Please Select Option -</option>
                  <option value="O">O</option>
                  <option value="A">A</option>
                  <option value="B">B</option>
                  <option value="AB">AB</option>
                </select>
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="golongan_darah" generated="true"></label>
            </div>
          </div>

          <div class="input-row">
            <label class="control-label" for="status_pernikahan">Status Pernikahan<span style="color:red;">*</span></label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                <select name="status_pernikahan" id="status_pernikahan" class="form-control">
                  <!-- Add take away change options - change text twice per option to show in email results -->
                  <option value="" selected="selected">- Please Select Option -</option>
                  <option value="Lajang">Lajang</option>
                  <option value="Menikah">Menikah</option>
                  <option value="Duda/Janda">Duda/Janda</option>
                </select>
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="status_pernikahan" generated="true"></label>
            </div>
          </div>

          <div class="input-row" id="tanggal_menikah_row">
            <label class="control-label" for="tanggal_nikah">Tanggal Menikah <span style="color:red;">*</span></label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                <input type="text" required name="tanggal_nikah" id="tanggal_nikah" value="" maxlength="50" class="form-control datepicker" placeholder="Tanggal Menikah dd-mm-yyyy" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="tanggal_nikah" generated="true"></label>
            </div>
          </div>

          <div class="input-row">
            <label class="control-label" for="agama">Agama<span style="color:red;">*</span></label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                <select name="agama" id="agama" class="form-control">
                  <!-- Add take away change options - change text twice per option to show in email results -->
                  <option value="" selected="selected">- Please Select Option -</option>
                  <option value="Islam">Islam</option>
                  <option value="Kristen">Kristen</option>
                  <option value="Katolik">Katolik</option>
                  <option value="Hindu">Hindu</option>
                  <option value="Buddha">Buddha</option>
                  <option value="Kong Hu Cu">Kong Hu Cu</option>
                </select>
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="agama" generated="true"></label>
            </div>
          </div>

          <div class="input-row">
            <label class="control-label" for="nomor_ktp">Nomor KTP<span style="color:red;">*</span></label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input type="text" name="nomor_ktp" id="nomor_ktp" value="" maxlength="50" class="form-control" placeholder="KTP" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="nomor_ktp" generated="true"></label>
            </div>
          </div>

          <div class="input-row">
            <label class="control-label" for="npwp">NPWP<span style="color:red;">*</span></label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input type="text" name="npwp" id="npwp" value="" maxlength="50" class="form-control" placeholder="NPWP" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="npwp" generated="true"></label>
            </div>
          </div>

          <div class="input-row">
            <label class="control-label" for="bpjs_tk">No. BPJS Ketenagakrjaan</label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input type="text" name="bpjs_tk" id="bpjs_tk" value="" maxlength="50" class="form-control" placeholder="BPJS TK" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="bpjs_tk" generated="true"></label>
            </div>
          </div>

          <div class="input-row">
            <label class="control-label" for="bpjs_kes">No. BPJS Kesehatan</label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input type="text" name="bpjs_kes" id="bpjs_kes" value="" maxlength="50" class="form-control" placeholder="BPJS Kesehatan" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="bpjs_kes" generated="true"></label>
            </div>
          </div>

          <div class="sub-header"></div>
          <br><br>

          <div class="input-row">
            <label class="control-label" for="ktp_alamat">Alamat KTP</label><br><br>
            <label class="control-label" for="ktp_alamat">Alamat <span style="color:red;">*</span></label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                <input type="text" name="ktp_alamat" id="ktp_alamat" value="" maxlength="150" class="form-control" placeholder="Alamat" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="ktp_alamat" generated="true"></label>
            </div>
          </div><br><br>

          <div class="input-row">
            <label class="control-label" for="ktp_rtrw">RT/RW <span style="color:red;">*</span></label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                <input type="text" name="ktp_rtrw" id="ktp_rtrw" value="" maxlength="50" class="form-control" placeholder="RT/RW" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="ktp_rtrw" generated="true"></label>
            </div>
          </div>

          <div class="input-row">
            <label class="control-label" for="ktp_kelkec">Kelurahan/Kecamatan <span style="color:red;">*</span></label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                <input type="text" name="ktp_kelkec" id="ktp_kelkec" value="" maxlength="50" class="form-control" placeholder="Kel/Kec." onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="ktp_kelkec" generated="true"></label>
            </div>
          </div>

          <div class="input-row">
            <label class="control-label" for="ktp_kota">Kota<span style="color:red;">*</span></label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                <input type="text" name="ktp_kota" id="ktp_kota" value="" maxlength="50" class="form-control" placeholder="Kota" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="ktp_kota" generated="true"></label>
            </div>
          </div>

          <div class="input-row">
            <label class="control-label" for="ktp_propinsi">Propinsi<span style="color:red;">*</span></label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                <input type="text" name="ktp_propinsi" id="ktp_propinsi" value="" maxlength="50" class="form-control" placeholder="Propinsi" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="ktp_propinsi" generated="true"></label>
            </div>
          </div>

          <div class="input-row">
            <label class="control-label" for="ktp_kodepos">Kode Pos <span style="color:red;">*</span></label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                <input type="text" name="ktp_kodepos" id="ktp_kodepos" value="" maxlength="50" class="form-control" placeholder="Zip/Kode Pos" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="ktp_kodepos" generated="true"></label>
            </div>
          </div>

          <div class="sub-header"></div>
          <br><br>

          <div class="input-row">
            <label class="control-label" for="saatini_alamat">Alamat Tinggal Saat Ini</label><br><br>
            
            <label class="control-label" for="saatini_alamat">Alamat <span style="color:red;">*</span></label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                <input type="text" name="saatini_alamat" id="saatini_alamat" value="" maxlength="150" class="form-control" placeholder="Alamat" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="saatini_alamat" generated="true"></label>
            </div>
          </div><br><br>

          <div class="input-row">
            <label class="control-label" for="saatini_rtrw">RT/RW <span style="color:red;">*</span></label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                <input type="text" name="saatini_rtrw" id="saatini_rtrw" value="" maxlength="50" class="form-control" placeholder="RT/RW" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="saatini_rtrw" generated="true"></label>
            </div>
          </div>

          <div class="input-row">
            <label class="control-label" for="saatini_kelkec">Kelurahan/Kecamatan <span style="color:red;">*</span></label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                <input type="text" name="saatini_kelkec" id="saatini_kelkec" value="" maxlength="50" class="form-control" placeholder="Kel/Kec." onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="saatini_kelkec" generated="true"></label>
            </div>
          </div>


          <div class="input-row">
            <label class="control-label" for="saatini_kota">Kota<span style="color:red;">*</span></label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                <input type="text" name="saatini_kota" id="saatini_kota" value="" maxlength="50" class="form-control" placeholder="Kota" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="saatini_kota" generated="true"></label>
            </div>
          </div>

          <div class="input-row">
            <label class="control-label" for="saatini_propinsi">Propinsi<span style="color:red;">*</span></label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                <input type="text" name="saatini_propinsi" id="saatini_propinsi" value="" maxlength="50" class="form-control" placeholder="Propinsi" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="saatini_propinsi" generated="true"></label>
            </div>
          </div>

          <div class="input-row">
            <label class="control-label" for="saatini_kodepos">Kode Pos <span style="color:red;">*</span></label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                <input type="text" name="saatini_kodepos" id="saatini_kodepos" value="" maxlength="50" class="form-control" placeholder="Zip/Kode Pos" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="saatini_kodepos" generated="true"></label>
            </div>
          </div>

        </div>
        <!-- Right Column -->
        <div class="col span_1_of_2">
          <div class="sub-header">Pengalaman Kerja </div>
          <div>&nbsp;</div>

          <div class="input-row">
            <label class="control-label" for="satu_perusahaan">Pengalaman Kerja 1 (Pengalaman Paling Terakhir)</label><br><br>
            <label class="control-label" for="satu_perusahaan">Nama Perusahaan</label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-briefcase"></i></span>
                <input type="text" name="satu_perusahaan" id="satu_perusahaan" value="" maxlength="50" class="form-control" placeholder="Perusahaan" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="satu_perusahaan" generated="true"></label>
            </div>
          </div>
          <br><br>
          <div class="input-row">
            <label class="control-label" for="satu_jabatan">Jabatan</label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-briefcase"></i></span>
                <input type="text" name="satu_jabatan" id="satu_jabatan" value="" maxlength="50" class="form-control" placeholder="Jabatan" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="satu_jabatan" generated="true"></label>
            </div>
          </div>

          <div class="input-row">
            <label class="control-label" for="satu_tglmulai">Tanggal mulai</label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                <input type="text" name="satu_tglmulai" id="satu_tglmulai" value="" maxlength="50" class="form-control datepicker" placeholder="Tanggal Mulai dd-mm-yyyy" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="satu_tglmulai" generated="true"></label>
            </div>
          </div>

          <div class="input-row">
            <label class="control-label" for="is_masihkerja">Masih Bekerja diperusahaan ini ?</label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                <select name="is_masihkerja" id="is_masihkerja" class="form-control">
                  <!-- Add take away change options - change text twice per option to show in email results -->
                  <option value="" selected="selected">- Please Select Option -</option>
                  <option value="Ya">Ya</option>
                  <option value="Tidak">Tidak</option>
                </select>
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="is_masihkerja" generated="true"></label>
            </div>
          </div>

          <div class="input-row" id="satu_tglberakhir_row">
            <label class="control-label" for="satu_tglberakhir">Tanggal Berakhir<span style="color:red;">*</span></label></label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                <input type="text" name="satu_tglberakhir" id="satu_tglberakhir" value="" maxlength="50" class="form-control datepicker" placeholder="Tanggal Berakhir dd-mm-yyyy" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="satu_tglberakhir" generated="true"></label>
            </div>
          </div>

          <div class="input-row">
            <label class="control-label" for="satu_gaji">Gaji</label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-briefcase"></i></span>
                <input type="text" name="satu_gaji" id="satu_gaji" value="" maxlength="50" class="form-control" placeholder="Gaji" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="satu_gaji" generated="true"></label>
            </div>
          </div>

          <div class="input-row">
            <label class="control-label" for="satu_alasanpindah">Alasan Pindah</label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-briefcase"></i></span>
                <input type="text" name="satu_alasanpindah" id="satu_alasanpindah" value="" maxlength="50" class="form-control" placeholder="Alasan pindah" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="satu_alasanpindah" generated="true"></label>
            </div>
          </div>

          <div class="sub-header"></div>
          <br><br>

          <div class="input-row">
            <label class="control-label" for="dua_perusahaan">Pengalaman Kerja 2</label><br><br>
            <label class="control-label" for="dua_perusahaan">Nama Perusahaan</label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-briefcase"></i></span>
                <input type="text" name="dua_perusahaan" id="dua_perusahaan" value="" maxlength="50" class="form-control" placeholder="Perusahaan" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="dua_perusahaan" generated="true"></label>
            </div>
          </div>

          <div>&nbsp;</div>

          <div class="input-row">
            <label class="control-label" for="dua_jabatan">Jabatan</label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-briefcase"></i></span>
                <input type="text" name="dua_jabatan" id="dua_jabatan" value="" maxlength="50" class="form-control" placeholder="Jabatan" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="dua_jabatan" generated="true"></label>
            </div>
          </div>
          <div class="input-row">
            <label class="control-label" for="dua_tglmulai">Tanggal mulai</label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                <input type="text" name="dua_tglmulai" id="dua_tglmulai" value="" maxlength="50" class="form-control datepicker" placeholder="Tanggal Mulai dd-mm-yyyy" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="dua_tglmulai" generated="true"></label>
            </div>
          </div>

          <div class="input-row">
            <label class="control-label" for="dua_tglberakhir">Tanggal Berakhir</label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                <input type="text" name="dua_tglberakhir" id="dua_tglberakhir" value="" maxlength="50" class="form-control datepicker" placeholder="Tanggal Berakhir dd-mm-yyyy" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="dua_tglberakhir" generated="true"></label>
            </div>
          </div>

          <div class="input-row">
            <label class="control-label" for="dua_gaji">Gaji</label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-briefcase"></i></span>
                <input type="text" name="dua_gaji" id="dua_gaji" value="" maxlength="50" class="form-control" placeholder="Gaji" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="dua_gaji" generated="true"></label>
            </div>
          </div>

          <div class="input-row">
            <label class="control-label" for="dua_alasanpindah">Alasan Pindah</label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-briefcase"></i></span>
                <input type="text" name="dua_alasanpindah" id="dua_alasanpindah" value="" maxlength="50" class="form-control" placeholder="Alasan pindah" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="dua_alasanpindah" generated="true"></label>
            </div>
          </div>

          <div class="sub-header"></div>
          <br><br>
          <div class="input-row">
            <label class="control-label" for="tiga_perusahaan">Pengalaman Kerja 3</label><br><br>
            <label class="control-label" for="tiga_perusahaan">Nama Perusahaan</label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-briefcase"></i></span>
                <input type="text" name="tiga_perusahaan" id="tiga_perusahaan" value="" maxlength="50" class="form-control" placeholder="Perusahaan" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="tiga_perusahaan" generated="true"></label>
            </div>
          </div><br><br>

          <div class="input-row">
            <label class="control-label" for="tiga_jabatan">Jabatan</label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-briefcase"></i></span>
                <input type="text" name="tiga_jabatan" id="tiga_jabatan" value="" maxlength="50" class="form-control" placeholder="Jabatan" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="tiga_jabatan" generated="true"></label>
            </div>
          </div>

          <div class="input-row">
            <label class="control-label" for="tiga_tglmulai">Tanggal mulai</label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                <input type="text" name="tiga_tglmulai" id="tiga_tglmulai" value="" maxlength="50" class="form-control datepicker" placeholder="Tanggal Mulai dd-mm-yyyy" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="tiga_tglmulai" generated="true"></label>
            </div>
          </div>

          <div class="input-row">
            <label class="control-label" for="tiga_tglberakhir">Tanggal Berakhir</label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                <input type="text" name="tiga_tglberakhir" id="tiga_tglberakhir" value="" maxlength="50" class="form-control datepicker" placeholder="Tanggal Berakhir dd-mm-yyyy" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="tiga_tglberakhir" generated="true"></label>
            </div>
          </div>

          <div class="input-row">
            <label class="control-label" for="tiga_gaji">Gaji</label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-briefcase"></i></span>
                <input type="text" name="tiga_gaji" id="tiga_gaji" value="" maxlength="50" class="form-control" placeholder="Gaji" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="tiga_gaji" generated="true"></label>
            </div>
          </div>

          <div class="input-row">
            <label class="control-label" for="tiga_alasanpindah">Alasan Pindah</label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-briefcase"></i></span>
                <input type="text" name="tiga_alasanpindah" id="tiga_alasanpindah" value="" maxlength="50" class="form-control" placeholder="Alasan pindah" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="tiga_alasanpindah" generated="true"></label>
            </div>
          </div>

        </div>
      </div>

      <!-- Column Full Start -->
      <div class="section group">
        <div class="col span_1_of_1">
          <div class="sub-header" style="margin-bottom:-15px;">Informasi Kontak</div>
        </div>
        <!-- Column Left -->
        <div class="section group">
          <div class="col span_1_of_2">
            <div class="input-row">
              <div>&nbsp;</div>
              <label class="control-label" for="applicant_email">Email <span style="color:red;">*</span></label>
              <div class="inputGroupContainer">
                <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                  <input type="email" name="applicant_email" id="applicant_email" value="" maxlength="50" class="form-control" placeholder="Email" onKeyPress="return restrictChars(event, this)">
                </div>
                <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="applicant_email" generated="true"></label>
              </div>
            </div>
          </div>
          <!-- Column Right -->
          <div class="col span_1_of_2">
            <div>&nbsp;</div> 

            <div class="input-row">
              <label class="control-label" for="telp_hp">Telepon Seluler (HP)<span style="color:red;">*</span></label>
              <div class="inputGroupContainer">
                <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                  <input type="tel" name="telp_hp" id="telp_hp" value="" maxlength="50" class="form-control phone" placeholder="Telepon Seluler (HP)" onKeyPress="return restrictChars(event, this)">
                </div>
                <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="telp_hp" generated="true"></label>
              </div>
            </div>

            <div class="input-row">
              <label class="control-label" for="telp_rumah">Telepon Rumah</label>
              <div class="inputGroupContainer">
                <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                  <input type="tel" name="telp_rumah" id="telp_rumah" value="" maxlength="50" class="form-control phone" placeholder="Telepon Rumah" onKeyPress="return restrictChars(event, this)">
                </div>
                <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="telp_rumah" generated="true"></label>
              </div>
            </div>

          </div>
        </div>
      <!-- Column End -->

      <!-- Column Full Start -->
      <div class="section group">
        <div class="col span_1_of_1">
          <div class="sub-header" style="margin-bottom:-15px;">Pendidikan Formal</div>
        </div>
        <!-- Column Left -->
        <div class="section group">
          <div class="col span_1_of_2">
            <div>&nbsp;</div>

            <div class="input-row">
            <label class="control-label" for="sma_institusi">Pendidikan SMA/SMK</label><br><br>
            <label class="control-label" for="sma_institusi">Nama Institusi</label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
                <input type="text" name="sma_institusi" id="sma_institusi" value="" maxlength="50" class="form-control" placeholder="Nama Institusi" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="sma_institusi" generated="true"></label>
            </div>
          </div><br><br>

          <div class="input-row">
            <label class="control-label" for="sma_jurusan">Jurusan</label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
                <input type="text" name="sma_jurusan" id="sma_jurusan" value="" maxlength="50" class="form-control" placeholder="Jurusan" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="sma_jurusan" generated="true"></label>
            </div>
          </div>

          <div class="input-row">
            <label class="control-label" for="sma_progstudi">Program Studi</label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
                <input type="text" name="sma_progstudi" id="sma_progstudi" value="" maxlength="50" class="form-control" placeholder="Program Studi" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="sma_progstudi" generated="true"></label>
            </div>
          </div>

          <div class="input-row">
            <label class="control-label" for="sma_mulai">Tanggal mulai</label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                <input type="text" name="sma_mulai" id="sma_mulai" value="" maxlength="50" class="form-control datepicker" placeholder="Tanggal Mulai dd-mm-yyyy" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="sma_mulai" generated="true"></label>
            </div>
          </div>

          <div class="input-row">
            <label class="control-label" for="sma_akhir">Tanggal Berakhir</label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                <input type="text" name="sma_akhir" id="sma_akhir" value="" maxlength="50" class="form-control datepicker" placeholder="Tanggal Berakhir dd-mm-yyyy" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="sma_akhir" generated="true"></label>
            </div>
          </div>

          <div class="input-row">
            <label class="control-label" for="sma_nilai">Nilai Rata-rata</label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
                <input type="text" name="sma_nilai" id="sma_nilai" value="" maxlength="50" class="form-control" placeholder="IPK" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="sma_nilai" generated="true"></label>
            </div>
          </div>

          <div class="input-row">
            <label class="control-label" for="sma_karyailmiah">Skripsi/Karya Ilmiah yang pernah dibuat</label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
                <input type="text" name="sma_karyailmiah" id="sma_karyailmiah" value="" maxlength="150" class="form-control" placeholder="Skripsi/Karya ilmiah" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="sma_karyailmiah" generated="true"></label>
            </div>
          </div>

          <div class="sub-header"></div>
          <br><br>

          <div class="input-row">
            <label class="control-label" for="dipl_institusi">Pendidikan Diploma</label><br><br>
            <label class="control-label" for="dipl_institusi">Nama Institusi</label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
                <input type="text" name="dipl_institusi" id="dipl_institusi" value="" maxlength="50" class="form-control" placeholder="Nama Institusi" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="dipl_institusi" generated="true"></label>
            </div>
          </div><br><br>

          <div class="input-row">
            <label class="control-label" for="dipl_fakultas">Fakultas/Jurusan</label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
                <input type="text" name="dipl_fakultas" id="dipl_fakultas" value="" maxlength="50" class="form-control" placeholder="Fakultas/Jurusan" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="dipl_fakultas" generated="true"></label>
            </div>
          </div>

          <div class="input-row">
            <label class="control-label" for="dipl_progstudi">Program Studi</label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
                <input type="text" name="dipl_progstudi" id="dipl_progstudi" value="" maxlength="50" class="form-control" placeholder="Program Studi" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="dipl_progstudi" generated="true"></label>
            </div>
          </div>

          <div class="input-row">
            <label class="control-label" for="dipl_mulai">Tanggal mulai</label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                <input type="text" name="dipl_mulai" id="dipl_mulai" value="" maxlength="50" class="form-control datepicker" placeholder="Tanggal Mulai dd-mm-yyyy" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="dipl_mulai" generated="true"></label>
            </div>
          </div>

          <div class="input-row">
            <label class="control-label" for="dipl_akhir">Tanggal Berakhir</label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                <input type="text" name="dipl_akhir" id="dipl_akhir" value="" maxlength="50" class="form-control datepicker" placeholder="Tanggal Berakhir dd-mm-yyyy" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="dipl_akhir" generated="true"></label>
            </div>
          </div>

          <div class="input-row">
            <label class="control-label" for="dipl_ipk">IPK</label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
                <input type="text" name="dipl_ipk" id="dipl_ipk" value="" maxlength="50" class="form-control" placeholder="IPK" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="dipl_ipk" generated="true"></label>
            </div>
          </div>

          <div class="input-row">
            <label class="control-label" for="dipl_skripsi">Skripsi/Karya Ilmiah yang pernah dibuat</label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
                <input type="text" name="dipl_skripsi" id="dipl_skripsi" value="" maxlength="150" class="form-control" placeholder="Skripsi/Karya ilmiah" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="dipl_skripsi" generated="true"></label>
            </div>
          </div>

          <div class="sub-header"></div>
          <br><br>
          
          </div>

          <!-- Column Right -->
          <div class="col span_1_of_2">
            <div>&nbsp;</div>  

            <div class="input-row">
            <label class="control-label" for="s1_institusi">Pendidikan S1</label><br><br>
            <label class="control-label" for="s1_institusi">Nama Institusi</label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
                <input type="text" name="s1_institusi" id="s1_institusi" value="" maxlength="50" class="form-control" placeholder="Nama Institusi" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="s1_institusi" generated="true"></label>
            </div>
          </div><br><br>

          <div class="input-row">
            <label class="control-label" for="s1_fakultas">Fakultas/Jurusan</label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
                <input type="text" name="s1_fakultas" id="s1_fakultas" value="" maxlength="50" class="form-control" placeholder="Fakultas/Jurusan" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="s1_fakultas" generated="true"></label>
            </div>
          </div>

          <div class="input-row">
            <label class="control-label" for="s1_progstudi">Program Studi</label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
                <input type="text" name="s1_progstudi" id="s1_progstudi" value="" maxlength="50" class="form-control" placeholder="Program Studi" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="s1_progstudi" generated="true"></label>
            </div>
          </div>

          <div class="input-row">
            <label class="control-label" for="s1_mulai">Tanggal mulai</label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                <input type="text" name="s1_mulai" id="s1_mulai" value="" maxlength="50" class="form-control datepicker" placeholder="Tanggal Mulai dd-mm-yyyy" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="s1_mulai" generated="true"></label>
            </div>
          </div>

          <div class="input-row">
            <label class="control-label" for="s1_akhir">Tanggal Berakhir</label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                <input type="text" name="s1_akhir" id="s1_akhir" value="" maxlength="50" class="form-control datepicker" placeholder="Tanggal Berakhir dd-mm-yyyy" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="s1_akhir" generated="true"></label>
            </div>
          </div>

          <div class="input-row">
            <label class="control-label" for="s1_ipk">IPK</label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
                <input type="text" name="s1_ipk" id="s1_ipk" value="" maxlength="50" class="form-control" placeholder="IPK" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="s1_ipk" generated="true"></label>
            </div>
          </div>

          <div class="input-row">
            <label class="control-label" for="s1_skripsi">Skripsi/Karya Ilmiah yang pernah dibuat</label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
                <input type="text" name="s1_skripsi" id="s1_skripsi" value="" maxlength="150" class="form-control" placeholder="Skripsi/Karya ilmiah" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="s1_skripsi" generated="true"></label>
            </div>
          </div>

          <div class="sub-header"></div>
          <br><br>
          
          <div class="input-row">
            <label class="control-label" for="s2_institusi">Pendidikan S2</label><br><br>
            <label class="control-label" for="s2_institusi">Nama Institusi</label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
                <input type="text" name="s2_institusi" id="s2_institusi" value="" maxlength="50" class="form-control" placeholder="Nama Institusi" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="s2_institusi" generated="true"></label>
            </div>
          </div><br><br>

          <div class="input-row">
            <label class="control-label" for="s2_fakultas">Fakultas/Jurusan</label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
                <input type="text" name="s2_fakultas" id="s2_fakultas" value="" maxlength="50" class="form-control" placeholder="Fakultas/Jurusan" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="s2_fakultas" generated="true"></label>
            </div>
          </div>

          <div class="input-row">
            <label class="control-label" for="s2_progstudi">Program Studi</label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
                <input type="text" name="s2_progstudi" id="s2_progstudi" value="" maxlength="50" class="form-control" placeholder="Program Studi" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="s2_progstudi" generated="true"></label>
            </div>
          </div>

          <div class="input-row">
            <label class="control-label" for="s2_mulai">Tanggal mulai</label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                <input type="text" name="s2_mulai" id="s2_mulai" value="" maxlength="50" class="form-control datepicker" placeholder="Tanggal Mulai dd-mm-yyyy" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="s2_mulai" generated="true"></label>
            </div>
          </div>

          <div class="input-row">
            <label class="control-label" for="s2_akhir">Tanggal Berakhir</label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                <input type="text" name="s2_akhir" id="s2_akhir" value="" maxlength="50" class="form-control datepicker" placeholder="Tanggal Berakhir dd-mm-yyyy" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="s2_akhir" generated="true"></label>
            </div>
          </div>

          <div class="input-row">
            <label class="control-label" for="s2_ipk">IPK</label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
                <input type="text" name="s2_ipk" id="s2_ipk" value="" maxlength="50" class="form-control" placeholder="IPK" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="s2_ipk" generated="true"></label>
            </div>
          </div>

          <div class="input-row">
            <label class="control-label" for="s2_thesis">Thesis/Karya Ilmiah yang pernah dibuat</label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
                <input type="text" name="s2_thesis" id="s2_thesis" value="" maxlength="150" class="form-control" placeholder="Thesis/Karya ilmiah" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="s2_thesis" generated="true"></label>
            </div>
          </div>

          <div class="sub-header"></div>
          <br><br>

          </div>
        </div>
      </div>
      <!-- Column End -->

      <!-- Column Full Start -->
      <div class="section group">
        <div class="col span_1_of_1">
          <div class="sub-header" style="margin-bottom:-15px;">Pendidikan Non Formal (Kursus/Training)</div>
        </div>
        <!-- Column Left -->
        <div class="section group">
          <div class="col span_1_of_2">
            <div>&nbsp;</div>

            <div class="input-row">
            <label class="control-label" for="satu_namakursus">Kursus/Training 1</label><br><br>
            <label class="control-label" for="satu_namakursus">Nama Kursus/Training </label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
                <input type="text" name="satu_namakursus" id="satu_namakursus" value="" maxlength="50" class="form-control" placeholder="Nama Kursus/Training" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="satu_namakursus" generated="true"></label>
            </div>
          </div><br><br>

          <div class="input-row">
            <label class="control-label" for="satu_institusi">Institusi Penyelenggara</label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
                <input type="text" name="satu_institusi" id="satu_institusi" value="" maxlength="50" class="form-control" placeholder="Institusi Penyelenggara" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="satu_institusi" generated="true"></label>
            </div>
          </div>

          <div class="input-row">
            <label class="control-label" for="satu_mulaikursus">Tanggal mulai</label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                <input type="text" name="satu_mulaikursus" id="satu_mulaikursus" value="" maxlength="50" class="form-control datepicker" placeholder="Tanggal Mulai dd-mm-yyyy" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="satu_mulaikursus" generated="true"></label>
            </div>
          </div>

          <div class="input-row">
            <label class="control-label" for="satu_akhirkursus">Tanggal Berakhir</label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                <input type="text" name="satu_akhirkursus" id="satu_akhirkursus" value="" maxlength="50" class="form-control datepicker" placeholder="Tanggal Berakhir dd-mm-yyyy" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="satu_akhirkursus" generated="true"></label>
            </div>
          </div>

          <div class="input-row">
            <label class="control-label" for="field_0">Keterangan</label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
                <input type="text" name="satu_keterangan" id="satu_keterangan" value="" maxlength="50" class="form-control" placeholder="Keterangan" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="satu_keterangan" generated="true"></label>
            </div>
          </div>

          <div class="sub-header"></div>
          <br><br>

        </div>
          <!-- Column Right -->
          <div class="col span_1_of_2">
            <div>&nbsp;</div>
            <div class="input-row">
            <label class="control-label" for="dua_namakursus">Kursus/Training 2</label><br><br>
            <label class="control-label" for="dua_namakursus">Nama Kursus/Training </label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
                <input type="text" name="dua_namakursus" id="dua_namakursus" value="" maxlength="50" class="form-control" placeholder="Nama Kursus/Training" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="dua_namakursus" generated="true"></label>
            </div>
          </div><br><br>

          <div class="input-row">
            <label class="control-label" for="dua_institusi">Institusi Penyelenggara</label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
                <input type="text" name="dua_institusi" id="dua_institusi" value="" maxlength="50" class="form-control" placeholder="Institusi Penyelenggara" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="dua_institusi" generated="true"></label>
            </div>
          </div>

          <div class="input-row">
            <label class="control-label" for="dua_mulaikursus">Tanggal mulai</label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                <input type="text" name="dua_mulaikursus" id="dua_mulaikursus" value="" maxlength="50" class="form-control datepicker" placeholder="Tanggal Mulai dd-mm-yyyy" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="dua_mulaikursus" generated="true"></label>
            </div>
          </div>

          <div class="input-row">
            <label class="control-label" for="dua_akhirkursus">Tanggal Berakhir</label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                <input type="text" name="dua_akhirkursus" id="dua_akhirkursus" value="" maxlength="50" class="form-control datepicker" placeholder="Tanggal Berakhir dd-mm-yyyy" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="dua_akhirkursus" generated="true"></label>
            </div>
          </div>

          <div class="input-row">
            <label class="control-label" for="dua_keterangan">Keterangan</label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
                <input type="text" name="dua_keterangan" id="dua_keterangan" value="" maxlength="50" class="form-control" placeholder="Keterangan" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="dua_keterangan" generated="true"></label>
            </div>
          </div>

          <div class="sub-header"></div>
          <br><br>

          </div>
        </div>
      </div>
      <!-- Column End -->

       <!-- Column Full Start -->
      <div class="section group">
        <div class="col span_1_of_1">
          <div class="sub-header" style="margin-bottom:-15px;">Penguasaan Bahasa Asing</div>
        </div>
        <!-- Column Left -->
        <div class="section group">
          <div class="col span_1_of_2">
            <div>&nbsp;</div>

            <div class="input-row">
            <label class="control-label" for="satu_bahasaasing">Bahasa 1</label><br><br>
            <label class="control-label" for="satu_bahasaasing">Nama Bahasa </label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                <input type="text" name="satu_bahasaasing" id="satu_bahasaasing" value="" maxlength="50" class="form-control" placeholder="Bahasa" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="satu_bahasaasing" generated="true"></label>
            </div>
          </div>

          <div class="input-row">
            <label class="control-label" for="satu_lisan">Lisan</label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                <select name="satu_lisan" id="satu_lisan" class="form-control">
                  <!-- Add take away change options - change text twice per option to show in email results -->
                  <option value="" selected="selected">- Please Select Option -</option>
                  <option value="Kurang">Kurang</option>
                  <option value="Cukup">Cukup</option>
                  <option value="Baik">Baik</option>
                </select>
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="satu_lisan" generated="true"></label>
            </div>
          </div>

          <div class="input-row">
            <label class="control-label" for="satu_tulisan">Tulisan</label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                <select name="satu_tulisan" id="satu_tulisan" class="form-control">
                  <!-- Add take away change options - change text twice per option to show in email results -->
                  <option value="" selected="selected">- Please Select Option -</option>
                  <option value="Kurang">Kurang</option>
                  <option value="Cukup">Cukup</option>
                  <option value="Baik">Baik</option>
                </select>
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="satu_tulisan" generated="true"></label>
            </div>
          </div>

          <div class="sub-header"></div>
          <br><br>
          
        </div>
          <!-- Column Right -->
          <div class="col span_1_of_2">
            <div>&nbsp;</div>
            <div class="input-row">
            <label class="control-label" for="dua_bahasaasing">Bahasa 2</label><br><br>
            <label class="control-label" for="dua_bahasaasing">Nama Bahasa </label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                <input type="text" name="dua_bahasaasing" id="dua_bahasaasing" value="" maxlength="50" class="form-control" placeholder="Bahasa" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="dua_bahasaasing" generated="true"></label>
            </div>
          </div>

          <div class="input-row">
            <label class="control-label" for="dua_lisan">Lisan</label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                <select name="dua_lisan" id="dua_lisan" class="form-control">
                  <!-- Add take away change options - change text twice per option to show in email results -->
                  <option value="" selected="selected">- Please Select Option -</option>
                  <option value="Kurang">Kurang</option>
                  <option value="Cukup">Cukup</option>
                  <option value="Baik">Baik</option>
                </select>
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="dua_lisan" generated="true"></label>
            </div>
          </div>

          <div class="input-row">
            <label class="control-label" for="dua_tulisan">Tulisan</label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                <select name="dua_tulisan" id="dua_tulisan" class="form-control">
                  <!-- Add take away change options - change text twice per option to show in email results -->
                  <option value="" selected="selected">- Please Select Option -</option>
                  <option value="Kurang">Kurang</option>
                  <option value="Cukup">Cukup</option>
                  <option value="Baik">Baik</option>
                </select>
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="dua_tulisan" generated="true"></label>
            </div>
          </div>

          <div class="sub-header"></div>
          <br><br>

          </div>
        </div>
      </div>
      <!-- Column End -->


      <!-- Column Full Start -->
      <div class="section group">
        <div class="col span_1_of_1">
          <div class="sub-header" style="margin-bottom:-15px;">Informasi Anggota Keluarga (diisi minimal 2 anggota keluarga)</div>
        </div>
        <!-- Column Left -->
        <div class="section group">
          <div class="col span_1_of_2">
            <div>&nbsp;</div>

            <div class="input-row">
            <label class="control-label" for="satu_kel_hubungan">Anggota Keluarga 1</label><br><br>
            <label class="control-label" for="satu_kel_hubungan">Hubungan <span style="color:red;">*</span></label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input type="text" name="satu_kel_hubungan" id="satu_kel_hubungan" value="" maxlength="50" class="form-control" placeholder="Hubungan" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="satu_kel_hubungan" generated="true"></label>
            </div>
          </div><br><br>

          <div class="input-row">
            <label class="control-label" for="satu_kel_nama">Nama<span style="color:red;">*</span></label></label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input type="text" name="satu_kel_nama" id="satu_kel_nama" value="" maxlength="50" class="form-control" placeholder="Nama" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="satu_kel_nama" generated="true"></label>
            </div>
          </div>

          <div class="input-row">
            <label class="control-label" for="satu_kel_tgllahir">Tanggal Lahir<span style="color:red;">*</span></label></label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                <input type="text" name="satu_kel_tgllahir" id="satu_kel_tgllahir" value="" maxlength="50" class="form-control datepicker" placeholder="Tanggal Lahir dd-mm-yyyy" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="satu_kel_tgllahir" generated="true"></label>
            </div>
          </div>

          <div class="input-row">
            <label class="control-label" for="satu_kel_jeniskelamin">Jenis Kelamin<span style="color:red;">*</span></label></label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                <select name="satu_kel_jeniskelamin" id="satu_kel_jeniskelamin" class="form-control">
                  <!-- Add take away change options - change text twice per option to show in email results -->
                  <option value="" selected="selected">- Please Select Option -</option>
                  <option value="Laki-laki">Laki-laki</option>
                  <option value="Perempuan">Perempuan</option>
                </select>
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="satu_kel_jeniskelamin" generated="true"></label>
            </div>
          </div>

          <div class="input-row">
            <label class="control-label" for="satu_kel_pekerjaan">Pekerjaan<span style="color:red;">*</span></label></label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-briefcase"></i></span>
                <input type="text" name="satu_kel_pekerjaan" id="satu_kel_pekerjaan" value="" maxlength="50" class="form-control" placeholder="Pekerjaan" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="satu_kel_pekerjaan" generated="true"></label>
            </div>
          </div>
          
          <div class="sub-header"></div>
          <br><br>

          <div class="input-row">
            <label class="control-label" for="dua_kel_hubungan">Anggota Keluarga 2</label><br><br>
            <label class="control-label" for="dua_kel_hubungan">Hubungan<span style="color:red;">*</span></label></label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input type="text" name="dua_kel_hubungan" id="dua_kel_hubungan" value="" maxlength="50" class="form-control" placeholder="Hubungan" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="dua_kel_hubungan" generated="true"></label>
            </div>
          </div><br><br>

          <div class="input-row">
            <label class="control-label" for="dua_kel_nama">Nama<span style="color:red;">*</span></label></label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input type="text" name="dua_kel_nama" id="dua_kel_nama" value="" maxlength="50" class="form-control" placeholder="Nama" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="dua_kel_nama" generated="true"></label>
            </div>
          </div>

          <div class="input-row">
            <label class="control-label" for="dua_kel_tgllahir">Tanggal Lahir<span style="color:red;">*</span></label></label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                <input type="text" name="dua_kel_tgllahir" id="dua_kel_tgllahir" value="" maxlength="50" class="form-control datepicker" placeholder="Tanggal Lahir dd-mm-yyyy" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="dua_kel_tgllahir" generated="true"></label>
            </div>
          </div>

          <div class="input-row">
            <label class="control-label" for="dua_kel_jeniskelamin">Jenis Kelamin<span style="color:red;">*</span></label></label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                <select name="dua_kel_jeniskelamin" id="dua_kel_jeniskelamin" class="form-control">
                  <!-- Add take away change options - change text twice per option to show in email results -->
                  <option value="" selected="selected">- Please Select Option -</option>
                  <option value="Laki-laki">Laki-laki</option>
                  <option value="Perempuan">Perempuan</option>
                </select>
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="dua_kel_jeniskelamin" generated="true"></label>
            </div>
          </div>

          <div class="input-row">
            <label class="control-label" for="dua_kel_pekerjaan">Pekerjaan<span style="color:red;">*</span></label></label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-briefcase"></i></span>
                <input type="text" name="dua_kel_pekerjaan" id="dua_kel_pekerjaan" value="" maxlength="50" class="form-control" placeholder="Pekerjaan" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="dua_kel_pekerjaan" generated="true"></label>
            </div>
          </div>

          <div class="sub-header"></div>
          <br><br>

          <div class="input-row">
            <label class="control-label" for="tiga_kel_hubungan">Anggota Keluarga 3</label><br><br>
            <label class="control-label" for="tiga_kel_hubungan">Hubungan </label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input type="text" name="tiga_kel_hubungan" id="tiga_kel_hubungan" value="" maxlength="50" class="form-control" placeholder="Hubungan" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="tiga_kel_hubungan" generated="true"></label>
             </div>
          </div><br><br>

          <div class="input-row">
            <label class="control-label" for="tiga_kel_nama">Nama</label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input type="text" name="tiga_kel_nama" id="tiga_kel_nama" value="" maxlength="50" class="form-control" placeholder="Nama" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="tiga_kel_nama" generated="true"></label>
            </div>
          </div>

          <div class="input-row">
            <label class="control-label" for="tiga_kel_tgllahir">Tanggal Lahir</label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                <input type="text" name="tiga_kel_tgllahir" id="tiga_kel_tgllahir" value="" maxlength="50" class="form-control datepicker" placeholder="Tanggal Lahir dd-mm-yyyy" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="tiga_kel_tgllahir" generated="true"></label>
            </div>
          </div>

          <div class="input-row">
            <label class="control-label" for="tiga_kel_jeniskelamin">Jenis Kelamin</label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                <select name="tiga_kel_jeniskelamin" id="tiga_kel_jeniskelamin" class="form-control">
                  <!-- Add take away change options - change text twice per option to show in email results -->
                  <option value="" selected="selected">- Please Select Option -</option>
                  <option value="Laki-laki">Laki-laki</option>
                  <option value="Perempuan">Perempuan</option>
                </select>
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="tiga_kel_jeniskelamin" generated="true"></label>
            </div>
          </div>

          <div class="input-row">
            <label class="control-label" for="tiga_kel_pekerjaan">Pekerjaan</label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-briefcase"></i></span>
                <input type="text" name="tiga_kel_pekerjaan" id="tiga_kel_pekerjaan" value="" maxlength="50" class="form-control" placeholder="Pekerjaan" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="tiga_kel_pekerjaan" generated="true"></label>
            </div>
          </div>

          <div class="sub-header"></div>
          <br><br>

        </div>

          <!-- Column Right -->
          <div class="col span_1_of_2">
            <div>&nbsp;</div> 
            <div class="input-row">
            <label class="control-label" for="empat_kel_hubungan">Anggota Keluarga 4</label><br><br>
            <label class="control-label" for="empat_kel_hubungan">Hubungan </label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input type="text" name="empat_kel_hubungan" id="empat_kel_hubungan" value="" maxlength="50" class="form-control" placeholder="Hubungan" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="empat_kel_hubungan" generated="true"></label>
            </div>
          </div><br><br>

          <div class="input-row">
            <label class="control-label" for="empat_kel_nama">Nama</label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input type="text" name="empat_kel_nama" id="empat_kel_nama" value="" maxlength="50" class="form-control" placeholder="Nama" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="empat_kel_nama" generated="true"></label>
            </div>
          </div>

          <div class="input-row">
            <label class="control-label" for="empat_kel_tgllahir">Tanggal Lahir</label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                <input type="text" name="empat_kel_tgllahir" id="empat_kel_tgllahir" value="" maxlength="50" class="form-control datepicker" placeholder="Tanggal Lahir dd-mm-yyyy" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="empat_kel_tgllahir" generated="true"></label>
            </div>
          </div>

          <div class="input-row">
            <label class="control-label" for="empat_kel_jeniskelamin">Jenis Kelamin </label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                <select name="empat_kel_jeniskelamin" id="empat_kel_jeniskelamin" class="form-control">
                  <!-- Add take away change options - change text twice per option to show in email results -->
                  <option value="" selected="selected">- Please Select Option -</option>
                  <option value="Laki-laki">Laki-laki</option>
                  <option value="Perempuan">Perempuan</option>
                </select>
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="empat_kel_jeniskelamin" generated="true"></label>
            </div>
          </div>

          <div class="input-row">
            <label class="control-label" for="empat_kel_pekerjaan">Pekerjaan</label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-briefcase"></i></span>
                <input type="text" name="empat_kel_pekerjaan" id="empat_kel_pekerjaan" value="" maxlength="50" class="form-control" placeholder="Pekerjaan" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="empat_kel_pekerjaan" generated="true"></label>
            </div>
          </div>

          <div class="sub-header"></div>
          <br><br>

          <div class="input-row">
            <label class="control-label" for="lima_kel_hubungan">Anggota Keluarga 5</label><br><br>
            <label class="control-label" for="lima_kel_hubungan">Hubungan </label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input type="text" name="lima_kel_hubungan" id="lima_kel_hubungan" value="" maxlength="50" class="form-control" placeholder="Hubungan" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="lima_kel_hubungan" generated="true"></label>
            </div>
          </div><br><br>

          <div class="input-row">
            <label class="control-label" for="lima_kel_nama">Nama</label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input type="text" name="lima_kel_nama" id="lima_kel_nama" value="" maxlength="50" class="form-control" placeholder="Nama" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="lima_kel_nama" generated="true"></label>
            </div>
          </div>

          <div class="input-row">
            <label class="control-label" for="lima_kel_tgllahir">Tanggal Lahir</label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                <input type="text" name="lima_kel_tgllahir" id="lima_kel_tgllahir" value="" maxlength="50" class="form-control datepicker" placeholder="Tanggal Lahir dd-mm-yyyy" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="lima_kel_tgllahir" generated="true"></label>
            </div>
          </div>

          <div class="input-row">
            <label class="control-label" for="lima_kel_jeniskelamin">Jenis Kelamin </label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                <select name="lima_kel_jeniskelamin" id="lima_kel_jeniskelamin" class="form-control">
                  <!-- Add take away change options - change text twice per option to show in email results -->
                  <option value="" selected="selected">- Please Select Option -</option>
                  <option value="Laki-laki">Laki-laki</option>
                  <option value="Perempuan">Perempuan</option>
                </select>
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="lima_kel_jeniskelamin" generated="true"></label>
            </div>
          </div>

          <div class="input-row">
            <label class="control-label" for="lima_kel_pekerjaan">Pekerjaan</label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-briefcase"></i></span>
                <input type="text" name="lima_kel_pekerjaan" id="lima_kel_pekerjaan" value="" maxlength="50" class="form-control" placeholder="Pekerjaan" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="lima_kel_pekerjaan" generated="true"></label>
            </div>
          </div>

          <div class="sub-header"></div>
          <br><br>

          <div class="input-row">
            <label class="control-label" for="enam_kel_hubungan">Anggota Keluarga 6</label><br><br>
            <label class="control-label" for="enam_kel_hubungan">Hubungan </label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input type="text" name="enam_kel_hubungan" id="enam_kel_hubungan" value="" maxlength="50" class="form-control" placeholder="Hubungan" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="enam_kel_hubungan" generated="true"></label>
            </div>
          </div><br><br>

          <div class="input-row">
            <label class="control-label" for="enam_kel_nama">Nama</label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input type="text" name="enam_kel_nama" id="enam_kel_nama" value="" maxlength="50" class="form-control" placeholder="Nama" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="enam_kel_nama" generated="true"></label>
            </div>
          </div>

          <div class="input-row">
            <label class="control-label" for="enam_kel_tgllahir">Tanggal Lahir</label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                <input type="text" name="enam_kel_tgllahir" id="enam_kel_tgllahir" value="" maxlength="50" class="form-control datepicker" placeholder="Tanggal Lahir dd-mm-yyyy" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="enam_kel_tgllahir" generated="true"></label>
            </div>
          </div>

          <div class="input-row">
            <label class="control-label" for="enam_kel_jeniskelamin">Jenis Kelamin</label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                <select name="enam_kel_jeniskelamin" id="enam_kel_jeniskelamin" class="form-control">
                  <!-- Add take away change options - change text twice per option to show in email results -->
                  <option value="" selected="selected">- Please Select Option -</option>
                  <option value="Laki-laki">Laki-laki</option>
                  <option value="Perempuan">Perempuan</option>
                </select>
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="enam_kel_jeniskelamin" generated="true"></label>
            </div>
          </div>

          <div class="input-row">
            <label class="control-label" for="enam_kel_pekerjaan">Pekerjaan</label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-briefcase"></i></span>
                <input type="text" name="enam_kel_pekerjaan" id="enam_kel_pekerjaan" value="" maxlength="50" class="form-control" placeholder="Pekerjaan" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="enam_kel_pekerjaan" generated="true"></label>
            </div>
          </div>

          <div class="sub-header"></div>
          <br><br>

          </div>
        </div>
      </div>
      <!-- Column End -->


      <!-- Column Full Start -->
      <div class="section group">
        <div class="col span_1_of_1">
          <div class="sub-header" style="margin-bottom:-15px;">Informasi Kontak Darurat</div>
        </div>
        <!-- Column Left -->
        <div class="section group">
          <div class="col span_1_of_2">
            <div>&nbsp;</div>

            <div class="input-row">
            <label class="control-label" for="darurat_nama">Nama<span style="color:red;">*</span></label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input type="text" name="darurat_nama" id="darurat_nama" value="" maxlength="50" class="form-control" placeholder="Nama" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="darurat_nama" generated="true"></label>
            </div>
          </div>

          <div class="input-row">
            <label class="control-label" for="darurat_hubungan">Hubungan<span style="color:red;">*</span></label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input type="text" name="darurat_hubungan" id="darurat_hubungan" value="" maxlength="50" class="form-control" placeholder="Hubungan" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="darurat_hubungan" generated="true"></label>
            </div>
          </div>

          <div class="input-row">
              <label class="control-label" for="darurat_hp">Telepon Seluler (HP)<span style="color:red;">*</span></label>
              <div class="inputGroupContainer">
                <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                  <input type="tel" name="darurat_hp" id="darurat_hp" value="" maxlength="50" class="form-control phone" placeholder="Telepon Seluler (HP)" onKeyPress="return restrictChars(event, this)">
                </div>
                <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="darurat_hp" generated="true"></label>
              </div>
            </div>

            <div class="input-row">
              <label class="control-label" for="darurat_telp">Telepon Rumah</label>
              <div class="inputGroupContainer">
                <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                  <input type="tel" name="darurat_telp" id="darurat_telp" value="" maxlength="50" class="form-control phone" placeholder="Telepon Rumah" onKeyPress="return restrictChars(event, this)">
                </div>
                <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="darurat_telp" generated="true"></label>
              </div>
            </div>

          
          </div>

          <!-- Column Right -->
          <div class="col span_1_of_2">
            <div>&nbsp;</div>

            <div class="input-row">
            <label class="control-label" for="darurat_alamat">Alamat <span style="color:red;">*</span></label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                <input type="text" name="darurat_alamat" id="darurat_alamat" value="" maxlength="150" class="form-control" placeholder="Alamat" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="darurat_alamat" generated="true"></label>
            </div>
          </div>

          <div class="input-row">
            <label class="control-label" for="darurat_rtrw">RT/RW <span style="color:red;">*</span></label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                <input type="text" name="darurat_rtrw" id="darurat_rtrw" value="" maxlength="50" class="form-control" placeholder="RT/RW" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="darurat_rtrw" generated="true"></label>
            </div>
          </div>
          <div class="input-row">
            <label class="control-label" for="darurat_kelkec">Kelurahan/Kecamatan <span style="color:red;">*</span></label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                <input type="text" name="darurat_kelkec" id="darurat_kelkec" value="" maxlength="50" class="form-control" placeholder="Kel/Kec." onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="darurat_kelkec" generated="true"></label>
            </div>
          </div>

          <div class="input-row">
            <label class="control-label" for="darurat_kota">Kota<span style="color:red;">*</span></label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                <input type="text" name="darurat_kota" id="darurat_kota" value="" maxlength="50" class="form-control" placeholder="Kota" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="darurat_kota" generated="true"></label>
            </div>
          </div>

          <div class="input-row">
            <label class="control-label" for="darurat_propinsi">Propinsi<span style="color:red;">*</span></label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                <input type="text" name="darurat_propinsi" id="darurat_propinsi" value="" maxlength="50" class="form-control" placeholder="Propinsi" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="darurat_propinsi" generated="true"></label>
            </div>
          </div>

          <div class="input-row">
            <label class="control-label" for="darurat_kodepos">Kode Pos <span style="color:red;">*</span></label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                <input type="text" name="darurat_kodepos" id="darurat_kodepos" value="" maxlength="50" class="form-control" placeholder="Zip/Kode Pos" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="darurat_kodepos" generated="true"></label>
            </div>
          </div>

          </div>
        </div>
      </div>
      <!-- Column End -->

      <!-- Column Full Start -->
      <div class="section group">
        <div class="col span_1_of_1">
          <div class="sub-header" style="margin-bottom:-15px;">Riwayat Penyakit</div>
        </div>
        <!-- Column Left -->
        <div class="section group">
          <div class="col span_1_of_2">
            <div>&nbsp;</div>

            <div class="input-row">
            <label class="control-label" for="penyakit">Penyakit yang pernah diderita dalam waktu lama</label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-edit"></i></span>
                <input type="text" name="penyakit" id="penyakit" value="" maxlength="50" class="form-control" placeholder="Penyakit" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="penyakit" generated="true"></label>
            </div>
          </div>

          <div class="input-row">
            <label class="control-label" for="akibat_penyakit">Akibatnya</label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-edit"></i></span>
                <input type="text" name="akibat_penyakit" id="akibat_penyakit" value="" maxlength="50" class="form-control" placeholder="Akibatnya" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="akibat_penyakit" generated="true"></label>
            </div>
          </div>

          </div>

          <!-- Column Right -->
          <div class="col span_1_of_2">
            <div>&nbsp;</div>
            <div class="input-row">
            <label class="control-label" for="penyakit_mulai">Periode Mulai</label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                <input type="text" name="penyakit_mulai" id="penyakit_mulai" value="" maxlength="50" class="form-control datepicker" placeholder="Tanggal Mulai dd-mm-yyyy" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="penyakit_mulai" generated="true"></label>
            </div>
          </div>

          <div class="input-row">
            <label class="control-label" for="penyakit_akhir">Periode Berakhir</label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                <input type="text" name="penyakit_akhir" id="penyakit_akhir" value="" maxlength="50" class="form-control datepicker" placeholder="Tanggal Berakhir dd-mm-yyyy" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="penyakit_akhir" generated="true"></label>
            </div>
          </div>

          </div>
        </div>
      </div>
      <!-- Column End -->

      <!-- Column Full Start -->
      <div class="section group">
        <div class="col span_1_of_1">
          <div class="sub-header" style="margin-bottom:-15px;">Informasi Akun Bank</div>
        </div>
        <!-- Column Left -->
        <div class="section group">
          <div class="col span_1_of_2">
            <div>&nbsp;</div>

            <div class="input-row">
            <label class="control-label" for="nama_bank">Bank<span style="color:red;">*</span></label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
                <input type="text" name="nama_bank" id="nama_bank" value="" maxlength="50" class="form-control" placeholder="Nama Bank" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="nama_bank" generated="true"></label>
            </div>
          </div>

          <div class="input-row">
            <label class="control-label" for="nomor_rekening">Nomor Rekening<span style="color:red;">*</span></label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
                <input type="text" name="nomor_rekening" id="nomor_rekening" value="" maxlength="50" class="form-control" placeholder="Nomor Rekening" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="nomor_rekening" generated="true"></label>
            </div>
          </div>

          </div>

          <!-- Column Right -->
          <div class="col span_1_of_2">
            <div>&nbsp;</div>
            <div class="input-row">
            <label class="control-label" for="nama_rekening">Nama di Rekening<span style="color:red;">*</span></label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
                <input type="text" name="nama_rekening" id="nama_rekening" value="" maxlength="50" class="form-control" placeholder="Nama di Rekening" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="nama_rekening" generated="true"></label>
            </div>
          </div>

          <div class="input-row">
            <label class="control-label" for="cabang_rekening">Cabang<span style="color:red;">*</span></label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
                <input type="text" name="cabang_rekening" id="cabang_rekening" value="" maxlength="50" class="form-control" placeholder="Cabang" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="cabang_rekening" generated="true"></label>
            </div>
          </div>

          </div>
        </div>
      </div>
      <!-- Column End -->

       <!-- Column Full Start -->
      <div class="section group">
        <div class="col span_1_of_1">
          <div class="sub-header" style="margin-bottom:-15px;">Remunerasi & Fasilitas</div>
        </div>
        <!-- Column Left -->
        <div class="section group">
          <div class="col span_1_of_2">
            <div>&nbsp;</div>

            <div class="input-row">
            <label class="control-label" for="harapan_gaji">Gaji yang diharapkan <span style="color:red;">*</span></label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-briefcase"></i></span>
                <input type="text" name="harapan_gaji" id="harapan_gaji" value="" maxlength="50" class="form-control" placeholder="Gaji" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="harapan_gaji" generated="true"></label>
            </div>
          </div>

          <div class="input-row">
            <label class="control-label" for="harapan_fasilitas">Fasilitas lain yang diharapkan<span style="color:red;">*</span></label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-briefcase"></i></span>
                <input type="text" name="harapan_fasilitas" id="harapan_fasilitas" value="" maxlength="50" class="form-control" placeholder="Fasilitas" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="harapan_fasilitas" generated="true"></label>
            </div>
          </div>

          </div>

          <!-- Column Right -->
          <div class="col span_1_of_2">
            <div>&nbsp;</div>
            <div class="input-row">
            <label class="control-label" for="is_seluruhindo">Bersediakah ditempatkan di seluruh Indonesia <span style="color:red;">*</span></label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                <select name="is_seluruhindo" id="is_seluruhindo" class="form-control">
                  <!-- Add take away change options - change text twice per option to show in email results -->
                  <option value="" selected="selected">- Please Select Option -</option>
                  <option value="Ya">Ya</option>
                  <option value="Tidak">Tidak</option>
                </select>
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="is_seluruhindo" generated="true"></label>
            </div>
          </div>

          <div class="input-row" id="seluruhindo_false_row">
            <label class="control-label" for="seluruhindo_false">Alasan jika tidak bersedia <span style="color:red;">*</span></label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-briefcase"></i></span>
                <input type="text" required name="seluruhindo_false" id="seluruhindo_false" value="" maxlength="50" class="form-control" placeholder="Jika Tidak" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="seluruhindo_false" generated="true"></label>
            </div>
          </div>

           </div>
        </div>
      </div>
      <!-- Column End -->


      <!-- Column Full Start -->
      <div class="section group">
        <div class="col span_1_of_1">
          <div class="sub-header" style="margin-bottom:-15px;">Referensi</div>
        </div>
        <!-- Column Left -->
        <div class="section group">
          <div class="col span_1_of_2">
            <div>&nbsp;</div>

            <div class="input-row">
            <label class="control-label" for="referensi_nama">Referensi Perusahan Sebelumnya</label><br>
            <label class="control-label" for="referensi_nama">Nama</label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-briefcase"></i></span>
                <input type="text" name="referensi_nama" id="referensi_nama" value="" maxlength="50" class="form-control" placeholder="Nama" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="referensi_nama" generated="true"></label>
            </div>
          </div><br><br>

          <div class="input-row">
            <label class="control-label" for="referensi_perusahaan">Perusahaan</label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-briefcase"></i></span>
                <input type="text" name="referensi_perusahaan" id="referensi_perusahaan" value="" maxlength="50" class="form-control" placeholder="Perusahaan" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="referensi_perusahaan" generated="true"></label>
            </div>
          </div>

          <div class="input-row">
            <label class="control-label" for="referensi_telp">Telepon</label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                <input type="text" name="referensi_telp" id="referensi_telp" value="" maxlength="50" class="form-control" placeholder="Telepon" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="referensi_telp" generated="true"></label>
            </div>
          </div>

          <div class="input-row">
            <label class="control-label" for="referensi_jabatan">Jabatan</label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-briefcase"></i></span>
                <input type="text" name="referensi_jabatan" id="referensi_jabatan" value="" maxlength="50" class="form-control" placeholder="Jabatan" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="referensi_jabatan" generated="true"></label>
            </div>
          </div>

          <div class="input-row">
            <label class="control-label" for="cita_cita">Apa yang menjadi cita-cita hidup Anda</label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-briefcase"></i></span>
                <input type="text" name="cita_cita" id="cita_cita" value="" maxlength="50" class="form-control" placeholder="Cita-cita" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="cita_cita" generated="true"></label>
            </div>
          </div>

          
          </div>

          <!-- Column Right -->
          <div class="col span_1_of_2">
            <div>&nbsp;</div>

            <div class="input-row">
              <label class="control-label" for="is_kerjaastra">Recruitment Astra  </label><br>
            <label class="control-label" for="is_kerjaastra">Apakah anda pernah bekerja di Astra Group ?<span style="color:red;">*</span></label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                <select name="is_kerjaastra" id="is_kerjaastra" class="form-control">
                  <!-- Add take away change options - change text twice per option to show in email results -->
                  <option value="" selected="selected">- Please Select Option -</option>
                  <option value="Ya">Ya</option>
                  <option value="Tidak">Tidak</option>
                </select>
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="is_kerjaastra" generated="true"></label>
            </div>
          </div><br><br>

          <div class="input-row" id="kerjaastra_true_row">
            <label class="control-label" for="kerjaastra_true">Jika ya sebutkan<span style="color:red;">*</span></label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-briefcase"></i></span>
                <input type="text" required name="kerjaastra_true" id="kerjaastra_true" value="" maxlength="50" class="form-control" placeholder="Sebutkan" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="kerjaastra_true" generated="true"></label>
            </div>
          </div>

          <div class="input-row">
            <label class="control-label" for="is_psikotesastra">Apakah anda pernah psikotes di Astra Group ?  <span style="color:red;">*</span></label></label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                <select name="is_psikotesastra" id="is_psikotesastra" class="form-control">
                  <!-- Add take away change options - change text twice per option to show in email results -->
                  <option value="" selected="selected">- Please Select Option -</option>
                  <option value="Ya">Ya</option>
                  <option value="Tidak">Tidak</option>
                </select>
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="is_psikotesastra" generated="true"></label>
            </div>
          </div>

          <div class="input-row" id="psikotesastra_true_row">
            <label class="control-label" for="psikotesastra_true">Jika ya sebutkan <span style="color:red;">*</span></label></label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-briefcase"></i></span>
                <input type="text" required name="psikotesastra_true" id="psikotesastra_true" value="" maxlength="50" class="form-control" placeholder="Sebutkan" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="psikotesastra_true" generated="true"></label>
            </div>
          </div>

          <div class="input-row">
            <label class="control-label" for="referensi_lowongan">Darimana anda tahu lowongan ? <span style="color:red;">*</span> </label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                <select name="referensi_lowongan" id="referensi_lowongan" class="form-control">
                  <!-- Add take away change options - change text twice per option to show in email results -->
                  <option value="" selected="selected">- Please Select Option -</option>
                  <option value="Website SERA">Website SERA</option>
                  <option value="Situs Pencari Kerja">Situs Pencari Kerja</option>
                  <option value="Media Sosial">Media Sosial</option>
                  <option value="Jobfair">Job Fair</option>
                  <option value="Career Center Kampus">Career Center Kampus</option>
                  <option value="Referensi Internal">Referensi Internal</option>
                  <option value="Lainnya">Lainnya</option>
                </select>
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="referensi_lowongan" generated="true"></label>
              </div>
          </div>

          <div class="input-row" id="sumber_lowongan_row">
            <label class="control-label" for="sumber_lowongan"> Sumbernya<span style="color:red;">*</span></label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-briefcase"></i></span>
                <input type="text" required name="sumber_lowongan" id="sumber_lowongan" value="" maxlength="50" class="form-control" placeholder="Sebutkan Sumbernya" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="sumber_lowongan" generated="true"></label>
            </div>
          </div>

          
        </div>
      </div>
      
      <!-- Column End -->

      <!-- Column Full Start -->
      <div class="section group">
        <div class="col span_1_of_1">
          <div class="sub-header" style="margin-bottom:20px;"></div>
          <div class="input-row">
          <label class="control-label" for="urutan_peminatan"></label>
          <div class="inputGroupContainer"></div>
				        <div class="control-group">
                  <label class="control-label">Urutkan Peringkat Bidang Pekerjaan yang Diminati : <br><br> Silahkan drag and drop sesuai urutan peminatan. Urutan peringkat yang lebih tinggi dimulai dari kiri kemudian kekanan lalu kebawah<span style="color:red;">*</span></label>
					          <input type="text"  name ="urutan_peminatan" id="input-sortable" class="input-sortable demo-default" value="Sales, Service/Maintenance, Finance Accounting & Tax/Audit, Human Resource Development, Quality Management/Strategic Planning, Information Technology, Legal, Procurement, Customer Relation & Marketing, General Affair & Health Safety & Environment, Warehouse/Logistic/Shipping, Engineering">
				        </div>
				        <script src="{{ url('') }}/assets/js/drag.js"></script>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="urutan_peminatan" generated="true"></label>
              </div>
          </div>
        </div>
      </div>

      <!-- Column Full Start -->
      <div class="section group">
        <div class="col span_1_of_1">
          <div class="sub-header" style="margin-bottom:-15px;">Media Sosial</div>
        </div>
        <!-- Column Left -->
        <div class="section group">
          <div class="col span_1_of_2">

            <div>&nbsp;</div>

            <div class="input-row">
            <label class="control-label" for="linkedin">LinkedIn</label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input type="text" name="linkedin" id="linkedin" value="" maxlength="50" class="form-control" placeholder="LinkedIn" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="linkedin" generated="true"></label>
            </div>
          </div>

          <div class="input-row">
            <label class="control-label" for="facebook">Facebook</label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input type="text" name="facebook" id="facebook" value="" maxlength="50" class="form-control" placeholder="Facebook" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="facebook" generated="true"></label>
            </div>
          </div>

          </div>

          <!-- Column Right -->
          <div class="col span_1_of_2">
            <div>&nbsp;</div>
            <div class="input-row">
            <label class="control-label" for="twitter">Twitter</label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input type="text" name="twitter" id="twitter" value="" maxlength="50" class="form-control" placeholder="Twitter" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="twitter" generated="true"></label>
            </div>
          </div>

          <div class="input-row">
            <label class="control-label" for="instagram">Instagram</label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input type="text" name="instagram" id="instagram"  class="form-control" placeholder="Instagram" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="instagram" generated="true"></label>
            </div>
          </div>

          </div>
        </div>
      </div>
      <!-- Column End -->
      <!-- Full Column -->
      <div class="section group">
        <div class="col span_1_of_1" style="margin-top:-15px;">
          <div class="input-row">
            <div class="sub-header"></div>
            <div>&nbsp;</div>
            <div class="inputGroupContainer"> 
                  
                    <table>
                    <tr>
                      <td width="35"><input type="checkbox" checked name="is_realdata" id="is_realdata" value="1"  maxlength="50" onKeyPress="return restrictChars(event, this)"></td>
                      <td>&nbsp;</td>
                      <td><label class="control-label" for="is_realdata">Dengan ini saya menyatakan bahwa keterangan yang saya berikan adalah benar dan apabila terbukti tidak benar atau palsu maka saya bersedia untuk menerima sanksi sesuai dengan ketentuan yang berlaku</label></td>
                    </tr>
                    </table>

                  <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="is_realdata" generated="true"></label>
            </div>
            </div>
          </div>
          
          <div class="input-row" style="margin-bottom:-10px;">
            <div class="inputGroupContainer">
              <!-- For blue button change btn-default to btn-primary - You can remove button width:100%; to standard size -->
              <input type="submit" name="submit" value="Submit" id="btn" class="btn btn-primary btn-lg">
		      <div id="divMsg" style="display:none;"><img src="assets/img/loading-bar.gif" alt="Please wait." width="160" /></div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>


</body>
</html>
