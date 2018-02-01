@extends('template/t_index')

@section('content')
<div class="container">

  <div class="row">

    <div class="col-lg-3">

      <h1 class="my-4" style="text-transform:uppercase;">swapi</h1>
      <div class="list-group">
        @foreach($json as $key => $data)
            <a href="#" class="list-group-item {{$key}}">{{$key}}</a><br />
        @endforeach
      </div>

    </div>
    <!-- /.col-lg-3 -->

    <div class="col-lg-9">

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
                $.ajax({
                        url: "{{$key}}",
                        success: function(result){
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
</script>
@endsection

@section('modal')
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
@endsection