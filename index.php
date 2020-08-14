<?php
$username = "Друг Алексей";
echo $username;
echo "<br>";
$current_user = $username;
echo $current_user;
echo "<br>";
$count = 0;
while (++$count <= 12)
    echo "Число $count умноженное на 12 равно " . $count * 12 . "<br>";
//Разбираем ООП
echo "Разбираем ООП<br>";
$object = new User();
$object->name = "Alex";
$object->password = "secret";
print_r($object);
echo "<br>";
echo $object->get_password();
echo "<br>";
echo $object->password;
echo "<br>";

//Работаем с массивами
$paper[] = "Copier";
$paper[] = "Inkjet";
$paper[] = "Laser";
$paper[] = "Photo";
for ($j = 0; $j < 4; ++$j)
    echo "$j: $paper[$j]<br>";

//====Практикум по программированию====
printf("В вашей корзине находится %X покупки", 3);

//Работаем с файлами
//Создаем файл и записываем в него 3 строки и закрываем
echo "<br>";
$fh = fopen("test/testfile.txt", 'w') or die("Создать файл не удалось");
$text = <<<_END
        Строка 1
        Строка 2
        Строка 3
_END;
fwrite($fh, $text) or die("Ошибка записи");
fclose($fh);
echo "Файл записан успешно!";
echo "<br>";
//Читаем из файла
$fh = fopen("test/testfile.txt", 'r') or die("Открыть файл не удалось");
$line = fgets($fh);
fclose($fh);
echo $line;

echo file_get_contents("http://kplus79.ru");



//Определяем классы
class User
{
    public $name, $password;
    function get_password()
    {
        return $this->password;
    }
}
?>