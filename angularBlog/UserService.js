class UserService{
    currentUser(){
        //run code to get user info from db
        return 'Welcome To My Page';
    }
}
angular.module('myapp').service('UserService', UserService);