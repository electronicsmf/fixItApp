class AboutController{
    constructor(UserService){
        this.user = UserService.currentUser();
   }
}

AboutController.$inject = ['UserService'];

angular.module('myapp').controller('AboutController',AboutController);