<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AutoController extends Controller
{   
    public function index(){   
        $urlSatu    = "kelurahan";
        $dataSatu   = apiGet($urlSatu);
        foreach ($dataSatu['data'] as $key => $value) {
            $nmKota[$value['kode_kota']] =  $value['nama_kota'];
            $nmKecamatan[$value['kode_kecamatan']] =  $value['nama_kecamatan'];
            $nmKelurahan[$value['kode_kelurahan']] =  $value['nama_kelurahan'];
        }
        $urlDua     = "rumahsakitumum";
        $dataDua   = apiGet($urlDua);
        $data   = array();
        foreach ($dataDua['data'] as $key => $value) {
            $data[] = array(
                                'id' => $value['id'],
                                'nama_rsu' => $value['nama_rsu'],
                                'jenis_rsu' => $value['jenis_rsu'],
                                'location' => array('latitude' => $value['location']['latitude'],'longitude' => $value['location']['longitude'],),
                                'alamat' => $value['location']['alamat'],
                                'kode_pos' => $value['kode_pos'],
                                'telepon' => $value['telepon'],
                                'faximile' => $value['faximile'],
                                'website' => $value['website'],
                                'email' => $value['email'],
                                'kelurahan' => array('kode'=>$value['kode_kelurahan'],'nama'=>$nmKelurahan[$value['kode_kelurahan']],),
                                'kecamatan' => array('kode'=>$value['kode_kecamatan'],'nama'=>$nmKecamatan[$value['kode_kecamatan']],),
                                'kota' => array('kode'=>$value['kode_kota'],'nama'=>$nmKota[$value['kode_kota']],),
                            );
        }
        if (count($data)>0) {
            return response()->json([
                'status' => 'success',
                'count'  => count($data),
                'data'    => $data
            ], 200);
        } 
        else {
            return response()->json([
                'status' => 'Failed',
            
            ], 404);
        }
    }
    
    

}
