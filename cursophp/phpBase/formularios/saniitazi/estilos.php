<?php header("Content-type: text/css"); ?>

body
{
  background-color: rgb(214, 200, 195);
}

#area
{

  position:relative;
  left:37%;
  top:29%;
  width:320px;
  height:270px;
}

#area #formulario
{
  background-color: rgb(180, 182, 187);
  position:absolute;
  display:block;
}

fieldset
{
  width:310px;
  height:130px;
}

legend
{
  font: 18px bold;
  font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
}

#formulario label
{
  position:absolute;
  left:19px;
  margin-right:5px;
}

#formulario input.campo_nome
{
  position:absolute;
  left:95px;
  top:23px;
  margin-top:1px;
  width:225px;
}

#formulario input.campo_idade
{
  position:absolute;
  left:95px;
  margin-top:2px;
  width:25px;
}



#formulario input.campo_email
{
  position:absolute;
  left:95px;
  margin-top:2px;
  width:225px;
}

#formulario input.campo_url
{
  position:absolute;
  left:95px;
  margin-top:2px;
  width:225px;
}


button
{
  border:none;
  position:absolute;
  bottom: 0.3em;
  right:10px;
  background-color:#f1f1f1;
  cursor: pointer;
  border-radius: 8px;
}

button:hover 
{  
    background-color:rgb(93, 108, 173);
    color: white;
}  