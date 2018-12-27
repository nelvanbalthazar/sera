<html>

<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<meta name=Generator content="Microsoft Word 14 (filtered)">
<style>
<!--
 /* Font Definitions */
 @font-face
	{font-family:Calibri;
	panose-1:2 15 5 2 2 2 4 3 2 4;}
@font-face
	{font-family:Tahoma;
	panose-1:2 11 6 4 3 5 4 4 2 4;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{margin-top:0in;
	margin-right:0in;
	margin-bottom:10.0pt;
	margin-left:0in;
	line-height:115%;
	font-size:11.0pt;
	font-family:"Calibri","sans-serif";}
p.MsoAcetate, li.MsoAcetate, div.MsoAcetate
	{mso-style-link:"Balloon Text Char";
	margin:0in;
	margin-bottom:.0001pt;
	font-size:8.0pt;
	font-family:"Tahoma","sans-serif";}
p.MsoListParagraph, li.MsoListParagraph, div.MsoListParagraph
	{margin-top:0in;
	margin-right:0in;
	margin-bottom:10.0pt;
	margin-left:.5in;
	line-height:115%;
	font-size:11.0pt;
	font-family:"Calibri","sans-serif";}
p.MsoListParagraphCxSpFirst, li.MsoListParagraphCxSpFirst, div.MsoListParagraphCxSpFirst
	{margin-top:0in;
	margin-right:0in;
	margin-bottom:0in;
	margin-left:.5in;
	margin-bottom:.0001pt;
	line-height:115%;
	font-size:11.0pt;
	font-family:"Calibri","sans-serif";}
p.MsoListParagraphCxSpMiddle, li.MsoListParagraphCxSpMiddle, div.MsoListParagraphCxSpMiddle
	{margin-top:0in;
	margin-right:0in;
	margin-bottom:0in;
	margin-left:.5in;
	margin-bottom:.0001pt;
	line-height:115%;
	font-size:11.0pt;
	font-family:"Calibri","sans-serif";}
p.MsoListParagraphCxSpLast, li.MsoListParagraphCxSpLast, div.MsoListParagraphCxSpLast
	{margin-top:0in;
	margin-right:0in;
	margin-bottom:10.0pt;
	margin-left:.5in;
	line-height:115%;
	font-size:11.0pt;
	font-family:"Calibri","sans-serif";}
span.BalloonTextChar
	{mso-style-name:"Balloon Text Char";
	mso-style-link:"Balloon Text";
	font-family:"Tahoma","sans-serif";}
.MsoChpDefault
	{font-family:"Calibri","sans-serif";}
.MsoPapDefault
	{margin-bottom:10.0pt;
	line-height:115%;}
@page WordSection1
	{size:8.5in 11.0in;
	margin:1.0in 1.0in 1.0in 1.5in;}
div.WordSection1
	{page:WordSection1;}
 /* List Definitions */
 ol
	{margin-bottom:0in;}
ul
	{margin-bottom:0in;}
-->
</style>
<link rel="shortcut icon" href="https://www.sera.astra.co.id/assets/assets_frontend/images/logo/icon.png">
<!--<script src="{{ url('') }}/assets/header_js/jquery-1.12.3.min.js"></script>-->
<script src="{{ url('') }}/assets/header_js/jquery.min.js"></script>
<script type="text/javascript" src="{{ url('') }}/assets/header_js/jspdf.min.js"></script>
<script type="text/javascript" src="{{ url('') }}/assets/header_js/html2canvas.js"></script>
<script type="text/javascript">
function genPDF()
{
    /*html2canvas(document.body, {
        onrendered: function(canvas) {
            var img = canvas.toDataURL("image/png");
            var doc = new jsPDF();
            doc.addImage(img, 'JPEG' ,20,20);
            doc.save('test.pdf');
        }
    });*/
    
     var printContents = document.getElementById('content').innerHTML;
     var originalContents = document.body.innerHTML;
     document.body.innerHTML = printContents;
     window.print();
     document.body.innerHTML = originalContents;
    /* $('body').scrollTop(0);
        var selector = $(e.target).attr('myprint');
        createPDF(selector);*/
}

 /*var form, a4 = [595.28, 841.89]; // for a4 size paper width and height
$(document).ready(function () {
    $(".create_pdf").on("click", function (e) {
        $('body').scrollTop(0);
        var selector = $(e.target).attr('myprint');
        createPDF(selector);
    });
});
function createPDF(selector) {
    form = $(selector);
    getCanvas().then(function (canvas) {
        var cache_width = form.width()

        var
         img = canvas.toDataURL("image/png"),
         doc = new jsPDF({
             orientation:'l',
             pagesplit: true, 
             unit: 'px',
             format: 'a4'
         });
         
        doc.addImage(img, 'JPEG', 20, 20);
        doc.save('techumber-html-to-pdf.pdf');
        form.width(cache_width);
    });
}
function getCanvas() {

    //form.width((a4[0] * 1.33333) - 80).css('max-width', 'none');
    return html2canvas(form, {
        imageTimeout: 2000,
        removeContainer: true
    });
}
function createPDFClick(){} */


</script>
</head>

<body lang=EN-US>

<button class="create_pdf" onclick="genPDF();" id="btn">Print or Save as PDF</button><br>
<div id="editor"></div>
<div id="content">
<div class=WordSection1>

<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0 align=left
 style='border-collapse:collapse;border:none;margin-left:.1in;margin-right:
 .1in'>
 <tr style='height:116.4pt'>
  <td width=301 valign=top style='width:180.6pt;padding:0in 5.4pt 0in 5.4pt;
  height:116.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><img width=253 height=118 src="{{ url('') }}/assets/img/image001.png" align=left
  hspace=12></p>

  </td>
  <td width=396 valign=top style='width:3.3in;padding:0in 5.4pt 0in 5.4pt;
  height:116.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;text-indent:
  45.0pt;line-height:normal'><b><span style='font-size:12.0pt'>&nbsp;</span></b></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;text-indent:
  45.0pt;line-height:normal'><b><span style='font-size:12.0pt'>&nbsp;</span></b></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;text-indent:
  45.0pt;line-height:normal'><b><span style='font-size:18.0pt'>APPLICANT DATA</span></b></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;text-indent:
  45.0pt;line-height:normal'><b><span style='font-size:12.0pt'>&nbsp;</span></b></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:14.0pt'>Posisi yang dilamar : <u><?php echo ucwords(strtolower($peserta->posisi)); ?></u>
  </span></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b><span style='font-size:12.0pt'>&nbsp;</span></b></p>
  
  </td>
  <td width=285 valign=top style='width:171.0pt;padding:0in 5.4pt 0in 5.4pt;
  height:116.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b><span style='font-size:12.0pt'><img width=179 height=221
  id="Picture 4" src="{{ url('') }}/image/{{$peserta->pas_foto}}"></span></b></p>
  </td>
 </tr>
</table>

<p class=MsoNormal style='text-indent:45.0pt'><b><span style='font-size:12.0pt;
line-height:115%'>&nbsp;</span></b></p>

<p class=MsoNormal><b><span style='font-size:12.0pt;line-height:115%'>&nbsp;</span></b></p>

<p class=MsoNormal style='text-indent:45.0pt'><b><span style='font-size:12.0pt;
line-height:115%'>&nbsp;</span></b></p>

<p class=MsoNormal style='text-indent:45.0pt'><b><span style='font-size:12.0pt;
line-height:115%'>&nbsp;</span></b></p>

<p class=MsoListParagraph style='margin-left:-.5in;text-indent:45.0pt'><span
style='font-size:12.0pt;line-height:115%'>&nbsp;</span></p>

<p class=MsoNormal style='margin-left:-.5in'><span style='font-size:12.0pt;
line-height:115%'>&nbsp;</span></p>

<p class=MsoNormal style='margin-left:-.5in'><span style='font-size:12.0pt;
line-height:115%'>&nbsp;</span></p>

<p class=MsoListParagraphCxSpFirst style='margin-left:9.0pt'><span
style='font-size:12.0pt;line-height:115%'>&nbsp;</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:9.0pt'><span
style='font-size:12.0pt;line-height:115%'>&nbsp;</span></p>

<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0 width=1441
 style='width:864.45pt;margin-left:8.7pt;border-collapse:collapse;border:none'>
 <tr>
  <td width=443 valign=top style='width:265.8pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpMiddle style='margin-top:0in;margin-right:0in;
  margin-bottom:0in;margin-left:49.5pt;margin-bottom:.0001pt;text-indent:-.25in;
  line-height:normal'><span style='font-size:12.0pt'>1.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span><span style='font-size:12.0pt'>Nama Lengkap :</span></p>
  </td>
  <td width=998 colspan=5 valign=top style='width:598.65pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpLast style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'><u><?php echo ucwords(strtolower($peserta->nama_lengkap)); ?></u></span></p>
  </td>
 </tr>
 <tr>
  <td width=443 valign=top style='width:265.8pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpFirst style='margin-top:0in;margin-right:0in;
  margin-bottom:0in;margin-left:49.5pt;margin-bottom:.0001pt;text-indent:-.25in;
  line-height:normal'><span style='font-size:12.0pt'>2.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span><span style='font-size:12.0pt'>Tempat/Tanggal Lahir :</span></p>
  </td>
  <td width=998 colspan=5 valign=top style='width:598.65pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpLast style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'><u><?php echo ucwords(strtolower($peserta->tempat_lahir)) . " / " . $peserta->tanggal_lahir ;?></u></span></p>
  </td>
 </tr>
 <tr>
  <td width=443 valign=top style='width:265.8pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraph style='margin-top:0in;margin-right:0in;margin-bottom:
  0in;margin-left:49.5pt;margin-bottom:.0001pt;text-indent:-.25in;line-height:
  normal'><span style='font-size:12.0pt'>3.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span><span style='font-size:12.0pt'>Jenis Kelamin :</span></p>
  </td>
  <td width=329 colspan=3 valign=top style='width:197.25pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt'><u>{{$peserta->jenis_kelamin}}</span></u></p>
  </td>
  <td width=210 valign=top style='width:125.7pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt'>Golongan Darah :</span></p>
  </td>
  <td width=460 valign=top style='width:275.7pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraph style='margin:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt'><u>{{$peserta->golongan_darah}}</u></span></p>
  </td>
 </tr>
 <tr>
  <td width=443 valign=top style='width:265.8pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpFirst style='margin-top:0in;margin-right:0in;
  margin-bottom:0in;margin-left:49.5pt;margin-bottom:.0001pt;text-indent:-.25in;
  line-height:normal'><span style='font-size:12.0pt'>4.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span><span style='font-size:12.0pt'>Status Pernikahan :</span></p>
  </td>
  <td width=329 colspan=3 valign=top style='width:197.25pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpMiddle style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'><u>{{$peserta->status_pernikahan}}</u></span></p>
  </td>
  <td width=210 valign=top style='width:125.7pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpMiddle style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'>Tanggal Menikah : </span></p>
  </td>
  <td width=460 valign=top style='width:275.7pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpLast style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'><u><?php ucwords(strtolower($peserta->tanggal_nikah)); ?></u></span></p>
  </td>
 </tr>
 <tr>
  <td width=443 valign=top style='width:265.8pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraph style='margin-top:0in;margin-right:0in;margin-bottom:
  0in;margin-left:49.5pt;margin-bottom:.0001pt;text-indent:-.25in;line-height:
  normal'><span style='font-size:12.0pt'>5.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span><span style='font-size:12.0pt'>Agama : </span></p>
  </td>
  <td width=998 colspan=5 valign=top style='width:598.65pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt'><u>{{$peserta->agama}}</u></span></p>
  </td>
 </tr>
 <tr>
  <td width=443 valign=top style='width:265.8pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpFirst style='margin-top:0in;margin-right:0in;
  margin-bottom:0in;margin-left:49.5pt;margin-bottom:.0001pt;text-indent:-.25in;
  line-height:normal'><span style='font-size:12.0pt'>6.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span><span style='font-size:12.0pt'>Nomor KTP :</span></p>
  </td>
  <td width=329 colspan=3 valign=top style='width:197.25pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpMiddle style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'><u>{{$peserta->nomor_ktp}}</u></span></p>
  </td>
  <td width=210 valign=top style='width:125.7pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpMiddle style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'>NPWP :</span></p>
  </td>
  <td width=460 valign=top style='width:275.7pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpLast style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'><u>{{$peserta->npwp}}</u></span></p>
  </td>
 </tr>
 <tr>
  <td width=443 valign=top style='width:265.8pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpFirst style='margin-top:0in;margin-right:0in;
  margin-bottom:0in;margin-left:49.5pt;margin-bottom:.0001pt;text-indent:-.25in;
  line-height:normal'><span style='font-size:12.0pt'>7.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span><span style='font-size:12.0pt'>No. BPJS Ketenagakerjaan :</span></p>
  </td>
  <td width=329 colspan=3 valign=top style='width:197.25pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpMiddle style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'><u>{{$peserta->bpjs_tk}}</u> </span></p>
  </td>
  <td width=210 valign=top style='width:125.7pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpMiddle style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'>BPJS Kesehatan :</span></p>
  </td>
  <td width=460 valign=top style='width:275.7pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpLast style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'><u>{{$peserta->bpjs_kes}}</u></span></p>
  </td>
 </tr>
 <tr>
  <td width=443 valign=top style='width:265.8pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpFirst style='margin-top:0in;margin-right:0in;
  margin-bottom:0in;margin-left:49.5pt;margin-bottom:.0001pt;text-indent:-.25in;
  line-height:normal'><span style='font-size:12.0pt'>8.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span><span style='font-size:12.0pt'>Telepon Seluler :</span></p>
  </td>
  <td width=329 colspan=3 valign=top style='width:197.25pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpMiddle style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'><u>{{$peserta->telp_hp}}</u></span></p>
  </td>
  <td width=210 valign=top style='width:125.7pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpMiddle style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'>Email :</span></p>
  </td>
  <td width=460 valign=top style='width:275.7pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpLast style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'><u>{{$peserta->applicant_email}}</u></span></p>
  </td>
 </tr>
 <tr style='height:11.65pt'>
  <td width=443 rowspan=4 valign=top style='width:265.8pt;padding:0in 5.4pt 0in 5.4pt;
  height:11.65pt'>
  <p class=MsoListParagraphCxSpFirst style='margin-top:0in;margin-right:0in;
  margin-bottom:0in;margin-left:49.5pt;margin-bottom:.0001pt;text-indent:-.25in;
  line-height:normal'><span style='font-size:12.0pt'>9.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span><span style='font-size:12.0pt'>Alamat tempat tinggal saat ini :</span></p>
  </td>
  <td width=998 colspan=5 valign=top style='width:598.65pt;padding:0in 5.4pt 0in 5.4pt;
  height:11.65pt'>
  <p class=MsoListParagraphCxSpLast style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'><u><?php echo ucwords(strtolower($peserta->saatini_alamat)); ?></u></span></p>
  </td>
 </tr>
 <tr>
  <td width=111 valign=top style='width:66.45pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt'>RT / RW :</span></p>
  </td>
  <td width=218 colspan=2 valign=top style='width:130.8pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-left:8px;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt'><u><?php echo ucwords(strtolower($peserta->saatini_rtrw)); ?></u></span></p>
  </td>
  <td width=210 valign=top style='width:125.7pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpFirst style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'>Kelurahan/Kecamatan : </span></p>
  </td>
  <td width=460 valign=top style='width:275.7pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpLast style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'><u><?php echo ucwords(strtolower($peserta->saatini_kelkec)); ?><u></span></p>
  </td>
 </tr>
 <tr>
  <td width=111 valign=top style='width:66.45pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt'>Kota :</span></p>
  </td>
  <td width=218 colspan=2 valign=top style='width:130.8pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpFirst style='margin:0in;margin-bottom:.0001pt;margin-left:8px;
  line-height:normal'><span style='font-size:12.0pt'><u><?php echo ucwords(strtolower($peserta->saatini_kota)); ?></u></span></p>
  </td>
  <td width=210 valign=top style='width:125.7pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpMiddle style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'>Propinsi :</span></p>
  </td>
  <td width=460 valign=top style='width:275.7pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpLast style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'><u><?php echo ucwords(strtolower($peserta->saatini_propinsi)); ?></u></span></p>
  </td>
 </tr>
 <tr>
  <td width=111 valign=top style='width:66.45pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt'>Kode Pos :</span></p>
  </td>
  <td width=218 colspan=2 valign=top style='width:130.8pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;margin-left:8px;line-height:
  normal'><span style='font-size:12.0pt'><u><?php echo ucwords(strtolower($peserta->saatini_kodepos)); ?></u> </span></p>
  </td>
  <td width=669 colspan=2 valign=top style='width:401.4pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraph style='margin:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt'>&nbsp;</span></p>
  </td>
 </tr>
 <tr>
  <td width=443 rowspan=4 valign=top style='width:265.8pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpFirst style='margin-top:0in;margin-right:0in;
  margin-bottom:0in;margin-left:49.5pt;margin-bottom:.0001pt;text-indent:-.25in;
  line-height:normal'><span style='font-size:12.0pt'>10.<span style='font:7.0pt "Times New Roman"'>&nbsp;
  </span></span><span style='font-size:12.0pt'>Alamat di KTP  </span></p>
  </td>
  <td width=998 colspan=5 valign=top style='width:598.65pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpLast style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'><u><?php echo ucwords(strtolower($peserta->ktp_alamat)); ?></u></span></p>
  </td>
 </tr>
 <tr>
  <td width=121 colspan=2 valign=top style='width:72.45pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt'>RT / RW :</span></p>
  </td>
  <td width=208 valign=top style='width:124.8pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpFirst style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'><u><?php echo ucwords(strtolower($peserta->ktp_rtrw)); ?></u></span></p>
  </td>
  <td width=210 valign=top style='width:125.7pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpMiddle style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'>Kelurahan/Kecamatan :</span></p>
  </td>
  <td width=460 valign=top style='width:275.7pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpLast style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'><u><?php echo ucwords(strtolower($peserta->ktp_kelkec)); ?></u></span></p>
  </td>
 </tr>
 <tr>
  <td width=121 colspan=2 valign=top style='width:72.45pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt'>Kota :</span></p>
  </td>
  <td width=208 valign=top style='width:124.8pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt'><u><?php echo ucwords(strtolower($peserta->ktp_kota)); ?></u></span></p>
  </td>
  <td width=210 valign=top style='width:125.7pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpFirst style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'>Propinsi :</span></p>
  </td>
  <td width=460 valign=top style='width:275.7pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpLast style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'><u><?php echo ucwords(strtolower($peserta->ktp_propinsi)); ?></u></span></p>
  </td>
 </tr>
 <tr>
  <td width=121 colspan=2 valign=top style='width:72.45pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt'>Kode Pos :</span></p>
  </td>
  <td width=208 valign=top style='width:124.8pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpFirst style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'><u><?php echo ucwords(strtolower($peserta->ktp_kodepos)); ?></u></span></p>
  </td>
  <td width=210 valign=top style='width:125.7pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpMiddle style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'>&nbsp;</span></p>
  </td>
  <td width=460 valign=top style='width:275.7pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpLast style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'>&nbsp;</span></p>
  </td>
 </tr>
 <tr>
  <td width=443 valign=top style='width:265.8pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpFirst style='margin-top:0in;margin-right:0in;
  margin-bottom:0in;margin-left:49.5pt;margin-bottom:.0001pt;text-indent:-.25in;
  line-height:normal'><span style='font-size:12.0pt'>11.<span style='font:7.0pt "Times New Roman"'>&nbsp;
  </span></span><span style='font-size:12.0pt'>Kontak Darurat </span></p>
  </td>
  <td width=998 colspan=5 valign=top style='width:598.65pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpLast style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'>&nbsp;</span></p>
  </td>
 </tr>
 <tr>
  <td width=443 valign=top style='width:265.8pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt'>&nbsp;</span></p>
  </td>
  <td width=121 colspan=2 valign=top style='width:72.45pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpFirst style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'>Nama :</span></p>
  </td>
  <td width=877 colspan=3 valign=top style='width:526.2pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpLast style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'><u><?php echo ucwords(strtolower($peserta->darurat_nama)); ?></u></span></p>
  </td>
 </tr>
 <tr>
  <td width=443 valign=top style='width:265.8pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpFirst style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'>&nbsp;</span></p>
  </td>
  <td width=121 colspan=2 valign=top style='width:72.45pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpMiddle style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'>Hubungan :</span></p>
  </td>
  <td width=208 valign=top style='width:124.8pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpMiddle style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'><u><?php echo ucwords(strtolower($peserta->darurat_hubungan)); ?></u></span></p>
  </td>
  <td width=210 valign=top style='width:125.7pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpMiddle style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'>Telepon Seluler (HP) :</span></p>
  </td>
  <td width=460 valign=top style='width:275.7pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpLast style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'><u><?php echo ucwords(strtolower($peserta->darurat_hp)); ?></u></span></p>
  </td>
 </tr>
 <tr>
  <td width=443 valign=top style='width:265.8pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraph style='margin:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt'>&nbsp;</span></p>
  </td>
  <td width=121 colspan=2 valign=top style='width:72.45pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt'>Alamat :</span></p>
  </td>
  <td width=877 colspan=3 valign=top style='width:526.2pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraph style='margin:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt'><u><?php echo ucwords(strtolower($peserta->darurat_alamat)); ?></u></span></p>
  </td>
 </tr>
 <tr>
  <td width=443 valign=top style='width:265.8pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraph style='margin:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt'>&nbsp;</span></p>
  </td>
  <td width=121 colspan=2 valign=top style='width:72.45pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt'>Kota :</span></p>
  </td>
  <td width=208 valign=top style='width:124.8pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt'><u><?php echo ucwords(strtolower($peserta->darurat_kota)); ?></u> </span></p>
  </td>
  <td width=210 valign=top style='width:125.7pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt'>Propinsi :</span></p>
  </td>
  <td width=460 valign=top style='width:275.7pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt'><u><?php echo ucwords(strtolower($peserta->darurat_propinsi)); ?></u></span></p>
  </td>
 </tr>
 <tr>
  <td width=443 valign=top style='width:265.8pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpFirst style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'>&nbsp;</span></p>
  </td>
  <td width=121 colspan=2 valign=top style='width:72.45pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpMiddle style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'>RT / RW :</span></p>
  </td>
  <td width=208 valign=top style='width:124.8pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpLast style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'><u><?php echo ucwords(strtolower($peserta->darurat_rtrw)); ?></u></span></p>
  </td>
  <td width=210 valign=top style='width:125.7pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt'>Kelurahan/Kecamatan :</span></p>
  </td>
  <td width=460 valign=top style='width:275.7pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraph style='margin-top:0in;margin-right:144.9pt;
  margin-bottom:0in;margin-left:0in;margin-bottom:.0001pt;line-height:normal'><span
  style='font-size:12.0pt'><u><?php echo ucwords(strtolower($peserta->darurat_kelkec)); ?></u></span></p>
  </td>
 </tr>
 <tr>
  <td width=443 valign=top style='width:265.8pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraph style='margin:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt'>&nbsp;</span></p>
  </td>
  <td width=121 colspan=2 valign=top style='width:72.45pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt'>Kode Pos :</span></p>
  </td>
  <td width=208 valign=top style='width:124.8pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt'><u><?php echo ucwords(strtolower($peserta->darurat_kodepos)); ?></u></span></p>
  </td>
  <td width=210 valign=top style='width:125.7pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpFirst style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'>&nbsp;</span></p>
  </td>
  <td width=460 valign=top style='width:275.7pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpLast style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'>&nbsp;</span></p>
  </td>
 </tr>
 <tr height=0>
  <td width=443 style='border:none'></td>
  <td width=111 style='border:none'></td>
  <td width=10 style='border:none'></td>
  <td width=208 style='border:none'></td>
  <td width=210 style='border:none'></td>
  <td width=460 style='border:none'></td>
 </tr>
</table>

<p class=MsoListParagraphCxSpFirst style='margin-left:9.0pt'><span
style='font-size:12.0pt;line-height:115%'>&nbsp;</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:207.0pt;text-indent:
45.0pt'><span style='font-size:12.0pt;line-height:115%'>&nbsp;</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:.75in;text-indent:-13.5pt'><span
style='font-size:12.0pt;line-height:115%'>12.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span style='font-size:12.0pt;line-height:115%'>Pendidikan Formal</span></p>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 width=920
 style='width:552.15pt;margin-left:73.05pt;border-collapse:collapse;border:
 none'>
 <tr style='height:20.4pt'>
  <td width=116 valign=top style='width:69.7pt;border:solid windowtext 1.0pt;
  background:#D9D9D9;padding:0in 5.4pt 0in 5.4pt;height:20.4pt'>
  <p class=MsoListParagraphCxSpMiddle style='margin:0in;margin-bottom:.0001pt;
  text-indent:45.0pt;line-height:normal'><span style='font-size:12.0pt'>&nbsp;</span></p>
  </td>
  <td width=191 valign=top style='width:114.65pt;border:solid windowtext 1.0pt;
  border-left:none;background:#D9D9D9;padding:0in 5.4pt 0in 5.4pt;height:20.4pt'>
  <p class=MsoListParagraphCxSpMiddle align=center style='margin:0in;
  margin-bottom:.0001pt;text-align:center;line-height:normal'><span
  style='font-size:12.0pt'>Nama Instusi</span></p>
  </td>
  <td width=188 valign=top style='width:112.75pt;border:solid windowtext 1.0pt;
  border-left:none;background:#D9D9D9;padding:0in 5.4pt 0in 5.4pt;height:20.4pt'>
  <p class=MsoListParagraphCxSpMiddle align=center style='margin:0in;
  margin-bottom:.0001pt;text-align:center;line-height:normal'><span
  style='font-size:12.0pt'>Fakultas / Jurusan</span></p>
  </td>
  <td width=124 valign=top style='width:74.1pt;border:solid windowtext 1.0pt;
  border-left:none;background:#D9D9D9;padding:0in 5.4pt 0in 5.4pt;height:20.4pt'>
  <p class=MsoListParagraphCxSpMiddle align=center style='margin:0in;
  margin-bottom:.0001pt;text-align:center;line-height:normal'><span
  style='font-size:12.0pt'>Prog. Studi</span></p>
  </td>
  <td width=161 valign=top style='width:96.8pt;border:solid windowtext 1.0pt;
  border-left:none;background:#D9D9D9;padding:0in 5.4pt 0in 5.4pt;height:20.4pt'>
  <p class=MsoListParagraphCxSpLast align=center style='margin:0in;margin-bottom:
  .0001pt;text-align:center;line-height:normal'><span style='font-size:12.0pt'>Periode (Y-m-d)</span></p>
  </td>
  <td width=140 valign=top style='width:84.15pt;border:solid windowtext 1.0pt;
  border-left:none;background:#D9D9D9;padding:0in 5.4pt 0in 5.4pt;height:20.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:12.0pt'>IPK / Nilai Rata-rata</span></p>
  </td>
 </tr>
 <tr style='height:19.55pt'>
  <td width=116 valign=top style='width:69.7pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt;height:19.55pt'>
  <p class=MsoListParagraphCxSpFirst style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'>SMA</span></p>
  </td>
  <td width=191 valign=top style='width:114.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:19.55pt'>
  <p class=MsoListParagraphCxSpMiddle style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'><?php echo ucwords(strtolower($peserta->sma_institusi)); ?></span></p>
  </td>
  <td width=188 valign=top style='width:112.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:19.55pt'>
  <p class=MsoListParagraphCxSpMiddle style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'><?php echo ucwords(strtolower($peserta->sma_jurusan)); ?></span></p>
  </td>
  <td width=124 valign=top style='width:74.1pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:19.55pt'>
  <p class=MsoListParagraphCxSpMiddle style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'><?php echo ucwords(strtolower($peserta->sma_progstudi)); ?></span></p>
  </td>
  <td width=161 valign=top style='width:96.8pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:19.55pt'>
  <p class=MsoListParagraphCxSpMiddle style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'>
  <?php 
        if($peserta->sma_mulai == null && $peserta->sma_akhir == null)
        {
            echo "" ;
        } else 
        {
            echo ($peserta->sma_mulai) . " s/d " .($peserta->sma_akhir) ; 
        }  
  ?>
  </span></p>
  </td>
  <td width=140 valign=top style='width:84.15pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:19.55pt'>
  <p class=MsoListParagraphCxSpLast style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'>{{$peserta->sma_nilai}}</span></p>
  </td>
 </tr>
 <tr style='height:20.4pt'>
  <td width=116 valign=top style='width:69.7pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt;height:20.4pt'>
  <p class=MsoListParagraphCxSpFirst style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'>Dipl.</span></p>
  </td>
  <td width=191 valign=top style='width:114.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:20.4pt'>
  <p class=MsoListParagraphCxSpMiddle style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'><?php echo ucwords(strtolower($peserta->dipl_institusi)); ?></span></p>
  </td>
  <td width=188 valign=top style='width:112.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:20.4pt'>
  <p class=MsoListParagraphCxSpMiddle style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'><?php echo ucwords(strtolower($peserta->dipl_fakultas)); ?></span></p>
  </td>
  <td width=124 valign=top style='width:74.1pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:20.4pt'>
  <p class=MsoListParagraphCxSpMiddle style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'><?php echo ucwords(strtolower($peserta->dipl_progstudi)); ?></span></p>
  </td>
  <td width=161 valign=top style='width:96.8pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:20.4pt'>
  <p class=MsoListParagraphCxSpMiddle style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'>
  <?php 
        if($peserta->dipl_mulai == null && $peserta->dipl_akhir == null)
        {
            echo "" ;
        } else 
        {
            echo ($peserta->dipl_mulai) . " s/d " .($peserta->dipl_akhir) ; 
        }  
  ?>
  </span></p>
  </td>
  <td width=140 valign=top style='width:84.15pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:20.4pt'>
  <p class=MsoListParagraphCxSpLast style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'>{{$peserta->dipl_ipk}}</span></p>
  </td>
 </tr>
 <tr style='height:20.4pt'>
  <td width=116 valign=top style='width:69.7pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt;height:20.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt'>S1</span></p>
  </td>
  <td width=191 valign=top style='width:114.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:20.4pt'>
  <p class=MsoNormal style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'><?php echo ucwords(strtolower($peserta->s1_institusi)); ?></span></p>
  </td>
  <td width=188 valign=top style='width:112.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:20.4pt'>
  <p class=MsoListParagraphCxSpMiddle style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'><?php echo ucwords(strtolower($peserta->s1_fakultas)); ?></span></p>
  </td>
  <td width=124 valign=top style='width:74.1pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:20.4pt'>
  <p class=MsoListParagraphCxSpMiddle style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'><?php echo ucwords(strtolower($peserta->s1_progstudi)); ?></span></p>
  </td>
  <td width=161 valign=top style='width:96.8pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:20.4pt'>
  <p class=MsoListParagraphCxSpMiddle style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'>
  <?php 
        if($peserta->s1_mulai == null && $peserta->s1_akhir == null)
        {
            echo "" ;
        } else 
        {
            echo ($peserta->s1_mulai) . " s/d " .($peserta->s1_akhir) ; 
        }  
  ?>
  </span></p>
  </td>
  <td width=140 valign=top style='width:84.15pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:20.4pt'>
  <p class=MsoListParagraphCxSpLast style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'>{{$peserta->s1_ipk}}</span></p>
  </td>
 </tr>
 <tr style='height:21.3pt'>
  <td width=116 valign=top style='width:69.7pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt;height:21.3pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt'>S2</span></p>
  </td>
  <td width=191 valign=top style='width:114.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:21.3pt'>
  <p class=MsoListParagraphCxSpFirst style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'><?php echo ucwords(strtolower($peserta->s2_institusi)); ?></span></p>
  </td>
  <td width=188 valign=top style='width:112.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:21.3pt'>
  <p class=MsoListParagraphCxSpMiddle style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'><?php echo ucwords(strtolower($peserta->s2_fakultas)); ?></span></p>
  </td>
  <td width=124 valign=top style='width:74.1pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:21.3pt'>
  <p class=MsoListParagraphCxSpMiddle style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'><?php echo ucwords(strtolower($peserta->s2_progstudi)); ?></span></p>
  </td>
  <td width=161 valign=top style='width:96.8pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:21.3pt'>
  <p class=MsoListParagraphCxSpMiddle style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'>
  <?php 
        if($peserta->s2_mulai == null && $peserta->s2_akhir == null)
        {
            echo "" ;
        } else 
        {
            echo ($peserta->s2_mulai) . " s/d " .($peserta->s2_akhir) ; 
        }  
  ?>
  </span></p>
  </td>
  <td width=140 valign=top style='width:84.15pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:21.3pt'>
  <p class=MsoListParagraphCxSpLast style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'>{{$peserta->s2_ipk}}</span></p>
  </td>
 </tr>
</table>

<p class=MsoListParagraphCxSpFirst style='margin-left:9.0pt'><span
style='font-size:12.0pt;line-height:115%'>&nbsp;</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:49.5pt;text-indent:0in'><span
style='font-size:12.0pt;line-height:115%'>13.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;
</span></span><span style='font-size:12.0pt;line-height:115%'>Karya ilmiah yang
pernah dibuat (skripsi, artikel, karya tulis, dll) : </span></p>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 width=920
 style='width:552.15pt;margin-left:73.05pt;border-collapse:collapse;border:
 none'>
 <tr style='height:20.4pt'>
  <td width=116 valign=top style='width:69.7pt;border:solid windowtext 1.0pt;
  background:#D9D9D9;padding:0in 5.4pt 0in 5.4pt;height:20.4pt'>
  <p class=MsoListParagraphCxSpMiddle style='margin:0in;margin-bottom:.0001pt;
  text-indent:45.0pt;line-height:normal'><span style='font-size:12.0pt'>&nbsp;</span></p>
  </td>
  <td width=804 valign=top style='width:482.45pt;border:solid windowtext 1.0pt;
  border-left:none;background:#D9D9D9;padding:0in 5.4pt 0in 5.4pt;height:20.4pt'>
  <p class=MsoListParagraphCxSpLast align=center style='margin:0in;margin-bottom:
  .0001pt;text-align:center;line-height:normal'><span style='font-size:12.0pt'>Nama
  Karya ilmiah / Skripsi / Thesis </span></p>
  </td>
 </tr>
 <tr style='height:19.55pt'>
  <td width=116 valign=top style='width:69.7pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt;height:19.55pt'>
  <p class=MsoListParagraphCxSpFirst style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'>SMA</span></p>
  </td>
  <td width=804 valign=top style='width:482.45pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:19.55pt'>
  <p class=MsoListParagraphCxSpLast style='margin:0in;margin-bottom:.0001pt;
  ;line-height:normal'><span style='font-size:12.0pt'><?php echo ucwords(strtolower($peserta->sma_karyailmiah)); ?></span></p>
  </td>
 </tr>
 <tr style='height:20.4pt'>
  <td width=116 valign=top style='width:69.7pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt;height:20.4pt'>
  <p class=MsoListParagraphCxSpFirst style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'>Dipl.</span></p>
  </td>
  <td width=804 valign=top style='width:482.45pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:20.4pt'>
  <p class=MsoListParagraphCxSpLast style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'><?php echo ucwords(strtolower($peserta->dipl_skripsi)); ?></span></p>
  </td>
 </tr>
 <tr style='height:20.4pt'>
  <td width=116 valign=top style='width:69.7pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt;height:20.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt'>S1</span></p>
  </td>
  <td width=804 valign=top style='width:482.45pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:20.4pt'>
  <p class=MsoListParagraph style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'><?php echo ucwords(strtolower($peserta->s1_skripsi)); ?></span></p>
  </td>
 </tr>
 <tr style='height:21.3pt'>
  <td width=116 valign=top style='width:69.7pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt;height:21.3pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt'>S2</span></p>
  </td>
  <td width=804 valign=top style='width:482.45pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:21.3pt'>
  <p class=MsoListParagraph style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'><?php echo ucwords(strtolower($peserta->s2_skripsi)); ?></span></p>
  </td>
 </tr>
</table>

<p class=MsoListParagraphCxSpFirst style='margin-left:9.0pt'><span
style='font-size:12.0pt;line-height:115%'>&nbsp;</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:49.5pt;text-indent:0in'><span
style='font-size:12.0pt;line-height:115%;color:black'>14.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span><span
style='font-size:12.0pt;line-height:115%'>Pendidikan Nonformal (Kursus /
Training)<span style='color:black'> </span></span></p>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 width=920
 style='width:552.15pt;margin-left:73.05pt;border-collapse:collapse;border:
 none'>
 <tr style='height:17.05pt'>
  <td width=103 valign=top style='width:61.65pt;border:solid windowtext 1.0pt;
  background:#D9D9D9;padding:0in 5.4pt 0in 5.4pt;height:17.05pt'>
  <p class=MsoListParagraphCxSpMiddle align=center style='margin:0in;
  margin-bottom:.0001pt;text-align:center;line-height:normal'><span
  style='font-size:12.0pt;color:black'>No</span></p>
  </td>
  <td width=241 valign=top style='width:144.8pt;border:solid windowtext 1.0pt;
  border-left:none;background:#D9D9D9;padding:0in 5.4pt 0in 5.4pt;height:17.05pt'>
  <p class=MsoListParagraphCxSpLast align=center style='margin:0in;margin-bottom:
  .0001pt;text-align:center;line-height:normal'><span style='font-size:12.0pt;
  color:black'>Nama Kursus / Training</span></p>
  </td>
  <td width=299 valign=top style='width:179.2pt;border:solid windowtext 1.0pt;
  border-left:none;background:#D9D9D9;padding:0in 5.4pt 0in 5.4pt;height:17.05pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:12.0pt;
  color:black'>Institusi Penyelengaraan</span></p>
  </td>
  <td width=143 valign=top style='width:85.5pt;border:solid windowtext 1.0pt;
  border-left:none;background:#D9D9D9;padding:0in 5.4pt 0in 5.4pt;height:17.05pt'>
  <p class=MsoListParagraphCxSpFirst align=center style='margin:0in;margin-bottom:
  .0001pt;text-align:center;line-height:normal'><span style='font-size:12.0pt;
  color:black'> Periode (Y-m-d)</span></p>
  </td>
  <td width=135 valign=top style='width:81.0pt;border:solid windowtext 1.0pt;
  border-left:none;background:#D9D9D9;padding:0in 5.4pt 0in 5.4pt;height:17.05pt'>
  <p class=MsoListParagraphCxSpLast align=center style='margin:0in;margin-bottom:
  .0001pt;text-align:center;line-height:normal'><span style='font-size:12.0pt;
  color:black'>Keterangan</span></p>
  </td>
 </tr>
 <tr style='height:17.25pt'>
  <td width=103 valign=top style='width:61.65pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt;height:17.25pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:12.0pt;
  color:black'>1</span></p>
  </td>
  <td width=241 valign=top style='width:144.8pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:17.25pt'>
  <p class=MsoListParagraphCxSpFirst style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt;
  color:black'><?php echo ucwords(strtolower($peserta->satu_namakursus)); ?></span></p>
  </td>
  <td width=299 valign=top style='width:179.2pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:17.25pt'>
  <p class=MsoListParagraphCxSpMiddle style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt;
  color:black'><?php echo ucwords(strtolower($peserta->satu_institusi)); ?></span></p>
  </td>
  <td width=143 valign=top style='width:85.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:17.25pt'>
  <p class=MsoListParagraphCxSpMiddle style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt;
  color:black'>
  <?php 
        if($peserta->satu_mulaikursus == null && $peserta->satu_akhirkursus == null)
        {
            echo "" ;
        } else 
        {
            echo ($peserta->satu_mulaikursus) . " s/d " .($peserta->satu_akhirkursus) ; 
        }  
  ?>
  </span></p>
  </td>
  <td width=135 valign=top style='width:81.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:17.25pt'>
  <p class=MsoListParagraphCxSpLast style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt;
  color:black'><?php echo ucwords(strtolower($peserta->satu_keterangan)); ?></span></p>
  </td>
 </tr>
 <tr style='height:18.05pt'>
  <td width=103 valign=top style='width:61.65pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt;height:18.05pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:12.0pt;
  color:black'>2</span></p>
  </td>
  <td width=241 valign=top style='width:144.8pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:18.05pt'>
  <p class=MsoListParagraphCxSpFirst style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt;
  color:black'><?php echo ucwords(strtolower($peserta->dua_namakursus)); ?></span></p>
  </td>
  <td width=299 valign=top style='width:179.2pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:18.05pt'>
  <p class=MsoListParagraphCxSpMiddle style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt;
  color:black'><?php echo ucwords(strtolower($peserta->dua_institusi)); ?></span></p>
  </td>
  <td width=143 valign=top style='width:85.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:18.05pt'>
  <p class=MsoListParagraphCxSpMiddle style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt;
  color:black'>
  <?php 
        if($peserta->dua_mulaikursus == null && $peserta->dua_akhirkursus == null)
        {
            echo "" ;
        } else 
        {
            echo ($peserta->dua_mulaikursus) . " s/d " .($peserta->dua_akhirkursus) ; 
        }  
  ?>
  </span></p>
  </td>
  <td width=135 valign=top style='width:81.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:18.05pt'>
  <p class=MsoListParagraphCxSpLast style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt;
  color:black'><?php echo ucwords(strtolower($peserta->dua_keterangan)); ?></span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal style='text-indent:45.0pt'><span style='font-size:12.0pt;
line-height:115%;color:black'>&nbsp;</span></p>

<p class=MsoListParagraphCxSpFirst style='margin-left:49.5pt;text-indent:0in'><span
style='font-size:12.0pt;line-height:115%;color:black'>15.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span><span
style='font-size:12.0pt;line-height:115%;color:black'>Penguasaan Bahasa Asing </span></p>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 width=918
 style='width:550.85pt;margin-left:74.35pt;border-collapse:collapse;border:
 none'>
 <tr style='height:17.5pt'>
  <td width=101 valign=top style='width:60.35pt;border:solid windowtext 1.0pt;
  border-bottom:none;background:#D9D9D9;padding:0in 5.4pt 0in 5.4pt;height:
  17.5pt'>
  <p class=MsoListParagraphCxSpLast align=center style='margin:0in;margin-bottom:
  .0001pt;text-align:center;line-height:normal'><span style='font-size:12.0pt'>No</span></p>
  </td>
  <td width=190 valign=top style='width:113.85pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:none;border-right:solid black 1.0pt;
  background:#D9D9D9;padding:0in 5.4pt 0in 5.4pt;height:17.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:12.0pt'>Bahasa</span></p>
  </td>
  <td width=102 valign=top style='width:61.05pt;border-top:solid black 1.0pt;
  border-left:none;border-bottom:solid black 1.0pt;border-right:none;
  background:#D9D9D9;padding:0in 5.4pt 0in 5.4pt;height:17.5pt'>
  <p class=MsoListParagraphCxSpFirst style='margin:0in;margin-bottom:.0001pt;
  text-indent:45.0pt;line-height:normal'><span style='font-size:12.0pt'>&nbsp;</span></p>
  </td>
  <td width=103 valign=top style='width:61.9pt;border-top:solid black 1.0pt;
  border-left:none;border-bottom:solid black 1.0pt;border-right:none;
  background:#D9D9D9;padding:0in 5.4pt 0in 5.4pt;height:17.5pt'>
  <p class=MsoListParagraphCxSpMiddle style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'>Lisan</span></p>
  </td>
  <td width=102 valign=top style='width:61.05pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  background:#D9D9D9;padding:0in 5.4pt 0in 5.4pt;height:17.5pt'>
  <p class=MsoListParagraphCxSpMiddle style='margin:0in;margin-bottom:.0001pt;
  text-indent:45.0pt;line-height:normal'><span style='font-size:12.0pt'>&nbsp;</span></p>
  </td>
  <td width=102 valign=top style='width:61.05pt;border-top:solid black 1.0pt;
  border-left:none;border-bottom:solid black 1.0pt;border-right:none;
  background:#D9D9D9;padding:0in 5.4pt 0in 5.4pt;height:17.5pt'>
  <p class=MsoListParagraphCxSpMiddle style='margin:0in;margin-bottom:.0001pt;
  text-indent:45.0pt;line-height:normal'><span style='font-size:12.0pt'>&nbsp;</span></p>
  </td>
  <td width=104 valign=top style='width:62.2pt;border-top:solid black 1.0pt;
  border-left:none;border-bottom:solid black 1.0pt;border-right:none;
  background:#D9D9D9;padding:0in 5.4pt 0in 5.4pt;height:17.5pt'>
  <p class=MsoListParagraphCxSpMiddle style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'>Tulisan</span></p>
  </td>
  <td width=116 valign=top style='width:69.4pt;border:solid black 1.0pt;
  border-left:none;background:#D9D9D9;padding:0in 5.4pt 0in 5.4pt;height:17.5pt'>
  <p class=MsoListParagraphCxSpLast style='margin:0in;margin-bottom:.0001pt;
  text-indent:45.0pt;line-height:normal'><span style='font-size:12.0pt'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='height:10.2pt'>
  <td width=101 valign=top style='width:60.35pt;border:solid windowtext 1.0pt;
  border-top:solid black 1.0pt;padding:0in 5.4pt 0in 5.4pt;height:10.2pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:12.0pt'>1</span></p>
  </td>
  <td width=190 valign=top style='width:113.85pt;border-top:solid black 1.0pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:10.2pt'>
  <p class=MsoListParagraphCxSpFirst style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'><?php echo ucwords(strtolower($peserta->satu_bahasaasing)); ?></span></p>
  </td>
  <td width=307 colspan=3 valign=top style='width:184.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:10.2pt'>
  <p class=MsoListParagraphCxSpMiddle style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'><?php echo ucwords(strtolower($peserta->satu_lisan)); ?></span></p>
  </td>
  <td width=321 colspan=3 valign=top style='width:192.65pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:10.2pt'>
  <p class=MsoListParagraphCxSpLast style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'><?php echo ucwords(strtolower($peserta->satu_tulisan)); ?></span></p>
  </td>
 </tr>
 <tr style='height:10.65pt'>
  <td width=101 valign=top style='width:60.35pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt;height:10.65pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:12.0pt'>2</span></p>
  </td>
  <td width=190 valign=top style='width:113.85pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:10.65pt'>
  <p class=MsoListParagraphCxSpFirst style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'><?php echo ucwords(strtolower($peserta->dua_bahasaasing)); ?></span></p>
  </td>
  <td width=307 colspan=3 valign=top style='width:184.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:10.65pt'>
  <p class=MsoListParagraphCxSpMiddle style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'><?php echo ucwords(strtolower($peserta->dua_lisan)); ?></span></p>
  </td>
  <td width=321 colspan=3 valign=top style='width:192.65pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:10.65pt'>
  <p class=MsoListParagraphCxSpLast style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'><?php echo ucwords(strtolower($peserta->dua_tulisan)); ?></span></p>
  </td>
 </tr>
</table>

<p class=MsoListParagraphCxSpFirst style='margin-left:-.5in;text-indent:45.0pt'><span
style='font-size:12.0pt;line-height:115%'>&nbsp;</span></p>

<p class=MsoListParagraphCxSpLast style='margin-left:49.5pt;text-indent:0in'><span
style='font-size:12.0pt;line-height:115%'>16.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;
</span></span><span style='font-size:12.0pt;line-height:115%'>Pengalaman Kerja
(tiga pekerjaan terakhir)</span></p>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 width=919
 style='width:551.5pt;margin-left:73.7pt;border-collapse:collapse;border:none'>
 <tr>
  <td width=102 valign=top style='width:61.0pt;border:solid windowtext 1.0pt;
  background:#D9D9D9;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:12.0pt'>No</span></p>
  </td>
  <td width=210 valign=top style='width:1.75in;border:solid windowtext 1.0pt;
  border-left:none;background:#D9D9D9;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraph align=center style='margin:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:12.0pt'>Nama
  Perusahaan</span></p>
  </td>
  <td width=132 valign=top style='width:79.4pt;border:solid windowtext 1.0pt;
  border-left:none;background:#D9D9D9;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:12.0pt'>Jabatan</span></p>
  </td>
  <td width=120 valign=top style='width:1.0in;border:solid windowtext 1.0pt;
  border-left:none;background:#D9D9D9;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraph align=center style='margin:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:12.0pt'> Periode <br>(Y-m-d) </span></p>
  </td>
  <td width=135 valign=top style='width:81.0pt;border:solid windowtext 1.0pt;
  border-left:none;background:#D9D9D9;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:12.0pt'>Gaji</span></p>
  </td>
  <td width=220 valign=top style='width:132.1pt;border:solid windowtext 1.0pt;
  border-left:none;background:#D9D9D9;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraph align=center style='margin:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:12.0pt'>Alasan
  Pindah</span></p>
  </td>
 </tr>
 <tr>
  <td width=102 valign=top style='width:61.0pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:12.0pt'>1</span></p>
  </td>
  <td width=210 valign=top style='width:1.75in;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpFirst style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'><?php echo ucwords(strtolower($peserta->satu_perusahaan)); ?></span></p>
  </td>
  <td width=132 valign=top style='width:79.4pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpMiddle style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'><?php echo ucwords(strtolower($peserta->satu_jabatan)); ?></span></p>
  </td>
  <td width=120 valign=top style='width:1.0in;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpMiddle style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'>
  <span style='font-size:10.0pt'>
        <?php
            if($peserta->is_masihkerja =="Ya")
            {
                echo $peserta->satu_tglmulai . " s/d  Saat ini" ;
            } 
            else if ($peserta->satu_tglmulai == null && $peserta->satu_tglberakhir == null)
            {
                echo "";
            }
            else
            { 
                echo $peserta->satu_tglmulai . " s/d ". $peserta->satu_tglberakhir ;
            }
        ?>
  </span>
  </p>
  </td>
  <td width=135 valign=top style='width:81.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpMiddle style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'><?php echo ucwords(strtolower($peserta->satu_gaji)); ?></span></p>
  </td>
  <td width=220 valign=top style='width:132.1pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpLast style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'><?php echo ucwords(strtolower($peserta->satu_alasanpindah)); ?></span></p>
  </td>
 </tr>
 <tr>
  <td width=102 valign=top style='width:61.0pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:12.0pt'>2</span></p>
  </td>
  <td width=210 valign=top style='width:1.75in;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpFirst style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'><?php echo ucwords(strtolower($peserta->dua_perusahaan)); ?></span></p>
  </td>
  <td width=132 valign=top style='width:79.4pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpMiddle style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'><?php echo ucwords(strtolower($peserta->dua_jabatan)); ?></span></p>
  </td>
  <td width=120 valign=top style='width:1.0in;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpMiddle style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:10.0pt'>
  <?php
            if ($peserta->dua_tglmulai == null && $peserta->dua_tglberakhir == null)
            {
                echo "";
            }
            else
            { 
                echo $peserta->dua_tglmulai . " s/d ". $peserta->dua_tglberakhir ;
            }
        ?></span></p>
  </td>
  <td width=135 valign=top style='width:81.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpMiddle style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'><?php echo ucwords(strtolower($peserta->dua_gaji)); ?></span></p>
  </td>
  <td width=220 valign=top style='width:132.1pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpLast style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'><?php echo ucwords(strtolower($peserta->dua_alasanpindah)); ?></span></p>
  </td>
 </tr>
 <tr>
  <td width=102 valign=top style='width:61.0pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:12.0pt'>3</span></p>
  </td>
  <td width=210 valign=top style='width:1.75in;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpFirst style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'><?php echo ucwords(strtolower($peserta->tiga_perusahaan)); ?></span></p>
  </td>
  <td width=132 valign=top style='width:79.4pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpMiddle style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'><?php echo ucwords(strtolower($peserta->tiga_jabatan)); ?></span></p>
  </td>
  <td width=120 valign=top style='width:1.0in;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpMiddle style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:10.0pt'>
  <?php
            if ($peserta->tiga_tglmulai == null && $peserta->tiga_tglberakhir == null)
            {
                echo "";
            }
            else
            { 
                echo $peserta->tiga_tglmulai . " s/d ". $peserta->tiga_tglberakhir ;
            }
    ?>
  </span></p>
  </td>
  <td width=135 valign=top style='width:81.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpMiddle style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'><?php echo ucwords(strtolower($peserta->tiga_gaji)); ?></span></p>
  </td>
  <td width=220 valign=top style='width:132.1pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpLast style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'><?php echo ucwords(strtolower($peserta->tiga_alasanpindah)); ?></span></p>
  </td>
 </tr>
</table>

<p class=MsoListParagraphCxSpFirst style='margin-left:-.5in;text-indent:45.0pt'><span
style='font-size:12.0pt;line-height:115%'>&nbsp;</span></p>
<br><br><br><br><br><br><br>
<p class=MsoListParagraphCxSpLast style='margin-left:49.5pt;text-indent:0in'><span
style='font-size:12.0pt;line-height:115%'>17.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;
</span></span><span style='font-size:12.0pt;line-height:115%'>Daftar keluarga
(suami/istri, anak, orang tua &amp; saudara kandung)</span></p>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 width=921
 style='width:552.85pt;margin-left:72.35pt;border-collapse:collapse;border:
 none'>
 <tr>
  <td width=119 valign=top style='width:71.35pt;border:solid windowtext 1.0pt;
  background:#D9D9D9;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:12.0pt'>No</span></p>
  </td>
  <td width=151 valign=top style='width:90.35pt;border:solid windowtext 1.0pt;
  border-left:none;background:#D9D9D9;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:12.0pt'>Hub.
  Keluarga</span></p>
  </td>
  <td width=269 valign=top style='width:161.65pt;border:solid windowtext 1.0pt;
  border-left:none;background:#D9D9D9;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:12.0pt'>Nama</span></p>
  </td>
  <td width=75 valign=top style='width:45.0pt;border:solid windowtext 1.0pt;
  border-left:none;background:#D9D9D9;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpFirst align=center style='margin:0in;margin-bottom:
  .0001pt;text-align:center;line-height:normal'><span style='font-size:12.0pt'>L/P</span></p>
  </td>
  <td width=105 valign=top style='width:63.0pt;border:solid windowtext 1.0pt;
  border-left:none;background:#D9D9D9;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpLast align=center style='margin:0in;margin-bottom:
  .0001pt;text-align:center;line-height:normal'><span style='font-size:12.0pt'>Tgl.
  Lahir</span></p>
  </td>
  <td width=203 valign=top style='width:121.5pt;border:solid windowtext 1.0pt;
  border-left:none;background:#D9D9D9;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:12.0pt'>Pekerjaan</span></p>
  </td>
 </tr>
 <tr>
  <td width=119 valign=top style='width:71.35pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:12.0pt'>1</span></p>
  </td>
  <td width=151 valign=top style='width:90.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpFirst style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'><?php echo ucwords(strtolower($peserta->satu_kel_hubungan)); ?></span></p>
  </td>
  <td width=269 valign=top style='width:161.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpMiddle style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'><?php echo ucwords(strtolower($peserta->satu_kel_nama)); ?></span></p>
  </td>
  <td width=75 valign=top style='width:45.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpMiddle style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'><?php echo ucwords(strtolower($peserta->satu_kel_jeniskelamin)); ?></span></p>
  </td>
  <td width=105 valign=top style='width:63.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpMiddle style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'>{{$peserta->satu_kel_tgllahir}}</span></p>
  </td>
  <td width=203 valign=top style='width:121.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpLast style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'><?php echo ucwords(strtolower($peserta->satu_kel_pekerjaan)); ?></span></p>
  </td>
 </tr>
 <tr>
  <td width=119 valign=top style='width:71.35pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:12.0pt'>2</span></p>
  </td>
  <td width=151 valign=top style='width:90.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpFirst style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'><?php echo ucwords(strtolower($peserta->dua_kel_hubungan)); ?></span></p>
  </td>
  <td width=269 valign=top style='width:161.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpMiddle style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'><?php echo ucwords(strtolower($peserta->dua_kel_nama)); ?></span></p>
  </td>
  <td width=75 valign=top style='width:45.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpMiddle style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'><?php echo ucwords(strtolower($peserta->dua_kel_jeniskelamin)); ?></span></p>
  </td>
  <td width=105 valign=top style='width:63.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpMiddle style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'><?php echo $peserta->dua_kel_tgllahir ; ?></span></p>
  </td>
  <td width=203 valign=top style='width:121.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpLast style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'><?php echo ucwords(strtolower($peserta->dua_kel_pekerjaan)); ?></span></p>
  </td>
 </tr>
 <tr>
  <td width=119 valign=top style='width:71.35pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:12.0pt'>3</span></p>
  </td>
  <td width=151 valign=top style='width:90.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpFirst style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'><?php echo ucwords(strtolower($peserta->tiga_kel_hubungan)); ?></span></p>
  </td>
  <td width=269 valign=top style='width:161.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpMiddle style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'><?php echo ucwords(strtolower($peserta->tiga_kel_nama)); ?></span></p>
  </td>
  <td width=75 valign=top style='width:45.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpMiddle style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'><?php echo ucwords(strtolower($peserta->tiga_kel_jeniskelamin)); ?></span></p>
  </td>
  <td width=105 valign=top style='width:63.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpMiddle style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'><?php echo $peserta->tiga_kel_tgllahir; ?></span></p>
  </td>
  <td width=203 valign=top style='width:121.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpLast style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'><?php echo ucwords(strtolower($peserta->tiga_kel_pekerjaan)); ?></span></p>
  </td>
 </tr>
 <tr>
  <td width=119 valign=top style='width:71.35pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:12.0pt'>4</span></p>
  </td>
  <td width=151 valign=top style='width:90.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpFirst style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'><?php echo ucwords(strtolower($peserta->empat_kel_hubungan)); ?></span></p>
  </td>
  <td width=269 valign=top style='width:161.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpMiddle style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'><?php echo ucwords(strtolower($peserta->empat_kel_nama)); ?></span></p>
  </td>
  <td width=75 valign=top style='width:45.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpMiddle style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'><?php echo ucwords(strtolower($peserta->empat_kel_jeniskelamin)); ?></span></p>
  </td>
  <td width=105 valign=top style='width:63.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpMiddle style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'><?php echo $peserta->empat_kel_tgllahir; ?></span></p>
  </td>
  <td width=203 valign=top style='width:121.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpLast style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'><?php echo ucwords(strtolower($peserta->empat_kel_pekerjaan)); ?></span></p>
  </td>
 </tr>
 <tr>
  <td width=119 valign=top style='width:71.35pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:12.0pt'>5</span></p>
  </td>
  <td width=151 valign=top style='width:90.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpFirst style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'><?php echo ucwords(strtolower($peserta->lima_kel_hubungan)); ?></span></p>
  </td>
  <td width=269 valign=top style='width:161.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpMiddle style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'><?php echo ucwords(strtolower($peserta->lima_kel_nama)); ?></span></p>
  </td>
  <td width=75 valign=top style='width:45.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpMiddle style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'><?php echo ucwords(strtolower($peserta->lima_kel_jeniskelamin)); ?></span></p>
  </td>
  <td width=105 valign=top style='width:63.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpMiddle style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'><?php echo $peserta->lima_kel_tgllahir; ?></span></p>
  </td>
  <td width=203 valign=top style='width:121.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpLast style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'><?php echo ucwords(strtolower($peserta->lima_kel_pekerjaan)); ?></span></p>
  </td>
 </tr>
 <tr>
  <td width=119 valign=top style='width:71.35pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:12.0pt'>6</span></p>
  </td>
  <td width=151 valign=top style='width:90.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpFirst style='margin:0in;margin-bottom:.0001pt;
  text-indent:45.0pt;line-height:normal'><span style='font-size:12.0pt'>&nbsp;</span></p>
  </td>
  <td width=269 valign=top style='width:161.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpMiddle style='margin:0in;margin-bottom:.0001pt;
  text-indent:45.0pt;line-height:normal'><span style='font-size:12.0pt'>&nbsp;</span></p>
  </td>
  <td width=75 valign=top style='width:45.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpMiddle style='margin:0in;margin-bottom:.0001pt;
  text-indent:45.0pt;line-height:normal'><span style='font-size:12.0pt'>&nbsp;</span></p>
  </td>
  <td width=105 valign=top style='width:63.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpMiddle style='margin:0in;margin-bottom:.0001pt;
  text-indent:45.0pt;line-height:normal'><span style='font-size:12.0pt'>&nbsp;</span></p>
  </td>
  <td width=203 valign=top style='width:121.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpLast style='margin:0in;margin-bottom:.0001pt;
  text-indent:45.0pt;line-height:normal'><span style='font-size:12.0pt'>&nbsp;</span></p>
  </td>
 </tr>
</table>

<p class=MsoListParagraphCxSpFirst style='margin-left:-.5in;text-indent:45.0pt'><span
style='font-size:12.0pt;line-height:115%'>&nbsp;</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:49.5pt;text-indent:0in'><span
style='font-size:12.0pt;line-height:115%'>18.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;
</span></span><span style='font-size:12.0pt;line-height:115%'>Bank Detail</span></p>

<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0
 style='margin-left:74.7pt;border-collapse:collapse;border:none'>
 <tr>
  <td width=185 valign=top style='width:110.7pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpMiddle style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'>Nama Bank : </span></p>
  </td>
  <td width=269 valign=top style='width:161.1pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpMiddle style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'><u><?php echo ucwords(strtolower($peserta->nama_bank)); ?></u>
  </span></p>
  </td>
  <td width=173 valign=top style='width:103.5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpMiddle style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'>Nama di Rekening : </span></p>
  </td>
  <td width=238 valign=top style='width:142.8pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpLast style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'><u><?php echo ucwords(strtolower($peserta->nama_rekening)); ?></u></span></p>
  </td>
 </tr>
 <tr>
  <td width=185 valign=top style='width:110.7pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpFirst style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'>Nomor Rekening :</span></p>
  </td>
  <td width=269 valign=top style='width:161.1pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpMiddle style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'><u><?php echo ucwords(strtolower($peserta->nomor_rekening)); ?></u></span></p>
  </td>
  <td width=173 valign=top style='width:103.5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpMiddle style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'>Cabang :</span></p>
  </td>
  <td width=238 valign=top style='width:142.8pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpLast style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'><u><?php echo ucwords(strtolower($peserta->cabang_rekening)); ?></u></span></p>
  </td>
 </tr>
</table>

<p class=MsoListParagraphCxSpFirst style='margin-left:49.5pt'><span
style='font-size:12.0pt;line-height:115%'>&nbsp;</span></p>

<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0
 style='margin-left:49.5pt;border-collapse:collapse;border:none'>
 <tr>
  <td width=37 valign=top style='width:22.2pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpLast style='margin:0in;margin-bottom:.0001pt;
  text-indent:-5.7pt;line-height:normal'><span style='font-size:12.0pt'>19.</span></p>
  </td>
  <td width=300 valign=top style='width:2.5in;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt'>Cita-cita hidup :</span></p>
  </td>
  <td width=878 valign=top style='width:526.8pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraph style='margin:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt'><u><?php echo ucwords(strtolower($peserta->cita_cita)); ?></u></span></p>
  </td>
 </tr>
 <tr>
  <td width=37 valign=top style='width:22.2pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraph style='margin:0in;margin-bottom:.0001pt;text-indent:
  -5.7pt;line-height:normal'><span style='font-size:12.0pt'>20.</span></p>
  </td>
  <td width=300 valign=top style='width:2.5in;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;color:black'>Pernah bekerja di Astra
  Group : </span></p>
  </td>
  <td width=878 valign=top style='width:526.8pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraph style='margin:0in;margin-bottom:.0001pt;line-height:
  normal'>
  <span style='font-size:12.0pt;color:black'><u>
  <?php
        if($peserta->is_kerjaastra == "Ya")
        {
            echo ucwords(strtolower($peserta->is_kerjaastra)) . ",  di " . $peserta->kerjaastra_true;
        } else
        {
            echo ucwords(strtolower($peserta->is_kerjaastra));    
        }
        
  ?></u>
  </span></p>
  </td>
 </tr>
 <tr>
  <td width=37 valign=top style='width:22.2pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraph style='margin:0in;margin-bottom:.0001pt;text-indent:
  -5.7pt;line-height:normal'><span style='font-size:12.0pt'>21.</span></p>
  </td>
  <td width=300 valign=top style='width:2.5in;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;color:black'>Pernah psikotes di Astra
  Group :</span></p>
  </td>
  <td width=878 valign=top style='width:526.8pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraph style='margin:0in;margin-bottom:.0001pt;line-height:
  normal'>
  <span style='font-size:12.0pt;color:black'><u>
  <?php
        if($peserta->is_kerjaastra == "Ya")
        {
            echo ucwords(strtolower($peserta->is_kerjaastra)) . ",  di " . $peserta->kerjaastra_true;
        } else
        {
            echo ucwords(strtolower($peserta->is_kerjaastra));    
        }
        
  ?></u>
  </span></p>
  </td>
 </tr>
</table>

<p class=MsoListParagraphCxSpFirst style='margin-left:49.5pt'><span
style='font-size:12.0pt;line-height:115%'>&nbsp;</span></p>

<p class=MsoListParagraphCxSpLast style='margin-left:49.5pt;text-indent:0in'><span
style='font-size:12.0pt;line-height:115%'>22.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;
</span></span><span style='font-size:12.0pt;line-height:115%'>Urutan bidang
pekerjaan yang diminati :</span></p>

<?php
        $ListMinat = $peserta->urutan_peminatan;
        $ArrayMinat = explode(",", $ListMinat);
?>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 width=929
 style='width:557.3pt;margin-left:72.4pt;border-collapse:collapse;border:none'>
 <tr style='height:13.0pt'>
  <td width=81 valign=top style='width:48.8pt;border:solid windowtext 1.0pt;
  background:#D9D9D9;padding:0in 5.4pt 0in 5.4pt;height:13.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:12.0pt'>No Urut </span></p>
  </td>
  <td width=375 valign=top style='width:225.0pt;border:solid windowtext 1.0pt;
  border-left:none;background:#D9D9D9;padding:0in 5.4pt 0in 5.4pt;height:13.0pt'>
  <p class=MsoListParagraph align=center style='margin:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:12.0pt'>Jenis
  Pekerjaan</span></p>
  </td>
  <td width=90 valign=top style='width:.75in;border:solid windowtext 1.0pt;
  border-left:none;background:#D9D9D9;padding:0in 5.4pt 0in 5.4pt;height:13.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:12.0pt'>No Urut </span></p>
  </td>
  <td width=383 valign=top style='width:229.5pt;border:solid windowtext 1.0pt;
  border-left:none;background:#D9D9D9;padding:0in 5.4pt 0in 5.4pt;height:13.0pt'>
  <p class=MsoListParagraph align=center style='margin:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:12.0pt'>Jenis
  Pekerjaan</span></p>
  </td>
 </tr>
 <tr style='height:12.45pt'>
  <td width=81 valign=top style='width:48.8pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt;height:12.45pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:12.0pt'>1.</span></p>
  </td>
  <td width=375 valign=top style='width:225.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:12.45pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt'><?php echo $ArrayMinat[0];?></span></p>
  </td>
  <td width=90 valign=top style='width:.75in;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:12.45pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:12.0pt'>7.</span></p>
  </td>
  <td width=383 valign=top style='width:229.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:12.45pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt'><?php echo $ArrayMinat[1];?></span></p>
  </td>
 </tr>
 <tr style='height:13.0pt'>
  <td width=81 valign=top style='width:48.8pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt;height:13.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:12.0pt'>2.</span></p>
  </td>
  <td width=375 valign=top style='width:225.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:13.0pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt'><?php echo $ArrayMinat[2];?></span></p>
  </td>
  <td width=90 valign=top style='width:.75in;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:13.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:12.0pt'>8.</span></p>
  </td>
  <td width=383 valign=top style='width:229.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:13.0pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt'><?php echo $ArrayMinat[3];?></span></p>
  </td>
 </tr>
 <tr style='height:13.0pt'>
  <td width=81 valign=top style='width:48.8pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt;height:13.0pt'>
  <p class=MsoListParagraphCxSpFirst align=center style='margin:0in;margin-bottom:
  .0001pt;text-align:center;line-height:normal'><span style='font-size:12.0pt'>3.</span></p>
  </td>
  <td width=375 valign=top style='width:225.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:13.0pt'>
  <p class=MsoListParagraphCxSpMiddle style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'><?php echo $ArrayMinat[4];?></span></p>
  </td>
  <td width=90 valign=top style='width:.75in;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:13.0pt'>
  <p class=MsoListParagraphCxSpMiddle align=center style='margin:0in;
  margin-bottom:.0001pt;text-align:center;line-height:normal'><span
  style='font-size:12.0pt'>9.</span></p>
  </td>
  <td width=383 valign=top style='width:229.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:13.0pt'>
  <p class=MsoListParagraphCxSpLast style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'><?php echo $ArrayMinat[5];?></span></p>
  </td>
 </tr>
 <tr style='height:13.0pt'>
  <td width=81 valign=top style='width:48.8pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt;height:13.0pt'>
  <p class=MsoListParagraphCxSpFirst align=center style='margin:0in;margin-bottom:
  .0001pt;text-align:center;line-height:normal'><span style='font-size:12.0pt'>4.</span></p>
  </td>
  <td width=375 valign=top style='width:225.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:13.0pt'>
  <p class=MsoListParagraphCxSpMiddle style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'><?php echo $ArrayMinat[6];?></span></p>
  </td>
  <td width=90 valign=top style='width:.75in;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:13.0pt'>
  <p class=MsoListParagraphCxSpMiddle align=center style='margin:0in;
  margin-bottom:.0001pt;text-align:center;line-height:normal'><span
  style='font-size:12.0pt'>10.</span></p>
  </td>
  <td width=383 valign=top style='width:229.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:13.0pt'>
  <p class=MsoListParagraphCxSpLast style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'><?php echo $ArrayMinat[7];?></span></p>
  </td>
 </tr>
 <tr style='height:11.65pt'>
  <td width=81 valign=top style='width:48.8pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt;height:11.65pt'>
  <p class=MsoListParagraphCxSpFirst align=center style='margin:0in;margin-bottom:
  .0001pt;text-align:center;line-height:normal'><span style='font-size:12.0pt'>5.</span></p>
  </td>
  <td width=375 valign=top style='width:225.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:11.65pt'>
  <p class=MsoListParagraphCxSpMiddle style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'><?php echo $ArrayMinat[8];?></span></p>
  </td>
  <td width=90 valign=top style='width:.75in;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:11.65pt'>
  <p class=MsoListParagraphCxSpMiddle align=center style='margin:0in;
  margin-bottom:.0001pt;text-align:center;line-height:normal'><span
  style='font-size:12.0pt'>11.</span></p>
  </td>
  <td width=383 valign=top style='width:229.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:11.65pt'>
  <p class=MsoListParagraphCxSpLast style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'><?php echo $ArrayMinat[9];?></span></p>
  </td>
 </tr>
 <tr style='height:13.0pt'>
  <td width=81 valign=top style='width:48.8pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt;height:13.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:12.0pt'>6.</span></p>
  </td>
  <td width=375 valign=top style='width:225.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:13.0pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt'><?php echo $ArrayMinat[10];?></span></p>
  </td>
  <td width=90 valign=top style='width:.75in;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:13.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:12.0pt'>12.</span></p>
  </td>
  <td width=383 valign=top style='width:229.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:13.0pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt'><?php echo $ArrayMinat[11];?></span></p>
  </td>
 </tr>
</table>

<p class=MsoListParagraphCxSpFirst style='margin-left:9.0pt'><span
style='font-size:12.0pt;line-height:115%'>&nbsp;</span></p>

<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0
 style='margin-left:49.5pt;border-collapse:collapse;border:none'>
 <tr>
  <td width=37 valign=top style='width:22.2pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraphCxSpLast style='margin:0in;margin-bottom:.0001pt;
  text-indent:-5.7pt;line-height:normal'><span style='font-size:12.0pt'>23.</span></p>
  </td>
  <td width=390 valign=top style='width:3.25in;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt'>Gaji yang diharapkan : </span></p>
  </td>
  <td width=540 valign=top style='width:4.5in;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraph style='margin:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt'><u><?php echo ucwords(strtolower($peserta->harapan_gaji)); ?></u></span></p>
  </td>
 </tr>
 <tr>
  <td width=37 valign=top style='width:22.2pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraph style='margin:0in;margin-bottom:.0001pt;text-indent:
  -5.7pt;line-height:normal'><span style='font-size:12.0pt'>24.</span></p>
  </td>
  <td width=390 valign=top style='width:3.25in;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt'>Fasilitas lain yang diharapkan :</span></p>
  </td>
  <td width=540 valign=top style='width:4.5in;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraph style='margin:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;color:black'><u><?php echo ucwords(strtolower($peserta->harapan_fasilitas)); ?></u></span></p>
  </td>
 </tr>
 <tr>
  <td width=37 valign=top style='width:22.2pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraph style='margin:0in;margin-bottom:.0001pt;text-indent:
  -5.7pt;line-height:normal'><span style='font-size:12.0pt'>25.</span></p>
  </td>
  <td width=390 valign=top style='width:3.25in;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;color:black'>Bersedia ditempatkan diseluruh Indonesia : </span></p>
  </td>
  <td width=540 valign=top style='width:4.5in;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraph style='margin:0in;margin-bottom:.0001pt;line-height:
  normal'>
  <span style='font-size:12.0pt;color:black'><u>
  <?php
        if($peserta->is_seluruhindo == "Tidak")
        {
            echo ucwords(strtolower($peserta->is_seluruhindo)) . ",  Karena " . $peserta->seluruhindo_false;
        } else
        {
            echo ucwords(strtolower($peserta->is_seluruhindo));    
        }
        
  ?></u>
  </span></p>
  </td>
 </tr>
</table>
<br>
<p class=MsoListParagraphCxSpFirst style='margin-left:49.5pt'><span
style='font-size:12.0pt;line-height:115%'> </span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:49.5pt;text-indent:0in'><span
style='font-size:12.0pt;line-height:115%'>26.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;
</span></span><span style='font-size:12.0pt;line-height:115%'>Referensi
Perusahaan sebelum </span></p>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 width=918
 style='width:7.65in;margin-left:74.4pt;border-collapse:collapse;border:none'>
 <tr style='height:13.8pt'>
  <td width=56 valign=top style='width:33.3pt;border:solid windowtext 1.0pt;
  background:#D9D9D9;padding:0in 5.4pt 0in 5.4pt;height:13.8pt'>
  <p class=MsoListParagraphCxSpMiddle align=center style='margin:0in;
  margin-bottom:.0001pt;text-align:center;line-height:normal'><span
  style='font-size:12.0pt'>No</span></p>
  </td>
  <td width=225 valign=top style='width:135.0pt;border:solid windowtext 1.0pt;
  border-left:none;background:#D9D9D9;padding:0in 5.4pt 0in 5.4pt;height:13.8pt'>
  <p class=MsoListParagraphCxSpLast align=center style='margin:0in;margin-bottom:
  .0001pt;text-align:center;line-height:normal'><span style='font-size:12.0pt'>Nama</span></p>
  </td>
  <td width=238 valign=top style='width:142.5pt;border:solid windowtext 1.0pt;
  border-left:none;background:#D9D9D9;padding:0in 5.4pt 0in 5.4pt;height:13.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:12.0pt'>Perusahaan</span></p>
  </td>
  <td width=183 valign=top style='width:109.55pt;border:solid windowtext 1.0pt;
  border-left:none;background:#D9D9D9;padding:0in 5.4pt 0in 5.4pt;height:13.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:12.0pt'>Telepon</span></p>
  </td>
  <td width=217 valign=top style='width:130.45pt;border:solid windowtext 1.0pt;
  border-left:none;background:#D9D9D9;padding:0in 5.4pt 0in 5.4pt;height:13.8pt'>
  <p class=MsoListParagraph align=center style='margin:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:12.0pt'>Jabatan</span></p>
  </td>
 </tr>
 <tr style='height:13.8pt'>
  <td width=56 valign=top style='width:33.3pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt;height:13.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:12.0pt'>1</span></p>
  </td>
  <td width=225 valign=top style='width:135.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:13.8pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt'><?php echo ucwords(strtolower($peserta->referensi_nama)); ?></span></p>
  </td>
  <td width=238 valign=top style='width:142.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:13.8pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt'><?php echo ucwords(strtolower($peserta->referensi_perusahaan)); ?></span></p>
  </td>
  <td width=183 valign=top style='width:109.55pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:13.8pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt'><?php echo ucwords(strtolower($peserta->referensi_telp)); ?></span></p>
  </td>
  <td width=217 valign=top style='width:130.45pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:13.8pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt'><?php echo ucwords(strtolower($peserta->referensi_jabatan)); ?></span></p>
  </td>
 </tr>
</table>

<p class=MsoListParagraphCxSpFirst style='margin-left:-.5in;text-indent:45.0pt'><span
style='font-size:12.0pt;line-height:115%'>&nbsp;</span></p>

<p class=MsoListParagraphCxSpLast style='margin-left:49.5pt;text-indent:0in'><span
style='font-size:12.0pt;line-height:115%;color:black'>27.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span><span
style='font-size:12.0pt;line-height:115%;color:black'>Penyakit yang pernah di
derita dan lama sembuh ?</span></p>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 width=919
 style='width:551.45pt;margin-left:73.75pt;border-collapse:collapse;border:
 none'>
 <tr style='height:14.7pt'>
  <td width=109 valign=top style='width:65.45pt;border:solid windowtext 1.0pt;
  background:#D9D9D9;padding:0in 5.4pt 0in 5.4pt;height:14.7pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:12.0pt'>No</span></p>
  </td>
  <td width=329 valign=top style='width:197.65pt;border:solid windowtext 1.0pt;
  border-left:none;background:#D9D9D9;padding:0in 5.4pt 0in 5.4pt;height:14.7pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:12.0pt'>Nama
  Penyakit</span></p>
  </td>
  <td width=219 valign=top style='width:131.55pt;border:solid windowtext 1.0pt;
  border-left:none;background:#D9D9D9;padding:0in 5.4pt 0in 5.4pt;height:14.7pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:12.0pt'>Periode (Y-m-d)</span></p>
  </td>
  <td width=261 valign=top style='width:156.8pt;border:solid windowtext 1.0pt;
  border-left:none;background:#D9D9D9;padding:0in 5.4pt 0in 5.4pt;height:14.7pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:12.0pt'>Akibatnya</span></p>
  </td>
 </tr>
 <tr style='height:14.7pt'>
  <td width=109 valign=top style='width:65.45pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt;height:14.7pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:12.0pt'>1</span></p>
  </td>
  <td width=329 valign=top style='width:197.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:14.7pt'>
  <p class=MsoListParagraphCxSpFirst style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'><?php echo ucwords(strtolower($peserta->penyakit)); ?></span></p>
  </td>
  <td width=219 valign=top style='width:131.55pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:14.7pt'>
  <p class=MsoListParagraphCxSpMiddle style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:10.0pt'>
  <?php
            if ($peserta->penyakit_mulai == null && $peserta->penyakit_akhir == null)
            {
                echo "";
            }
            else
            { 
                echo $peserta->penyakit_mulai . " s/d ". $peserta->penyakit_akhir ;
            }
    ?>
    </span></p>
  </td>
  <td width=261 valign=top style='width:156.8pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:14.7pt'>
  <p class=MsoListParagraphCxSpLast style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'><?php echo ucwords(strtolower($peserta->akibat_penyakit)); ?></span></p>
  </td>
 </tr>
</table>

<p class=MsoListParagraphCxSpFirst style='margin-left:-.5in;text-indent:45.0pt'><span
style='font-size:12.0pt;line-height:115%'>&nbsp;</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:49.5pt;text-indent:0in'><span
style='font-size:12.0pt;line-height:115%;color:black'>28.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span><span
style='font-size:12.0pt;line-height:115%;color:black'>Darimana mengetahui
mengenai posisi yang dilamar saat ini : <u><?php echo $peserta->referensi_lowongan . " " . $peserta->sumber_lowongan; ?></u></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:-.5in;text-indent:45.0pt'><span
style='font-size:12.0pt;line-height:115%;color:black'></span><span
style='font-size:8.0pt;line-height:115%;color:black'></span></p>

<p class=MsoListParagraphCxSpLast style='margin-left:49.5pt;text-indent:0in'><span
style='font-size:12.0pt;line-height:115%'>29.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;
</span></span><span style='font-size:12.0pt;line-height:115%'>Akun media social
anda </span></p>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 width=923
 style='width:553.5pt;margin-left:71.7pt;border-collapse:collapse;border:none'>
 <tr style='height:.2in'>
  <td width=218 valign=top style='width:130.65pt;border:solid windowtext 1.0pt;
  background:#D9D9D9;padding:0in 5.4pt 0in 5.4pt;height:.2in'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:12.0pt'>Linkedln</span></p>
  </td>
  <td width=232 valign=top style='width:139.35pt;border:solid windowtext 1.0pt;
  border-left:none;background:#D9D9D9;padding:0in 5.4pt 0in 5.4pt;height:.2in'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:12.0pt'>Facebook</span></p>
  </td>
  <td width=233 valign=top style='width:139.5pt;border:solid windowtext 1.0pt;
  border-left:none;background:#D9D9D9;padding:0in 5.4pt 0in 5.4pt;height:.2in'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:12.0pt'>Twitter</span></p>
  </td>
  <td width=240 valign=top style='width:2.0in;border:solid windowtext 1.0pt;
  border-left:none;background:#D9D9D9;padding:0in 5.4pt 0in 5.4pt;height:.2in'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:12.0pt'>Instagram</span></p>
  </td>
 </tr>
 <tr style='height:.2in'>
  <td width=218 valign=top style='width:130.65pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt;height:.2in'>
  <p class=MsoListParagraphCxSpFirst style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'>{{$peserta->linkedin}}</span></p>
  </td>
  <td width=232 valign=top style='width:139.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:.2in'>
  <p class=MsoListParagraphCxSpMiddle style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'>{{$peserta->facebook}}</span></p>
  </td>
  <td width=233 valign=top style='width:139.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:.2in'>
  <p class=MsoListParagraphCxSpMiddle style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'>{{$peserta->twitter}}</span></p>
  </td>
  <td width=240 valign=top style='width:2.0in;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:.2in'>
  <p class=MsoListParagraphCxSpLast style='margin:0in;margin-bottom:.0001pt;
  line-height:normal'><span style='font-size:12.0pt'>{{$peserta->instagram}}</span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal align=center style='text-align:center;text-indent:45.0pt'><b>&nbsp;</b></p>

</div>
</div>
</body>

</html>
