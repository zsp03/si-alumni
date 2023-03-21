<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $list_jurusan = array(
            "Matematika",
            "Fisika",
            "Kesehatan Masyarakat",
            "Farmasi",
            "Kimia",
            "Biologi",
            "Pendidikan Dokter",
            "Agroteknologi",
            "Ilmu Dan Teknologi Pangan",
            "Agribisnis",
            "Keteknikan Pertanian",
            "Teknik Sipil",
            "Teknik Mesin",
            "Teknik Elektro",
            "Teknik Perkapalan",
            "Teknik Geologi",
            "Pendidikan Dokter Gigi",
            "Teknik Arsitektur",
            "Kehutanan",
            "Geofisika",
            "Statistika",
            "Ilmu Gizi",
            "Ilmu Kelautan",
            "Budidaya Perairan",
            "Manajemen Sumberdaya Perairan",
            "Pemanfaatan Sumberdaya Perikanan",
            "Agrobisnis Perikanan",
            "Ilmu Keperawatan",
            "Peternakan",
            "Teknik Kelautan",
            "Teknik Industri",
            "Teknik Sistem Perkapalan",
            "Teknik Pengemb. Wilayah Kota",
            "Teknik Pertambangan",
            "Teknik Informatika",
            "Fisoterapi",
            "Teknik Lingkungan",
            "Kedokteran Hewan",
            "Psikologi",
            "Ilmu Komputer",
            "Ilmu Aktuaria",
            "Rekayasa Kehutanan",
            "Ilmu Tanah",
            "Proteksi Tanaman",
            "Konservasi Hutan",
            "Teknologi Hasil Perikanan",
            "Manajemen",
            "Ilmu Hukum",
            "Ilmu Politik",
            "Antropologi Sosial",
            "Ilmu Sejarah",
            "Ilmu Komunikasi",
            "Sosiologi",
            "Akuntansi",
            "Ilmu Pemerintahan",
            "Ilmu Hubungan Internasional",
            "Administrasi Publik",
            "Sastra Indonesia",
            "Sastra Daerah/Bugis Makassar",
            "Sastra Asia Barat/Arab",
            "Sastra Inggris",
            "Sastra Perancis/ Barat Roman",
            "Arkeologi",
            "Sastra Jepang",
            "Ekonomi Pembangunan",
            "Hukum Administrasi Negara",
            "Bahasa Mandarin Dan Kebudayaan Tiongkok",
            "Pariwisata",
            "Teknologi Produksi Ternak",
            "Teknologi Produksi Tanaman Pangan",
            "Agribisnis Pangan",
            "Teknologi Pakan Ternak",
            "Agribisnis Peternakan",
            "Terapi Gigi",
            "Budi Daya Laut Dan Pantai",
            "Destinasi Pariwisata"
        );

        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'jurusan' => array_rand(array_flip($list_jurusan),1),
            'instagram_account' => '@'.Str::random(5),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
