<body>
    <div class="upload-skin">
        <form class="upload-skin-form" name="upload" action="handlers/upload_skins.php" method="POST" ENCTYPE="multipart/form-data">
            <div class="form-outline">
                <label class="form-label form-label-nickname" for="player_nickname">Никнейм игрока</label>
                <input type="text" id="player_nickname" class="form-control" name="nickname">
            </div>
            <label class="form-label form-label-upload_files" for="upload_files">Выберите файл скина для загрузки </label>
            <input type="file" id="upload_files" class="custom-file-upload" name="userfile">
            <input class="btn btn-secondary" type="submit" name="upload" value="Загрузить">
        </form>


    </div>


</body>
