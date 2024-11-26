<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{

    public function index()
    {

        $ingredientes = [
            'farinha' => 'farinha',
            'ovos' => 'ovos',
            'farinha2' => 'farinha2',
            'ovos2' => 'ovos2'
        ];

        $data['ingredientes'] = $ingredientes;

        return view('bemvido', $data);
    }


    public function exercicio01()
    {

        $pessoas = [
            [
                'image' => 'https://i.pravatar.cc/150?img=' . rand(0, 50),
                'nome' => 'Alessandro',
                'birth' => '29/01/90',
                'idade' => 29
            ],

            [
                'image' => 'https://i.pravatar.cc/150?img=' . rand(0, 50),
                'nome' => 'Bonieky',
                'birth' => '10/11/1933',
                'idade' => 90
            ],

            [
                'image' => 'https://i.pravatar.cc/150?img=' . rand(0, 50),
                'nome' => 'Maria',
                'birth' => '01/01/2020',
                'idade' => 2
            ]
        ];

        $data['pessoas'] = $pessoas;

        return view('ex01', $data);
    }

    public function exercicio02()
    {
        $numero = 1;


        $url = 'https://i.pravatar.cc/150?img=' . $numero;


        $data['url'] = $url;

        return view('ex02', $data);
    }

    public function exercicio03()
    {

        $numero = 1;


        $url = 'https://i.pravatar.cc/150?img=' . $numero;


        $data['url'] = $url;

        return view('ex03', $data);
    }

    public function exercicio04() {

        $pessoas = [
            [
                'image' => 'https://i.pravatar.cc/150?img=' . rand(0, 50),
                'nome' => 'Alessandro',
                'birth' => '29/01/90',
                'idade' => 29
            ],

            [
                'image' => 'https://i.pravatar.cc/150?img=' . rand(0, 50),
                'nome' => 'Bonieky',
                'birth' => '10/11/1933',
                'idade' => 90
            ],

            [
                'image' => 'https://i.pravatar.cc/150?img=' . rand(0, 50),
                'nome' => 'Maria',
                'birth' => '01/01/2020',
                'idade' => 2
            ]
        ];

        $data['pessoas'] = $pessoas;

        return view('ex04', $data);
    }

    public function exercicio05() {


        $data = [

        ];

        return view('ex05', $data);
    }

    public function exercicio06() {


        $data = [

        ];

        return view('ex06', $data);
    }
}
