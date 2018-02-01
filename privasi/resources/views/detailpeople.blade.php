<!-- Modal content-->
<div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">{{$data['name']}}</h4>
        </div>
        <div class="modal-body">
          <p>Gender: {{$data['gender']}}</p>
          <p>Height: {{$data['height']}} cm</p>
          <p>Mass: {{$data['mass']}} kg</p>
          <p>Hair Color: {{$data['hair_color']}}</p>
          <p>Skin Color: {{$data['skin_color']}}</p>
          <p>Eye Color: {{$data['eye_color']}}</p>
          <p>Birth Year: {{$data['birth_year']}}</p>
          <p>Homeworld: {{$data['homeworld']}}</p>
          <p>Vehicles: 
            @foreach($data['vehicles'] as $data_vehicles){{$data_vehicles}},
            @endforeach
          </p>
          <p>Starships: 
            @foreach($data['starships'] as $data){{$data}},@endforeach</p>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
</div>
