angular.module('myApp')
	.directive('postsPagination', [function () {
		return {
			restrict: 'E',
			template :  '<ul class="pagination"><li ng-show="paginate.currentPage != 1"><a href="javascript:void(0)" ng-click="getAll(1)">&laquo;</a></li>'+
        '<li ng-show="paginate.currentPage != 1"><a href="javascript:void(0)" ng-click="getAll(paginate.currentPage-1)">&lsaquo; Prev</a></li>'+
        '<li ng-repeat="i in paginate.numPage" ng-class="{active : paginate.currentPage == i}">'+
            '<a href="javascript:void(0)" ng-click="getAll(i)">{{i}}</a>'+
        '</li>'+
        '<li ng-show="paginate.currentPage != paginate.lastPage"><a href="javascript:void(0)" ng-click="getAll(paginate.currentPage+1)">Next &rsaquo;</a></li>'+
        '<li ng-show="paginate.currentPage != paginate.lastPage"><a href="javascript:void(0)" ng-click="getAll(paginate.lastPage)">&raquo;</a></li>'+
      '</ul>'
		};
	}])