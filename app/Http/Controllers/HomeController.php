<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = [];

        $data['about'] = "Somos uma agência de desenvolvimento de sites, blog, sistemas, portfólios e temos como objetivo desenvolver sites com as melhores tecnologias do mercado para deixar seu site mais rápido e mais intuitivo. Um desenvolvimento de qualidade é essencial tanto para acelerar os processos de seus ganhos, quanto organizar sua empresa. O desenvolvimento de um site vai ajudar com certeza a propagar sua marca de maneira mais eficiente. Nosso desenvolvimento foca em dar a melhor experiência tanto aos seus usuários quanto a você faça agora mesmo um orçamento e tenha o melhor custo beneficio na criação de seu site, tenha um site profissional e totalmente responsivo. Quer um site de qualidade? A LTDeveloper tem para você.";

        $data['service'] = [
            ["title" => "Criação de Sites", "image" => "assets/images/service-a.webp", "description" => "Você precisa de um site de qualidade, fácil de atualizar, e que caiba no seu orçamento, posso te ajudar a fazer sua empresa marcar presença na internet e gerar novos negócios."],
            ["title" => "Criação de Sistema WEB", "image" => "assets/images/service-b.webp", "description" => "Para você que deseja criar um sistema web que se adeque as necessidades de seu negocio. Estou pronto para te atender."],
            ["title" => "Criação de E-commerce", "image" => "assets/images/service-c.webp", "description" => "E aí, precisa vender mais, você está no lugar certo e com a equipe certa para te ajudar a vender mais e agora pela internet. É hora de ter sua loja virtual e ampliar seus negócio."]
        ];

        $data['customers'] = [
            ["title" => "Callnet - BA", "image" => "assets/images/customers/callnet.webp", "link" => "https://www.callnetba.net.br/"],
            ["title" => "A Sua Sala", "image" => "assets/images/customers/asuasala.webp", "link" => "https://www.asuasala.com.br/"],
            ["title" => "Conexão Ativa", "image" => "assets/images/customers/conexaoativa.webp", "link" => "https://www.conexaoativatelecom.com/"],
            ["title" => "Verde Rosa Floricultura", "image" => "assets/images/customers/verderosa.webp", "link" => "https://www.verderosafloricultura.com.br/"]
        ];

        return view('home', $data);
    }
}
