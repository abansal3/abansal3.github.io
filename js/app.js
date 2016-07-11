var app = angular.module('arpit',['ngRoute','ngResource']);

// App single page routing
app.config(function($routeProvider) {
    $routeProvider

    .when('/', {
        templateUrl: 'pages/name.html',
        controller: 'name'
    })

    .when('/message', {
        templateUrl: 'pages/message.html',
        controller: 'message'
    })

    .when('/info', {
        templateUrl: 'pages/info.html',
        controller: 'info'
    })

    .when('/success', {
        templateUrl: 'pages/success.html',
        controller: 'success'
    })
});

// Stores information in object form to access across various controllers
app.service('getInfo', function () {

    this.name = "";
    this.message = "";
    this.phone = "";
    this.email = "";

});

// Returns scope on enter keypress
app.directive('myEnter', function () {
    return function (scope, element, attrs) {
        element.bind("keydown keypress", function (event) {
            if(event.which === 13) {
                scope.$apply(function (){
                    scope.$eval(attrs.myEnter);
                });

                event.preventDefault();
            }
        });
    };
});

app.controller('name',['$scope','getInfo',function($scope,getInfo) {

    $scope.name = getInfo.name;

    // Watch name field change
    $scope.$watch('name', function () {
        getInfo.name = $scope.name;
    });

}]);

app.controller('message',['$scope','getInfo',function($scope,getInfo) {

    $scope.name = getInfo.name;

    $scope.message = getInfo.message;

    // Watch message field change
    $scope.$watch('message', function () {
        getInfo.message = $scope.message;
    });

}]);

app.controller('info',['$scope','getInfo',function($scope,getInfo) {

    $scope.phone = getInfo.phone;
    $scope.email = getInfo.email;

    // Watch phone field change
    $scope.$watch('phone', function () {
        getInfo.phone = $scope.phone;
    });

    // Watch email field change
    $scope.$watch('email', function () {
        getInfo.email = $scope.email;
    });

}]);

app.controller('mainController',['$scope','$location','getInfo','$http', function($scope,$location,getInfo,$http) {

    $scope.SendData = function (getInfo) {
        var data = {
            name: getInfo.name,
            message: getInfo.message,
            phone: getInfo.phone,
            email: getInfo.email
        };

        var config = {
            headers : {
                'Content-Type': 'application/json'
            }
        }

        $http.post('http://localhost/ArpitBansal/mail.php', data, config)
        .success(function (data, status, headers, config) {
            $scope.PostDataResponse = data;
            console.log($scope.PostDataResponse);
        })
        .error(function (data, status, header, config) {
            $scope.ResponseDetails = "Data: " + data +
                "<hr />status: " + status +
                "<hr />headers: " + header +
                "<hr />config: " + config;
            console.log($scope.ResponseDetails);
        });
    };

    // Function that routes when info is submitted
    $scope.submit = function () {
        if ($location.path() === "/") {
            $location.path('/message');
            return false;
        }

        if ($location.path() === "/message") {
            $location.path('/info');
            return false;
        }

        if ($location.path() === "/info") {
            $scope.SendData(getInfo);
            $location.path('/success');
            return false;
        }
    }

}]);
