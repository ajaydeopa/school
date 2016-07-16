@extends('layout.app1')

@section('content')
<section>
	<div class="section-body">
    	<div class="card">
        	<div class="card-header" style="background-color:#4986E7;">
		    	<span class="c-white f-18">Add New Item</span><span class="c-white f-12 pull-right">Fill Details</span>
        	</div><br>
			<div class="card-body card-padding">
            {{ Form::open() }}
		    	@include('partials.form')
		    {{ Form::close() }}
			</div>
		</div>
	</div>
</section>
@endsection
