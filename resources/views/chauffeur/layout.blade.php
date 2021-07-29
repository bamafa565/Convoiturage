<style type="">
    body{
        background-color: rgb(231, 231, 231);
    }
        #form{
            background-color: rgba(red, green, blue, alpha);
            padding:50px;
            width:100vw;	
            border-radius: 5px 1px 0px 5px;
    
        }
    .img{
    
     /* float:right;
    */  width:100vw;
    
    }
    label:hover{
        color: yellow;
    }
    input{ border-radius: 5px 5px 5px 5px;}
    select{ border-radius: 5px 5px 5px 5px;}
    input:focus{
        outline:none;
    }
    </style>
    <body>
        <center>
             <img src="Capture.PNG" class="img">
             <br>
             <br>
             <h1>AJOUT D'UN NOUVEAU CONVOYEUR</h1>
    <form id="form" class=" container border border-black" method="post" action="{{ route('chauffeur.store') }}">   
                <br>    
                @csrf
               
               <div><label>NUMERO PERMIS : </label><i class="fas fa-calendar-plus"></i>
                <input type="number" name="a" class="col-sm-4"  min="00000"  max="99999" value="00000">
                </div>
                <br>	
                <br>
             <div><label> NOM : </label> <i class="fa fa-user" aria-hidden="true"></i>
                <input type="text" name="b" class="col-sm-4 " placeholder="sa sant">
            </div>
            <br>	
            <br>
            <div><label>PRENOM : </label> <i class="fa fa-user" aria-hidden="true"></i>
                <input type="text" name="c" class="col-sm-4 " placeholder="sa tour">
            </div>
               </div>
            <br>
            <br>
            <div><label> AGE : </label><i class="fas fa-calendar-plus"></i>
                <input type="number" name="d" class="col-sm-4" placeholder="say atte">
            </div>
                <br>
                <br>
            <div><label> Numero : </label><i class="fas fa-calendar-plus"></i>
                <input type="tel" name="e" class="col-sm-4" placeholder="SA MIMARO">
            </div>
                <br>
                <br>
              
            <div><label> Bus Affecter </label><i class="fas fa-calendar-plus"></i>
               <select name="f">
                @foreach ($voiture as $voi)
                <option  value="{{ $voi->libelle }}">{{ $voi->libelle }}</option>
                @endforeach
            </select>
            </div>
                <br>
            <div><label> Ville Affecte&eacute;   : </label><i class="fas fa-calendar-plus"></i>
                <select name="g">
                    @foreach ($Trajet as $tra)
                    <option  value="{{ $tra->villedepart }}">{{ $tra->villedepart }}</option>
                    @endforeach   
                </select>
            </div>
            </div>
    
            <br>	
             <button type="submit" class="btn btn-primary    y"> Ajouter</button>
             &nbsp; 
              <button type="reset" class="btn btn-warning    x" > annuler</button> <div>
                  <br>	
    </form>
        </center>
    