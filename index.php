<?php
// Working With File System In PHP

$dir = scandir(__DIR__);
var_dump($dir);
var_dump(is_file($dir[3]));
var_dump(is_dir($dir[3]));
// mkdir('foo');

// rmdir('foo');

// if(file_exists('foo.txt'))
// {
//     echo filesize('foo.txt');
//     file_put_contents('foo.txt',"hello sagar");
//     clearstatcache();
//     echo filesize('foo.txt');   
// }
// else{
//     echo 'file not exists';
// }

$file = @fopen('foo.txt','r');     // @ is used to supress the errors

// var_dump($file);

// while(($line = fgets($file)) !== false){
//     echo $line .  '<br/>';
// }

// fclose($file);


while(($line = fgetcsv($file)) !== false){
    print_r($line);
}
fclose($file);

// unlink('foo.txt');                             //it deletes the foo.txt file

copy('foo.txt','bar.txt');          
rename('foo.txt','bar.txt');

?>