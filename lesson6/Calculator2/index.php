<?include "calculator.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator</title>
</head>
<body>
    <section>
        <h3>Калькулятор 1</h3>
        <form action="#" method ="POST">
            <input type="text" name = "param1" value=<?echo $a;?>>
            <input  type="submit" name="op" value = "+">
            <input  type="submit" name="op" value = "-">    
            <input  type="submit" name="op" value = "*">
            <input  type="submit" name="op" value = "/">
            <input type="text" name = "param2" value=<?echo $b;?>>
            <span>=</span>
            <input type="text" value="<?= $result;?>" >
            <input id ="reset" type="button"  value = "сбросить">
        </form>
    </section>
    <script>
        var button = document.querySelector('#reset');
        button.onclick = function() {
            $arr = document.querySelectorAll('input[type=text]');
            for (var i of $arr) {
                i.value = "";
            }
        }
    </script>
</body>
</html>