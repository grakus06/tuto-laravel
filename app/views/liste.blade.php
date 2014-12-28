@extends('template')

@section('header')
    @if(Auth::check())
		<div class="btn-group pull-right">
			{{ link_to('post/add', 'Créer un article', array('class' => 'btn btn-info')) }}
			{{ link_to('auth/logout', 'Deconnexion', array('class' => 'btn btn-warning')) }}
		</div>
	@else
		{{ link_to('auth/login', 'Se connecter', array('class' => 'btn btn-info pull-right')) }}
	@endif
@stop

@section('contenu')
	@if(isset($info))
		<div class="row alert alert-info">{{{ $info }}}</div>
	@endif
	{{ $posts->links() }}
	@foreach($posts as $post)
		<article class="row bg-primary">
			<div class="col-md-12">
				<header>
					<h1>{{{ $post->titre }}}
						<div class="pull-right">
							@foreach($post->tags as $tag)
								{{ link_to('post/tag/' . $tag->tag_url, $tag->tag,	array('class' => 'btn btn-xs btn-info')) }}
							@endforeach
						</div>
					</h1>
				</header>
				<hr>
				<section>
					<p>{{{ $post->contenu }}}</p>
					@if(Auth::check() and Auth::user()->admin)
						{{ link_to('post/del/' . $post->id, 'Supprimer cet article', array('class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm(\'Vraiment supprimer cet article ?\')')) }}<br>
					@endif
					<em class="pull-right">
						<span class="glyphicon glyphicon-pencil"></span> {{{ $post->user->name }}} le {{ $post->created_at->format('d-m-Y') }}
					</em>
				</section>
			</div>
		</article>
		<br>
	@endforeach
	{{ $posts->links() }}
@stop