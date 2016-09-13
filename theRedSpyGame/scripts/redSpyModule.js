
var app = angular.module("myapp", []);

    app.controller('listOfPlayers', function($scope){
      $scope.players =[
        {"name": "Larry", "type": "Spy"}
      ];
    });

    app.controller("HelloController", function($scope) {
        $scope.helloTo = {};
        $scope.helloTo.title = "The Red Spy";
        $scope.rulesOfTheGame = "Here are the rules to the game:";
        $scope.cool = "Welcome to the Red Spy Game";

        $scope.coolzzz = {};
        $scope.coolzzz.title = "Names of players:";
      });

    app.controller("namesList", function($scope){
        $scope.names = [""];

        $scope.addName = function(){
          $scope.names.push($scope.enteredName);
          $scope.enteredName = "";

        $scope.removeName = function(name){
          var i = $scope.names.indexOf(name);
          $scope.names.splice(i, 1);
        }
          
        };
      });

app.controller("selectTypeOfGame", function($scope){
    $scope.selectedPerson = 0;
  $scope.selectedNumberOfPlayers = null;
  $scope.selectedTime = 0;
  $scope.people = [
    { id: 0, name: 'Stalinesque', timez: [1,2,3,4,5,6,7,8,9,10], numberOfPlayersInGame: [ 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30 ] },
    { id: 1, name: 'Khrushchevian', timez: [2,3,4,5,6,7,8,9,10,11], numberOfPlayersInGame: [4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30 ]  },
    { id: 2, name: 'McCarthyism', timez: [3,4,5,6,7,8,9,10,11,12], numberOfPlayersInGame: [ 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30 ]  },

  ];
      });

