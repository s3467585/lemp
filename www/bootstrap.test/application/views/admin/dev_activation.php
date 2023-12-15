<div class="content-wrapper">
    <div class="container-fluid">
        <div class="card mb-3">
            <div class="card-header"><?php echo $title; ?></div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-4">
                        <?php if (empty($device)): ?>
                            <p>Устройства не найдены</p>
                        <?php else: ?>
                            <form action="/admin/edit/<?php echo $device['id']; ?>" method="post" >
                                <div class="form-group">
                                    <label>Название</label>
                                    <input class="form-control" type="text" value="<?php echo htmlspecialchars($device['devName'], ENT_QUOTES); ?>" name="name">
                                </div>
                                <div class="form-group">
                                    <label>Описание</label>
                                    <input class="form-control" type="text" value="<?php echo htmlspecialchars($device['description'], ENT_QUOTES); ?>" name="description">
                                </div>
                                <div class="form-group">
                                    <label>Текст</label>
                                    <textarea class="form-control" rows="3" name="text"><?php echo htmlspecialchars($device['text'], ENT_QUOTES); ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Изображение</label>
                                    <input class="form-control" type="file" name="img">
                                </div>
                                <button type="submit" class="btn btn-primary btn-block">Сохранить</button>
                            </form>
                            <?php print_r($device) ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
