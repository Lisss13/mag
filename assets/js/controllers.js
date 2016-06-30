'use strict';

/* Controllers */

var sportShop = angular.module('sportShop', []);

sportShop.controller('shopCtrl',['$scope','$http', function($scope, $http) {
    $scope.title = 'скандинавская ходьба';

    $http.get('/product/shop.json').success(function(data) {
        $scope.description = data;
    });

}]);

var sportProduct = angular.module('sportProduct',['ngSanitize']);

sportProduct.controller("productCtrl",['$scope','$http', function($scope, $http){

    $http.get('/product/shop.json').success(function(data){
        $scope.description = data;
    });

    $scope.maile = function() {
        $scope.sendMaile = true;
    }

}]);