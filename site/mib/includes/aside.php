<div class="fixa fixa3">
    <form role="form" action="envia-contato.php" method="post" name="myForm" onsubmit="return validateForm()"  class="form-box">
        <h3 class="text-center text-white">Enviar Mensagem</h3>
        <div class="form-group" >
                                    <input type="name" name="nomeremetente" class="form-control" id="exampleInputName" placeholder="Nome" required>
                                  </div>
                                  <div class="form-group">
                                    <input type="email" name="emailremetente" class="form-control" id="exampleInputEmail1" placeholder="E-mail" required>
                                  </div>
                                  <div class="form-group">
                                    <input type="telefome" name="telefone" class="form-control" id="telefone" placeholder="Telefone" required>
                                  </div>
                                 
                                 <div class="form-group">
                                    <input type="assunto" name="assunto2" class="form-control" id="assunto2" placeholder="Assunto" required>
                                  </div>
                                 
                                 <textarea name="mensagem" class="form-control"  placeholder="Mensagem" rows="3" required></textarea>

                                 <button type="submit" name="BTEnvia" class="btn btn-primary">ENVIAR</button>
    </form>
</div>
 
<a data-toggle="modal" data-target="#myModal" href="" class="btn btn-primary tira-but">Enviar <br> Mensagem</a>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Enviar Mensagem</h4>
      </div>
      <div class="modal-body">
      <form role="form" action="envia-contato.php" method="post" name="myForm" onsubmit="return validateForm()" >
        <h3 class="text-center text-white">Enviar Mensagem</h3>
        <div class="form-group" >
                                    <input type="name" name="nomeremetente" class="form-control" id="exampleInputName" placeholder="Nome" required>
                                  </div>
                                  <div class="form-group">
                                    <input type="email" name="emailremetente" class="form-control" id="exampleInputEmail1" placeholder="E-mail" required>
                                  </div>
                                  <div class="form-group">
                                    <input type="telefome" name="telefone" class="form-control" id="telefone" placeholder="Telefone" required>
                                  </div>
                                 
                                 <div class="form-group">
                                    <input type="assunto" name="assunto2" class="form-control" id="assunto2" placeholder="Assunto" required>
                                  </div>
                                 
                                 <textarea name="mensagem" class="form-control"  placeholder="Mensagem" rows="3" required></textarea>

                                 <button type="submit" name="BTEnvia" class="btn btn-primary">ENVIAR</button>
    </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>

<div class="tira-whats">
   <a href="https://api.whatsapp.com/send?phone=5511940258669" target="_blank"> <img src="images/whatsaoologo.png" width="200" alt=""></a>
</div>

<style>
    @media only screen and (max-width: 600px){
.tira-whats{
    display: block;
    position: fixed;
    left: 95%;
    top: 82%;
    margin-left: -178px;
    z-index: 10;
}
</style>