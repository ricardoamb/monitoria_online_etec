<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo site_url('assets/css/style.css') ?>">
    <title>Login</title>
</head>
<body>

<?php
switch($cor):
    case 'dark':
        break;
    case 'danger':
        break;
    case 'success':
        break;
    case 'primary':
        break;
    default:
        $cor = 'dark';
    break;
endswitch;
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-<?php echo $cor ?>">
    <div class="container">
        <a class="navbar-brand" href="<?php echo base_url() ?>" id="logo"><img src="<?php echo site_url('assets/images/brand.png') ?>" alt="Monitoria Online"></a>
        <?php if ( current_url() !==  'http://192.168.15.4/monitoria_online/login' ) : ?>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbar-login">
                <form class="form-inline">
                    <fieldset>
                        <input type="email" id="exampleInputEmail1" placeholder="E-mail">
                    </fieldset>
                    <fieldset>
                        <input type="password" id="inputPassword2" placeholder="Senha">
                    </fieldset>
                    <fieldset>
                        <button type="submit">Entrar</button>
                    </fieldset>
                </form>
            </div>
        <?php endif; ?>
    </div>
</nav>