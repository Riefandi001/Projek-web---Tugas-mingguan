<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    private static $data_news = [
        [
            "judul" => "viral!!! Organ Tercecer di jalan raya",
            "slug" => "viral!!!-organ-tercecer-dijalan-raya",
            "penulis" => "anjo",
            "konten" => "pembunuhan tanpa busana daerah ciliwangi",
        ],
        [
            "judul" => "Hati hati!! Prnculikan anak terjadi lagi",
            "slug" => "Hati-hati!!-penculikan-anak-terjadi-lagi",
            "penulis" => "jamno",
            "konten" => "menangis meratapi nasib, seorang pemuda ditemukan sedang melahirkan disekitar lampu merah ciliwung",
        ],
        [
            "judul" => "newss 3",
            "slug" => "nesss-jjsdj",
            "penulis" => "pukime",
            "konten" => "munaroh menikami",
        ],
    ];

    public static function ambildata()
    {
        return Self::$data_news;
    }

    public static function caridata($slugp)
    {
        $data_newss = Self::$data_news;

            $new_news = [];
        foreach($data_newss as $news)
        {
            if($news["slug"] === $slugp)
            {
                $new_news = $news;
            }
        }

        return $new_news;
    }

}
