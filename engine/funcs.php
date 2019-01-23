<?php
function rus2translit($string) {
    $converter = [
        'а' => 'a',   'б' => 'b',   'в' => 'v',
        'г' => 'g',   'д' => 'd',   'е' => 'e',
        'ё' => 'e',   'ж' => 'zh',  'з' => 'z',
        'и' => 'i',   'й' => 'y',   'к' => 'k',
        'л' => 'l',   'м' => 'm',   'н' => 'n',
        'о' => 'o',   'п' => 'p',   'р' => 'r',
        'с' => 's',   'т' => 't',   'у' => 'u',
        'ф' => 'f',   'х' => 'h',   'ц' => 'c',
        'ч' => 'ch',  'ш' => 'sh',  'щ' => 'sch',
        'ь' => '\'',  'ы' => 'y',   'ъ' => '\'',
        'э' => 'e',   'ю' => 'yu',  'я' => 'ya',
        'А' => 'A',   'Б' => 'B',   'В' => 'V',
        'Г' => 'G',   'Д' => 'D',   'Е' => 'E',
        'Ё' => 'E',   'Ж' => 'Zh',  'З' => 'Z',
        'И' => 'I',   'Й' => 'Y',   'К' => 'K',
        'Л' => 'L',   'М' => 'M',   'Н' => 'N',
        'О' => 'O',   'П' => 'P',   'Р' => 'R',
        'С' => 'S',   'Т' => 'T',   'У' => 'U',
        'Ф' => 'F',   'Х' => 'H',   'Ц' => 'C',
        'Ч' => 'Ch',  'Ш' => 'Sh',  'Щ' => 'Sch',
        'Ь' => '\'',  'Ы' => 'Y',   'Ъ' => '\'',
        'Э' => 'E',   'Ю' => 'Yu',  'Я' => 'Ya',
    ];
    return strtr($string, $converter);
}
function replace($string)
{
    return str_replace([' ', '\''], ['_', ''], $string);
}
function humanUrl($string)
{
    $lower = mb_strtolower($string);
    return replace(rus2translit($lower));
}

function dirToArray($dir) { 
             
    $result = array();
    $dh  = opendir($dir);
    
    while (false !== ($fileName = readdir($dh))) {
        $ext = substr($fileName, strrpos($fileName, '.') + 1);
        if(in_array($ext, array("jpg","jpeg","png","gif")))
        $result[] = $fileName;
    }
    return $result; 
}


function getPageOpenCount() {
    $filename = '../data/page_open_count.txt';
    $count = 1;
    if (file_exists($filename)) {
        $count = (int) file_get_contents($filename);
        $count++;
    }
    file_put_contents($filename, $count);
    return $count;
}

function sum($x, $y)
{
    return $x + $y;
}
function sub($x, $y)
{
    return $x - $y;
}
function mult($x, $y)
{
    return $x * $y;
}
function div($x, $y)
{
    if ($y == 0) {
        return 'Деление на ноль невозможно.';
    }
    return $x / $y;
}
function mathOperation($a, $b, $op = '')
{
    switch ($op) {
        case CALC_OPERATION_SUM:
            return sum($a, $b);
        case CALC_OPERATION_SUB:
            return sub($a, $b);
        case CALC_OPERATION_MULT:
            return mult($a, $b);
        case CALC_OPERATION_DIV:
            return div($a, $b);
    }
    return sprintf('Неизвестная операция "%s"', $op);
}
?>