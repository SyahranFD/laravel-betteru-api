<?php

namespace Database\Seeders;

use App\Models\Food;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Goals Menurunkan Berat Badan
        Food::create(['name' => 'Pancake Pisang', 'kalori' => 297, 'lemak' => 7.82, 'karbohidrat' => 39.11, 'protein' => 18.71, 'note' => 'Sehat, enak dan mudah disiapkan.', 'imageUrl' => 'https://cdn0-production-images-kly.akamaized.net/n7CbCGT97p4R1vrSXaQVf3xYwJE=/0x0:6423x3620/469x260/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/4019246/original/013802200_1652249872-shutterstock_1709675284.jpg', 'videoUrl' => 'https://youtu.be/-Et1LruEtkY?si=xpnDn27Joi2uCajY', 'goals' => 'Menurunkan Berat Badan', 'time' => 18]);
        Food::create(['name' => 'Telur Sutera', 'kalori' => 195, 'lemak' => 6.81, 'karbohidrat' => 22.75, 'protein' => 12.76, 'note' => 'Telur kukus dengan sisi jagung dan wortel.', 'imageUrl' => 'https://m.ftscrt.com/static/recipe/be854e2e-eccc-4c08-9702-b831f1deac1f_fs2.jpg', 'videoUrl' => 'https://youtu.be/X3HGaVh-4L0?si=947CgOdhq_wlWro2', 'goals' => 'Menurunkan Berat Badan', 'time' => 45]);
        Food::create(['name' => 'Cah Sayur', 'kalori' => 240, 'lemak' => 1.46, 'karbohidrat' => 36.44, 'protein' => 20.94, 'note' => 'Makan siang dikemas dengan karbohidrat, serat, protein, dan vitamin.', 'imageUrl' => 'https://www.masakapahariini.com/wp-content/uploads/2018/09/cah-sayur.jpg', 'videoUrl' => 'https://youtu.be/foKTjBdhTkQ?si=GoQOpxffpQaXNS1L', 'goals' => 'Menurunkan Berat Badan', 'time' => 16]);
        Food::create(['name' => 'Sup Telur Jagung', 'kalori' => 217, 'lemak' => 7.41, 'karbohidrat' => 33.00, 'protein' => 8.48, 'note' => 'SSup yang menenangkan dengan telur, jagung, dan sayuran.', 'imageUrl' => 'https://www.masakapahariini.com/wp-content/uploads/2022/04/sup-jagung-telur.jpg', 'videoUrl' => 'https://youtu.be/v6nTR84Wj0k?si=mkQd-VsncP5BV25p', 'goals' => 'Menurunkan Berat Badan', 'time' => 55]);
        Food::create(['name' => 'Sup Tahu Brokoli', 'kalori' => 159, 'lemak' => 9.32, 'karbohidrat' => 8.89, 'protein' => 12.05, 'note' => 'Menu Simple Kaya Nutrisi.', 'imageUrl' => 'https://asset-2.tstatic.net/kaltim/foto/bank/images/resep-sup-brokoli-tahu.jpg', 'videoUrl' => 'https://youtu.be/Avtjc5USv8g?si=rhLwvmOyv6s9DStb', 'goals' => 'Menurunkan Berat Badan', 'time' => 20]);
        Food::create(['name' => 'Omlet Bayam', 'kalori' => 95, 'lemak' => 4.81, 'karbohidrat' => 7.55, 'protein' => 7.04, 'note' => 'Untuk Mengawali Pagi dengan Omelet Bayam yang penuh Gizi, Sehat serta Ekonomis.', 'imageUrl' => 'https://asset.kompas.com/crops/7_16WjKjKSU0q-yfH_431_wZEz0=/0x0:1000x667/1200x800/data/photo/2024/04/27/662c5d6f930e9.jpg', 'videoUrl' => 'https://youtu.be/gX7yb7Y762o?si=dvRsVrwcm2YyMQRD', 'goals' => 'Menurunkan Berat Badan', 'time' => 25]);
//        Food::create(['name' => 'Pancake', 'kalori' => 297, 'lemak' => 7.82, 'karbohidrat' => 39.11, 'protein' => 18.71, 'note' => 'Sehat, enak dan mudah disiapkan', 'imageUrl' => '', 'videoUrl' => '', 'goals' => 'Menurunkan Berat Badan']);


        // Goals Menaikkan Berat Badan
        Food::create(['name' => 'Toast Avocado', 'kalori' => 488, 'lemak' => 37.53, 'karbohidrat' => 39.95, 'protein' => 6.83, 'note' => 'Roti panggang alpukat adalah cara mudah dan sehat untuk memulai pagi atau sebagai camilan siang hari.', 'imageUrl' => 'https://o-cdf.oramiland.com/unsafe/o-cdn-cas.oramiland.com/parenting/original_images/Avocado_Toast_Original.webp', 'videoUrl' => 'https://youtu.be/0R5km8AQGlI?si=TjFohLM_hvq0gK9c', 'goals' => 'Menaikkan Berat Badan', 'time' => 14]);
        Food::create(['name' => 'Wrap Chicken Salad', 'kalori' => 382, 'lemak' => 15.03, 'karbohidrat' => 27.10, 'protein' => 33.22, 'note' => 'Salad wrap merupakan olahan sayur segar menggunakan dressing yang dibalut dengan tortila. Cocok untuk yang hobi ngemil tapi gak mau berat badan naik. Tak cuma enak, tapi juga sehat.', 'imageUrl' => 'https://www.ourhappymess.com/wp-content/uploads/2023/07/Chicken-Salad-Wraps-square-featured.jpg', 'videoUrl' => 'https://youtu.be/HbQ_8Koa4Ps?si=ZVFMhYQMLnobbDo6', 'goals' => 'Menaikkan Berat Badan', 'time' => 25]);
        Food::create(['name' => 'Steak Tempe', 'kalori' => 992, 'lemak' => 43.46, 'karbohidrat' => 113.09, 'protein' => 43.39, 'note' => 'Rasa makanan yang terbuat dari tempe ini hampir menyerupai olahan daging sehingga pantas disebut sebagai Steak tempe.', 'imageUrl' => 'https://cdn0-production-images-kly.akamaized.net/O2KASnUm9Bp4vpXnKkb8cRPHesA=/0x88:999x651/1200x675/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/4141610/original/098030100_1661917718-shutterstock_2182572005.jpg', 'videoUrl' => 'https://youtu.be/ji0LcuZFoEI?si=9mknmSkzvqSEdmzg', 'goals' => 'Menaikkan Berat Badan', 'time' => 60]);
        Food::create(['name' => 'Bubur Ayam Oatmeal', 'kalori' => 304, 'lemak' => 9.97, 'karbohidrat' => 21.06, 'protein' => 35.65, 'note' => 'Olahan oatmeal dibuat bubur ayam yang enak, gampang dan gak bikin eneg', 'imageUrl' => 'https://www.dapurkobe.co.id/wp-content/uploads/bubur-ayam-oatmeal.jpg', 'videoUrl' => 'https://youtu.be/60cTziXKDAs?si=gFIoMOV9AdUKd6Ob', 'goals' => 'Menaikkan Berat Badan', 'time' => 25]);
        Food::create(['name' => 'Dada Ayam Paprika', 'kalori' => 272, 'lemak' => 7.37, 'karbohidrat' => 12.69, 'protein' => 38.55, 'note' => 'Tumis dada ayam dengan paprika.', 'imageUrl' => 'https://m.ftscrt.com/static/recipe/5e3c92fb-8155-402e-8e15-ad37f67a49f3_fs2.jpg', 'videoUrl' => 'https://youtu.be/UDlt9O6unu8?si=e9qKCXiAaSqMsLCD', 'goals' => 'Menaikkan Berat Badan', 'time' => 25]);
        Food::create(['name' => 'Salad Ayam', 'kalori' => 376, 'lemak' => 13.98, 'karbohidrat' => 41.39, 'protein' => 22.51, 'note' => 'Salad dengan ayam, jagung dan kentang.', 'imageUrl' => 'https://asset.kompas.com/crops/WR4Qc-MFmzIjVWLVXFvGz1DT8sg=/0x0:1000x667/1200x800/data/photo/2023/10/17/652e4b591c8f8.jpg', 'videoUrl' => 'https://youtu.be/sSxx64Ku-5c?si=jTe8ccn27FlzPP_U', 'goals' => 'Menaikkan Berat Badan', 'time' => 40]);
//        Food::create(['name' => 'Pancake', 'kalori' => 297, 'lemak' => 7.82, 'karbohidrat' => 39.11, 'protein' => 18.71, 'note' => 'Sehat, enak dan mudah disiapkan', 'imageUrl' => '', 'videoUrl' => '', 'goals' => 'Menaikkan Berat Badan']);
    }
}
