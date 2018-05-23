class HomeController {
    constructor(UserService){
         this.user = UserService.currentUser();
    }
}

HomeController.$inject = ['UserService'];

angular.module('myapp').controller('HomeController', HomeController);