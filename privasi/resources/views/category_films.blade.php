<div class="row">
@foreach($json as $key => $data)
<div class="col-lg-4 col-md-6 mb-4">
  <div class="card h-100">
    <a href="#"><img class="card-img-top col-md-4"  src="{{asset( 'assets/img/'.$data['title'] )}}.jpg" alt="picture"></a>
    <div class="card-body">
      <h4 class="card-title">
        
        <a data-toggle="modal" data-target="#myModalfilms{{$key+1}}"> {{$data['title']}}</a>
      </h4>

    </div>
    <div class="card-footer">
      <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
    </div>
  </div>
</div>

  <!-- Modal -->
  <div class="modal" id="myModalfilms{{$key+1}}" role="dialog">
    <div class="modal-dialog">
    
        @include('detailfilms')

    </div>
  </div>

@endforeach
</div>
