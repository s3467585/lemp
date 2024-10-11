<!-- Вывод на старницу устройств -->
<div class="cards">
    <div class="card">
        <div class="card-header d-flex flex-row align-items-center">
            <i class="fas fa-microchip __web-inspector-hide-shortcut__"></i>   
            <div class="px-2">Зарегистрированные устройства</div>
        </div>
        <div class="card-body">
            <div class="row row-cols-1 row-cols-lg-2 g-2">
                <?php if (empty($devices)): ?>
                            <p>Устройства не найдены</p>
                    <?php else: ?>

                    <?php foreach ($devices as $device): ?>  
                        <!-- Карточка девайса -->
                        <div class="col"> 
                        <div class="adm-card card">
                            <div class="adm-card-header card-header">
                                <ul class="nav nav-pills">
                                    <!-- Вкладка description (активная) -->
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#description-<?php echo($device["id"]); ?>">Общее</a>
                                    </li>
                                    <!-- Вкладка network-->
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#network-<?php echo($device["id"]); ?>">Сеть</a>
                                    <!-- Вкладка status-->
                                    </li><li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#status-<?php echo($device["id"]); ?>">Состояние</a>
                                    </li>
                                    <!-- Вкладка settings-->
                                    </li><li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#settings-<?php echo($device["id"]); ?>">Настройки</a>
                                    </li>
                                    <!-- Вкладка JSON-->
                                    </li><li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#JSON-<?php echo($device["id"]); ?>">JSON</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="card-body">
                                <h5 class="card-title"><?php echo($device["devName"]); ?></h5>
                                <div class="tab-content">
                                <!-- Блоклок description -->
                                <div class="tab-pane fade show active" id="description-<?php echo($device["id"]); ?>" role="tabpanel">
                                    <div class="d-flex">                        
                                        <div class="">id:</div>
                                        <div class=""><?php echo($device["id"]); ?></div>
                                    </div>
                                    <div class="d-flex">                        
                                        <div class="">devName:</div>
                                        <div class=""><?php echo($device["devName"]); ?></div>
                                    </div>
                                    <div class="d-flex">                        
                                        <div class="">MAC:</div>
                                        <div class=""><?php echo($device["mac"]); ?></div>
                                    </div>
                                </div>
                                <!-- Блоклок network -->
                                <div class="tab-pane fade" id="network-<?php echo($device["id"]); ?>" role="tabpanel">
                                    <div class="d-flex">                        
                                        <div class="">MAC:</div>
                                        <div class=""><?php echo($device["mac"]); ?></div>
                                    </div>
                                    <div class="d-flex">                        
                                        <div class="">IP:</div>
                                        <div class=""><?php echo($device["ip"]); ?></div>
                                    </div>
                                    <div class="d-flex">                        
                                        <div class="">BSSID:</div>
                                        <div class=""><?php echo($device["bssid"]); ?></div>
                                    </div>
                                </div>
                                <!-- Блоклок status -->
                                <div class="tab-pane fade" id="status-<?php echo($device["id"]); ?>" role="tabpanel">
                                        <div class="d-flex">                        
                                        <div class="">sysLoad:</div>
                                        <div class=""><?php echo($device["sysLoad"]); ?></div>
                                    </div>
                                    <div class="d-flex">                        
                                        <div class="">upTime:</div>
                                        <div class=""><?php echo($device["upTime"]); ?></div>
                                    </div>
                                    <div class="d-flex">                        
                                        <div class="">sendTime:</div>
                                        <div class=""><?php echo($device["sendTime"]); ?></div>
                                    </div>
                                    <div class="d-flex">                        
                                        <div class="">connectTime:</div>
                                        <div class=""><?php echo($device["connectTime"]); ?></div>
                                    </div>
                                    <div class="d-flex">                        
                                        <div class="">isntp:</div>
                                        <div class=""><?php echo($device["isntp"]); ?></div>
                                    </div>
                                    <div class="d-flex">                        
                                        <div class="">vcc:</div>
                                        <div class=""><?php echo($device["vcc"]); ?></div>
                                    </div>
                                </div>
                                <!-- Блоклок JSON -->
                                <div class="tab-pane fade" id="JSON-<?php echo($device["id"]); ?>" role="tabpanel">
                                    <div class="d-flex">                        
                                        <div class="">sysLoad:</div>
                                        <div class=""><?php echo($device["json"]); ?></div>
                                    </div>
                                </div>
                                <!-- Блоклок settings -->
                                <div class="tab-pane fade" id="settings-<?php echo($device["id"]); ?>" role="tabpanel">
                                    <a href="/sup/dev_activation/<?php echo $device['id']; ?>" class="btn btn-primary" id="link">Активировать</a>
                                    <a href="/sup/dev_del/<?php echo $device['id']; ?>" class="btn btn-danger">Удалить</a>
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
