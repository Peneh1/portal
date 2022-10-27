@foreach ($projects as $project)
<?php if ($project['status']== 0): $status = 'open'; else: $status = 'closed'; endif;?>

<h3>{{$project['name']}}</h3>
<p>{{$project['description']}}</p>
<p><b>created by {{$project['by']}} ~ Assigned to {{$project['assigned']}} ~ Status is {{$status}}</b></p>
    
@endforeach