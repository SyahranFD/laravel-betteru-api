<?php

namespace Database\Seeders;

use App\Models\Sport;
use App\Models\SportCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Sport Category
        SportCategory::create(['name' => 'Fitness', 'imageUrl' => 'https://images.unsplash.com/photo-1521804906057-1df8fdb718b7?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MzF8fGZpdG5lc3N8ZW58MHx8MHx8fDA%3D']);
        SportCategory::create(['name' => 'Kardio', 'imageUrl' => 'https://plus.unsplash.com/premium_photo-1664537975122-9c598d85816e?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTd8fHJ1bnxlbnwwfHwwfHx8MA%3D%3D']);
        SportCategory::create(['name' => 'Senam', 'imageUrl' => 'https://plus.unsplash.com/premium_photo-1674420731166-5d65072152d7?q=80&w=2787&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D']);
        SportCategory::create(['name' => 'Yoga', 'imageUrl' => 'https://plus.unsplash.com/premium_photo-1669795609939-b5e8e5e85e6d?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NjV8fGV4ZXJjaXNlfGVufDB8fDB8fHww']);

        // Fitness
        Sport::create(['name' => 'Pull Up', 'category' => 'Fitness', 'time' => 7, 'kalori' => '260-440kkal / jam', 'goals' => 'Menaikkan Berat Badan', 'imageUrl' => 'https://images.unsplash.com/photo-1677165733273-dcc3724c00e8?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8cHVsbCUyMHVwfGVufDB8fDB8fHww', 'videoUrl' => 'https://youtu.be/xf7ctwjcYjo?si=hLf4v-MlmQbxdZjd']);
        Sport::create(['name' => 'Push Up', 'category' => 'Fitness', 'time' => 2, 'kalori' => '260-440kkal / jam', 'goals' => 'Menaikkan Berat Badan', 'imageUrl' => 'https://plus.unsplash.com/premium_photo-1667511316841-6a775f347479?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTd8fHB1c2glMjB1cHxlbnwwfHwwfHx8MA%3D%3D', 'videoUrl' => 'https://youtu.be/fMKBfvsltAQ?si=nyS0SRjfTJXAxGmZ']);
        Sport::create(['name' => 'Squat', 'category' => 'Fitness', 'time' => 6, 'kalori' => '260-440kkal / jam', 'goals' => 'Menaikkan Berat Badan', 'imageUrl' => 'https://plus.unsplash.com/premium_photo-1682088258636-682c0887bf9a?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTd8fHNxdWF0fGVufDB8fDB8fHww', 'videoUrl' => 'https://youtu.be/aCQCvOfkXQY?si=vw-OuT1bh0JEQuVd']);
        Sport::create(['name' => 'Sit Up', 'category' => 'Fitness', 'time' => 2, 'kalori' => '260-440kkal / jam', 'goals' => 'Menaikkan Berat Badan', 'imageUrl' => 'https://plus.unsplash.com/premium_photo-1663045607940-26ded68c6417?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjF8fHNpdCUyMHVwfGVufDB8fDB8fHww', 'videoUrl' => 'https://youtu.be/fgY5OI-_NgY?si=ONbFTmUPIuo3zahq']);
        Sport::create(['name' => 'Dumbbell Overhead Extension', 'category' => 'Fitness', 'time' => 2, 'kalori' => '260-440kkal / jam', 'goals' => 'Menaikkan Berat Badan', 'imageUrl' => 'https://cdn.shopify.com/s/files/1/1497/9682/files/1.How_to_Do_an_Overhead_Triceps_Extension.jpg?v=1674836311', 'videoUrl' => 'https://youtu.be/-Vyt2QdsR7E?si=UUfjcEEd2l-JCOaC']);
        Sport::create(['name' => 'Dumbbell Bicep Curl', 'category' => 'Fitness', 'time' => 4, 'kalori' => '260-440kkal / jam', 'goals' => 'Menaikkan Berat Badan', 'imageUrl' => 'https://images.unsplash.com/photo-1691916163755-75fe9a67f760?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjB8fGJpY2VwJTIwY3VybHxlbnwwfHwwfHx8MA%3D%3D', 'videoUrl' => 'https://youtu.be/sumWFszpRu4?si=ZEzQgx71We5767dz']);
//        Sport::create(['name' => 'Pull', 'category' => 'Fitness', 'time' => 0, 'kalori' => '260-440kkal / jam', 'goals' => 'Menaikkan Berat Badan', 'imageUrl' => '', 'videoUrl' => '']);

        // Kardio
        Sport::create(['name' => 'Lari', 'category' => 'Kardio', 'time' => 7, 'kalori' => '600-800kkal / jam', 'goals' => 'Menurunkan Berat Badan', 'imageUrl' => 'https://plus.unsplash.com/premium_photo-1674605365723-15e6749630f4?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8cnVubmluZ3xlbnwwfHwwfHx8MA%3D%3D', 'videoUrl' => 'https://youtu.be/rsZQsF4nD5E?si=S6TJEdkCHmlp2VHM']);
        Sport::create(['name' => 'Lompat Tali', 'category' => 'Kardio', 'time' => 9, 'kalori' => '750kkal / jam', 'goals' => 'Menurunkan Berat Badan', 'imageUrl' => 'https://plus.unsplash.com/premium_photo-1664299555455-3e0a5542d3ea?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8c2tpcHBpbmd8ZW58MHx8MHx8fDA%3D', 'videoUrl' => 'https://youtu.be/-p_jLym5Cls?si=64WVlU0I42Dh2bg1']);
        Sport::create(['name' => 'Bersepeda', 'category' => 'Kardio', 'time' => 4, 'kalori' => '500-700kkal / jam', 'goals' => 'Menurunkan Berat Badan', 'imageUrl' => 'https://plus.unsplash.com/premium_photo-1713184149461-69b0abeb3daa?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8Y3ljbGluZ3xlbnwwfHwwfHx8MA%3D%3D', 'videoUrl' => 'https://youtu.be/A_uQ4rE657Q?si=N53ZJ4KxXfbpdjJp']);
        Sport::create(['name' => 'Shadow Boxing', 'category' => 'Kardio', 'time' => 8, 'kalori' => '550-800kkal / jam', 'goals' => 'Menurunkan Berat Badan', 'imageUrl' => 'https://media.istockphoto.com/id/1988090577/photo/man-shadowboxing-in-a-small-gym.webp?a=1&b=1&s=612x612&w=0&k=20&c=7Nc-9M8cqK9eBZLXRsbNZ6kVsaqlaTbIF7-rwJmjh5o=', 'videoUrl' => 'https://youtu.be/34VgmFOmPbo?si=f3qaQn5RL76JlXv6']);
        Sport::create(['name' => 'Jumping Jack', 'category' => 'Kardio', 'time' => 2, 'kalori' => '480-720kkal / jam', 'goals' => 'Menurunkan Berat Badan', 'imageUrl' => 'https://awsimages.detik.net.id/community/media/visual/2023/02/23/jumping-jack_169.jpeg?w=1200', 'videoUrl' => 'https://youtu.be/nnC7FWBM8ZI?si=ZdSi5hEW3snimaOd']);
//        Sport::create(['name' => 'Lari', 'category' => 'Kardio', 'time' => 0, 'kalori' => '600-800kkal / jam', 'goals' => 'Menurunkan Berat Badan', 'imageUrl' => '', 'videoUrl' => '']);

        // Senam
        Sport::create(['name' => 'Senam Aerobik', 'category' => 'Senam', 'time' => 17, 'kalori' => '410-520kkal / jam', 'goals' => 'Menurunkan Berat Badan', 'imageUrl' => 'https://cdns.klimg.com/bola.net/resized/810x540/library/upload/21/2024/02/996x664/senam-aerobik_0c18014.jpg', 'videoUrl' => 'https://youtu.be/vSThNlE1snE?si=8uyBLq8UL2Xk__sv']);
        Sport::create(['name' => 'Senam Zumba', 'category' => 'Senam', 'time' => 22, 'kalori' => '410-520kkal / jam', 'goals' => 'Menurunkan Berat Badan', 'imageUrl' => 'https://cdn1-production-images-kly.akamaized.net/ZTQnEx96D9dE4YbLPaTeZkoafvg=/1200x1200/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/4776324/original/013125200_1710755442-active-people-taking-part-zumba-class-together.jpg', 'videoUrl' => 'https://youtu.be/ipAk0L5dDls?si=X7IyUK7JhWgdOdCQ']);
//        Sport::create(['name' => 'Senam ', 'category' => 'Senam', 'time' => 0, 'kalori' => '410-520kkal / jam', 'goals' => 'Menurunkan Berat Badan', 'imageUrl' => '', 'videoUrl' => '']);

        // Yoga
        Sport::create(['name' => 'Yoga Ashtanga', 'category' => 'Yoga', 'time' => 87, 'kalori' => '290kkal / jam', 'goals' => 'Menurunkan Berat Badan', 'imageUrl' => 'https://www.ashishyogafitness.com/wp-content/uploads/2020/03/Ashtangaform.jpg', 'videoUrl' => 'https://youtu.be/cSQFZbtuj1Y?si=TTEOeyo1hZ-nJzVl']);
        Sport::create(['name' => 'Yoga Bikram', 'category' => 'Yoga', 'time' => 75, 'kalori' => '290kkal / jam', 'goals' => 'Menurunkan Berat Badan', 'imageUrl' => 'https://o-cdn-cas.oramiland.com/parenting/images/byc11-e1540329117155.width-800.format-webp.webp', 'videoUrl' => 'https://youtu.be/n9v55pPi-HE?si=ogUSiW_IaXUyA2Jd']);
        Sport::create(['name' => 'Yoga Iyengar', 'category' => 'Yoga', 'time' => 23, 'kalori' => '290kkal / jam', 'goals' => 'Menurunkan Berat Badan', 'imageUrl' => 'https://nirvana-store-assets.s3.ap-southeast-1.amazonaws.com/fitness_young_woman_doing_yoga_exercise_sportswear_with_strap_near_window_pilates_stretchin_ced184bfea.jpg', 'videoUrl' => 'https://youtu.be/qT8MlPdRa2Y?si=cTEPJWZz9hkWoIGj']);
//        Sport::create(['name' => 'Yoga ', 'category' => 'Yoga', 'time' => 0, 'kalori' => '290kkal / jam', 'goals' => 'Menurunkan Berat Badan', 'imageUrl' => '', 'videoUrl' => '']);

    }
}
