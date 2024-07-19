<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BiodataTenagaPendidik>
 */
class DataGuruFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_guru' => $this->faker->unique()->numerify('Gr_#####'),
            'nip' => $this->faker->unique()->numerify('##########'),
            'gelardepan' => $this->faker->optional()->title,
            'namalengkap' => $this->faker->name,
            'gelarbelakang' => $this->faker->suffix, // Ensure gelarbelakang is not null
            'jeniskelamin' => $this->faker->randomElement(['Laki-laki', 'Perempuan']),
            'jenisguru' => $this->faker->randomElement(['Kepala Sekolah', 'Produktif', 'Umum', 'BP/BK', 'Tata Usaha']),
            'tempatlahir' => $this->faker->city,
            'tanggallahir' => $this->faker->date,
            'agama' => $this->faker->randomElement(['Islam', 'Kristen', 'Katolik', 'Hindu', 'Budha']),
            'email' => $this->faker->unique()->safeEmail,
            'nomorhp' => $this->faker->phoneNumber,
            'photo' => $this->faker->optional()->imageUrl,
            'motto' => $this->faker->optional()->sentence,
            'alamat_dusun' => $this->faker->optional()->word,
            'alamat_jalan' => $this->faker->optional()->streetName,
            'alamat_norumah' => $this->faker->optional()->numerify('###'),
            'alamat_rt' => $this->faker->optional()->numerify('###'),
            'alamat_rw' => $this->faker->optional()->numerify('###'),
            'alamat_desa' => $this->faker->citySuffix,
            'alamat_kec' => $this->faker->city,
            'alamat_kab' => $this->faker->city,
            'alamat_kodepos' => $this->faker->numerify('#####'),
            'aktif' => $this->faker->randomElement(['Aktif', 'Tidak Aktif', 'Pensiun', 'Pindah', 'Keluar']),
        ];
    }
}
