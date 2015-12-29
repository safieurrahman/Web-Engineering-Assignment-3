@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
            <form action='{{url("handle")}}' method="post">
                <input name="_token" type="hidden" value="{{csrf_token()}}">
			<div class="panel panel-default">
				<div class="panel-heading">Admin Block</div>

				<div class="panel-body">
					<div class="form-group">
                        
                        <textarea cols="10" rows="20" name="code" class="form-control" required>                              </textarea>
                    </div>
				</div>
			</div>
            <input type="submit" value="Compile" name="compile" class="btn btn-primary">
            </form>
            
            <h2 style="text-align: center;">Output</h2>
            
		</div>
	</div>
</div>
@endsection
