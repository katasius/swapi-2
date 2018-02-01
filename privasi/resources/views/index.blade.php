@extends('template/t_index')

@section('content')
<div class="container">

  <div class="row">

    <div class="col-lg-3">

      <h1 class="my-4" style="text-transform:uppercase;">swapi</h1>
      <div class="list-group">
        @foreach($json as $key => $data)
            <a href="#" class="list-group-item {{$key}}" id="external_link">{{$key}}</a><br />
        @endforeach
      </div>

    </div>
    <!-- /.col-lg-3 -->

    <div class="col-lg-9">
    <img src="{{asset('assets/img/tenor.gif')}}" id="imgLoad" style="display:none;z-index:100;" alt="loading" >
        <div class="div1"></div>

    </div>
    <!-- /.col-lg-9 -->

  </div>
  <!-- /.row -->

</div>
@endsection


@section('javascript')
<script>
        @foreach($json as $key => $data)
        $(document).ready(function(){
            $(".{{$key}}").click(function(){
                $('#imgLoad').show();
                $.ajax({
                        url: "{{$key}}",
                        success: function(result){
                        $('#imgLoad').hide();
                        $(".div1").html(result);
                }});
            });
        });

        $(document).ready(function(){
            $(".{{$key}}").click(function(){
                $(".my-4").text("{{$key}}");
            });
        });
        @endforeach

        $(function(){

        $('body').on('click', '#external-link', function(e)
        {
            e.preventDefault();

            var link = $(this).attr('href');
            
            $('body').append(
                '<div id="overlay">' +
                '<img id="loading" src="http://bit.ly/pMtW1K">' +
                '</div>'
            );
            
            setTimeout(function(){
            $('#overlay').remove();
            window.open( link );
            }, 2000); //2 seconds
        });

        });
</script>
@endsection

