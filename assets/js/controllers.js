'use strict';

/* Controllers */

var sportShop = angular.module('sportShop', []);

sportShop.controller('shopCtrl',['$scope','$http', function($scope, $http) {
    $scope.title = 'скандинавская ходьба';

    $http.get('/product/shop.json').success(function(data) {
        $scope.description = data;
    });

}]);

sportShop.controller("productCtrl",['$scope','$http', function($scope, $http){

    $http.get('/product/shop.json').success(function(data){
        $scope.description = data;

    });

}]);