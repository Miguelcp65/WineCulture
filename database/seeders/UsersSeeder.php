<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Carbon\Carbon;

class UsersSeeder extends Seeder

{

    /**

     * Run the database seeds.

     *

     * @return void

     */

    public function run()

    {
        User::create([
            'tipouser' => 'Administrador',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456'),
            'name' => 'WineCulture',
            'apelido' => 'Um',
            'data_nasc' => Carbon::parse('2000-06-26'),
            'genero' => 'Masculino',
            'pais' => 'Portugal',
            'created_at' => Carbon::parse('2020-06-26'),
        ]);
        User::create([
            'tipouser' => 'Produtor',
            'email' => 'produtor1@gmail.com',
            'password' => bcrypt('123456'),
            'name' => 'Lucas',
            'apelido' => 'Cardoso',
            'img' => '2.jpg',
            'data_nasc' => Carbon::parse('1981-05-15'),
            'genero' => 'Masculino',
            'pais' => 'Portugal',
            'created_at' => Carbon::parse('2020-05-15'),
        ]);
        User::create([
            'tipouser' => 'Produtor',
            'email' => 'produtor2@gmail.com',
            'password' => bcrypt('123456'),
            'name' => 'Camilo',
            'apelido' => 'Medeiros',
            'img' => '3.jpg',
            'data_nasc' => Carbon::parse('1994-06-20'),
            'genero' => 'Masculino',
            'pais' => 'Portugal',
            'created_at' => Carbon::parse('2020-10-20'),
        ]);
        User::create([
            'tipouser' => 'Produtor',
            'email' => 'produtor3@gmail.com',
            'password' => bcrypt('123456'),
            'name' => 'Nicolau',
            'apelido' => 'Daniel',
            'img' => '4.jpg',
            'data_nasc' => Carbon::parse('1983-03-22'),
            'genero' => 'Masculino',
            'pais' => 'Alemanha',
            'created_at' => Carbon::parse('2020-03-22'),
        ]);
        User::create([
            'tipouser' => 'Utilizador',
            'email' => 'utilizador1@gmail.com',
            'password' => bcrypt('123456'),
            'name' => 'Utilizador',
            'apelido' => 'Um',
            'img' => '26.jpg',
            'data_nasc' => Carbon::parse('2000-02-12'),
            'genero' => 'Feminino',
            'pais' => 'França',
            'created_at' => Carbon::parse('2020-02-12'),
        ]);
        User::create([
            'tipouser' => 'Utilizador',
            'email' => 'utilizador2@gmail.com',
            'password' => bcrypt('123456'),
            'name' => 'Utilizador',
            'apelido' => 'Dois',
            'data_nasc' => Carbon::parse('2001-06-05'),
            'genero' => 'Masculino',
            'pais' => 'Espanha',
            'created_at' => Carbon::parse('2020-06-05'),
        ]);
        User::create([
            'tipouser' => 'Utilizador',
            'email' => 'utilizador3@gmail.com',
            'password' => bcrypt('123456'),
            'name' => 'Tres',
            'apelido' => 'Wineculture',
            'data_nasc' => Carbon::parse('2004-11-25'),
            'genero' => 'Nao Revelar',
            'pais' => 'Portugal',
            'created_at' => Carbon::parse('2020-11-25'),
        ]);
        User::create([
            'tipouser' => 'Utilizador',
            'email' => 'utilizador4@gmail.com',
            'password' => bcrypt('123456'),
            'name' => 'Utilizador4',
            'apelido' => 'Quatro',
            'data_nasc' => Carbon::parse('1997-02-26'),
            'genero' => 'Nao Revelar',
            'pais' => 'Espanha',
            'created_at' => Carbon::parse('2020-02-26'),
        ]);
        User::create([
            'tipouser' => 'Utilizador',
            'email' => 'utilizador5@gmail.com',
            'password' => bcrypt('123456'),
            'name' => 'Utilizador',
            'apelido' => 'Cinco',
            'data_nasc' => Carbon::parse('1974-09-26'),
            'genero' => 'Feminino',
            'pais' => 'Portugal',
            'created_at' => Carbon::parse('2020-09-26'),
        ]);
        User::create([
            'tipouser' => 'Utilizador',
            'email' => 'utilizador6@gmail.com',
            'password' => bcrypt('123456'),
            'name' => 'Utilizador',
            'apelido' => 'Seis',
            'data_nasc' => Carbon::parse('1980-12-15'),
            'genero' => 'Feminino',
            'pais' => 'Portugal',
            'created_at' => Carbon::parse('2020-12-15'),
        ]);
        User::create([
            'tipouser' => 'Utilizador',
            'email' => 'utilizador7@gmail.com',
            'password' => bcrypt('123456'),
            'name' => 'Utilizador',
            'apelido' => 'Sete',
            'data_nasc' => Carbon::parse('1998-01-26'),
            'genero' => 'Feminino',
            'pais' => 'Portugal',
            'created_at' => Carbon::parse('2020-01-26'),
        ]);
        User::create([
            'tipouser' => 'Utilizador',
            'email' => 'utilizador8@gmail.com',
            'password' => bcrypt('123456'),
            'name' => 'Utilizador',
            'apelido' => 'Oito',
            'data_nasc' => Carbon::parse('1993-02-26'),
            'genero' => 'Feminino',
            'pais' => 'Portugal',
            'created_at' => Carbon::parse('2020-10-26'),
        ]);
        User::create([
            'tipouser' => 'Utilizador',
            'email' => 'utilizador9@gmail.com',
            'password' => bcrypt('123456'),
            'name' => 'Utilizador',
            'apelido' => 'Nove',
            'data_nasc' => Carbon::parse('1993-09-26'),
            'genero' => 'Masculino',
            'pais' => 'Portugal',
            'created_at' => Carbon::parse('2020-08-26'),
        ]);
        User::create([
            'tipouser' => 'Utilizador',
            'email' => 'utilizador10@gmail.com',
            'password' => bcrypt('123456'),
            'name' => 'Utilizador',
            'apelido' => 'Dez',
            'data_nasc' => Carbon::parse('1993-09-26'),
            'genero' => 'Masculino',
            'pais' => 'Portugal',
            'created_at' => Carbon::parse('2020-04-26'),
        ]);
        User::create([
            'tipouser' => 'Utilizador',
            'email' => 'utilizador11@gmail.com',
            'password' => bcrypt('123456'),
            'name' => 'Utilizador',
            'apelido' => 'Onze',
            'data_nasc' => Carbon::parse('1993-11-26'),
            'genero' => 'Masculino',
            'pais' => 'Portugal',
            'created_at' => Carbon::parse('2020-11-26'),
        ]);
        User::create([
            'tipouser' => 'Utilizador',
            'email' => 'utilizador12@gmail.com',
            'password' => bcrypt('123456'),
            'name' => 'Utilizador',
            'apelido' => 'Doze',
            'data_nasc' => Carbon::parse('1993-03-26'),
            'genero' => 'Masculino',
            'pais' => 'Portugal',
            'created_at' => Carbon::parse('2020-07-26'),
        ]);
        User::create([
            'tipouser' => 'Produtor',
            'email' => 'produtor4@gmail.com',
            'password' => bcrypt('123456'),
            'name' => 'Gustavo',
            'apelido' => 'Ramires',
            'img' => '17.jpg',
            'data_nasc' => Carbon::parse('1984-09-26'),
            'genero' => 'Masculino',
            'pais' => 'Portugal',
            'created_at' => Carbon::parse('2020-06-26'),
        ]);
        User::create([
            'tipouser' => 'Produtor',
            'email' => 'produtor5@gmail.com',
            'password' => bcrypt('123456'),
            'name' => 'Adriana',
            'apelido' => 'Romão',
            'img' => '18.jpg',
            'data_nasc' => Carbon::parse('1985-02-06'),
            'genero' => 'Feminino',
            'pais' => 'Portugal',
            'created_at' => Carbon::parse('2020-04-26'),
        ]);
        User::create([
            'tipouser' => 'Produtor',
            'email' => 'produtor6@gmail.com',
            'password' => bcrypt('123456'),
            'name' => 'Félix',
            'apelido' => 'Daniel',
            'img' => '19.jpg',
            'data_nasc' => Carbon::parse('1963-12-15'),
            'genero' => 'Masculino',
            'pais' => 'Portugal',
            'created_at' => Carbon::parse('2020-01-15'),
        ]);
        User::create([
            'tipouser' => 'Produtor',
            'email' => 'produtor7@gmail.com',
            'password' => bcrypt('123456'),
            'name' => 'João',
            'apelido' => 'Martins',
            'img' => '20.jpg',
            'data_nasc' => Carbon::parse('1980-01-26'),
            'genero' => 'Masculino',
            'pais' => 'Portugal',
            'created_at' => Carbon::parse('2020-07-26'),
        ]);
        User::create([
            'tipouser' => 'Produtor',
            'email' => 'produtor8@gmail.com',
            'password' => bcrypt('123456'),
            'name' => 'Amalia',
            'apelido' => 'Pantoja',
            'img' => '21.jpg',
            'data_nasc' => Carbon::parse('1983-08-26'),
            'genero' => 'Feminino',
            'pais' => 'Espanha',
            'created_at' => Carbon::parse('2020-08-26'),
        ]);
        User::create([
            'tipouser' => 'Produtor',
            'email' => 'produtor9@gmail.com',
            'password' => bcrypt('123456'),
            'name' => 'Noêmia',
            'apelido' => 'Gomes',
            'img' => '22.jpg',
            'data_nasc' => Carbon::parse('1983-09-26'),
            'genero' => 'Nao Revelar',
            'pais' => 'Portugal',
            'created_at' => Carbon::parse('2020-09-26'),
        ]);
        User::create([
            'tipouser' => 'Produtor',
            'email' => 'produtor10@gmail.com',
            'password' => bcrypt('123456'),
            'name' => 'Apolónia',
            'apelido' => 'Armando',
            'img' => '23.jpg',
            'data_nasc' => Carbon::parse('1980-05-16'),
            'genero' => 'Feminino',
            'pais' => 'Portugal',
            'created_at' => Carbon::parse('2020-02-26'),
        ]);
        User::create([
            'tipouser' => 'Produtor',
            'email' => 'produtor11@gmail.com',
            'password' => bcrypt('123456'),
            'name' => 'Julieta',
            'apelido' => 'Simões',
            'img' => '24.jpg',
            'data_nasc' => Carbon::parse('1979-11-26'),
            'genero' => 'Feminino',
            'pais' => 'Portugal',
            'created_at' => Carbon::parse('2020-11-26'),
        ]);
        User::create([
            'tipouser' => 'Produtor',
            'email' => 'produtor12@gmail.com',
            'password' => bcrypt('123456'),
            'name' => 'Humberto',
            'apelido' => 'David',
            'img' => '25.jpg',
            'data_nasc' => Carbon::parse('1958-03-26'),
            'genero' => 'Masculino',
            'pais' => 'Portugal',
            'created_at' => Carbon::parse('2020-06-26'),
        ]);
        User::create([
            'tipouser' => 'Produtor',
            'email' => 'produtor13@gmail.com',
            'password' => bcrypt('123456'),
            'name' => 'Anita',
            'apelido' => 'Rodrigues',
            'img' => '26.jpg',
            'data_nasc' => Carbon::parse('1993-03-26'),
            'genero' => 'Feminino',
            'pais' => 'Portugal',
            'created_at' => Carbon::parse('2020-12-26'),
        ]);
        User::create([
            'tipouser' => 'Produtor',
            'email' => 'produtor14@gmail.com',
            'password' => bcrypt('123456'),
            'name' => 'Francisco',
            'apelido' => 'Oliveira',
            'img' => '27.jpg',
            'data_nasc' => Carbon::parse('1987-04-01'),
            'genero' => 'Masculino',
            'pais' => 'Portugal',
            'created_at' => Carbon::parse('2020-02-26'),
        ]);
        User::create([
            'tipouser' => 'Produtor',
            'email' => 'produtor15@gmail.com',
            'password' => bcrypt('123456'),
            'name' => 'Fabiana',
            'apelido' => 'Magro',
            'img' => '28.jpg',
            'data_nasc' => Carbon::parse('1973-03-26'),
            'genero' => 'Feminino',
            'pais' => 'Portugal',
            'created_at' => Carbon::parse('2020-06-25'),
        ]);
        User::create([
            'tipouser' => 'Produtor',
            'email' => 'produtor16@gmail.com',
            'password' => bcrypt('123456'),
            'name' => 'Annabelle',
            'apelido' => 'Fonseca',
            'img' => '29.jpg',
            'data_nasc' => Carbon::parse('1992-10-20'),
            'genero' => 'Feminino',
            'pais' => 'Irlanda',
            'created_at' => Carbon::parse('2020-12-26'),
        ]);
        User::create([
            'tipouser' => 'Utilizador',
            'email' => 'miguel.ciencia6355@gmail.com',
            'password' => bcrypt('123123123'),
            'name' => 'Miguel',
            'apelido' => 'Pereira',
            'img' => '142.jpg',
            'data_nasc' => Carbon::parse('1993-03-26'),
            'genero' => 'Feminino',
            'pais' => 'Espanha',
            'created_at' => Carbon::parse('2020-12-26'),
        ]);
        User::create([
            'tipouser' => 'Produtor',
            'email' => 'isabel_ferreira@gmail.com',
            'password' => bcrypt('gatinho'),
            'name' => 'Isabel',
            'apelido' => 'Ferreira',
            'img' => '31.jpg',
            'data_nasc' => Carbon::parse('1979-03-26'),
            'genero' => 'Feminino',
            'pais' => 'Portugal',
            'created_at' => Carbon::parse('2020-12-27'),
        ]);
        User::create([
            'tipouser' => 'Produtor',
            'email' => 'rob_costa@gmail.com',
            'password' => bcrypt('costa123'),
            'name' => 'Roberto',
            'apelido' => 'Costa',
            'img' => '32.jpg',
            'data_nasc' => Carbon::parse('1977-07-26'),
            'genero' => 'Masculino',
            'pais' => 'Portugal',
            'created_at' => Carbon::parse('2020-12-27'),
        ]);
        User::create([
            'tipouser' => 'Produtor',
            'email' => 'glauciateixeira@gmail.com',
            'password' => bcrypt('123456789'),
            'name' => 'Gláucia',
            'apelido' => 'Teixeira',
            'img' => '33.jpg',
            'data_nasc' => Carbon::parse('1978-05-10'),
            'genero' => 'Feminino',
            'pais' => 'Portugal',
            'created_at' => Carbon::parse('2020-10-27'),
        ]);
        User::create([
            'tipouser' => 'Produtor',
            'email' => 'michaelsilva@gmail.com',
            'password' => bcrypt('heyheyheyhey'),
            'name' => 'Roberta',
            'apelido' => 'Silveira',
            'img' => '34.jpg',
            'data_nasc' => Carbon::parse('1980-01-01'),
            'genero' => 'Feminino',
            'pais' => 'Portugal',
            'created_at' => Carbon::parse('2020-12-27'),
        ]);
        User::create([
            'tipouser' => 'Produtor',
            'email' => 'velentimmarco@gmail.com',
            'password' => bcrypt('marquinhos123'),
            'name' => 'Valentim',
            'apelido' => 'Santiago',
            'img' => '35.jpg',
            'data_nasc' => Carbon::parse('1979-03-26'),
            'genero' => 'Masculino',
            'pais' => 'Portugal',
            'created_at' => Carbon::parse('2020-12-27'),
        ]);
    }
}
