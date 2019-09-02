<?php
include_once('includes/connection.php');
include_once('includes/article.php');

$article = new Article;

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $data = $article->fetch_data($id);

    ?>
<?php
include_once('includes/connection.php');
include_once('includes/article.php');

$article = new Article;
$article = $article->fetch_all();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Edmilson Ferreira">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="copyright" content="© 2018 Edmilson Ferreira">
    <meta name="description" content="Portal do IMA">
    <meta name="keywords"
        content="IMA, Instituto Multi Actions, Portal IMA, Portal, Instituto, Imagem Movimento Atitude">
    <meta name="robots" content="index, follow">
    <meta name="generator" content="Brackets">
    <meta http-equiv="expires" content="0" />
    <meta http-equiv="cache-control" content="public">
    <meta http-equiv="content-language" content="pt-br">

    <meta property="og:url" content="http://www.redeima.com.br/teste/">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Your Website Title">
    <meta property="og:description" content="Your description">
    <meta property="og:image" content="http://www.redeima.com.br/teste/image.jpg">

    <link href="css/style.css" rel="stylesheet">

    <title>Instituto Multi Actions</title>

    <nav class="nav">

        <div class="nav__logo">
            <a href="index.php"><img src="img/marca2.jpg" alt="Logo"></a>
        </div>

        <ul class="nav__list">
            <div class="nav__list-container">
                <li class="nav__item">
                    <a class="nav__link" href="apresentacao.php">Apresentação</a>
                </li>

                <li class="nav__item">
                    <a class="nav__link" href="educa7minutos.php">Educa7 Minutos</a>
                </li>

                <li class="nav__item">
                    <a class="nav__link" href="#">Business</a>
                </li>

                <li class="nav__item">
                    <a class="nav__link" href="#">Ondas do Saber</a>
                </li>

                <li class="nav__item">
                    <a class="nav__link" href="#">Enterprize</a>
                </li>

                <li class="nav__item">
                    <a class="nav__link" href="#">Quanta</a>
                </li>

                <li class="nav__item">
                    <a class="nav__link" href="#">Tec</a>
                </li>

                <li class="nav__item">
                    <a class="nav__link" href="#">Produções</a>
                </li>
            </div>
            <li class="nav__item-last nav__item">
                <a class="nav__link" href="#">Contato</a>
            </li>
        </ul>

        <div class="nav__player">
        </div>
    </nav>
</head>

<body>
    <div id="fb-root"></div>
    <script>
        (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src =
                'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v3.2&appId=462861300875589&autoLogAppEvents=1';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <script src="https://www.google.com/recaptcha/api.js?render=reCAPTCHA_site_key"></script>
    <script>
        grecaptcha.ready(function () {
            grecaptcha.execute('6LeNb64UAAAAAOxzGYbVUgDbauqmSLrmUnf1wrwO', {
                action: 'homepage'
            }).then(function (token) {
                ...
            });
        });
    </script>

    <div class="container">
        <main class="main">
            <section class="sections__article">
            <h1 class="article__subtitle">
              <?php echo $data['article_title']; ?> -
            </h1>

            <small class="article__time">
              postado em <?php setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
          echo utf8_encode(strftime("%d de %B de %Y", $data['article_timestamp'])); ?>
            </small>
            
            <img class="article__image" src="uploads/<?php echo $data['article_image']; ?>" alt="">
            
            <p class="article__content">
              <?php echo $data['article_content'] ?>
          </p>
            </section>
        </main>
    </div>

    <footer class="footer">
        <div class="footer__container">
            <div class="footer__institutional">
                <h3 class="footer__title">Institucional</h3>

                <ul class="footer__list">
                    <li class="footer__item">
                        <a href="#" class="footer__link">Apresentação</a>
                    </li>

                    <li class="footer__item">
                        <a href="#" class="footer__link">Educa7 Minutos</a>
                    </li>

                    <li class="footer__item">
                        <a href="#" class="footer__link">Business</a>
                    </li>

                    <li class="footer__item">
                        <a href="#" class="footer__link">Ondas do Saber</a>
                    </li>

                    <li class="footer__item">
                        <a href="#" class="footer__link">Enterprize</a>
                    </li>

                    <li class="footer__item">
                        <a href="#" class="footer__link">Quanta</a>
                    </li>

                    <li class="footer__item">
                        <a href="#" class="footer__link">Tec</a>
                    </li>

                    <li class="footer__item">
                        <a href="#" class="footer__link">Produções</a>
                    </li>
                </ul>
            </div>

            <div class="footer__questions-attendance">
                <div class="footer__questions">
                    <h3 class="footer__title">Dúvidas</h3>

                    <ul class="footer__list">

                        <li class="footer__item">
                            <a href="#" class="footer__link">Dúvidas</a>
                        </li>

                        <li class="footer__item">
                            <a href="#" class="footer__link">Central de Atendimento</a>
                        </li>

                        <li class="footer__item">
                            <a href="#" class="footer__link">Educa7 Minutos</a>
                        </li>

                        <li class="footer__item">
                            <a href="#" class="footer__link">Bussines</a>
                        </li>

                        <li class="footer__item">
                            <a href="#" class="footer__link">Ondas do Saber</a>
                        </li>

                        <li class="footer__item">
                            <a href="#" class="footer__link">Enterprize</a>
                        </li>

                        <li class="footer__item">
                            <a href="#" class="footer__link">Quanta</a>
                        </li>

                        <li class="footer__item">
                            <a href="#" class="footer__link">IMA Tec</a>
                        </li>

                        <li class="footer__item">
                            <a href="#" class="footer__link">IMA Produções</a>
                        </li>
                    </ul>
                </div>

                <div class="footer__attendance">
                    <h3 class="footer__title">Atendimento</h3>

                    <ul class="footer__list">

                        <li class="footer__item">
                            <a href="#" class="footer__link">71 3378 - 5560</a>
                        </li>

                        <li class="footer__item">
                            <a href="#" class="footer__link">71 9999 - 5555</a>
                        </li>

                        <li class="footer__item">
                            <a href="#" class="footer__link">71 9999 - 5555</a>
                        </li>

                        <li class="footer__item">
                            <a href="#" class="footer__link">71 9999 - 5555</a>
                        </li>

                        <li class="footer__item">
                            <a href="#" class="footer__link">imaeducabem@gmail.com</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="footer__connect">
                <h3 class="footer__title">Conecte-se conosco</h3>

                <div class="fb-page" data-href="https://www.facebook.com/RedeIMA/" data-tabs="messages"
                    data-small-header="true" data-adapt-container-width="true" data-hide-cover="false"
                    data-show-facepile="true">
                    <blockquote cite="https://www.facebook.com/RedeIMA/" class="fb-xfbml-parse-ignore"><a
                            href="https://www.facebook.com/RedeIMA/">I.M.A Instituto Multi Actions</a></blockquote>
                </div>
            </div>
        </div>

        <ul class="footer__nav-social nav__social">

            <li class="nav__social-item nav__item">
                <a href="#">
                    <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJMYXllcl8xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCINCgkgdmlld0JveD0iMCAwIDQ3My45MzEgNDczLjkzMSIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNDczLjkzMSA0NzMuOTMxOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+DQo8Y2lyY2xlIHN0eWxlPSJmaWxsOiNENDI0Mjg7IiBjeD0iMjM2Ljk2NiIgY3k9IjIzNi45NjYiIHI9IjIzNi45NjYiLz4NCjxwYXRoIHN0eWxlPSJmaWxsOiNDQzIwMkQ7IiBkPSJNNDA0LjUxOCw2OS4zOGM5Mi41NDEsOTIuNTQ5LDkyLjU0OSwyNDIuNTkzLDAsMzM1LjE0MmMtOTIuNTQxLDkyLjU0MS0yNDIuNTkzLDkyLjU0NS0zMzUuMTQyLDANCglMNDA0LjUxOCw2OS4zOHoiLz4NCjxwYXRoIHN0eWxlPSJmaWxsOiNCQTIwMkU7IiBkPSJNNDY5LjE2OCwyODQuNDI2TDM1MS44ODYsMTY3LjE0OGwtMTM4LjMyMiwxNS43NDlsLTgzLjY2OSwxMjkuNTMybDE1Ni4zNDIsMTU2LjMzOA0KCUMzNzguMTU3LDQ0OS4zMjIsNDUwLjQyMiwzNzYuNjEyLDQ2OS4xNjgsMjg0LjQyNnoiLz4NCjxwYXRoIHN0eWxlPSJmaWxsOiNGRkZGRkY7IiBkPSJNMzYwLjk3MSwxOTEuMjM4YzAtMTkuODY1LTE2LjA5My0zNS45NjYtMzUuOTQ3LTM1Ljk2NkgxNTYuMzcyYy0xOS44NSwwLTM1Ljk0LDE2LjEwNS0zNS45NCwzNS45NjYNCgl2OTYuNDQ0YzAsMTkuODY1LDE2LjA5MywzNS45NjYsMzUuOTQsMzUuOTY2aDE2OC42NDljMTkuODU4LDAsMzUuOTQ3LTE2LjEwNSwzNS45NDctMzUuOTY2di05Ni40NDRIMzYwLjk3MXogTTIxNi42NCwyODAuMTQ2DQoJdi05MC41ODRsNjguNjk1LDQ1LjI5NEwyMTYuNjQsMjgwLjE0NnoiLz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjwvc3ZnPg0K"
                        alt="Canal no Youtube">
                </a>
            </li>

            <li class="nav__social-item nav__item">
                <a href="#">
                    <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJMYXllcl8xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCINCgkgdmlld0JveD0iMCAwIDQ3NC4wMDYgNDc0LjAwNiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNDc0LjAwNiA0NzQuMDA2OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+DQo8Y2lyY2xlIHN0eWxlPSJmaWxsOiMxM0IzQ0E7IiBjeD0iMjM3LjAwMyIgY3k9IjIzNy4wMDMiIHI9IjIzNy4wMDMiLz4NCjxwYXRoIHN0eWxlPSJmaWxsOiMxMEFCQjY7IiBkPSJNNDA0LjU2Nyw2OS40MjFjOTIuNTQ1LDkyLjU0MSw5Mi41NTIsMjQyLjU5LTAuMDA0LDMzNS4xNDINCgljLTkyLjU0NSw5Mi41NDktMjQyLjYwMSw5Mi41NDktMzM1LjE0MiwwLjAwN0w0MDQuNTY3LDY5LjQyMXoiLz4NCjxwYXRoIHN0eWxlPSJmaWxsOiMwRUEyQTQ7IiBkPSJNNDcxLjgyMSwyNjguNTY1bC02NC4wNDgtNjQuMDQ4bC01LjI4LDUuMjc2bC04MC42ODQtODAuNjhsLTQuMTgzLDQuMThsLTkuNjg0LTkuNjg0bC0xMS44MzEsMTEuODMxDQoJbC05LjU4Ni05LjU4M2wtMTUuNDIsMTUuNDE2bDE4LjgxNywxOC44MTRsLTcyLjI1Nyw3Mi4yNjVsLTcwLjQyLTcwLjQxMmwtMTUuNDE2LDE1LjQxMmwyMC4yOTUsMjAuMjkybC0xNC4yODIsMTQuMjc5bDIzLjMsMjMuMw0KCWwtMTAuMjcxLDEwLjI3MWwyOC4zODUsMjguMzg5bC00LjYzMiw0LjYzNmwyNi4wNTQsMjYuMDU4bC0zMC42MDQsMzAuNjA4bC0yMi43OTktMjIuNzk1bC0yMi4wMiwyMi4wMmwtMjcuMzIyLTI3LjMyNmwtNS40OTMsNS40OTcNCglsMTYwLjc4NywxNjAuNzg3QzM2NS45OTMsNDY1LjcyNiw0NTcuMDcxLDM3OS4yNDIsNDcxLjgyMSwyNjguNTY1eiIvPg0KPHBhdGggc3R5bGU9ImZpbGw6I0ZGRkZGRjsiIGQ9Ik0zNzAuNDg3LDIyNi43OTJjMTguOTQxLTEuNTYsMzEuNzgzLTEwLjE3NCwzNi43MjktMjEuODU2Yy02LjgzNiw0LjE5OC0yOC4wNDQsOC43NzQtMzkuNzU2LDQuNDEyDQoJYy0wLjU3Mi0yLjc0Ni0xLjIxMi01LjM2Ni0xLjg0MS03LjcxOWMtOC45MjQtMzIuNzc0LTM5LjQ3OS01OS4xNjgtNzEuNDk0LTU1Ljk4NGMyLjU4OS0xLjA0NCw1LjIyNC0yLjAyMSw3LjgzOS0yLjg5Mg0KCWMzLjUyMS0xLjI2NSwyNC4xOTgtNC42MzIsMjAuOTQ2LTExLjkyOWMtMi43NDYtNi40MTctMjguMDA3LDQuODUzLTMyLjc2Myw2LjMyN2M2LjI3OS0yLjM2MSwxNi42NjItNi40MjUsMTcuNzctMTMuNjM5DQoJYy05LjYyLDEuMzE3LTE5LjA2MSw1Ljg2Ny0yNi4zNTMsMTIuNDgzYzIuNjMtMi44NCw0LjYyOS02LjI5NCw1LjA1NS0xMC4wMTNjLTI1LjY2NSwxNi4zODktNDAuNjU0LDQ5LjQzMi01Mi43NzgsODEuNDg4DQoJYy05LjUyMy05LjIyNy0xNy45NjQtMTYuNDk3LTI1LjU0MS0yMC41MzFjLTIxLjI0Mi0xMS4zOTctNDYuNjQxLTIzLjI4NS04Ni41MTMtMzguMDg0Yy0xLjIyNCwxMy4xOSw2LjUyMiwzMC43MzUsMjguODQ1LDQyLjM5OA0KCWMtNC44MzgtMC42NDctMTMuNjcyLDAuODAxLTIwLjc1NiwyLjQ5MmMyLjg4NSwxNS4xMTMsMTIuMjg4LDI3LjU2MiwzNy43NzMsMzMuNTg2Yy0xMS42NDQsMC43NjctMTcuNjYxLDMuNDE2LTIzLjExMyw5LjEyNg0KCWM1LjI5NSwxMC41MTEsMTguMjM3LDIyLjg4MSw0MS41MDQsMjAuMzRjLTI1Ljg2NywxMS4xNS0xMC41NDEsMzEuODEyLDEwLjUxNCwyOC43MjljLTM1LjkyMSwzNy4xMDMtOTIuNTU2LDM0LjM3OS0xMjUuMDc2LDMuMzQ5DQoJYzg0LjkwOCwxMTUuNjk5LDI2OS40ODUsNjguNDIyLDI5Ni45OC00My4wMTljMjAuNjEsMC4xNzIsMzIuNzI1LTcuMTM5LDQwLjIzNS0xNS4xOTkNCglDMzk2LjgxNywyMzIuNjc0LDM3OS42MDksMjMwLjU5MywzNzAuNDg3LDIyNi43OTJ6Ii8+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8L3N2Zz4NCg=="
                        alt="Perfil no Twitter">
                </a>
            </li>

            <li class="nav__social-item nav__item">
                <a href="#">
                    <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJMYXllcl8xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCINCgkgdmlld0JveD0iMCAwIDQ3NC4yOTQgNDc0LjI5NCIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNDc0LjI5NCA0NzQuMjk0OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+DQo8Y2lyY2xlIHN0eWxlPSJmaWxsOiMzQTVBOTg7IiBjeD0iMjM3LjExMSIgY3k9IjIzNi45NjYiIHI9IjIzNi45NjYiLz4NCjxwYXRoIHN0eWxlPSJmaWxsOiMzNDUzODc7IiBkPSJNNDA0Ljc0Miw2OS43NTRjOTIuNTQxLDkyLjU0MSw5Mi41NDUsMjQyLjU4Ni0wLjAwNCwzMzUuMTM0DQoJYy05Mi41NDUsOTIuNTQxLTI0Mi41OTMsOTIuNTQxLTMzNS4xMzQsMEw0MDQuNzQyLDY5Ljc1NHoiLz4NCjxwYXRoIHN0eWxlPSJmaWxsOiMyRTRENzI7IiBkPSJNNDcyLjU0MywyNjMuNjU2TDMwMS4xMjksOTIuMjM4bC04OC45OTgsODguOTk4bDUuMzAyLDUuMzAybC01MC42NzEsNTAuNjY3bDQxLjQ3NCw0MS40NzQNCglsLTUuNDU1LDUuNDUybDQ0LjkwMSw0NC45MDFsLTUxLjc2NCw1MS43NjRsODguNDI5LDg4LjQyOUMzODQuMDY1LDQ0OS4wNDUsNDYxLjAzNywzNjYuMjU1LDQ3Mi41NDMsMjYzLjY1NnoiLz4NCjxwYXRoIHN0eWxlPSJmaWxsOiNGRkZGRkY7IiBkPSJNMTk1LjY4MiwxNDguOTM3YzAsNy4yNywwLDM5Ljc0MSwwLDM5Ljc0MWgtMjkuMTE1djQ4LjU5OGgyOS4xMTV2MTQ0LjQwMmg1OS44MDhWMjM3LjI3Nmg0MC4xMzQNCgljMCwwLDMuNzYtMjMuMzA3LDUuNTc5LTQ4Ljc4MWMtNS4yMjQsMC00NS40ODUsMC00NS40ODUsMHMwLTI4LjI3NiwwLTMzLjIzMWMwLTQuOTYyLDYuNTE4LTExLjY0MSwxMi45NjUtMTEuNjQxDQoJYzYuNDM2LDAsMjAuMDE1LDAsMzIuNTg3LDBjMC02LjYyMywwLTI5LjQ4MSwwLTUwLjU5MmMtMTYuNzg2LDAtMzUuODgzLDAtNDQuMzA2LDBDMTk0LjIwMSw5My4wMjgsMTk1LjY4MiwxNDEuNjcxLDE5NS42ODIsMTQ4LjkzNw0KCXoiLz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjwvc3ZnPg0K"
                        alt="Página no Facebook">
                </a>
            </li>

            <li class="nav__social-item nav__item">
                <a href="#">
                    <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9Im5vIj8+CjxzdmcKICAgeG1sbnM6ZGM9Imh0dHA6Ly9wdXJsLm9yZy9kYy9lbGVtZW50cy8xLjEvIgogICB4bWxuczpjYz0iaHR0cDovL2NyZWF0aXZlY29tbW9ucy5vcmcvbnMjIgogICB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiCiAgIHhtbG5zOnN2Zz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciCiAgIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIKICAgdmlld0JveD0iMCAwIDk2MCA5NjAiCiAgIGhlaWdodD0iOTYwIgogICB3aWR0aD0iOTYwIgogICB4bWw6c3BhY2U9InByZXNlcnZlIgogICBpZD0ic3ZnMiIKICAgdmVyc2lvbj0iMS4xIj48bWV0YWRhdGEKICAgICBpZD0ibWV0YWRhdGE4Ij48cmRmOlJERj48Y2M6V29yawogICAgICAgICByZGY6YWJvdXQ9IiI+PGRjOmZvcm1hdD5pbWFnZS9zdmcreG1sPC9kYzpmb3JtYXQ+PGRjOnR5cGUKICAgICAgICAgICByZGY6cmVzb3VyY2U9Imh0dHA6Ly9wdXJsLm9yZy9kYy9kY21pdHlwZS9TdGlsbEltYWdlIiAvPjwvY2M6V29yaz48L3JkZjpSREY+PC9tZXRhZGF0YT48ZGVmcwogICAgIGlkPSJkZWZzNiI+PGNsaXBQYXRoCiAgICAgICBpZD0iY2xpcFBhdGgxOCIKICAgICAgIGNsaXBQYXRoVW5pdHM9InVzZXJTcGFjZU9uVXNlIj48cGF0aAogICAgICAgICBpZD0icGF0aDE2IgogICAgICAgICBkPSJtIDE3OC43OTcsNjgwLjEzMiBjIC03Ny4wOTUsMCAtMTM5LjU5MiwtNjIuNzk4IC0xMzkuNTkyLC0xNDAuMjYxIHYgMCAtMzU5Ljc0MiBjIDAsLTc3LjQ2MyA2Mi40OTcsLTE0MC4yNjEgMTM5LjU5MiwtMTQwLjI2MSB2IDAgaCAzNjIuNDA2IGMgNzcuMDk1LDAgMTM5LjU5Miw2Mi43OTggMTM5LjU5MiwxNDAuMjYxIHYgMCAzNTkuNzQyIGMgMCw3Ny40NjMgLTYyLjQ5NywxNDAuMjYxIC0xMzkuNTkyLDE0MC4yNjEgdiAwIHoiIC8+PC9jbGlwUGF0aD48cmFkaWFsR3JhZGllbnQKICAgICAgIGlkPSJyYWRpYWxHcmFkaWVudDQwIgogICAgICAgc3ByZWFkTWV0aG9kPSJwYWQiCiAgICAgICBncmFkaWVudFRyYW5zZm9ybT0ibWF0cml4KDIwOS45MDIyNyw2MTEuNzg4MzMsNjExLjc4ODMzLC0yMDkuOTAyMjcsMjI1LjY3NTYxLDQxLjQ1Mjc0KSIKICAgICAgIGdyYWRpZW50VW5pdHM9InVzZXJTcGFjZU9uVXNlIgogICAgICAgcj0iMSIKICAgICAgIGN5PSIwIgogICAgICAgY3g9IjAiCiAgICAgICBmeT0iMCIKICAgICAgIGZ4PSIwIj48c3RvcAogICAgICAgICBpZD0ic3RvcDI0IgogICAgICAgICBvZmZzZXQ9IjAiCiAgICAgICAgIHN0eWxlPSJzdG9wLW9wYWNpdHk6MTtzdG9wLWNvbG9yOiNmZmQ3NzYiIC8+PHN0b3AKICAgICAgICAgaWQ9InN0b3AyNiIKICAgICAgICAgb2Zmc2V0PSIwLjI0NjMwNSIKICAgICAgICAgc3R5bGU9InN0b3Atb3BhY2l0eToxO3N0b3AtY29sb3I6I2YzYTU1NCIgLz48c3RvcAogICAgICAgICBpZD0ic3RvcDI4IgogICAgICAgICBvZmZzZXQ9IjAuMzc5MzEiCiAgICAgICAgIHN0eWxlPSJzdG9wLW9wYWNpdHk6MTtzdG9wLWNvbG9yOiNmMTVjM2MiIC8+PHN0b3AKICAgICAgICAgaWQ9InN0b3AzMCIKICAgICAgICAgb2Zmc2V0PSIwLjM4ODY0MjE2IgogICAgICAgICBzdHlsZT0ic3RvcC1vcGFjaXR5OjE7c3RvcC1jb2xvcjojZjE1YzNjIiAvPjxzdG9wCiAgICAgICAgIGlkPSJzdG9wMzIiCiAgICAgICAgIG9mZnNldD0iMC42OTk1MDciCiAgICAgICAgIHN0eWxlPSJzdG9wLW9wYWNpdHk6MTtzdG9wLWNvbG9yOiNjMzJlODciIC8+PHN0b3AKICAgICAgICAgaWQ9InN0b3AzNCIKICAgICAgICAgb2Zmc2V0PSIwLjcwNzgzNDE4IgogICAgICAgICBzdHlsZT0ic3RvcC1vcGFjaXR5OjE7c3RvcC1jb2xvcjojYzMyZTg3IiAvPjxzdG9wCiAgICAgICAgIGlkPSJzdG9wMzYiCiAgICAgICAgIG9mZnNldD0iMC45ODUyMjIiCiAgICAgICAgIHN0eWxlPSJzdG9wLW9wYWNpdHk6MTtzdG9wLWNvbG9yOiM1YzZjYjMiIC8+PHN0b3AKICAgICAgICAgaWQ9InN0b3AzOCIKICAgICAgICAgb2Zmc2V0PSIxIgogICAgICAgICBzdHlsZT0ic3RvcC1vcGFjaXR5OjE7c3RvcC1jb2xvcjojNWM2Y2IzIiAvPjwvcmFkaWFsR3JhZGllbnQ+PGNsaXBQYXRoCiAgICAgICBpZD0iY2xpcFBhdGg1MCIKICAgICAgIGNsaXBQYXRoVW5pdHM9InVzZXJTcGFjZU9uVXNlIj48cGF0aAogICAgICAgICBpZD0icGF0aDQ4IgogICAgICAgICBkPSJNIDAsNzIwIEggNzIwIFYgMCBIIDAgWiIgLz48L2NsaXBQYXRoPjwvZGVmcz48ZwogICAgIHRyYW5zZm9ybT0ibWF0cml4KDEuMzMzMzMzMywwLDAsLTEuMzMzMzMzMywwLDk2MCkiCiAgICAgaWQ9ImcxMCI+PGcKICAgICAgIGlkPSJnMTIiPjxnCiAgICAgICAgIGNsaXAtcGF0aD0idXJsKCNjbGlwUGF0aDE4KSIKICAgICAgICAgaWQ9ImcxNCI+PGcKICAgICAgICAgICBpZD0iZzIwIj48ZwogICAgICAgICAgICAgaWQ9ImcyMiI+PHBhdGgKICAgICAgICAgICAgICAgaWQ9InBhdGg0MiIKICAgICAgICAgICAgICAgc3R5bGU9ImZpbGw6dXJsKCNyYWRpYWxHcmFkaWVudDQwKTtzdHJva2U6bm9uZSIKICAgICAgICAgICAgICAgZD0ibSAxNzguNzk3LDY4MC4xMzIgYyAtNzcuMDk1LDAgLTEzOS41OTIsLTYyLjc5OCAtMTM5LjU5MiwtMTQwLjI2MSB2IDAgLTM1OS43NDIgYyAwLC03Ny40NjMgNjIuNDk3LC0xNDAuMjYxIDEzOS41OTIsLTE0MC4yNjEgdiAwIGggMzYyLjQwNiBjIDc3LjA5NSwwIDEzOS41OTIsNjIuNzk4IDEzOS41OTIsMTQwLjI2MSB2IDAgMzU5Ljc0MiBjIDAsNzcuNDYzIC02Mi40OTcsMTQwLjI2MSAtMTM5LjU5MiwxNDAuMjYxIHYgMCB6IiAvPjwvZz48L2c+PC9nPjwvZz48ZwogICAgICAgaWQ9Imc0NCI+PGcKICAgICAgICAgY2xpcC1wYXRoPSJ1cmwoI2NsaXBQYXRoNTApIgogICAgICAgICBpZD0iZzQ2Ij48ZwogICAgICAgICAgIHRyYW5zZm9ybT0idHJhbnNsYXRlKDQ1Ni41NjQ1LDE1NC43MzM4KSIKICAgICAgICAgICBpZD0iZzUyIj48cGF0aAogICAgICAgICAgICAgaWQ9InBhdGg1NCIKICAgICAgICAgICAgIHN0eWxlPSJmaWxsOiNmZmZmZmY7ZmlsbC1vcGFjaXR5OjE7ZmlsbC1ydWxlOm5vbnplcm87c3Ryb2tlOm5vbmUiCiAgICAgICAgICAgICBkPSJNIDAsMCBDIDI2LjUxOCwwIDUxLjU0OCwxMC40MjcgNzAuNDc5LDI5LjM1OCA4OS40MTEsNDguMjkgOTkuODM3LDczLjMyIDk5LjgzNyw5OS44MzggdiAyMDcuODMzIGMgMCwyNi41MTggLTEwLjQyNiw1MS41NDggLTI5LjM1OCw3MC40OCBDIDUxLjU0OCwzOTcuMDgzIDI2LjUxOCw0MDcuNTA5IDAsNDA3LjUwOSBoIC0xOTUuMDQzIGMgLTI2LjUxOCwwIC01MS41NDgsLTEwLjQyNiAtNzAuNDgsLTI5LjM1OCAtMTguOTMyLC0xOC45MzIgLTI5LjM1OCwtNDMuOTYyIC0yOS4zNTgsLTcwLjQ4IFYgOTkuODM4IGMgMCwtMjYuNTE4IDEwLjQyNiwtNTEuNTQ4IDI5LjM1OCwtNzAuNDggQyAtMjQ2LjU5MSwxMC40MjcgLTIyMS41NjEsMCAtMTk1LjA0MywwIFogbSAwLC0zNS44NTYgaCAtMTk1LjA0MyBjIC03NC42MzIsMCAtMTM1LjY5NCw2MS4wNjIgLTEzNS42OTQsMTM1LjY5NCB2IDIwNy44MzMgYyAwLDc0LjYzMiA2MS4wNjIsMTM1LjY5NCAxMzUuNjk0LDEzNS42OTQgSCAwIGMgNzQuNjMyLDAgMTM1LjY5NCwtNjEuMDYyIDEzNS42OTQsLTEzNS42OTQgViA5OS44MzggQyAxMzUuNjk0LDI1LjIwNiA3NC42MzIsLTM1Ljg1NiAwLC0zNS44NTYiIC8+PC9nPjxnCiAgICAgICAgICAgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMzU5LjE0NTMsNDQ0LjM0MDkpIgogICAgICAgICAgIGlkPSJnNTYiPjxwYXRoCiAgICAgICAgICAgICBpZD0icGF0aDU4IgogICAgICAgICAgICAgc3R5bGU9ImZpbGw6I2ZmZmZmZjtmaWxsLW9wYWNpdHk6MTtmaWxsLXJ1bGU6bm9uemVybztzdHJva2U6bm9uZSIKICAgICAgICAgICAgIGQ9Im0gMCwwIGMgLTQ2LjQ1LDAgLTg0LjEwNCwtMzcuNjU1IC04NC4xMDQsLTg0LjEwNCAwLC00Ni40NSAzNy42NTQsLTg0LjEwNSA4NC4xMDQsLTg0LjEwNSA0Ni40NSwwIDg0LjEwNCwzNy42NTUgODQuMTA0LDg0LjEwNSBDIDg0LjEwNCwtMzcuNjU1IDQ2LjQ1LDAgMCwwIG0gMTI5LjA1OSwtODQuMDAzIGMgMCwtNzAuOTM1IC01Ny41MDUsLTEyOC40NCAtMTI4LjQ0MSwtMTI4LjQ0IC03MC45MzUsMCAtMTI4LjQ0LDU3LjUwNSAtMTI4LjQ0LDEyOC40NCAwLDcwLjkzNiA1Ny41MDUsMTI4LjQ0MSAxMjguNDQsMTI4LjQ0MSA3MC45MzYsMCAxMjguNDQxLC01Ny41MDUgMTI4LjQ0MSwtMTI4LjQ0MSIgLz48L2c+PGcKICAgICAgICAgICB0cmFuc2Zvcm09InRyYW5zbGF0ZSg1MjAuNjc4Nyw0OTAuNzc2NCkiCiAgICAgICAgICAgaWQ9Imc2MCI+PHBhdGgKICAgICAgICAgICAgIGlkPSJwYXRoNjIiCiAgICAgICAgICAgICBzdHlsZT0iZmlsbDojZmZmZmZmO2ZpbGwtb3BhY2l0eToxO2ZpbGwtcnVsZTpub256ZXJvO3N0cm9rZTpub25lIgogICAgICAgICAgICAgZD0ibSAwLDAgYyAwLC0xNi43OTYgLTEzLjYxNiwtMzAuNDEzIC0zMC40MTMsLTMwLjQxMyAtMTYuNzk2LDAgLTMwLjQxMiwxMy42MTcgLTMwLjQxMiwzMC40MTMgMCwxNi43OTYgMTMuNjE2LDMwLjQxMyAzMC40MTIsMzAuNDEzIEMgLTEzLjYxNiwzMC40MTMgMCwxNi43OTYgMCwwIiAvPjwvZz48L2c+PC9nPjwvZz48L3N2Zz4="
                        alt="Perfil no Instagram">
                </a>
            </li>

            <li class="nav__social-item nav__item">
                <a href="#">
                    <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJMYXllcl8xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCINCgkgdmlld0JveD0iMCAwIDQ3NC42NDkgNDc0LjY0OSIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNDc0LjY0OSA0NzQuNjQ5OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+DQo8Y2lyY2xlIHN0eWxlPSJmaWxsOiNFRDc4MjY7IiBjeD0iMjM2Ljk2NyIgY3k9IjIzNi45ODUiIHI9IjIzNi45NjciLz4NCjxwYXRoIHN0eWxlPSJmaWxsOiNEQjZEMjc7IiBkPSJNNDA1LjIzOSw3MC4wODNjOTIuNTQyLDkyLjU0Niw5Mi41NDksMjQyLjU4OCwwLDMzNS4xNDFjLTkyLjU0Miw5Mi41NDItMjQyLjU5OSw5Mi41NDYtMzM1LjE0NCwwDQoJTDQwNS4yMzksNzAuMDgzeiIvPg0KPHBhdGggc3R5bGU9ImZpbGw6I0NFNjAyODsiIGQ9Ik00NjUuNTc2LDI5OS40NDdMMjk1LjU3MSwxMjkuNDVsLTM0LjYzNCwzNC42MzhsLTk1LjA0OS0xMy4zNThsMTkuNTkyLDg4LjgxMWwtNjguMzA2LDY4LjMwNg0KCWwyNC4wMTEsMjQuMDExbC01LjkyMyw1LjkyM2wxMzMuOTMsMTMzLjkzNEMzNjMuOTcxLDQ1OC44MjgsNDQwLjg5NSwzODkuOTM4LDQ2NS41NzYsMjk5LjQ0N3oiLz4NCjxwYXRoIHN0eWxlPSJmaWxsOiNGRkZGRkY7IiBkPSJNMjg2LjEyLDM2Mi40NThjNDQuMzYzLDAsODAuNC0zNi4xMzgsODAuNjUxLTgwLjI1OGwwLjQ5OC02NC45NjFsLTAuNzQ1LTMuNTM2bC0yLjEyOS00LjQ0NQ0KCWwtMy42MDctMi43OTFjLTQuNjgxLTMuNjY3LTI4LjQwNCwwLjI0Ny0zNC43OTEtNS41NDljLTQuNTI4LTQuMTM4LTUuMjM1LTExLjYxOC02LjYxMi0yMS43NTENCgljLTIuNTQ4LTE5LjYyOS00LjE1LTIwLjY1NS03LjIyOS0yNy4zMDRjLTExLjE2OS0yMy42MzMtNDEuNDc0LTQxLjM5Mi02Mi4yOTMtNDMuODQzaC01Ni4zOTZjLTQ0LjM3LDAtODAuNjQzLDM2LjE5NC04MC42NDMsODAuMzk2DQoJdjkzLjc4NGMwLDQ0LjExOSwzNi4yNjksODAuMjU4LDgwLjY0Myw4MC4yNThIMjg2LjEyeiBNMTk0LjQ5NCwxNzMuNjk2aDQ0LjcwN2M4LjUzOSwwLDE1LjQ1NCw2LjkzLDE1LjQ1NCwxNS4zNTMNCgljMCw4LjM4OS02LjkxNSwxNS4zNzktMTUuNDU0LDE1LjM3OWgtNDQuNzA3Yy04LjUzNSwwLTE1LjQzOS02Ljk5LTE1LjQzOS0xNS4zNzlDMTc5LjA1NiwxODAuNjI2LDE4NS45NTksMTczLjY5NiwxOTQuNDk0LDE3My42OTZ6DQoJIE0xNzkuMDU2LDI4MS4wMDdjMC04LjQxOSw2LjkwNC0xNS4yOTMsMTUuNDM5LTE1LjI5M2g5MC44NDdjOC40ODMsMCwxNS4zNjgsNi44NzQsMTUuMzY4LDE1LjI5Mw0KCWMwLDguMzE0LTYuODg5LDE1LjI5Ni0xNS4zNjgsMTUuMjk2aC05MC44NDdDMTg1Ljk1OSwyOTYuMzAzLDE3OS4wNTYsMjg5LjMyMSwxNzkuMDU2LDI4MS4wMDd6Ii8+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8L3N2Zz4NCg=="
                        alt="Blog no Blogger">
                </a>
            </li>

            <li class="">
                <a href="#">
                    <img src="" alt="">
                </a>
            </li>

            <li class="nav__social-item nav__item">
                <a href="#">
                    <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJMYXllcl8xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCINCgkgdmlld0JveD0iMCAwIDI5MS4zMTkgMjkxLjMxOSIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgMjkxLjMxOSAyOTEuMzE5OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+DQo8Zz4NCgk8cGF0aCBzdHlsZT0iZmlsbDojRTRFN0U3OyIgZD0iTTE0NS42NTksMGM4MC40NSwwLDE0NS42Niw2NS4yMTksMTQ1LjY2LDE0NS42NmMwLDgwLjQ1LTY1LjIxLDE0NS42NTktMTQ1LjY2LDE0NS42NTkNCgkJUzAsMjI2LjEwOSwwLDE0NS42NkMwLDY1LjIxOSw2NS4yMSwwLDE0NS42NTksMHoiLz4NCgk8cGF0aCBzdHlsZT0iZmlsbDojRkYwMDg0OyIgZD0iTTEzNi42NjUsMTQ1LjYyM2MwLDIwLjA1NS0xNi4zMjMsMzYuMzI0LTM2LjQ3LDM2LjMyNHMtMzYuNDctMTYuMjY4LTM2LjQ3LTM2LjMyNA0KCQlzMTYuMzIzLTM2LjMzMywzNi40Ny0zNi4zMzNTMTM2LjY2NSwxMjUuNTY4LDEzNi42NjUsMTQ1LjYyM3oiLz4NCgk8cGF0aCBzdHlsZT0iZmlsbDojMDA2M0RDOyIgZD0iTTIyNy43MDIsMTQ1LjYyM2MwLDIwLjA1NS0xNi4zMjMsMzYuMzI0LTM2LjQ3LDM2LjMyNHMtMzYuNDY5LTE2LjI2OC0zNi40NjktMzYuMzI0DQoJCXMxNi4zMjMtMzYuMzMzLDM2LjQ2OS0zNi4zMzNTMjI3LjcwMiwxMjUuNTY4LDIyNy43MDIsMTQ1LjYyM3oiLz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjwvc3ZnPg0K"
                        alt="Perfil no Flicker">
                </a>
            </li>
        </ul>
    </footer>
</body>

</html>
<?php
    } else {
        header('Location: index.php');
        exit();
    }
    ?>