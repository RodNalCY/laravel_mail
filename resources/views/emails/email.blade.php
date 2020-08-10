<!DOCTYPE html>
<html>
<head>
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 600px;
  margin: auto;
  font-family: arial;
}

.price {
  color: grey;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: red;
  text-align: center;
  cursor: pointer;
 /*width: 100%;*/
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr{background-color: #f2f2f2}

th {
  background-color: red;
  color: white;
}
table, td, th {
  border: 1px solid #ddd;
  text-align: left;
}
</style>
</head>
<body>

<div class="card">
    <h2>{{$name}} te ha enviado unirte a Teletrabajo.pe</h2>
    <p align="justify">Este correo ha sido enviado porque {{$name_from}} esta usando nuestra plataforma Teletrabajo.pe para mejorar la productividad de sus colaboradores a travéz del home office.</p>
   <div align="center" >
  <a href="https://miro.medium.com/max/800/1*E3v7azePLUppA9_iELu1yQ.jpeg"> <button> Aceptar Invitación</button></a>
   </div>
   <p align="justify">Tambien puedes copiar el siguiente enlace y copiarlo en la URL de tu navegador de preferencia:</p>
   <a href="https://miro.medium.com/max/800/1*E3v7azePLUppA9_iELu1yQ.jpeg">{{$url_link}}</a>
   <br>
  <p align="justify">Gracias por formar parte de nuestara comunidad de Teletrabajo <br><strong>Atte. &copy; Gestores Tecnologicos SAC</strong></p>


</div>

</body>
</html>
