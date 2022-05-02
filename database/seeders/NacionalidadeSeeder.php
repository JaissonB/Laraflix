<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Nacionalidade;

class NacionalidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Nacionalidade::create(['descricao'=>'Brasileiro(a)']);
        Nacionalidade::create(['descricao'=>'Argentino(a)']);
        Nacionalidade::create(['descricao'=>'Norte-Americano(a)']);
        Nacionalidade::create(['descricao'=>'Canadense']);
        Nacionalidade::create(['descricao'=>'Uruguaio(a)']);
        Nacionalidade::create(['descricao'=>'Espanhol(a)']);
        Nacionalidade::create(['descricao'=>'Ingles(a)']);
        Nacionalidade::create(['descricao'=>'Peruano(a)']);
        Nacionalidade::create(['descricao'=>'Colombiano(a)']);
        Nacionalidade::create(['descricao'=>'Japones(a)']);
        Nacionalidade::create(['descricao'=>'Chines(a)']);
        Nacionalidade::create(['descricao'=>'Sul-Americano(a)']);
        Nacionalidade::create(['descricao'=>'Polones(a)']);
        Nacionalidade::create(['descricao'=>'Alemã(o)']);
        Nacionalidade::create(['descricao'=>'Russo(a)']);
        Nacionalidade::create(['descricao'=>'Árabe']);
        Nacionalidade::create(['descricao'=>'Cubano(a)']);
        Nacionalidade::create(['descricao'=>'Bósnio(a)']);
        Nacionalidade::create(['descricao'=>'Angolano(a)']);
        Nacionalidade::create(['descricao'=>'Italiano(a)']);
    }
}
