myApp.controller('PostsCtrl', ['$scope', '$http', 'Post', function ($scope, $http, Post) {
	$scope.post = {};
	$scope.loading = true;
	$scope.paginate = {};
	
	$scope.init = function(page) {
		Post.getAll(page).success(function(result) {
		$scope.paginate.currentPage = result.current_page;
		$scope.paginate.numPage = [];
		for(var i = 1; i <= result.last_page; i++) {
			$scope.paginate.numPage.push(i);
		}
		$scope.paginate.lastPage = result.last_page;
		$scope.paginate.url = result.next_page_url;
		$scope.posts = result.data;
		$scope.loading = false;
		console.log($scope.paginate);
	});
	}
	$scope.getAll = function(page) {
		$scope.init(page);
	}

	$scope.submitPost = function() {
		$scope.loading = true;
		Post.save($scope.post)
			.success(function(result){
				$scope.posts = result;
				$scope.loading = false;
			})
			.error(function(result){
				console.log(result);
			});
	};

	$scope.deletePost = function($id) {
		$scope.loading = true;
		Post.destroy
			.success(function(result) {
				Post.getAll()
					.success(function(data) {
						$scope.posts = data;
						$scope.loading = false;	
					});		
			})
			.error(function(result) {
				console.log(result);
			});
	};
	$scope.Msg = 'Hello';
	$scope.init();
}]);