<?php


require 'vendor/autoload.php';

use Alura\BuscadorDeCursos\Buscador;
use GuzzleHttp\Client;

use Symfony\Component\DomCrawler\Crawler;

$client = new Client();

$resposta= $client->request("GET","https://www.alura.com.br/cursos-online-programacao/php");

$html = $resposta->getBody();

$crawler = new Crawler();

$crawler->addHtmlContent($html);

$cursos = $crawler->filter('li.subcategoria__item');

foreach ($cursos as $curso) {
    echo $curso->textContent . PHP_EOL;
}

// PARA VER OS NOMES DOS CURSOS, É SO RODAR O COMANDO NO TERMINAL DO VSCODE
//php buscar-cursos.php
// COM ISSO ELE VAI LISTAR TODOS OS CURSOS QUEE STAO NO SITE DA ALURA UHUU FUNCIONAA.

//parei na video aula:
// 03 - ENTENDENDO AUTOLOAD, VIDEO 6
//1:25
?>



