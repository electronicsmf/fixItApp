var firstApp = angular.module('firstApp',[]);
firstApp.controller('FirstController',function($scope){
    $scope.first = 'some';
    $scope.second = 'one';
    $scope.heading= 'Message: ';
    $scope.updateMessage = function(){
        $scope.message = 'Hello ' + $scope.first + ' ' + $scope.second + '!';
    };
    
});