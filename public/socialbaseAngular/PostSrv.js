 post
 	.factory ('PostSrv', ['$resource',
 	                 function($resource){
 		
 		return $resource (
 		
 		'/api/post/:id', {
 			
 			id: '@id'
 			}
 		);
 	} ]
 	
 	);