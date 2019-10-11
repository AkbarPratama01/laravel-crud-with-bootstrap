<?php 

use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('siswa')->insert([
            'nama_depan' => 'Akbar',
            'nama_belakang' => 'Pratama',
            'jenis_kelamin' => 'Laki-Laki',
            'agama' => 'Islam',
            'alamat' => 'Cibeureum'
        ]);
    }
}
