<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Brand;

class BrandSeeder extends Seeder
{
    public function run()
    {
        // Default toplist shown to everyone if no country-specific list exists
        $default = [
            ['brand_name'=>'The Venetian Macao','brand_image'=>'https://t0.gstatic.com/licensed-image?q=tbn:ANd9GcROhNrxmrUi0sfvigFFwmy0YGGaN86Ckum3z496zs3D2ZndRINKLtlHe-7vAcsSLyCL','rating'=>5,'country'=>'default'],
            ['brand_name'=>'Foxwoods Resort Casino','brand_image'=>'https://t0.gstatic.com/licensed-image?q=tbn:ANd9GcQFrzwTAbUiSKUTAGgWbyN_yc75GsKrdCH6cjVrniIRMG9T3YgBtMMjIRG4qolg-NR0','rating'=>4,'country'=>'default'],
            ['brand_name'=>'Bellagio','brand_image'=>'https://upload.wikimedia.org/wikipedia/commons/thumb/8/81/Bellagio_Hotel_and_Casino.svg/800px-Bellagio_Hotel_and_Casino.svg.png','rating'=>5,'country'=>'default'],
            ['brand_name'=>'Casino de Monte-Carlo','brand_image'=>'https://t0.gstatic.com/licensed-image?q=tbn:ANd9GcQQM_cp1RaFr4FFmtK9s_fyzqNGx3YITDj5HcHady2Qq9HAQiXHtc5OcmpxkABWQWSt','rating'=>5,'country'=>'default'],
            ['brand_name'=>'WinStar World Casino','brand_image'=>'https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcS_LzwAW8x9NsYAxwtaKRGiskm5epsHvW1DzW8GOcV6T7wCC8_C','rating'=>5,'country'=>'default']
        ];

        // Toplist shown if the country is Bulgaria
        $bg = [
            ['brand_name'=>'Hotel International Casino & Tower','brand_image'=>'https://lh3.googleusercontent.com/p/AF1QipNlo7PJBxM4c4LEInm8KYlKA0g4Z6xUqA6H3Nr5=w114-h114-n-k-no','rating'=>5,'country'=>'BG'],
            ['brand_name'=>'PALMS ROYALE SOFIA CASINO','brand_image'=>'https://lh3.googleusercontent.com/p/AF1QipOwlwVTr0V-J3DIDa0i5IlpirUTFyIKrHrY6ad5=w114-h114-n-k-no','rating'=>4,'country'=>'BG'],
            ['brand_name'=>'Princess Casino Astoria','brand_image'=>'https://lh3.googleusercontent.com/p/AF1QipO3Ahw-D8MBKemN_YPVFvbWaHXm_ynqfvcNvivL=w114-h114-n-k-no','rating'=>4,'country'=>'BG'],
            ['brand_name'=>'Merit Grand Mosta Hotel Casino & Spa','brand_image'=>'https://www.merithotels.com/en/merit-grand-mosta-hotel','rating'=>4,'country'=>'BG'],
            ['brand_name'=>'Platinum Hotel','brand_image'=>'https://assets.graydientcreative.com/files/outlets/platinum/images/exterior-2-(1).jpg','rating'=>4,'country'=>'BG'],
        ];

        // Toplist shown if the country is Malta
        $mt = [
            ['brand_name'=>'Dragonara Casino','brand_image'=>'https://lh3.googleusercontent.com/p/AF1QipMljC7AAn5LpXxNXMMavkUE9LGEFKZ8nVh7uLhA=w114-h114-n-k-no','rating'=>5,'country'=>'MT'],
            ['brand_name'=>'Casino Malta','brand_image'=>'https://lh3.googleusercontent.com/p/AF1QipPy-lxHlHkTnafSpIMFQ1VNHBnJcqjzgcXK1LT6=w114-h114-n-k-no','rating'=>4,'country'=>'MT'],
            ['brand_name'=>'Portomaso Casino','brand_image'=>'https://lh3.googleusercontent.com/gps-cs-s/AC9h4no5r-AyRHUY1nldDr_L9Quif-jhaDdcTCrMxrNkWenIBtI8UivX9fL84x26qdkJ_P69BlrZSiN1N1CrCBq-4aqJwt6Giti8y68lEALUtAA_NtRMnobGdQAESIcfTZ0NBIXnPcpi=w114-h114-n-k-no','rating'=>4,'country'=>'MT'],
            ['brand_name'=>'Casino Maltese','brand_image'=>'https://static1.squarespace.com/static/5627abbd57ccf64247455a2a/5628c95de4b0126c0334f2e8/61efd59cc8224c183a20a00b/1731613154624/Wedding-53.jpg?format=1500w','rating'=>4,'country'=>'MT'],
            ['brand_name'=>'Oracle Casino','brand_image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTQ3a4MxI24Kma42prnb_t5A62aPvPeZCad9g&s','rating'=>4,'country'=>'MT']
        ];

        // Toplist shown if the country is Cameroon
        $cm = [
            ['brand_name'=>'Casino Douala','brand_image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT-04Qbg3RoipFccdwroAtCl8ojkwEez_Rryg&s','rating'=>5,'country'=>'CM'],
            ['brand_name'=>'Casino Yaounde','brand_image'=>'https://hoteltechnologynews.com/wp-content/uploads/2022/09/feather-falls-678x381.jpg','rating'=>4,'country'=>'CM'],
            ['brand_name'=>'Casino Bamenda','brand_image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQIHCSgObouc3QXHcCs-8jKbFCYTiU9lR4x4g&s','rating'=>4,'country'=>'CM'],
            ['brand_name'=>'Casino Buea','brand_image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcStaj8-IpgvW_-yhAL4Sc1Obk73oVDtgfRT1g&s','rating'=>4,'country'=>'CM'],
            ['brand_name'=>'Casino Kumba','brand_image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTOnZZlcteFL16jJHKCGuDS7rh6QO5CgimlSg&s','rating'=>4,'country'=>'CM']
        ];

        foreach (array_merge($default, $bg, $mt, $cm) as $b) {
            Brand::updateOrCreate(
                ['brand_name' => $b['brand_name']],
                $b
            );
        }
    }
}
