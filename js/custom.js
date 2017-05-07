var app = angular.module('personal-website', []);

app.controller('portfolioController', ['$scope', function($scope) {
    $scope.portfolios = [
        {
            image: "img/portfolio/Leaf App Icon_Leaf.png",
            title: "Leaf Payments",
            subtitle: "Making dining and dashing legal",
            description: "We simplified the payment experience down to a push notification, and packaged the entire experience in one beautiful solution for both the user and the restaurant.",
            technologiesUsed: ["HTML5","CSS3","AngularJS","React Native","MongoDB","Node.js"]
        },
        {
            image: "img/portfolio/hostel-point.png",
            title: "Hostel Point",
            subtitle: "BOOK HOSTELS. MEET FRIENDS.",
            description: "Hostel Point is a booking and social platform that allows users to book hostels based on mutual interests and activities, and communicate with each other before and throughout their trip.",
            technologiesUsed: ["HTML5","CSS3","JavaScript","PHP"]
        },
        {
            image: "img/portfolio/medrelay.png",
            title: "MedRelay",
            subtitle: "Optimizing medicine delivery",
            description: "MedRelay is a hackathon project I built at Wellesley Hacks that aims to optimize medicine delivery in areas with disconnected information infrastructure by allowing doctors and other hospital staff to order medicine through text messaging.",
            technologiesUsed: ["HTML5","CSS3","AngularJS","ChartJS","Node.js"]
        }
    ]
}]);

app.controller('achievementController', ['$scope', function($scope) {
    $scope.achievements = [
        {
            image: "https://scontent.fash1-1.fna.fbcdn.net/v/t1.0-9/14522872_889223234512314_8178130091829440514_n.jpg?oh=74ffb0ebccbf49e8b9d6daf3fc73780c&oe=5984F836",
            title: "Money 20/20",
            subtitle: "Winner at The world's largest Fintech hackathon",
            description: "We competed against 500+ professional developers to build the next generation of FinTech products with sponsors including Visa, Paypal, MasterCard, Modo Payments etc. Out of this experience, we got free tickets to the largest payments conference in North America, and had FirstData's support to launch with their clients globally"
        },
        {
            image: "img/achievements/hult.jpg",
            title: "Hult Prize",
            subtitle: "Competed at regionals finals for Boston",
            description: "Competed at Boston regional finals for $1MM in seed funding to empower rural entrepreneurs in India and Rwanda to create low cost innovative solutions within resource constraints"
        },
        {
            image: "img/achievements/code.jpg",
            title: "Babson Code",
            subtitle: "Founded Babson's Premier Tech Club with over 500k in funding",
            description: "Babson Code is an active community of over 200 people learning, building and sharing their work with the goal of launching technology companies in the future."
        }
    ]
}]);

app.controller('blogController', ['$scope','$http', function($scope,$http) {
    $http({
        method: 'GET',
        url: 'https://medium.com/@arpitbansal?format=json',
        withCredentials: true,
        headers: {
            'Content-Type': 'application/json; charset=utf-8',
            'Access-Control-Allow-Origin': 'Allow'
        }
    }).then(function (response) {
        console.log(response);
        $scope.blogResponse = response;
    }, function (error) {
        console.log(error)
    });
}]);