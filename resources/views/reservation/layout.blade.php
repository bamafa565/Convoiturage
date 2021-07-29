
@extends('menu.menu')
@section('contenu')

</style>

<!-- Le corps body -->
<body >
<div>

<header >

<img src="Capture.PNG" id="img" alt="fam">
<br>
<br>
<center>
<h1>RESERVATION DE BILLET DE VOYAGE</h1>
</center>
<div class="con"><a href="" class="btn btn-primary">acceuil</a></div>

</header>
<center>
<br>
<form  class="search" name="Search" action="{{route('reservation.store')}}" method="POST" id="form">
    @csrf

<br>
<br>
<div class="container-fluid">
   <div id="depart" class ="   depart" >
            <label>
                        <input type="radio" name="allerRetour"  value="true" id="allerSimple" onclick="document.getElementById('arrived').disabled=true"> Aller simple
                    </label>
                    <label>
                        <input type="radio" name="allerRetour"  value="false" id="allerRetoure" onclick="document.getElementById('arrived').disabled=false"> Aller/Retour
                    </label>

        </div><br>
        <div id = "nom" >
            <label>Pr&eacute;nom</label>
             <input type="text" name="prenom" class="form-control"/>
            </div>
            <br>
           
            <div id = "nom" class=" nom">
                <label>Nom</label>
                <input type="text" name="nom" class="form-control"/>
            </div>
            <br>
            <div id = "nom" class=" nom">
            <label>date de naissance</label>

                <input type="date" name="naissance" class="form-control" />

        </div>
        <br>

        <!-- include permet d'inclure en fichier php externe -->



        <div id = "ville_depart" class="ville_depart">
            <label>Ville de d&eacute;part</label>

                <!-- inserer ici le code php de la liste déroulantes -->
                <select name="a" class="form-control">
                    <option value="">selectionner</option>
                    @foreach ($Trajet as $tra)
                    <option  value="{{ $tra->villedepart }}">{{ $tra->villedepart }}</option>
                    @endforeach
              

                </select>
            </div><br>
            <label>Ville Arriver</label>

                <!-- inserer ici le code php de la liste déroulantes -->
                <select name="b" class="form-control" >
                    <option value="">selectionner</option>
                    @foreach ($Trajet as $tra)
                    <option value="{{ $tra->villearriver }}">{{ $tra->villearriver }}</option>
                    @endforeach

                </select>

            </div><br>



        <div id = "disponibilite" class=" disponibilite">
            <label>D&eacute;part le</label>

                <!-- inserer ici le code php de la liste déroulantes -->
                <select name="c" >
                    <option class="form-control" >selectionner</option>
                    @foreach ($Trajet as $tra)
                    <option  class="form-control" value="{{ $tra->datedepart }}">{{ $tra->datedepart }}</option>
                    @endforeach

                </select>

            </div><br>
        <div>
                <!-- inserer ici le code php de la liste déroulantes -->
                <label>Retour le</label>
                <select name="d" id="arrived" disabled="true" class="form-control" >
                    <option  class="form-control" >selectionner</option>
                    @foreach ($Trajet as $tra)
                    <option value="{{ $tra->datearriver }}">{{ $tra->datearriver }}</option>
                    @endforeach

                </select>

            </div><br>

         <div id = "envoie" class="col-sm-32  envoie">
              <input type="submit" value="R&eacute;server" class="envoie1-right"/>
               <!-- inserer ici le code php de la liste déroulantes -->
               <input type="reset" value="R&eacute;initialiser" class="envoie1-left" />
            </div><br>
        
</div>
</form>
</center>


@endsection
