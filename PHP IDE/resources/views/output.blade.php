@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Output</div>                
                <div class="">
                    <?php include(('newFile.php')); ?>
                </div>
				<div class="panel-body">
					<div class="form-group">
                        
                    </div>
				</div>
			</div>            
		</div>
	</div>
</div>
@endsection