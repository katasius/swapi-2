<!-- Modal content-->
<div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">{{$data['name']}}</h4>
        </div>
        <div class="modal-body">
          <p>Classification: {{$data['classification']}}</p>
          <p>Designation: {{$data['designation']}}</p>
          <p>Average Height: {{$data['average_height']}}</p>
          <p>Hair Colors: {{$data['hair_colors']}}</p>
          <p>Skin Colors: {{$data['skin_colors']}}</p>
          <p>Eye Colors: {{$data['eye_colors']}}</p>
          <p>Average Lifespan: {{$data['average_lifespan']}}</p>
          <p>Homeworld: {{$data['homeworld']}}</p>
          <p>Language: {{$data['language']}}</p>
          <p>People: 
            @foreach($data['people'] as $data){{$data}}
            @endforeach
          </p>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
</div>
