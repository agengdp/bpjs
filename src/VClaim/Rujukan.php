<?php
namespace Nsulistiyawan\Bpjs\VClaim;

use Nsulistiyawan\Bpjs\BpjsService;

class Rujukan extends BpjsService
{

    public function insertRujukan($data = [])
    {
        $response = $this->post('Rujukan/insert', $data);
        return json_decode($response, true);
    }
    public function updateRujukan($data = [])
    {
        $response = $this->put('Rujukan/update', $data);
        return json_decode($response, true);
    }
    public function deleteRujukan($data = [])
    {
        $response = $this->delete('Rujukan/delete', $data);
        return json_decode($response, true);
    }

    public function cariByNoRujukan($keyword, $searchBy = '')
    {
        if(empty($searchBy)){
            $url = 'Rujukan/'.$keyword;            
        }else{
            $url = 'Rujukan/RS/'.$keyword;
        }

        $response = $this->get($url);
        return json_decode($response, true);
    }

    public function cariByNoKartu($searchBy, $keyword, $multi = false)
    {
        $record = $multi ? 'List/' : '';
        if ($searchBy == 'RS') {
            $url = 'Rujukan/RS/'.$record.'Peserta/'.$keyword;
        } else {
            $url = 'Rujukan/'.$record.'Peserta/'.$keyword;
        }
        $response = $this->get($url);
        return json_decode($response, true);
    }

    public function cariByTglRujukan($searchBy, $keyword)
    {
        if ($searchBy == 'RS') {
            $url = 'Rujukan/RS/TglRujukan/'.$keyword;
        } else {
            $url = 'Rujukan/List/Peserta/'.$keyword;
        }
        $response = $this->get($url);
        return json_decode($response, true);
    }
}
