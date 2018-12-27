<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FormModel;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('FormView'); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $namapic = $request->pas_foto->getClientOriginalName();
        //dd($namapic);
        $request->pas_foto->move(public_path('image'),$namapic);

        FormModel::create([
                         'posisi'=>$request->posisi,	
                         'pas_foto'=>$namapic,
                         'nama_lengkap'=>$request->nama_lengkap,
                         'tempat_lahir'=>$request->tempat_lahir,
                         'tanggal_lahir'=>$request->tanggal_lahir,
                         'jenis_kelamin'=>$request->jenis_kelamin,
                         'golongan_darah'=>$request->golongan_darah,
                         'status_pernikahan'=>$request->status_pernikahan,
                         'tanggal_nikah'=>$request->tangal_nikah,
                         'agama'=>$request->agama,
                         'nomor_ktp'=>$request->nomor_ktp,
                         'npwp'=>$request->npwp,
                         'bpjs_tk'=>$request->bpjs_tk,
                         'bpjs_kes'=>$request->bpjs_kes,
                         'ktp_alamat'=>$request->alamat,
                         'ktp_rtrw'=>$request->ktp_rtrw,
                         'ktp_kelkec'=>$request->ktp_kelkec,
                         'ktp_kota'=>$request->ktp_kota,
                         'ktp_propinsi'=>$request->ktp_propinsi,
                         'ktp_kodepos'=>$request->ktp_kodepos,
                         'saatini_alamat'=>$request->saatini_alamat,
                         'saatini_rtrw'=>$request->saatini_rtrw,
                         'saatini_kelkec'=>$request->saatini_kelkec,
                         'saatini_kota'=>$request->saatini_kota,
                         'saatini_propinsi'=>$request->saatini_propinsi,
                         'saatini_kodepos'=>$request->saatini_kodepos,
                         'satu_perusahaan'=>$request->satu_perusahaan,
                         'satu_jabatan'=>$request->satu_jabatan,
                         'satu_tglmulai'=>$request->satu_tglmulai,
                         'is_masihkerja'=>$request->is_masihkerja,
                         'satu_tglberakhir'=>$request->satu_tglberakhir,
                         'satu_gaji'=>$request->satu_gaji,
                         'satu_alasanpindah'=>$request->satu_alasanpindah,
                         'dua_perusahaan'=>$request->dua_perusahaan,
                         'dua_jabatan'=>$request->dua_jabatan,
                         'dua_tglmulai'=>$request->dua_tglmulai,
                         'dua_tglberakhir'=>$request->dua_tglberakhir,
                         'dua_gaji'=>$request->dua_gaji,
                         'dua_alasanpindah'=>$request->dua_alasanpindah,
                         'tiga_perusahaan'=>$request->tiga_perusahaan,
                         'tiga_jabatan'=>$request->tiga_jabatan,
                         'tiga_tglmulai'=>$request->tiga_tglmulai,
                         'tiga_tglberakhir'=>$request->tiga_tglberakhir,
                         'tiga_gaji'=>$request->tiga_gaji,
                         'tiga_alasanpindah'=>$request->tiga_alasanpindah,
                         'applicant_email'=>$request->applicant_email,
                         'telp_hp'=>$request->telp_hp,
                         'telp_rumah'=>$request->telp_rumah,
                         'sma_institusi'=>$request->sma_institusi,
                         'sma_jurusan'=>$request->sma_jurusan,
                         'sma_progstudi'=>$request->sma_progstudi,
                         'sma_mulai'=>$request->sma_mulai,
                         'sma_akhir'=>$request->sma_akhir,
                         'sma_nilai'=>$request->sma_nilai,
                         'sma_karyailmiah'=>$request->sma_karyailmiah,
                         'dipl_institusi'=>$request->dipl_institusi,
                         'dipl_fakultas'=>$request->dipl_fakultas,
                         'dipl_progstudi'=>$request->dipl_progstudi,
                         'dipl_mulai'=>$request->dipl_mulai,
                         'dipl_akhir'=>$request->dipl_akhir,
                         'dipl_ipk'=>$request->dipl_ipk,
                         'dipl_skripsi'=>$request->dipl_skripsi,
                         's1_institusi'=>$request->s1_institusi,
                         's1_fakultas'=>$request->s1_fakultas,
                         's1_progstudi'=>$request->s1_progstudi,
                         's1_mulai'=>$request->s1_mulai,
                         's1_akhir'=>$request->s1_akhir,
                         's1_ipk'=>$request->s1_ipk,
                         's1_skripsi'=>$request->s1_skripsi,
                         's2_institusi'=>$request->s2_institusi,
                         's2_fakultas'=>$request->s2_fakultas,
                         's2_progstudi'=>$request->s2_progstudi,
                         's2_mulai'=>$request->s2_mulai,
                         's2_akhir'=>$request->s2_akhir,
                         's2_ipk'=>$request->s2_ipk,
                         's2_thesis'=>$request->s2_thesis,
                         'satu_namakursus'=>$request->satu_namakursus,
                         'satu_institusi'=>$request->satu_institusi,
                         'satu_mulaikursus'=>$request->satu_mulaikursus,
                         'satu_akhirkursus'=>$request->satu_akhirkursus,
                         'satu_keterangan'=>$request->satu_keterangan,
                         'dua_namakursus'=>$request->dua_namakursus,
                         'dua_institusi'=>$request->dua_institusi,
                         'dua_mulaikursus'=>$request->dua_mulaikursus,
                         'dua_akhirkursus'=>$request->dua_akhirkursus,
                         'dua_keterangan'=>$request->dua_keterangan,
                         'satu_bahasaasing'=>$request->satu_bahasaasing,
                         'satu_lisan'=>$request->satu_lisan,
                         'satu_tulisan'=>$request->satu_tulisan,
                         'dua_bahasaasing'=>$request->dua_bahasaasing,
                         'dua_lisan'=>$request->dua_lisan,
                         'dua_tulisan'=>$request->dua_tulisan,
                         'satu_kel_hubungan'=>$request->satu_kel_hubungan,
                         'satu_kel_nama'=>$request->satu_kel_nama,
                         'satu_kel_tgllahir'=>$request->satu_kel_tgllahir,
                         'satu_kel_jeniskelamin'=>$request->satu_kel_jeniskelamin,
                         'satu_kel_pekerjaan'=>$request->satu_kel_pekerjaan,
                         'dua_kel_hubungan'=>$request->dua_kel_hubungan,
                         'dua_kel_nama'=>$request->dua_kel_nama,
                         'dua_kel_tgllahir'=>$request->dua_kel_tgllahir,
                         'dua_kel_jeniskelamin'=>$request->dua_kel_jeniskelamin,
                         'dua_kel_pekerjaan'=>$request->dua_kel_pekerjaan,
                         'tiga_kel_hubungan'=>$request->tiga_kel_hubungan,
                         'tiga_kel_nama'=>$request->tiga_kel_nama,
                         'tiga_kel_tgllahir'=>$request->tiga_kel_tgllahir,
                         'tiga_kel_jeniskelamin'=>$request->tiga_kel_jeniskelamin,
                         'tiga_kel_pekerjaan'=>$request->tiga_kel_pekerjaan,
                         'empat_kel_hubungan'=>$request->empat_kel_hubungan,
                         'empat_kel_nama'=>$request->empat_kel_nama,
                         'empat_kel_tgllahir'=>$request->empat_kel_tgllahir,
                         'empat_kel_jeniskelamin'=>$request->empat_kel_jeniskelamin,
                         'empat_kel_pekerjaan'=>$request->empat_kel_pekerjaan,
                         'lima_kel_hubungan'=>$request->lima_kel_hubungan,
                         'lima_kel_nama'=>$request->lima_kel_nama,
                         'lima_kel_tgllahir'=>$request->lima_kel_tgllahir,
                         'lima_kel_jeniskelamin'=>$request->lima_kel_jeniskelamin,
                         'lima_kel_pekerjaan'=>$request->lima_kel_pekerjaan,
                         'enam_kel_hubungan'=>$request->enam_kel_hubungan,
                         'enam_kel_nama'=>$request->enam_kel_nama,
                         'enam_kel_tgllahir'=>$request->enam_kel_tgllahir,
                         'enam_kel_jeniskelamin'=>$request->enam_kel_jeniskelamin,
                         'enam_kel_pekerjaan'=>$request->enam_kel_pekerjaan,
                         'darurat_nama'=>$request->darurat_nama,
                         'darurat_hubungan'=>$request->darurat_hubungan,
                         'darurat_hp'=>$request->darurat_hp,
                         'darurat_telp'=>$request->darurat_telp,
                         'darurat_alamat'=>$request->darurat_alamat,
                         'darurat_rtrw'=>$request->darurat_rtrw,
                         'darurat_kelkec'=>$request->darurat_kelkec,
                         'darurat_kota'=>$request->darurat_kota,
                         'darurat_propinsi'=>$request->darurat_propinsi,
                         'darurat_kodepos'=>$request->darurat_kodepos,
                         'penyakit'=>$request->penyakit,
                         'akibat_penyakit'=>$request->akibat_penyakit,
                         'penyakit_mulai'=>$request->penyakit_mulai,
                         'penyakit_akhir'=>$request->penyakit_akhir,
                         'nama_bank'=>$request->nama_bank,
                         'nomor_rekening'=>$request->nomor_rekening,
                         'nama_rekening'=>$request->nama_rekening,
                         'cabang_rekening'=>$request->cabang_rekening,
                         'harapan_gaji'=>$request->harapan_gaji,
                         'harapan_fasilitas'=>$request->harapan_fasilitas,
                         'is_seluruhindo'=>$request->is_seluruhindo,
                         'seluruhindo_false'=>$request->seluruhindo_false,
                         'referensi_nama'=>$request->referensi_nama,
                         'referensi_perusahaan'=>$request->referensi_perusahaan,
                         'referensi_telp'=>$request->referensi_telp,
                         'referensi_jabatan'=>$request->referensi_jabatan,
                         'cita_cita'=>$request->cita_cita,
                         'is_kerjaastra'=>$request->is_kerjaastra,
                         'kerjaastra_true'=>$request->kerjaastra_true,
                         'is_psikotesastra' =>$request->is_psikotesastra,
                         'psikotesastra_true'=>$request->psikotesastra_true,
                         'referensi_lowongan' =>$request->referensi_lowongan,
                         'sumber_lowongan' =>$request->sumber_lowongan,
                         'urutan_peminatan' =>$request->urutan_peminatan,
                         'linkedin' =>$request->linkedin,
                         'facebook'=>$request->facebook,
                         'twitter'=>$request->twitter,
                         'instagram'=>$request->instagram,
                ]);
                return redirect()->route('form.success')->with('success','Entry saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function success()
    {
        //
        return view('SuccessView');
    }
}
