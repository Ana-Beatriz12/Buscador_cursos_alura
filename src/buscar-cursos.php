<?php

require 'vendor/autoload.php';
require 'functions.php';

use Alura\BuscadorDeCursos\Buscador;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

$client = new Client();

$resposta = $client->request("GET", "https://www.alura.com.br/cursos-online-programacao/php");

$html = $resposta->getBody();

$crawler = new Crawler();

$crawler->addHtmlContent($html);

$cursos = $crawler->filter('li.subcategoria__item')->each(function (Crawler $node) {
    return $node->text();
});

foreach ($cursos as $curso) {
    echo exibeMensagem($curso);
}

// PARA VER OS NOMES DOS CURSOS, É SO RODAR O COMANDO NO TERMINAL DO VSCODE
//php buscar-cursos.php
// COM ISSO ELE VAI LISTAR TODOS OS CURSOS QUEE STAO NO SITE DA ALURA UHUU FUNCIONAA.

//parei na video aula:
// 04- FERRAMENTAS DE QUALIDADE DE CODIGO, VIDEO 8
//5:18
//
