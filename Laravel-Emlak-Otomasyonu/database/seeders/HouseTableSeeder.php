<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HouseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::insert('insert into houses (ev_no, adres, oda_sayisi, metrekare,kat, fiyat, sahip_ad, sahip_soyad, sahip_gsm, sahip_email) values (?, ?,?,?,?,?,?,?,?,?)',[1, 'Yıldırım Mah Yeşil Sokak B.pasa/Ist',3,90,2,150,'Hakkı','Bulut','05555555555','cilekes@gmail.com'],[2, 'Hurriyet Mah Bahar Sokak Bagcilar/Ist',2,75,5,100,'Izzet','Altinmese','06666666666','altinmese54@gmail.com'],[3, 'Dalyan Mah Zambak Sokak Lapseki/Canakkale',1,40,0,65,'Lapsekili','Big Smoke','01919191919','alexanderRybak@gmail.com']);
          DB::insert("insert into houses (ev_no, adres, oda_sayisi, metrekare,kat, fiyat, sahip_ad, sahip_soyad, sahip_gsm, sahip_email) values
          (1, 'Yıldırım Mah Yeşil Sokak B.pasa/Ist',3,90,2,150,'Hakkı','Bulut','05555555555','cilekes@gmail.com'),
          (2, 'Hurriyet Mah Bahar Sokak Bagcilar/Ist',2,75,5,100,'Izzet','Altinmese','06666666666','altinmese54@gmail.com'),
          (3, 'Dalyan Mah Zambak Sokak Lapseki/Canakkale',1,40,0,65,'Lapsekili','Big Smoke','01919191919','alexanderRybak@gmail.com')");
    }
}
