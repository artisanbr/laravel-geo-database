<?php

namespace DevApex\LaravelGeoDatabase\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Console\Helper\ProgressBar;
use DevApex\LaravelGeoDatabase\database\seeds\GeoDatabaseSeeder;
use DevApex\LaravelRouter\Utils\PhpParser;

/**
 * Gerador de Rotas para o laravel
 * Comando: php artisan router
 * Prametros
 *
 * ** Controller
 * @prefix - Prefixo de URL para a rota - Padrao: caminho/do/controller/acao,
 *
 * ** Action
 * @name, @action, @url - Nome da rota (final da URL) - Padrao: nome da função, "/" quando index
 * @method - Metodos de entrada da rota - Padrao: get,post,
 *
 * ** Ambos
 * @middleware - Middlerare de segurança da rota - Padrao: auth,
 * @as - Apelido da rota - Padrao: caminho.do.controller.acao,
 * @noturl, @notroute, @notgenerate - Ignorar o Controller ou Action
 *
 */

class GeoDBCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'geodb:install
                                {--no-verbose : No Verbose}
                                {--s|stats : Exibir estatisticas}
                                {--no-stats : Ocultar Estatisticas}';

    /**
     * @var bool
     */
    private $verbose, $stats;

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Instalar Laravel Geo Database';

    /**
     * @var ProgressBar
     */
    public $bar;


    private $steps = 8;

    public function __construct()
    {
        parent::__construct();

        $this->parser = new PhpParser();
    }

    /**
     * @throws \ReflectionException
     */
    public function handle()
    {

        //Listar Controllers
        $this->info("Instalando Laravel Geo DB");
        $this->line("");

        $this->info("Migrations:");
        $this->call('migrate', [
            '--path' => 'vendor/devapexbr/laravel-geo-database/src/database/migrations',
        ]);
        $this->line("");

        //Listar Rotas
        $this->info("Seeds:");
        $this->call(GeoDatabaseSeeder::class);
        $this->line("");

        $this->info("Limpando CACHE");
        $this->line("");
        $this->call("cache:clear");

        $this->info("Geo Database Instalado com Sucesso!");
    }
}
