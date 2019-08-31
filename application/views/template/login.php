<?php  $this->load->view('template/head',array('cor'=>'dark') ) ?>

<div class="container">
    <h1 class="display-1 text-center mt-5">Entrar</h1>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <form class="form-signin mt-5">
                <input type="email" id="inputEmail" class="form-control" placeholder="E-mail" required="" autofocus="" style="border-radius: 3px 3px 0 0">
                <input type="password" id="inputPassword" class="form-control" placeholder="Senha" required="" style="border-radius: 0 0 3px 3px">
                <div class="checkbox mb-3 mt-3">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
                <p class="text-muted mt-5 text-center">© 2017-2019</p>
            </form>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>

<?php include 'footer.php' ?>