/*definição do modulo*/
var post = angular.module('Post',['ngRoute','ngResource']);

post.config (
		['$routeProvider',
		 
		 function ($routeProvider){
			$routeProvider
			.when ('/post-comentario',{
				templateUrl:'socialbaseAngular/templates/post.html'
				
			});
			
		      }
		 ]
);