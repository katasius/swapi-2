<!-- Modal content-->
<div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">{{$data['title']}}</h4>
        </div>
        <div class="modal-body">
          <p>Director: {{$data['director']}}</p>
          <p>Producer: {{$data['producer']}}</p>
          <p>Release Date: {{$data['release_date']}}</p>
          <p>Opening: {{$data['opening_crawl']}}</p>
          <p>Characters: 
            @foreach($data['characters'] as $data){{$data}}
            @endforeach
          </p>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
</div>
