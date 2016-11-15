<!--login modal-->
<div class="modal fade" id="login-modal" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h1 class="text-center">Login</h1>
      </div>
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
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

@section('script')
<script type="text/javascript">
$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#login-modal").modal();
    });
});
</script>
@endsection