<div class="content-wrapper">
    <div class="container-fluid">
        <div class="card mb-3">
            <div class="card-header">Пользователи</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-4">

                    <?php if (empty($users)): ?>
                        <p>Пользователи не найдены</p>
                    <?php else: ?>
                        <table class="table">
                           <thead>
                                <tr>
                                    <?php foreach (array_keys($users[0]) as $array_keys): ?>
                                        <th scope="col"><?php echo($array_keys); ?></th>
                                    <?php endforeach; ?>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($users as $user): ?>
                                <tr>
                                    <?php foreach ($user as $value): ?>
                                        <td ><?php echo($value);?></td>

                                    <?php endforeach; ?>
                                   
                                    <td>
                                        <a href="/sup/useractivation/<?php echo $user['id']; ?>" class="btn btn-primary" id="link">Активировать</a>
                                        <a href="/sup/delluser/<?php echo $user['id']; ?>" class="btn btn-danger">Отвязать</a>
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
</div>
