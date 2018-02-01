<!-- Modal content-->
<div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">{{$data['name']}}</h4>
        </div>
        <div class="modal-body">
          <p>Model: {{$data['model']}}</p>
          <p>Manufacturer: {{$data['manufacturer']}}</p>
          <p>Cost in Credit: {{$data['cost_in_credits']}}</p>
          <p>Length: {{$data['length']}}</p>
          <p>Max Atmosphering Speed: {{$data['max_atmosphering_speed']}}</p>
          <p>Crew: {{$data['crew']}}</p>
          <p>Passengers: {{$data['passengers']}}</p>
          <p>Cargo Capacity: {{$data['cargo_capacity']}}</p>
          <p>Consumables: {{$data['consumables']}}</p>
          <p>Vehicle Class: {{$data['vehicle_class']}}</p>
          <p>Pilots: 
            @foreach($data['pilots'] as $data){{$data}}
            @endforeach
          </p>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
</div>
