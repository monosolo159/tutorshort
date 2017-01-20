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

App.controller('CtrlMemberForm', function ($scope, $http) {

	$scope.FormSubmit = function (data) {
		console.log($scope.MemberObject);
		data = $scope.MemberObject;
		$http.post(SITE_URL + '/MemberService/MemberNew', data).then(function (){
				console.log("inserted Successfully");
		});
	} // end $scope.SubmitRegister
});

App.controller('CtrlMemberProfile', function ($scope, $http) {
	$http.post(SITE_URL + '/MemberService/GetMemberProfile', {'id':member_id}).then(function (response){
		console.log(response.data);
		$scope.memberProfile = response.data;
	},function (error){
	});
});
