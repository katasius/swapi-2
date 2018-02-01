<!-- Modal content-->
<div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">{{$data['name']}}</h4>
        </div>
        <div class="modal-body">
          <p>Rotation Period: {{$data['rotation_period']}}</p>
          <p>Orbital Period: {{$data['orbital_period']}}</p>
          <p>Diameter: {{$data['diameter']}}</p>
          <p>Climate: {{$data['climate']}}</p>
          <p>Gravity: {{$data['gravity']}}</p>
          <p>Terrain: {{$data['terrain']}}</p>
          <p>Surface Water: {{$data['surface_water']}}</p>
          <p>Population: {{$data['population']}}</p>
          <p>Residents: 
            @foreach($data['residents'] as $data){{$data}},
            @endforeach
          </p>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
</div>
