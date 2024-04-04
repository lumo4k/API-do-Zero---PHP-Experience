<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BandController extends Controller
{
    public function getAll() {
        
        $bands = $this->getBands();

        return response()->json($bands);

    }

    public function getById($id) {
        $thatOneBand = null;

        foreach ($this->getBands() as $band) {
            if ($id == $band['id']) {
                $thatOneBand = $band;
            }
        }

        return $thatOneBand ? response()->json($thatOneBand) : abort(404);

    }



    protected function getBands() {
        return 
        [
            [
                'id' => '1', 
                'nome' => 'Avicii',
                'genero' => 'Eletronica'
            ],
            [
                'id' => '2', 
                'nome' => 'Taylor Swift',
                'genero' => 'Pop'
            ],
            [
                'id' => '3', 
                'nome' => 'One direction',
                'genero' => 'Pop'
            ],
            [
                'id' => '4', 
                'nome' => 'Mayara e Maraisa',
                'genero' => 'Sertanejo'
            ],
            [
                'id' => '5', 
                'nome' => 'Luan Santana',
                'genero' => 'Sertanejo'
            ],
        ];
    }


}
