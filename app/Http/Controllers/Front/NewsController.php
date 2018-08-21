<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    public function index(Request $request)
    {
        return view('news.index');
    }
    public function berita1(Request $request)
    {
        return view('news.berita1');
    }
    public function berita2(Request $request)
    {
        return view('news.berita2');
    }
    public function berita3(Request $request)
    {
        return view('news.berita3');
    }
    
    public function show(Request $request, $id)
    {
        $news = [
            'berita-1' => [
                'title' => 'Penandatanganan Perjanjian Kerjasama Pendampingan Pengelolaan Gene Bank Sayuran Nasional UGM dan EWINDO',
                'image' => '/img/news1.png',
                'body' => 'Dalam catatan perjalanan kerjasama bersama Akademisi, UGM memiliki ikatan yang sangat erat dengan Ewindo. Salah satu wujud nyata kerjasamanya adalah pengelolaan Gene Bank atau Bank Plasma Nutfah. Di sela Expo Nasional 2018 kemarin, Ewindo mengundang perwakilan akademisi dari UGM untuk merealisasikan kerjasama kedua belah pihak dengan menandatangani Perjanjian Kerjasama Pendampingan Pengelolaan Gene Bank Sayuran Nasional di kantor pusat Purwakarta.

                Bertanggal 15 Mei, Wakil Rektor Bidang Kerjasama dan Alumni, Dr. Paripurna, S.H., M.Hum., LL.M. Direktur Kemitraan, Alumni dan Urusan International, Dr. Danang Sri Hadmoko, S.Si., M.Sc. Kepala Pusat Inovasi Agro Teknologi, Dr. Ir, Taryono, M.Sc. Dekan Fakultas Pertanian UGM, Dr. Jamhari, S.P, M.P. sebagai perwakilan undangan Universitas Gadjah Mada menyempatkan untuk mengunjungi Expo Nasional Panah Merah 2018. Mereka diajak untuk melihat inovasi dan teknologi yang digunakan dalam pengembangan produk Cap Panah Merah dari uji penelitian hingga proses pengemasan. Selain itu, mereka juga berkesempatan melihat varietas-varietas baru yang bersamaan diluncurkan dengan acara Expo Nasional Panah Merah 2018 sebanyak 15 varietas.

                Dengan penandatangan ini diharapkan Ewindo dan UGM bisa membentuk kerjasama yang juga membantu pertanian Indonesia kedepannya dengan membuat Gene Bank Nasional. Kerjasama ini bukanlah awal atau akhir namun sebuah tonggak sejarah dari perubahan masa depan Pertanian Indonesia.'
            ],

            'berita-2' => [
                'title' => 'Bank Genetik Sayuran UGM dan EWINDO',
                'image' => '/img/news2.jpg',
                'body' => ' Menjaga kekayaan plasma nutfah bukanlah perkara mudah yang bisa dikerjakan sendiri oleh satu pihak. Dibutuhkan banyak sumber daya manusia dan teknologi yang tepat untuk melestarikannya. Hal ini memang harus dilakukan mengingat kesuksesan kualitas dari hasil pertanian terletak pada plasma nutfah yang terjaga agar menghasilkan benih yang unggul.

                Oleh karena itu, Universitas Gadjah Mada (UGM) dan PT East West Seed Indonesia (EWINDO) yang memiliki visi sama menandatangani kerjasama dengan membangun Bank Genetik Sayuran. Pada 2 November 2017 UGM yang diwakili oleh Wakil Rektor Bidang Kerja Sama dan Alumni UGM, Dr. Paripurna , S.H., M.Hum., L.LM.,  serta Managing Director EWINDO, Glenn Pardede yang juga dihadiri oleh Rektor UGM Ir. Panut Mulyono, M.Eng., D.Eng., menandatangani perjanjian hibah penunjang Bank Genetik Sayuran. Nantinya, Bank ini berperan dalam pengelolaan sumber daya genetik yang berkelanjutan untuk masa depan pertanian Indonesia.',
            ],

            'berita-3' => [
                'title' => 'Hibah Bank Plasma EWINDO dengan UGM',
                'image' => '/img/news3.JPG',
                'body' => 'Pertukaran cendera mata antara Managing Director of PT East West Seed Indonesia (Ewindo) Glenn Pardede (kiri) dengan Rektor UGM Panut Mulyono seusai menandatangani perjanjian penyaluran hibah pembangunan dan operasional Bank Plasma Nutfah tanaman hortikultura di UGM, Yogyakarta.',
            ]
        ];

        $data = $news[$id];

        return view('news.show', compact('data'));
    }
}
