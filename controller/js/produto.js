var app = angular.module('app', []);

app.controller('produtos', function ($scope, $http, $window) {
        var carregaProduto = function () {
            $http.get('../controller/php/produto.php').success(function (data) {
                $scope.produtos = data;
            }).error(function (data) {
                $scope.erro = '=( ' + data;
            })
        }

        carregaProduto();

        $scope.apagaProduto = function (produto) {
            if (confirm("Tem certeza que deseja apagar este item?")) {
                $http.post('../controller/php/produto.php', {
                    item: produto,
                    type: 'delete'
                }).success(function (data) {
                    $window.location.href = 'Lab-X/../../view/produtos.html';
                }).error(function (data) {
                    console.log("=(");
                })
            }

        }
    }
)

app.controller('produto', function ($scope, $http, $window) {
        $scope.adicionaProduto = function (produto) {
            $http.post('../controller/php/produto.php', {
                item: produto,
                type: 'insert'
            }).success(function (data) {
                $window.location.href = 'Lab-X/../../view/produtos.html';
            }).error(function (data) {
                console.log("Houve um erro ao adicionaro produto: " + data);
            });
        }
    }
)