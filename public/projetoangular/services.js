'use strict'

angular.module('myApp.services',['ngResource'])
    .factory('PostSrv', ['$resource',
        function($resource) {
            return $resource(
                '/api/post/:id', {
                    id: '@id'
                }                
            );
        }]
    );
   