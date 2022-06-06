<?php
trait Animals{
    function animal()
        {
            echo "animal execute \n";
        }
}
trait Cat{
    function cat(){
        echo "cat execute \n";
    }
}
class Sound{
    use Animals,Cat;
}
$sound=new Sound();
$sound->cat();
?>