(function(angular) {
    'use strict';
	var app = angular.module('multiselect_app', ['ui.multiselect']);
	app.controller('multiselect_controller', function($scope, $http) {
		$scope.emp_list = '';
		$http.get('getData.php').success(function(empData){					
			$scope.emp_list = empData;								
		});		
	});
})(angular);
