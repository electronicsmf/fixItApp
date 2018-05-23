angular.module('myapp',['ui.router']).config(routing);

routing.$inject = ['$stateProvider','$urlRouterProvider','$locationProvider'];

function routing($stateProvider, $urlRouterProvider,$locationProvider){
    $stateProvider.
    state('home',{
        url:'/',
        templateUrl: 'home.html',
        controller: HomeController,
        controllerAs: 'vm'
    }).
    state('about',{
        url:'/about',
        templateUrl:'about.html',
        controller: AboutController,
        controllerAs: 'vm'
    })

    $urlRouterProvider.otherwise('/');
    $locationProvider.html5Mode(true);

}