@extends('app')
	
@section('content')
	<div data-ng-controller="PostsCtrl">
		<ul ng-repeat="post in posts">
			<li >@{{ post.title }}</li>
			<li>@{{ post.description }}</li>

		</ul>
		<ul>
			
			<!-- <li ng-repeat="i in paginate.numPage" ><a ng-if="paginate.currentPage == i" class="@{{ i == paginate.currentPage ? 'current' : '' }}"  ng-click="paginate()"  href="/getall?page=@{{ i }}">@{{ i }}</a>
				<a ng-if="paginate.currentPage != i" ng-click="paginate()"  href="/getall?page=@{{ i }}">@{{ i }}</a>
			 </li> -->
		</ul>
		<div>
			<posts-pagination></posts-pagination>
		</div>
	</div>
@stop

@section('scripts')
	<script src="{{ asset('js/app.js')  }}"  language="javascripts" type="text/javascript"></script>
	<script src="{{ asset('js/controllers/PostsController.js')  }}"  language="javascripts" type="text/javascript"></script>
	<script src="{{ asset('js/services/PostsService.js')  }}"  language="javascripts" type="text/javascript"></script>
	<script src="{{ asset('js/directives/postsPagination.js')  }}"  language="javascripts" type="text/javascript"></script>
@stop
