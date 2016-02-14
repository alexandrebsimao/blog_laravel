<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{	

    public function index()
    {
    	$posts = $this->_postsAll();
    	
    	return view('blog.index', compact('posts'));
    }

    public function post($id)
    {
    	$post = $this->_postRow($id);

    	return view('blog.post', compact('post'));
    }

    /**
     * Obtém vários postagens
     */
    private function _postsAll()
    {
    	$posts = [
    		0 => [
    			'title' 	=> 'Post 1',
    			'date'		=> '01/01/2016 08:00',
    			'content'	=> 'Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.'
    		],
    		1 => [
    			'title' 	=> 'Post 2',
    			'date'		=> '02/01/2016 10:00',
    			'content'	=> 'Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.'
    		],
    		2 => [
    			'title' 	=> 'Post 3',
    			'date'		=> '03/01/2016 12:30',
    			'content'	=> 'Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.'
    		]
    	];

    	return $posts;
    }

    /**
     * Obtém uma unica postagem informando a id
     */
    private function _postRow($id)
    {
    	$posts = $this->_postsAll();

    	return $posts[$id];
    }

}
