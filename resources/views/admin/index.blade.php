@extends('layouts.app')
@section('content')
@include('menu.admin')
<center>
    <img src="Capture.PNG" class="img">
     <form id="	form" class="border border-black" method="post" action="{{ Route('admin.store') }}">   
        @csrf
         <br>    
         <br>    
        <div>     <label>Ville depart: </label> <i class="fas fa-car"></i>
         <input type="text" name="a" class=" ">
         </div>
         <br>	
      <div>     <label> Ville arriver: </label> <i class="fas fa-car"></i>
         <input type="text" name="b" class=" ">
     </div>
     <br>	
     <div>     <label> Date depart: </label> <i class="fas fa-calendar-plus"></i>
         <input type="datetime-local" name="c" class=" ">
     </div>
     <br>	
     <div><label> Date retour: </label> <i class="fas fa-calendar-plus"></i>
         <input type="datetime-local" name="d" class=" ">
     </div>
     <br>	
      <button type="submit" class="btn btn-primary    y"> Ajouter</button>
      &nbsp; 
       <button type="reset" class="btn btn-warning    x" > annuler</button> <div>
           <br>	
</form>
 </center>
 @endsection