var App = angular.module('App', []);

App.controller('CtrlProvince', function ($scope, $http) {
	$http.get(SITE_URL + '/WelcomeService/GetProvince').then(function (response){
          //console.log(response.data);
          $scope.allProvince = response.data;
     },function (error){
     });
});

App.controller('CtrlMember', function ($scope, $http) {
	$http.get(SITE_URL + '/MemberService/GetMember').then(function (response){
          console.log(response.data);
          $scope.allMember = response.data;
     },function (error){
     });
});

App.controller('CtrlMemberProfile', function ($scope, $http) {
	$http.get(SITE_URL + '/MemberService/GetMemberProfile').then(function (response){
          // console.log(response.data);
          $scope.memberProfile = response.data;
     },function (error){
     });
});
