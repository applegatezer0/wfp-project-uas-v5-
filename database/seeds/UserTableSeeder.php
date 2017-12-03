<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataUsers = array(
        	/*['id' => 1, 'name' => 'Alief Praditya', 'email' => 's16041098@student.ubaya.ac.id', 'password' => bcrypt('alief2017'), 'status' => '1'],
            ['id' => 2, 'name' => 'Septiano Praditya', 'email' => 's160415110@student.ubaya.ac.id', 'password' => bcrypt('septiano123'), 'status' => '2'],
        	['id' => 3, 'name' => 'Indra Imanuel Gunawan', 'email' => 's160415108@student.ubaya.ac.id', 'password' => bcrypt('indra108'), 'status' => '3'],
            ['id' => 4, 'name' => 'Onesimus Kevin Yahya', 'email' => 's160415099@student.ubaya.ac.id', 'password' => bcrypt('kevin098'), 'status' => '3'],
            ['id' => 5, 'name' => 'Leonardo Julio Layandi', 'email' => 's160415109@student.ubaya.ac.id', 'password' => bcrypt('leo109'), 'status' => '3'],
            ['id' => 6, 'name' => 'Gusti Aditya Adigovinda', 'email' => 's160415113@student.ubaya.ac.id', 'password' => bcrypt('govin113'), 'status' => '3'],
            ['id' => 7, 'name' => 'Arethusa', 'email' => 's160415111@student.ubaya.ac.id', 'password' => bcrypt('thusa111'), 'status' => '3'],
            ['id' => 8, 'name' => 'Prasetya Wibowo', 'email' => 's160415103@student.ubaya.ac.id', 'password' => bcrypt('prasetya103'), 'status' => '3']*/
            ['id' => 9, 'name' => 'Budi Hartanto', 'email' => 'budi@staff.ubaya.ac.id', 'password' => bcrypt('budi123'), 'status' => '2'],
            ['id' => 10, 'name' => 'Joko Siswantoro', 'email' => 'joko@staff.ubaya.ac.id', 'password' => bcrypt('joko123'), 'status' => '2'],
            ['id' => 11, 'name' => 'Njoto Benarkah', 'email' => 'njoto@staff.ubaya.ac.id', 'password' => bcrypt('njoto321'), 'status' => '2'],
            ['id' => 12, 'name' => 'Ellysa Tjandra', 'email' => 'ellysa@staff.ubaya.ac.id', 'password' => bcrypt('ellysa321'), 'status' => '2'],
            ['id' => 13, 'name' => 'DELTA ARDY PRIMA', 'email' => 'delta.ardy@staff.ubaya.ac.id', 'password' => bcrypt('delta321'), 'status' => '2'],
            ['id' => 14, 'name' => 'Maya Hilda Lestari Louk', 'email' => 'maya.louk@staff.ubaya.ac.id', 'password' => bcrypt('maya12345'), 'status' => '2'],
            ['id' => 15, 'name' => 'Endah Asmawati', 'email' => 'endah@staff.ubaya.ac.id', 'password' => bcrypt('endah123'), 'status' => '2'],
            ['id' => 16, 'name' => 'Lisana', 'email' => 'lisana@staff.ubaya.ac.id', 'password' => bcrypt('lisana321'), 'status' => '2'],
        	);
        DB::table('users')->insert($dataUsers);
    }
}
