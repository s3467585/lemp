
<div class="setup"> 
    <div class="text">
        Критическая температура: <?php  echo $tempAlarm ?><br>
	</div>
    <button class="btn_open">
        <span class="icon"><i class="fas fa-cog"></i></span>
    </button>
</div>

<dialog class="setup_mod">
    <div class="mod_wrapper">
        
        <div class="mod_form">
            <form id="setings_form" action="/system/userSettings.php"  method="POST">
                <input type="hidden" id="user" value="<?php  echo $user ?>" name="user" />
                <input type="range" id="tempAlarm" value="<?php  echo $tempAlarm ?>" min="0" max="50" name="tempAlarm" oninput="rangevalue.value=value"/>
                <output id="rangevalue"><?php  echo $tempAlarm ?></output>
                <div class="alarmCheck">
                    <input type="checkbox" id="tempAlarm" value="<?php  echo $tempAlarm ?>" min="0" max="50" name="tempAlarm"
                </div>
                <input type="checkbox" id="tempAlarm" value="<?php  echo $tempAlarm ?>" min="0" max="50" name="tempAlarm"
            </form>
        </div>
        
        <div class="mod_btn">
            <button type="submit" class="btn_save" form="setings_form">
                <span class="icon"><i class="fa-solid fa-check"></i></i></span>
                <span class="side-bar-span item">Сохранить</span>
            </button>
            <button type="submit" class="btn_close">
                <span class="icon"><i class="fa-solid fa-xmark"></i></span>
                <span class="side-bar-span item">Закрыть</span>
            </button>
        </div>
        
    </div>
</dialog>

