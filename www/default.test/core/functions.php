<?php
function getImgName(){ // Только SVG файлы
    $images = [];
    $imagesOut = [];
    $dir = $_SERVER['DOCUMENT_ROOT'] . '/user-files/slider/';
    if ($handle = opendir($dir)) {
        while (false !== ($file = readdir($handle))) {
            $isFile = explode('.', $file);
            if (in_array($isFile[count($isFile) - 1], array('svg'))) {
                array_push($images, $isFile[0]);
            }
        }
    }
    rsort($images);
    for ($i = 0; $i < count($images); $i++){
        array_push($imagesOut, $images[$i].'.svg');
    }
    return $imagesOut;
}

function getImgSlider(){
    $images = getImgName();
    $slider = '<div class="items">';
    for($i = 0; $i < count($images); $i++){
        $slider .= '
                    <dl class="gallery-item">
                        <dt class="gallery-icon">
                            <span class="lupa"></span>
                            <img src="/user-files/slider/thumb/'.$images[$i].'" data-src="/user-files/slider/'.$images[$i].'">
                        </dt>
                    </dl>
                ';
    }
    $slider .= '</div>';
    return $slider;
}

function getTech($connect, $row){
    $technologies = explode(',', $row['technologies']);

    echo('FUNCTIONS_PHP_$row: ');    #!!!!!!!!!!!!!!!
    echo var_dump($row).'</br>';     #!!!!!!!!!!!!!!!

    echo('FUNCTIONS_PHP_$technologies: ');    #!!!!!!!!!!!!!!!
    echo var_dump($technologies).'</br>';     #!!!!!!!!!!!!!!!

    $technologiesItems = '';
    for($i = 0; $i < count($technologies); $i++){
        if($tech = mysqli_query($connect, "SELECT * FROM technologies WHERE `id` = ".$technologies[$i]."") and $rowTech = mysqli_fetch_assoc($tech) and $rowTech != '') {
            $technologiesItems .= $rowTech['name'];
            $technologiesItems .= ', ';
        }
    }
    return substr($technologiesItems, 0, -2);
}

function dateFormat($date){
    $date = explode('-', $date);
    return $date[2].'.'.$date[1].'.'.$date[0];
}
