<!doctype html>
<html>
<head>
<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
      integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
      crossorigin="anonymous"
    />
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>
</head>
<body>
<div class="container mt-9 col-md-5 shadow-lg p-3 mb-5 bg-white rounded">
<h1 align="center">Time PICKER</h1>
<div class="md-form md-outline">
  <input type="time" name="time" id="default-picker" class="form-control" placeholder="Select time"><br/>
            <div class="container h-100"> 
        <div class="d-flex h-100"> 
            <div class="align-self-center mx-auto"> 
                <button type="button" name="insert" ng-click="insert()" value="insert" class="btn btn-primary"> 
                  Show Time 
                </button> 
            </div> 
        </div> 
    </div> 
</div>

<script>
 var app = angular.module("insert",[]);
 app.controller("controller",function($scope,$http)){
     $scope.insert= function(){
         $http.post(
             "insert.php",
             {'time':$scope.time}
         ).success(function(data){
             $scope.time = null;
        });
     }
 }
</script>
</body>
</html>