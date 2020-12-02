<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {

        $data = [
            'judul' => 'Home | latihan CI4'
        ];
        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'judul' => 'About | latihan Ci4',
            'identitas' => [
                'nama' => 'Hylmi',
                'Alamat' => 'kemit',
                'Jurusan' => 'IT'
            ]
        ];
        return view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'judul' => 'Contact | Latihan CI4',
            'identitas' => [
                [
                    'nama' => 'Hylmi',
                    'alamat' => 'kemit, Kwaren, Ngawen, Klaten',
                    'telp' => '0812345667'
                ],
                [
                    'nama' => 'Muh Syihab',
                    'alamat' => 'Jl. Kebangsaaan Kaula Muda',
                    'telp' => '628155633'
                ]
            ]
        ];

        return view('pages/contact', $data);
    }

    //--------------------------------------------------------------------

}
