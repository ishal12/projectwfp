@extends('layout.main')

@section('title', 'Login')

@section('activeLogin', 'class="active"')

@section('content')
<style type="text/css">
.wrapper {    
	margin-top: 80px;
	margin-bottom: 20px;
}

.form-signin {
  max-width: 420px;
  padding: 30px 38px 66px;
  margin: 0 auto;
  background-color: #eee;
  border: 3px dotted rgba(0,0,0,0.1);  
  }

.form-signin-heading {
  text-align:center;
  margin-bottom: 30px;
}

.form-control {
  position: relative;
  font-size: 16px;
  height: auto;
  padding: 10px;
}

input[type=&quot;text&quot;] {
  margin-bottom: 0px;
  border-bottom-left-radius: 0;
  border-bottom-right-radius: 0;
}

input[type=&quot;password&quot;] {
  margin-bottom: 20px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

.colorgraph {
  height: 7px;
  border-top: 0;
  background: #c4e17f;
  border-radius: 5px;
  background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
}	
</style>
    <div class="row">
        <div class="col-md-12">
            <div class = 'container'>
				<div class='wrapper'>
					<form action='' method='post' name='Login_Form' class='form-signin'>       
					    <h1 class='form-signin-heading'>Login</h1>
						  <hr class='colorgraph'><br>
						  <div class="modal-body">
					        {!! Form::open(['url' => 'foo/bar']) !!}
					       	<div class="form-group">
					          {{ Form::text('username', null, array('class' => 'form-control input-lg', 'placeholder' => 'nrp/npk')) }}
					        </div>
					        <div class="form-group">
					          {{ Form::text('password', null, array('class' => 'form-control input-lg', 'placeholder' => 'password')) }}
					        </div>
					        <div class="form-group">
					          {{ Form::select('status', ['M' => 'Mahasiswa', 'D' => 'Dosen', 'A' => 'Admin'], 'M', array('class' => 'form-control input-lg')) }}
					        </div>
					        <div class="form-group">
					          {{ Form::submit('Login', array('class' => 'btn btn-primary btn-lg btn-block')) }}
					        </div>
					        {!! Form::close() !!}
					      </div>  			
					</form>			
				</div>
			</div>
        </div>
    </div>

@endsection