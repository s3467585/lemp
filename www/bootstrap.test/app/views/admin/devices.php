<div class="content-wrapper">
    <div class="container-fluid">
        <div class="card mb-3">
            <div class="card-header">Устройства</div>
            <div class="card-body">
                <div class="table-responsive">
                    <?php if (empty($devices)): ?>
                        <p>Устройства не найдены</p>
                    <?php else: ?>
                        <table class="table">
                           <thead class="table-dark">
                                <tr>
                                    <?php foreach (array_keys($devices[0]) as $array_keys): ?>
                                        <th scope="col"><?php echo($array_keys); ?></th>
                                    <?php endforeach; ?>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($devices as $devices): ?>
                                <tr>
                                    <?php foreach ($devices as $value): ?>
                                        <td ><?php echo($value);?></td>

                                    <?php endforeach; ?>
                                   
                                    <td>
                                        <a href="/sup/dev_activation/<?php echo $devices['id']; ?>" class="btn btn-primary" id="link">Активировать</a>
                                        <a href="/sup/dev_del/<?php echo $devices['id']; ?>" class="btn btn-danger">Удалить</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>        
                        </table>
                    <!-- <?php echo $pagination; ?> -->
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
