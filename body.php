<body>
    <h1>Test text</h1>


    <form name="upload" action="handlers/upload_skins.php" method="POST" ENCTYPE="multipart/form-data">
        Введите ранее зарегистрированный никнейм:
        <input type="text" name="nickname"> <br> Выберите файл скина для загрузки:
        <input type="file" name="userfile"> <br>
        <input type="submit" name="upload" value="Загрузить">
    </form>


</body>
