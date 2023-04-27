<?php

namespace App\Controllers;
use App\Models\m_mahasiswa;

class c_mahasiswa extends BaseController
{

    public function display_table()
    {
        $mahasiswa = new m_mahasiswa();

        $data = [
            'title' => 'Daftar Nilai Mahasiswa',
            'mahasiswa' => $mahasiswa->findAll()
        ];
        return view('components/v_display_data_mhs', $data);
    }

    public function uploadExcel(){
        $file_excel = $this->request->getFile('fileExcel');
			$ext = $file_excel->getClientExtension();
			if($ext == 'xls') {
				$render = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
			} else {
				$render = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
			}
			$spreadsheet = $render->load($file_excel);
	
			$data = $spreadsheet->getActiveSheet()->toArray();
			foreach($data as $x => $row) {
				if ($x == 0) {
					continue;
				}
				
				$NIM = $row[0];
				$NAMA = $row[1];
				$UTS = $row[2];
				$UAS = $row[3];
	
				$db = new m_mahasiswa();

				$cekNis = $db->table('siswa')->getWhere(['NIM'=>$NIM])->getResult();

				if(count($cekNis) > 0) {
					session()->setFlashdata('message','<b style="color:red">Data Gagal di Import NIM ada yang sama</b>');
				} else {
	
				$simpandata = [
					'NIM' => $NIM, 
                    'NAMA' => $NAMA, 
                    'UTS'=> $UTS,
                    'UAS'=> $UAS
				];
	
				$db->table('siswa')->insert($simpandata);
				session()->setFlashdata('message','Berhasil import excel'); 
			}
		}
			
			return redirect()->to('/');
    }


}


?>