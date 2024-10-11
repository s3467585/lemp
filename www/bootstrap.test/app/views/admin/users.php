<!-- Вывод на старницу Users -->
<div class="cards">
    <div class="card">
        <div class="card-header d-flex flex-row align-items-center">
        <i class="fas fa-user-friends"></i>   
            <div class="px-2">Пользователи</div>
        </div>
        <div class="card-body">
            <div class="row row-cols-1 row-cols-lg-2 g-2">
                <?php if (empty($vars["users"])): ?>
                            <p>Пользователи не нефдены</p>
                    <?php else: ?>

                    <?php foreach ($vars["users"] as $user): ?>  
                        <!-- Карточка пользователей -->
                        <div class="col"> 
                        <div class="adm-card card">
                            <div class="adm-card-header card-header">
                                <ul class="nav nav-pills">
                                    <!-- Вкладка description (активная) -->
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#description-<?php echo($user["id"]); ?>">Общее</a>
                                    </li>
                                    <!-- Вкладка status-->
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#status-<?php echo($user["id"]); ?>">Состояние</a>
                                    </li>
                                    <!-- Вкладка settings-->
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#settings-<?php echo($user["id"]); ?>">Настройки</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="card-body">
                                <h5 class="card-title"><?php echo($user["login"]); ?></h5>
                                <div class="tab-content">
                                    <!-- Блоклок description -->
                                    <div class="tab-pane fade show active" id="description-<?php echo($user["id"]); ?>">
                                        <div class="d-flex">
                                            <div class="">id:</div>
                                            <div class=""><?php echo($user["id"]); ?></div>
                                        </div>
                                        <div class="d-flex">
                                            <div class="">full_name:</div>
                                            <div class=""><?php echo($user["full_name"]); ?></div>
                                        </div>
                                        <div class="d-flex">
                                            <div class="">email:</div>
                                            <div class=""><?php echo($user["email"]); ?></div>
                                        </div>
                                        
                                        <div class="d-flex">
                                            <div class="">stat_table:</div>
                                            <div class=""><?php echo($user["stat_table"]); ?></div>
                                        </div>
                                        <div class="d-flex">
                                            <div class="">admin:</div>
                                            <div class=""><?php echo($user["admin"]); ?></div>
                                        </div>
                                    </div>
                                    <!-- Блоклок status -->
                                    <div class="tab-pane fade" id="status-<?php echo($user["id"]); ?>"> 
                                        <div class="d-flex">
                                            <div class="">creation_time:</div>
                                            <div class=""><?php echo($user["creation_time"]); ?></div>
                                        </div>
                                        <div class="d-flex">
                                            <div class="">auth_time:</div>
                                            <div class=""><?php echo($user["auth_time"]); ?></div>
                                        </div>
                                    </div>
                                    <!-- Блоклок settings -->
                                    <div class="tab-pane fade" id="settings-<?php echo($user["id"]); ?>">
                                        <a href="/sup/user_activation/<?php echo $user['id']; ?>" class="btn btn-primary" id="link">Активировать</a>
                                        <a href="/sup/dell_user/<?php echo $user['id']; ?>" class="btn btn-danger">Отвязать</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    <?php endforeach; ?>    
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
