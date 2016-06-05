var app = angular.module('app',[]);

app.controller('mainController',['$scope', function($scope) {

    $scope.statements = ['Hey, My name is Arpit.',''];
    $scope.questions = ['What is your name?'];

    $scope.statement = $scope.statements[0];
    $scope.question = $scope.questions[0];

    $scope.name = '';
    $scope.inputShow = [true,false,false,false];
    $scope.data = [];

    $scope.submit = function() {
        // Enter backend wrapper code here

        if (typeof $scope.name !== undefined && $scope.name !== "") {
            $scope.data.push($scope.name);
            $scope.statement = $scope.statements[1];
            $scope.inputShow[0] = false;
            console.log($scope.data);
        }

    }
}]);
