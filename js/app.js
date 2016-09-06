var app = angular.module('app', []);

app.controller('produto', function ($scope, $http) {
    var carregaProduto = function () {
        $http.get('../js/controller/buscaProdutos.php').success(function (data) {
            $scope.produtos = data;
        }).error(function (data) {
            $scope.erro = '=( ' + data;
        })
    }

    carregaProduto();

    $scope.adcionaProduto = function (produto) {
        $http.post('../js/controller/adicionaProduto.php', produto);
    }
})