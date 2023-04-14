<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
        <header class="header">
        <div class="header__wrapper">
            <img src="img/logo_mospoly.png" alt="" class="header__logo">
            <h1 class="header__text">Домашняя работа: Solve the equation</h1>
        </div>
    </header>
    <main>
        <section class="form-section" id="examples">
            <div class="form__wrapper">
                <h2 class="form__heading">Введите уравнение типа a + b = c</h2>
                <form action="" method="POST" class="form">
                    <input type="text" name="equation" class="form__input" placeholder="a + b = c">
                    <button type="submit" class="form__button">Посчитать</button>
                </form>
                <div class="answer__wrapper">
                    <h2 class="answer__text">
                    <?php

                    if (!empty($_POST)) {
                        $str = $_POST['equation'];
                        $str = str_replace(' ', '', $str);
                        $str = strtolower($str);
                        $arr_equation = explode('=', $str);
                        $result = $arr_equation[1];
                        if (strpos($arr_equation[0], '+') !== false) {
                            $operand = '+';
                        }
                        if (strpos($arr_equation[0], '-') !== false) {
                            $operand = '-';
                        }
                        if (strpos($arr_equation[0], '*') !== false) {
                            $operand = '*';
                        }
                        if (strpos($arr_equation[0], '/') !== false) {
                            $operand = '/';
                        }
                        if ($operand == '+') {
                            $equatation = explode('+', $arr_equation[0]);
                        }
                        if ($operand == '-') {
                            $equatation = explode('-', $arr_equation[0]);
                        }
                        if ($operand == '*') {
                            $equatation = explode('*', $arr_equation[0]);
                        }
                        if ($operand == '/') {
                            $equatation = explode('/', $arr_equation[0]);
                        }
                        if ($operand == '+') {
                            if ($equatation[0] == 'x') {
                                $x = (int)$result - (int)$equatation[1];
                            } elseif ($equatation[1] == 'x') {
                                $x = (int)$result - (int)$equatation[0];
                            } elseif($result == 'x') {
                                $x = (int)$equatation[0] + (int)$equatation[1];
                            }
                        } elseif ($operand == '-') {
                            if ($equatation[0] == 'x') {
                                $x = (int)$result + (int)$equatation[1];
                            } elseif ($equatation[1] == 'x') {
                                $x = (int)$equatation[0] - (int)$result;
                            } elseif($result == 'x') {
                                $x = (int)$equatation[0] - (int)$equatation[1];
                            }
                        } elseif ($operand == '*') {
                            if ($equatation[0] == 'x') {
                                $x = (int)$result / (int)$equatation[1];
                            } elseif ($equatation[1] == 'x') {
                                $x = (int)$result / (int)$equatation[0];
                            } elseif($result == 'x') {
                                $x = (int)$equatation[0] * (int)$equatation[1];
                            }
                        } elseif ($operand =='/') {
                            if ($equatation[0] == 'x') {
                                $x = (int)$result * (int)$equatation[1];
                            } elseif ($equatation[1] == 'x') {
                                $x = (int)$equatation[0] / (int)$result;
                            } elseif($result == 'x') {
                                $x = (int)$equatation[0] / (int)$equatation[1];
                            }
                        }
                
                        echo 'Ответ: x = ' . $x;
                    }
                    ?>
                    </h2>
    </main>
    <footer class="footer">
        <div class="footer__wrapper">
            <p class="footer__text">Милосердова Алёна Владимировна 221-322</p>
        </div>
    </footer>
</body>
</html>