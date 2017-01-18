var AppProvince = angular.module('AppProvince', []);

AppProvince.controller('CtrlProvince', function ($scope, $http) {
	$http.get(SITE_URL + '/WelcomeService/GetProvince').then(function (response){
          // console.log(response.data);
          $scope.allProvince = response.data;
     },function (error){
     });
});
