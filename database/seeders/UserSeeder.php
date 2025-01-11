<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User Rey
        $rey = User::create([
            'name' => 'Rey',
            'email' => 'rey@gmail.com',
            'password' => Hash::make('reypass'),
            'date_of_birth' => '2004-12-12',
            'age' => 21,
            'gender' => 'Laki Laki',
            'goals' => 'Menaikkan Berat Badan',
            'weight' => 60,
            'height' => 168,
            'activity_level' => 'Sangat Jarang Beraktivitas',
            'is_verified_email' => true,
            'created_at' => '1999-01-01 00:00:00',
        ]);

        // Daily Activity Makan Rey
        $foods = [
            ['name' => 'Ayam Bakar', 'note' => 'Ayam bakar dengan bumbu kecap manis yang meresap sempurna. Kaya protein untuk memperkuat otot, tetapi sebaiknya tidak berlebihan karena ada kandungan lemak.', 'kalori' => 300, 'lemak' => 8, 'protein' => 25, 'karbohidrat' => 10],
            ['name' => 'Soto Ayam', 'note' => 'Semangkuk soto ayam hangat dengan kuah gurih dan perasan jeruk nipis. Pilihan yang cukup sehat karena rendah lemak, tetapi sebaiknya kurangi penggunaan santan.', 'kalori' => 250, 'lemak' => 5, 'protein' => 18, 'karbohidrat' => 30],
            ['name' => 'Gado-Gado', 'note' => 'Salad khas Indonesia dengan sayur segar, tahu, tempe, dan saus kacang. Kaya serat dan protein nabati, tetapi hati-hati dengan jumlah saus kacangnya agar tidak terlalu tinggi kalori.', 'kalori' => 400, 'lemak' => 12, 'protein' => 15, 'karbohidrat' => 45],
            ['name' => 'Nasi Uduk', 'note' => 'Nasi uduk yang gurih dengan lauk pauk seperti tempe dan ayam goreng. Mengandung lemak lebih tinggi, jadi lebih baik dikonsumsi sesekali saja.', 'kalori' => 450, 'lemak' => 10, 'protein' => 12, 'karbohidrat' => 65],
            ['name' => 'Bakso', 'note' => 'Bakso dengan kuah kaldu sapi yang hangat. Cukup tinggi protein, tetapi perhatikan tambahan mie dan gorengan agar tidak terlalu berlebihan.', 'kalori' => 350, 'lemak' => 7, 'protein' => 20, 'karbohidrat' => 40],
            ['name' => 'Mie Goreng', 'note' => 'Mie goreng dengan tambahan sayur dan telur. Sebaiknya tidak terlalu sering dikonsumsi karena tinggi lemak dan karbohidrat tetapi rendah serat.', 'kalori' => 500, 'lemak' => 15, 'protein' => 10, 'karbohidrat' => 70],
            ['name' => 'Omelet Sayur', 'note' => 'Omelet dengan campuran sayuran segar seperti bayam dan wortel. Sumber protein yang baik dan lebih sehat jika dimasak dengan sedikit minyak.', 'kalori' => 320, 'lemak' => 10, 'protein' => 22, 'karbohidrat' => 15],
            ['name' => 'Tahu Isi', 'note' => 'Tahu isi yang renyah di luar dan lembut di dalam. Camilan yang mengandung protein nabati, tetapi sebaiknya tidak dikonsumsi berlebihan karena digoreng.', 'kalori' => 280, 'lemak' => 14, 'protein' => 12, 'karbohidrat' => 20],
            ['name' => 'Pecel Lele', 'note' => 'Lele goreng dengan sambal terasi dan lalapan. Lele mengandung omega-3 yang baik, tetapi sebaiknya dipilih yang tidak terlalu banyak minyak.', 'kalori' => 380, 'lemak' => 9, 'protein' => 28, 'karbohidrat' => 15],
            ['name' => 'Capcay', 'note' => 'Campuran berbagai sayuran yang ditumis ringan. Kaya vitamin dan serat, pilihan yang sangat sehat terutama jika tidak terlalu banyak minyak.', 'kalori' => 250, 'lemak' => 5, 'protein' => 12, 'karbohidrat' => 30],
        ];

        for ($i = 1; $i <= 31; $i++) {
            // Tentukan jumlah makanan hari ini (random antara 4 dan 5)
            $numFoods = rand(6, 7);

            // Ambil makanan secara acak dari daftar
            $selectedFoods = collect($foods)->random($numFoods);

            foreach ($selectedFoods as $food) {
                $rey->dailyActivities()->create([
                    'date' => now()->subDays($i)->toDateString(),
                    'category' => 'Makan',
                    'name' => $food['name'],
                    'note' => $food['note'],
                    'kalori' => $food['kalori'],
                    'lemak' => $food['lemak'],
                    'protein' => $food['protein'],
                    'karbohidrat' => $food['karbohidrat'],
                ]);
            }
        }

        // Daily Activity Aktivitas Rey
        $activities = [
            ['name' => 'Jogging', 'note' => 'Lari ringan selama 30 menit di pagi hari untuk menjaga kebugaran dan meningkatkan stamina. Baik untuk kesehatan jantung.', 'kalori' => 250],
            ['name' => 'Senam Pagi', 'note' => 'Gerakan pemanasan dan peregangan selama 20 menit. Baik untuk melancarkan peredaran darah dan menjaga fleksibilitas tubuh.', 'kalori' => 150],
            ['name' => 'Bersepeda', 'note' => 'Bersepeda santai selama 45 menit. Membantu membakar kalori, melatih otot kaki, dan meningkatkan keseimbangan tubuh.', 'kalori' => 400],
            ['name' => 'Renang', 'note' => 'Berenang selama 40 menit sangat baik untuk melatih pernapasan dan memperkuat otot seluruh tubuh.', 'kalori' => 500],
            ['name' => 'Yoga', 'note' => 'Latihan pernapasan dan fleksibilitas selama 30 menit. Cocok untuk relaksasi dan mengurangi stres.', 'kalori' => 120],
            ['name' => 'Angkat Beban', 'note' => 'Latihan kekuatan selama 50 menit, fokus pada otot lengan dan dada. Pastikan tidak berlebihan agar tidak cedera.', 'kalori' => 300],
            ['name' => 'Lompat Tali', 'note' => 'Latihan kardio yang efektif selama 15 menit. Membantu membakar kalori dengan cepat dan meningkatkan daya tahan tubuh.', 'kalori' => 200],
            ['name' => 'Mendaki', 'note' => 'Hiking ringan selama 60 menit. Baik untuk kesehatan jantung, pernapasan, dan kekuatan kaki.', 'kalori' => 450],
            ['name' => 'Stretching', 'note' => 'Peregangan otot selama 10 menit sebelum dan sesudah olahraga untuk menghindari cedera.', 'kalori' => 80],
            ['name' => 'Bermain Sepak Bola', 'note' => 'Bermain sepak bola selama 60 menit bersama teman-teman. Baik untuk daya tahan tubuh dan koordinasi.', 'kalori' => 550],
        ];

        for ($i = 1; $i <= 31; $i++) {
            // Tentukan jumlah aktivitas hari ini (acak antara 4 dan 5)
            $numActivities = rand(1, 2);

            // Ambil aktivitas secara acak dari daftar
            $selectedActivities = collect($activities)->random($numActivities);

            foreach ($selectedActivities as $activity) {
                $rey->dailyActivities()->create([
                    'date' => now()->subDays($i)->toDateString(),
                    'category' => 'Aktivitas',
                    'name' => $activity['name'],
                    'note' => $activity['note'],
                    'kalori' => $activity['kalori'],
                ]);
            }
        }

        // Daily Water Rey
        for ($i = 1; $i <= 31; $i++) {
            $rey->dailyWaters()->create([
                'date' => now()->subDays($i)->toDateString(),
                'amount' => rand(3, 10) * 200,
            ]);
        }
    }
}
