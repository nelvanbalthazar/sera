
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
<script type="text/javascript" src = "http://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet" />
<script type="text/javascript" src="http://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<link rel="stylesheet" type="text/css" href="http://cdn.jsdelivr.net/bootstrap/3/css/bootstrap.css" />
<script type="text/javascript" src="http://cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
<link rel="stylesheet" type="text/css" href="http://cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />
<link rel="stylesheet" href="{{ url('') }}/assets/css/html5reset.css" media="all">
<link rel="stylesheet" href="{{ url('') }}/assets/css/col.css" media="all">
<link rel="stylesheet" href="{{ url('') }}/assets/css/1cols.css" media="all">
<link rel="stylesheet" href="{{ url('') }}/assets/css/2cols.css" media="all">
<link rel="shortcut icon" href="https://www.sera.astra.co.id/assets/assets_frontend/images/logo/icon.png">


<!-- jQuery Form Validation code -->
<script type="text/javascript" language="JavaScript">
// Basic example
// Basic example
$(document).ready(function () {
  $('#dtBasicExample').DataTable({
    // false to disable pagination (or any other option)
    "pagingType": "full_numbers",
    "searching": true,
    "ordering": true,
    
  });
  $('.dataTables_length').addClass('bs-select');
});


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
  });
  
}); 





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
    <div class="header">JOB APPLICANT LIST</div>
    <div>&nbsp;</div>
    <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th class="th-sm">Posisi

      </th>
      <th class="th-sm">Nama Lengkap

      </th>
      <th class="th-sm">Asal Kota (KTP)

      </th>
      <th class="th-sm">Usia

      </th>
      <th class="th-sm">Pengalaman

      </th>

       <th class="th-sm">Detail

      </th>
    </tr>
  </thead>
  <tbody>
    @foreach($applicant as $peserta)
    <tr>
      <td><?php echo ucwords(strtolower($peserta->posisi)); ?></td>
      <td><?php echo ucwords(strtolower($peserta->nama_lengkap)); ?></td>
      <td><?php echo ucwords(strtolower($peserta->ktp_kota)); ?></td>
      <td>
            <?php 
                $dateTime1 = date_create($peserta->tanggal_lahir);
                $dateTime2 = date_create(date("Y-m-d"));
                $interval = date_diff($dateTime1, $dateTime2);
                //echo date("Y-m-d"); 
                echo $interval->format('%y') . " Tahun";
            ?>
      </td>
      <td>
            <?php 
                //Pengalaman 1
                $dateTime1 = date_create($peserta->satu_tglmulai);
                $dateTime2 = date_create($peserta->satu_tglberakhir);
                $dateTime0 = date_create(date("Y-m-d"));
                if($peserta->is_masihkerja == "Ya")
                {
                    $interval1 = date_diff($dateTime1, $dateTime0);
                }
                else
                {
                    $interval1 = date_diff($dateTime1, $dateTime2);
                }
                

                //Pengalaman 2
                $dateTime3 = date_create($peserta->dua_tglmulai);
                $dateTime4 = date_create($peserta->dua_tglberakhir);
                $interval2 = date_diff($dateTime3, $dateTime4);
                
                //Pengalaman 3
                $dateTime5 = date_create($peserta->tiga_tglmulai);
                $dateTime6 = date_create($peserta->tiga_tglberakhir);
                $interval3 = date_diff($dateTime5, $dateTime6);
               
                //Total Pengalaman
                $intervalTotal = new DateTime('00:00');
                $intervalClone = clone $intervalTotal;
                $intervalTotal->add($interval1);
                $intervalTotal->add($interval2);
                $intervalTotal->add($interval3);

                echo $intervalClone->diff($intervalTotal)->format('%y'." Tahun " . '%m' . " Bulan");

            ?>
      </td>
      <td>
          <a href="{{ url('') }}/applicant/{{$peserta->id}}" target="_blank">Details</a>
      </td>
    </tr>
    @endforeach  
      
  </tbody>
  
</table>
  </div>
</div>


</body>
</html>
