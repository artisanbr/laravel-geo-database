<?php
namespace ArtisanLabs\LaravelGeoDatabase\database\seeds;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GeoStatesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('geo_states')->delete();

       /* DB::unprepared(<<<mysql
INSERT INTO `geo_estados` (`id`, `nome`, `uf`, `ibge`, `pais_id`, `ddd`) VALUES
(1, 'Acre', 'AC', 12, 1, '68'),
(2, 'Alagoas', 'AL', 27, 1, '82'),
(3, 'Amazonas', 'AM', 13, 1, '97,92'),
(4, 'Amapá', 'AP', 16, 1, '96'),
(5, 'Bahia', 'BA', 29, 1, '77,75,73,74,71'),
(6, 'Ceará', 'CE', 23, 1, '88,85'),
(7, 'Distrito Federal', 'DF', 53, 1, '61'),
(8, 'Espírito Santo', 'ES', 32, 1, '28,27'),
(9, 'Goiás', 'GO', 52, 1, '62,64,61'),
(10, 'Maranhão', 'MA', 21, 1, '99,98'),
(11, 'Minas Gerais', 'MG', 31, 1, '34,37,31,33,35,38,32'),
(12, 'Mato Grosso do Sul', 'MS', 50, 1, '67'),
(13, 'Mato Grosso', 'MT', 51, 1, '65,66'),
(14, 'Pará', 'PA', 15, 1, '91,94,93'),
(15, 'Paraíba', 'PB', 25, 1, '83'),
(16, 'Pernambuco', 'PE', 26, 1, '81,87'),
(17, 'Piauí', 'PI', 22, 1, '89,86'),
(18, 'Paraná', 'PR', 41, 1, '43,41,42,44,45,46'),
(19, 'Rio de Janeiro', 'RJ', 33, 1, '24,22,21'),
(20, 'Rio Grande do Norte', 'RN', 24, 1, '84'),
(21, 'Rondônia', 'RO', 11, 1, '69'),
(22, 'Roraima', 'RR', 14, 1, '95'),
(23, 'Rio Grande do Sul', 'RS', 43, 1, '53,54,55,51'),
(24, 'Santa Catarina', 'SC', 42, 1, '47,48,49'),
(25, 'Sergipe', 'SE', 28, 1, '79'),
(26, 'São Paulo', 'SP', 35, 1, '11,12,13,14,15,16,17,18,19'),
(27, 'Tocantins', 'TO', 17, 1, '63'),
(99, 'Exterior', 'EX', 99, NULL, NULL);
mysql);*/

        DB::table('geo_estados')->insert(array (
            0 =>
            array (
                'id' => '1',
                'title' => 'Acre',
                'slug' => 'AC',
                'country_id' => '1',
            ),
            1 =>
            array (
                'id' => '2',
                'title' => 'Alagoas',
                'slug' => 'AL',
                'country_id' => '1',
            ),
            2 =>
            array (
                'id' => '3',
                'title' => 'Amazonas',
                'slug' => 'AM',
                'country_id' => '1',
            ),
            3 =>
            array (
                'id' => '4',
                'title' => 'Amapá',
                'slug' => 'AP',
                'country_id' => '1',
            ),
            4 =>
            array (
                'id' => '5',
                'title' => 'Bahia',
                'slug' => 'BA',
                'country_id' => '1',
            ),
            5 =>
            array (
                'id' => '6',
                'title' => 'Ceará',
                'slug' => 'CE',
                'country_id' => '1',
            ),
            6 =>
            array (
                'id' => '7',
                'title' => 'Distrito Federal',
                'slug' => 'DF',
                'country_id' => '1',
            ),
            7 =>
            array (
                'id' => '8',
                'title' => 'Espírito Santo',
                'slug' => 'ES',
                'country_id' => '1',
            ),
            8 =>
            array (
                'id' => '9',
                'title' => 'Goiás',
                'slug' => 'GO',
                'country_id' => '1',
            ),
            9 =>
            array (
                'id' => '10',
                'title' => 'Maranhão',
                'slug' => 'MA',
                'country_id' => '1',
            ),
            10 =>
            array (
                'id' => '11',
                'title' => 'Minas Gerais',
                'slug' => 'MG',
                'country_id' => '1',
            ),
            11 =>
            array (
                'id' => '12',
                'title' => 'Mato Grosso do Sul',
                'slug' => 'MS',
                'country_id' => '1',
            ),
            12 =>
            array (
                'id' => '13',
                'title' => 'Mato Grosso',
                'slug' => 'MT',
                'country_id' => '1',
            ),
            13 =>
            array (
                'id' => '14',
                'title' => 'Pará',
                'slug' => 'PA',
                'country_id' => '1',
            ),
            14 =>
            array (
                'id' => '15',
                'title' => 'Paraíba',
                'slug' => 'PB',
                'country_id' => '1',
            ),
            15 =>
            array (
                'id' => '16',
                'title' => 'Pernambuco',
                'slug' => 'PE',
                'country_id' => '1',
            ),
            16 =>
            array (
                'id' => '17',
                'title' => 'Piauí',
                'slug' => 'PI',
                'country_id' => '1',
            ),
            17 =>
            array (
                'id' => '18',
                'title' => 'Paraná',
                'slug' => 'PR',
                'country_id' => '1',
            ),
            18 =>
            array (
                'id' => '19',
                'title' => 'Rio de Janeiro',
                'slug' => 'RJ',
                'country_id' => '1',
            ),
            19 =>
            array (
                'id' => '20',
                'title' => 'Rio Grande do Norte',
                'slug' => 'RN',
                'country_id' => '1',
            ),
            20 =>
            array (
                'id' => '21',
                'title' => 'Rondônia',
                'slug' => 'RO',
                'country_id' => '1',
            ),
            21 =>
            array (
                'id' => '22',
                'title' => 'Roraima',
                'slug' => 'RR',
                'country_id' => '1',
            ),
            22 =>
            array (
                'id' => '23',
                'title' => 'Rio Grande do Sul',
                'slug' => 'RS',
                'country_id' => '1',
            ),
            23 =>
            array (
                'id' => '24',
                'title' => 'Santa Catarina',
                'slug' => 'SC',
                'country_id' => '1',
            ),
            24 =>
            array (
                'id' => '25',
                'title' => 'Sergipe',
                'slug' => 'SE',
                'country_id' => '1',
            ),
            25 =>
            array (
                'id' => '26',
                'title' => 'São Paulo',
                'slug' => 'SP',
                'country_id' => '1',
            ),
            26 =>
            array (
                'id' => '27',
                'title' => 'Tocantins',
                'slug' => 'TO',
                'country_id' => '1',
            ),
            27 =>
                array (
                    'id' => '99',
                    'title' => 'EXTERIOR',
                    'slug' => 'EX',
                    'country_id' => null,
                ),
        ));


    }
}
