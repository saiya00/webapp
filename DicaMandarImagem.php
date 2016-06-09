Entra na pasta que eu quero que vá a imagem no bash, e da pwd ( copia e cola isso no HomeController "$dir" )

HomeController 

 public function up(){
        $dir = '/home/ubuntu/workspace/mvc/uploads/';
        //O basename ignore o PATH do Windows e prove
        //apenas o nome do arquivo
        //exemplo: C:\minhapasata\img.jpg
        //img.jpg eh retornado
        $uploadfile = $dir . basename($_FILES['arquivo']['name']);
        if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $uploadfile)) {
            echo "Arquivo enviado com sucesso. <br>";
        } else {
            echo "Erro <br>";
            
Upload.php

<!DOCTYPE html>
<html>
    <head>
        <title>Upload</title>
    </head>
    <body>
        <form action="/home/up" method="post" enctype="multipart/form-data">
            Arquivo: <input type="file" name="arquivo"><br>
            <input type="submit" value="Enviar"/>
        </form>
    </body>
</html>

Pasta Upload, pra onde vai as imagens.
Entra na pasta que eu quero que vá a imagem no bash, e da pwd ( copia e cola isso no HomeController "$dir" )