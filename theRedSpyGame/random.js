function CarController($scope) {
  $scope.name = 'Car';
  $scope.type = 'Car';
  $scope.clickme = function() {
    alert('Your game will start in one minute');
  }
}
function BMWController($scope, $injector) {
    $injector.invoke(CarController, this, {$scope: $scope});
    $scope.name = 'BMW';
}