<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'group_setting_id' => 1,
            'name' => 'Title',
            'short_key_value' => 'New Hope',
            'logn_key_value' => 'New Hope In Christ Ministry'
        ]);
        Setting::create([
            'group_setting_id' => 1,
            'name' => 'Description',
            'short_key_value' => 'New Hope in Christ es un Ministerio Cristo Céntrico Integral con fuerte énfasis en la familia. ',
            'logn_key_value' => 'Somos una comunidad de creyentes apasionados por las cosas de Dios. Nuestra prioridad es la relación personal con Dios. Creemos que cada creyente tiene la capacidad de ministrar el Poder de Dios, para sanar al enfermo y libertar al cautivo. '
        ]);
        Setting::create([
            'group_setting_id' => 1,
            'name' => 'URL',
            'short_key_value' => 'https://newhopeinchrist.church',
            'logn_key_value' => ''
        ]);
        Setting::create([
            'group_setting_id' => 1,
            'name' => 'Site Meta',
            'short_key_value' => '',
            'logn_key_value' => 'nueva esperanza, iglesia cristiana en hialeah, New Hope In Christ Ministry, Ministerio Nueva Esperanza en Cristo, new hope, ministerio nueva esperanza, iglesias cristianas en miami, iglesia en miami, Dios en miami, amor de Dios, brazos de amor, libros del pastores edgar ordoñez, pastora monica ordoñez, apostol gustavo lara, hijos espirituales del apostol gustavo lara,  Doctor Edgar Ordoñez, Clinica Pastoral, Señor Muestra, Una iglesia donde tu esperanza se renovará, monica ordonez, edgar ordonez'
        ]);
        Setting::create([
            'group_setting_id' => 1,
            'name' => 'Robots',
            'short_key_value' => 'index,folow',
            'logn_key_value' => ''
        ]);
        Setting::create([
            'group_setting_id' => 1,
            'name' => 'Twitter Tag',
            'short_key_value' => '@newhopeinchrist.church',
            'logn_key_value' => 'https://twitter.com/newhopeinchrist'
        ]);
        Setting::create([
            'group_setting_id' => 1,
            'name' => 'Facebook Tag',
            'short_key_value' => '@newhopeinchrist.church',
            'logn_key_value' => 'https://facebook.com/newhopeinchrist.church/'
        ]);
    }
}
