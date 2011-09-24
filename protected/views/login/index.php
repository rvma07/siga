<div id="box-meio">
    <h2>Minha Conta</h2>
    <br />
    <br />
    <div id="box-login">
        <div class="col-1">
               <h4 class="title">Novos clientes</h4>
               <p>Ao criar uma conta na nossa loja, você será capaz de finalizar sua compra com mais agilidade, registrar múltiplos endereços de envio, ver e rastrear seus pedidos e muito mais</p>
               <a href="/login/cadastrar/" class="btn">Cadastrar</a>
        </div>
        <div class="col-2">
              <h4 class="title">Cliente registrado</h4>
              <p>Se você tem uma conta conosco, por favor entre.</p>
              <form action="/login/login" method="POST">
                  <div class="form">
                      <div class="row">
                        <label for="username" class="required">E-mail <span class="required">*</span></label>
                        <input name="username" style="width: 270px;" id="" maxlength="60" value="" type="text">
                      </div>
                      <div class="row">
                        <label for="password" class="required">Senha <span class="required">*</span></label>
                        <input name="password" style="width: 270px;" maxlength="60" value="" type="password">
                      </div>
                      <div class="rowsubmit">
                           <input name="" style="width: 60px;" value="Entrar" type="submit">
                           
                      </div>
                      <br />
                      <a href="#">[?] Esqueci minha senha</a>
                  </div>
              </form>
        </div>
    </div>


</div>