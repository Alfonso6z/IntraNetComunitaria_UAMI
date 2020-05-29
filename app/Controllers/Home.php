<?php namespace App\Controllers;

class Home extends BaseController
{
	public function inicio(){
		return view('home_header').view('home_body').view("home_foter");
	}
	public function fotos(){
		return view('home_header').view("fotos/fotos_page").view("home_foter");
	}
	public function videos(){
		return view('home_header').view("videos/videos_page").view("home_foter");
	}
	public function archivos(){
		return view('home_header').view("archivos/archivos_page").view("home_foter");
	}
	public function chat(){
		return view('home_header').view("chat/chat_page").view("home_foter");
	}
	public function apps(){
		return view('home_header').view("apps/apps_page").view("home_foter");
	}
	public function redsocial(){
		return view('home_header').view("redsocial/redsocial_page").view("home_foter");
	}
	public function uamistream(){
		return view('home_header').view("uamistream/uamistream_page").view("home_foter");
	}
	public function github(){
		return view('home_header').view("github/github_page").view("home_foter");
	}
	public function recursosEducativos(){
		return view('home_header').view("recursosEducativos/recursosEducativos_page").view("home_foter");
	}
	public function colaboradores(){
		return view('home_header').view("colaboradores/colaboradores_page").view("home_foter");
	}
	//--------------------------------------------------------------------

}