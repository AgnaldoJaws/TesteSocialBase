'use strict'

angular.module('myApp',['ngRoute','myApp.controllers'])
    .config(
        ['$routeProvider',
         function($routeProvider) {
             $routeProvider
                 .when('/post-comentario', {
                     templateUrl: 'projetoangular/templates/post.html',
                     controller: 'PostCtrl'
                 })
                         }
        ]
    );

