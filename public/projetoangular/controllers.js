'use strict'

angular.module('myApp.controllers',['ngRoute','myApp.services'])
    .controller('PostCtrl',
        ['$scope','PostSrv','$location','$routeParams',
            function($scope, PostSrv, $location,$routeParams) {
        	
                

                $scope.load = function() {
                    $scope.registros = PostSrv.query();
                }

                
                $scope.add = function(item) {
                    $scope.result = PostSrv.save(
                        {},
                        item,
                        function(data, status, headers, config) {
                            $location.path('/post-comentario');
                        },
                        function(data, status, headers, config) {
                            alert('Erro ao inserir registro: '+data.messages[0]);
                        }
                    )
                }
             
            }
        ]
    );
    