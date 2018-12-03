angular.module('mainApp', ['ngRoute'])
	.config(function($routeProvider, $locationProvider) {
		$routeProvider
	    .when("/lancamentos/entrada", {
	        templateUrl: BASE_URL+'views/entradas.php',
	        controller: 'entradasCtrl',
	        controllerAs: 'ent'
	    })
	    .when("/lancamentos/saidas", {
	        templateUrl: BASE_URL+'views/saidas.php',
	        controller: 'saidasCtrl',
	        controllerAs: 'sai'
	    })
	    .when("/contas", {
	        templateUrl: BASE_URL+'views/contas.php',
	        controller: 'contasCtrl',
	        controllerAs: 'con'
	    })
	    .when("/addconta", {
	        templateUrl: BASE_URL+'views/addconta.php',
	        controller: 'addcontaCtrl',
	        controllerAs: 'addcon'
	    })
	    .when("/cartoes", {
	        templateUrl: BASE_URL+'views/cartoes.php',
	        controller: 'cartoesCtrl',
	        controllerAs: 'cart'
	    })
	    .when("/addcartao", {
	        templateUrl: BASE_URL+'views/addcartao.php',
	        controller: 'addcartaoCtrl',
	        controllerAs: 'addcart'
	    })
	    .when("/", {
	        templateUrl: BASE_URL+'views/dashboard.php',
	        controller: 'dashboardCtrl',
	        controllerAs: 'dash'
	    })
	})

	

var BASE_URL = 'http://localhost/controle-financeiro/';