var second_count = 0;
var area_1 = 0.00;
var area_2 = 0.00;
var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope) {
	$scope.estimate_1 = function(){
		if($scope.height_1 != null && $scope.width_1 != null){
			this.area_1 = (($scope.height_1 * $scope.width_1)/144).toFixed(2);
		 	return this.area_1 + " sq. ft.";
		}else{
			return "0.00 sq. ft.";
		}
	}
	$scope.estimate_2 = function(){
		if($scope.height_2 != null && $scope.width_2 != null){
			this.area_2 = (($scope.height_2 * $scope.width_2)/144).toFixed(2);
		 	return this.area_2  + " sq. ft.";
		}else{
			return "0.00 sq. ft.";
		}
	}
	$scope.price_1 = function(){
		if($scope.height_1 != null && $scope.width_1 != null){
			return "$" + (this.area_1 * 18).toFixed(2) + " - " + "$" + (this.area_1 * 22).toFixed(2);
		}else{
			return "$0.00 - $0.00";
		}
	}
	$scope.price_2 = function(){
		if($scope.height_2 != null && $scope.width_2 != null){
			return "$" + (this.area_2 * 18).toFixed(2) + " - " + "$" + (this.area_2 * 22).toFixed(2);
		}else{
			return "$0.00 - $0.00";
		}
	}
	
});
