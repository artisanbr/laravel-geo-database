<?php
namespace DevApex\LaravelGeoDatabase\database\seeds;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GeoEstadosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('geo_estados')->delete();

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
                'nome' => 'Acre',
                'uf' => 'AC',
                'pais_id' => '1',
            ),
            1 =>
            array (
                'id' => '2',
                'nome' => 'Alagoas',
                'uf' => 'AL',
                'pais_id' => '1',
            ),
            2 =>
            array (
                'id' => '3',
                'nome' => 'Amazonas',
                'uf' => 'AM',
                'pais_id' => '1',
            ),
            3 =>
            array (
                'id' => '4',
                'nome' => 'Amapá',
                'uf' => 'AP',
                'pais_id' => '1',
            ),
            4 =>
            array (
                'id' => '5',
                'nome' => 'Bahia',
                'uf' => 'BA',
                'pais_id' => '1',
            ),
            5 =>
            array (
                'id' => '6',
                'nome' => 'Ceará',
                'uf' => 'CE',
                'pais_id' => '1',
            ),
            6 =>
            array (
                'id' => '7',
                'nome' => 'Distrito Federal',
                'uf' => 'DF',
                'pais_id' => '1',
            ),
            7 =>
            array (
                'id' => '8',
                'nome' => 'Espírito Santo',
                'uf' => 'ES',
                'pais_id' => '1',
            ),
            8 =>
            array (
                'id' => '9',
                'nome' => 'Goiás',
                'uf' => 'GO',
                'pais_id' => '1',
            ),
            9 =>
            array (
                'id' => '10',
                'nome' => 'Maranhão',
                'uf' => 'MA',
                'pais_id' => '1',
            ),
            10 =>
            array (
                'id' => '11',
                'nome' => 'Minas Gerais',
                'uf' => 'MG',
                'pais_id' => '1',
            ),
            11 =>
            array (
                'id' => '12',
                'nome' => 'Mato Grosso do Sul',
                'uf' => 'MS',
                'pais_id' => '1',
            ),
            12 =>
            array (
                'id' => '13',
                'nome' => 'Mato Grosso',
                'uf' => 'MT',
                'pais_id' => '1',
            ),
            13 =>
            array (
                'id' => '14',
                'nome' => 'Pará',
                'uf' => 'PA',
                'pais_id' => '1',
            ),
            14 =>
            array (
                'id' => '15',
                'nome' => 'Paraíba',
                'uf' => 'PB',
                'pais_id' => '1',
            ),
            15 =>
            array (
                'id' => '16',
                'nome' => 'Pernambuco',
                'uf' => 'PE',
                'pais_id' => '1',
            ),
            16 =>
            array (
                'id' => '17',
                'nome' => 'Piauí',
                'uf' => 'PI',
                'pais_id' => '1',
            ),
            17 =>
            array (
                'id' => '18',
                'nome' => 'Paraná',
                'uf' => 'PR',
                'pais_id' => '1',
            ),
            18 =>
            array (
                'id' => '19',
                'nome' => 'Rio de Janeiro',
                'uf' => 'RJ',
                'pais_id' => '1',
            ),
            19 =>
            array (
                'id' => '20',
                'nome' => 'Rio Grande do Norte',
                'uf' => 'RN',
                'pais_id' => '1',
            ),
            20 =>
            array (
                'id' => '21',
                'nome' => 'Rondônia',
                'uf' => 'RO',
                'pais_id' => '1',
            ),
            21 =>
            array (
                'id' => '22',
                'nome' => 'Roraima',
                'uf' => 'RR',
                'pais_id' => '1',
            ),
            22 =>
            array (
                'id' => '23',
                'nome' => 'Rio Grande do Sul',
                'uf' => 'RS',
                'pais_id' => '1',
            ),
            23 =>
            array (
                'id' => '24',
                'nome' => 'Santa Catarina',
                'uf' => 'SC',
                'pais_id' => '1',
            ),
            24 =>
            array (
                'id' => '25',
                'nome' => 'Sergipe',
                'uf' => 'SE',
                'pais_id' => '1',
            ),
            25 =>
            array (
                'id' => '26',
                'nome' => 'São Paulo',
                'uf' => 'SP',
                'pais_id' => '1',
            ),
            26 =>
            array (
                'id' => '27',
                'nome' => 'Tocantins',
                'uf' => 'TO',
                'pais_id' => '1',
            ),
            27 =>
                array (
                    'id' => '99',
                    'nome' => 'EXTERIOR',
                    'uf' => 'EX',
                    'pais_id' => null,
                ),
        ));


    }
}
