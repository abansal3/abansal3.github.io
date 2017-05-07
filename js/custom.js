var app = angular.module('personal-website', []);

app.controller('portfolioController', ['$scope', function($scope) {
    $scope.portfolios = [
        {
            image: "sample-images/project-single-1.jpg",
            title: "Test again",
            subtitle: "Testing",
            description: "Description"
        }
    ]
}]);