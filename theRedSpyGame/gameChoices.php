<script>
var app2 = angular.module('myapp',[]);

app2.controller('firstname', function($scope, 4http){
   $scope.insertdata=function(){
      $scope.insertdata=function(){$http.post("insert.php", {'enteredName': $scope.enteredName})
        .success(function(data,status,headers,config){
          console.log("data inserted successfully);
    });
}
});
</script>

<div class="row" ng-controller="namesList">



  <div class="col-sm-4" >
 

      <div>
      Name of leader: <input id="presidentName" ng-model="firstname">
      </div>

      <ol>
        <li id="removePlayer"  ng-repeat="name in names">{{name}}
             <a href="" ng-click="removeName(name)">Remove Game</a>
        </li>
      </ol>
      <form class="addGameForm" id="addGameFormBox" ng-submit="addName()">
        <input type="text" ng-model="enteredName">
        Name of new game:<input id="addPlayer" type="submit" value="Submit">
      </form>

        <div class="block" id="iPromiseToBeNice">
            <h5>I promise to be a beneovlent dictator <input id="promiseBox" type="checkbox" ng-model="showDom"> </h5>
            <img id="poster" src="img/red_spy_game_logo.jpg" width="100%" height="100%">
        </div>
  </div>  

  <div class="col-sm-4">
    <span ng-show="showDom">
    <div ng-controller="selectTypeOfGame">
      <h4>What era of paranoia are you in?</h4>
        <select ng-model='selectedPerson' ng-options='obj.name for obj in people' required></select>
        <h4>Minimum number of players</h4>
        <select ng-model='selectedNumberOfPlayers' required>
          <option ng-repeat='label in people[selectedPerson.id].numberOfPlayersInGame'>{{label}}</option>
        </select>
        <h4>How many minutes do you want to play the game?</h4>
        <select ng-model='selectedTime' required>
            <option ng-repeat='time in people[selectedPerson.id].timez'>{{time}}</option>
        </select>
        <br>

<div ng-controller="BMWController">
    <a class="buttonSubmit play">
        <span ng-click="clickme()" ng-disabled="">Start</span>
    </a>
</div>

<script>
    $(document).ready(function() {
        var audioElement = document.createElement('audio');
        audioElement.setAttribute('src', 'startGameSong.wav');

        //audioElement.load()

        $.get();

        audioElement.addEventListener("load", function() {
            audioElement.play();
        }, true);

        $('.play').click(function() {
            audioElement.play();
        });

        $('.pause').click(function() {
            audioElement.pause();
        });
    });
</script>      








    </div>
    </span>
  </div>

  <div class="col-sm-4">

    <div ng-controller="listOfPlayers">
        <table>
            <tr>
              <th>President Name | </th>
              <th>Spy or Citizen</th>
            </tr>
            <tr ng-repeat="player in players">
              <td><h5>{{firstname}}</h5></td>
              <td>{{player.type}}</td>
            </tr>
        </table>
    </div>
  </div>  
</div>

 

 
</div>