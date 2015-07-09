angular.module('myApp')
	.factory('Post', ['$http', '$routeParams', function ($http, $routeParams) {
		return {
			getAll : function(page) {
				if (page === undefined) {
					page = 1;
				}
				return $http.get('/getall?page='+page);
			},
			save : function(post) {
				return $http.post('post', post);
			},
			destroy : function(id) {
				return $http.delete('/post/delete/'+id);
			}
		};
	}]);	