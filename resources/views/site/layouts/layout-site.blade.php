<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title> Pokedex </title>
        <meta charset="utf-8">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,800" rel="stylesheet">
		<link href="{{asset('assets/images/icons/favicon.ico')}}" rel="icon" type="image/x-icon" />
        <link rel="stylesheet" href="{{asset('assets/css/reset.css')}}">
		<link rel="stylesheet" href="{{asset('assets/css/global.css')}}">
		<link rel="stylesheet" href="{{asset('assets/css/cartao.css')}}">
		<link rel="stylesheet" href="{{asset('assets/css/listagem.css')}}">
		<link rel="stylesheet" href="{{asset('assets/css/responsivo.css')}}">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<script src="https://kit.fontawesome.com/67798631e5.js" crossorigin="anonymous"></script>
    </head>

    <body>
		<main>
        	@yield('conteudo')
		</main>

    
    	<!-- jQuery -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
		<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js" integrity="sha384-qlmct0AOBiA2VPZkMY3+2WqkHtIQ9lSdAsAn5RUJD/3vA5MKDgSGcdmIv4ycVxyn" crossorigin="anonymous"></script>
		<script src="{{asset('assets/js/index.js')}}"></script>
		<script src="{{asset('assets/js/ajax.js')}}"></script>
    </body>
</html>