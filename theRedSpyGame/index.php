<!DOCTYPE html>
<html lang="en">
<head>
  <title>The Red Scare</title>
  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.5/angular.min.js"></script>
    <script src="scripts/redSpyModule.js"></script>
    <script src="random.js"></script>
    <script src="scripts/playerModule.js"></script>
    <script src="scripts/typed.js"></script>

    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <link rel="stylesheet" type="text/css" href="styles/button.css">
</head>

<body ng-app="myapp" ng-cloak ng-controller="myCtrlName">
    <h1 class="text-center">The Red Spy Game</h1>

    <a class="buttonSubmitRules">
        <span id="show">Show me the rules:</span>
    </a>

<p><div class="rules"></div></p>

<!-- Modal -->
<div class="modal fade" id="memberModal" tabindex="-1" role="dialog" aria-labelledby="memberModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                 <h2 class="modal-title" id="memberModalLabel" style="color:red;">In Development</h2>

            </div>
            <div class="modal-body">
                <h5>This game is yet to be completed. I still have the backend to set up to keep track of the players and the games.</h5>
                <ul><b>So far I have used the following libraries and frameworks:</b>
                    <li>Bootstrap</li>
                    <li>AngularJS</li>
                    <li>jQuery</li>
                    <li>PHP</li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<script>
$(document).ready(function(){
    $("#show").click(function(){
        $(".rules").show();
    });
});
$(document).ready(function () {

    $('#memberModal').modal('show');

});

</script>





<center>
    <a href="" class="NewOrJoinText" ng-click="showme1=true">Start a New Game</a> <a href="" class="NewOrJoinText" ng-click="showme2=true">Ask to join game an existing game</a>
</center>
    <div ng-show="showme1">
        <?php include 'gameChoices.php' ?>
    </div>

    
    <div ng-show="showme2">
        <?php include 'joinGame.php' ?>
    </div>



 <script>
$(document).ready(function(){
    $(".NewOrJoinText").click(function(){
        $(".NewOrJoinText").hide();
    });

    $("#addPlayer").click(function(){
        $("#addGameFormBox").hide();
        $("#iPromiseToBeNice").show();
    });

    $( "#presidentName" ).keyup(function() {
      $(".addGameForm").show();
              $("#submitButton").show();
    });

    $( "#promiseBox" ).click(function() {
              $("#poster").fadeIn(9000);
    });


});
app.controller('myCtrlName', function($scope) {
    $scope.firstname = "";
    
});

</script>




</body>

</html>