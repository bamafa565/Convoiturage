@extends('menu.menu')
@section('contenu')


 <style type="text/css">
.lam{
float: right;
margin-right:100px;
width:50px;

}
#h{
  padding:0px;
  float:right;
  margin-right: 40px;
}
 #img{
    width:100%;
}
h1:hover{
  color:yellow;
}
.left{
  float: left;
  font-weight: bold;
  font-family:sans-serif  arial;
}
input{
  border-radius: 15px 15px 15px 15px;
}
input:focus{
  outline-color: yellow;
}
 </style>
  <body>
<center>
<div class="container">
 <div class="row">

    <img src="Capture.PNG" id="img">

  <br>
  <br>
  		 <


<h1><strong>BIENVENU CHEZ SENEGAL DECOUVERTE TOURISTIQUES</strong></h1>
<div class="row">
  <br>
                              <br>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="0" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Espace r&eacute;serv&eacute;: miniature" preserveAspectRatio="xMidYMid slice" focusable="false"><img src="img/senegal-dakar-bamba-bus.jpg"></svg>
            <div class="card-body">
              <p class="card-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Il s'agit d'une carte plus large avec un texte de soutien ci-dessous comme une entr&eacute;e naturelle vers du contenu suppl&eacute;mentaire. </font><font style="vertical-align: inherit;">Ce contenu est un peu plus long.</font></font></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Vue</font></font></button>
                  <button type="button" class="btn btn-sm btn-outline-secondary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&eacute;diter</font></font></button>
                </div>
                <small class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">9 min</font></font></small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="0" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Espace r&eacute;serv&eacute;: miniature" preserveAspectRatio="xMidYMid slice" focusable="false"><img src="img/senegal-dakar-bamba-bus.jpg"></svg>
            <div class="card-body">
              <p class="card-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Il s'agit d'une carte plus large avec un texte de soutien ci-dessous comme une entr&eacute;e naturelle vers du contenu suppl&eacute;mentaire. </font><font style="vertical-align: inherit;">Ce contenu est un peu plus long.</font></font></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Vue</font></font></button>
                  <button type="button" class="btn btn-sm btn-outline-secondary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&eacute;diter</font></font></button>
                </div>
                <small class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">9 min</font></font></small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="0" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Espace r&eacute;serv&eacute;: miniature" preserveAspectRatio="xMidYMid slice" focusable="false"><img src="img/senegal-dakar-bamba-bus.jpg"></svg>

            <div class="card-body">
              <p class="card-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Il s'agit d'une carte plus large avec un texte de soutien ci-dessous comme une entr&eacute;e naturelle vers du contenu suppl&eacute;mentaire. </font><font style="vertical-align: inherit;">Ce contenu est un peu plus long.</font></font></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Vue</font></font></button>
                  <button type="button" class="btn btn-sm btn-outline-secondary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&eacute;diter</font></font></button>
                </div>
                <small class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">9 min</font></font></small>
              </div>
            </div>
          </div>
        </div>
      </div>

<a href="{{route('reservation')}}" class="btn btn-primary form-control">RESERVATION DE/DES PLACES</a>
<br>
<br>
 </div>
 @endsection

