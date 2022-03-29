<?php
/**
 * Created by PhpStorm.
 * User: aurelio
 * Date: 11/10/16
 * Time: 1:23 PM
 */

class CidadesTest extends TestCase{

    public function testGet(){
        $this->get('/api/cidades');
    }

    public function testGetCidadesIsJson(){
        $this->get('/api/cidades')->isJson();
    }

    public function testGetCidades()
    {
        $this->get('/api/cidades')->seeJson(['cidades' => \App\GeoCidade::all()->toArray()]);
    }

    public function testGetCidadeCapelinha()
    {
        $this->get('/api/cidades/1699')->seeJson(\App\GeoCidade::find(1699)->toArray());
    }

    public function testGetCidadesPorEstadoIsJson()
    {
        $this->get('/api/cidades/estado/11');
    }

    public function testGetCidadesPorEstado()
    {
        $this->get(('/api/cidades/estado/11'))->seeJson(['cidades' => \App\GeoCidade::where('estado_id', 11)->get()->toArray()]);
    }
}
