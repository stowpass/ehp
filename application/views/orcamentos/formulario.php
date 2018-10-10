<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="box box-primary col-lg-12">
<div class="box-header 
                with-border col-lg-12 
                border 
                border-primary 
                p-2 mb-1 bg-info text-white">
  <h3 class="box-title ">Cadastro de Clientes</h3>
  
</div>
<!-- /.box-header -->

<!-- form start -->
<form role="form" action="geral/<?=$acao;?>" method="post">
<?php // //foreach ($ver as $registro) :?>

  <div class="box-body fluid border border-primary">
      
      <div class="row col-lg-12">
            <div class="form-group col-lg-12">
          <label for="exampleFormControlSelect1">*Nome do Cliente:</label>
          <select class="form-control" name="tipo_pessoa" id="tipo_pessoa" required>
           <option    value="">Selecione Cliente</option>
            <option   value="fisica"    >Fisica</option>
            <option   value="juridica"  >Juridica</option>
         
          </select>
        </div>
    
    </div>
    <div class="row col-lg-12">
        <div class="form-group col-lg-10">
          <label for="exampleInputEmail1">Motivo do Orçamento:</label>
          <input type="text" class="form-control" 
                      id="endereco"
                      name="endereco" 
                      value="<?php //$registro['endereco']; ?>"
                      >
      </div>
        <div class="form-group col-lg-2">
          <label for="exampleInputPassword1">Data:</label>
          <input type="text" class="form-control" 
                      id="endereco_numero"
                      name="endereco_numero" 
                      value="<?php //$registro['endereco_numero']; ?>"
                      >
        </div>

    </div>
     
    <div class="row">
    <div class="form-group col-lg-12">
    <button style="margin: 10px 0;" 
            class="adicionar btn btn-primary">
            <i class="fa fa-plus"></i>&nbsp;Novo
                                Local
                            </button>
    
    </div>
    
    
    <div class="row">
    <div class="form-group col-lg-12">
                        <input type="hidden" id="ids" name="ids">
                        <div class="col-lg-12">
                            <table id="locais" class="table table-bordered">
                                <tbody>
                                <tr>
                                    <th>Quantidade</th>
                                    <th>Descrição</th>
                                    <th>Valor Unit</th>
                                    <th>Valor Total</th>
                                    <th>Ações</th>
                                </tr>
                                <tr>
                                    <td>
                                      <input required="required" 
                                      class="form-control" 
                                      type="text" 
                                      name="nome_local[]" 
                                      value="">
                                    </td>
                                    <td>
                                      <input required="required" 
                                      class="form-control" 
                                      type="text" 
                                      name="nome_local[]" 
                                      value="">
                                    </td>
                                    <td>
                                      <input required="required" 
                                      class="form-control" 
                                      type="text" 
                                      name="nome_local[]" 
                                      value="">
                                    </td>
                                    <td>
                                      <input required="required" 
                                      class="form-control" 
                                      type="text" 
                                      name="nome_local[]" 
                                      value="">
                                    </td>
                                    <td>
                                        <a class="excluir" id-local="0" href="#" style="color: red;">
                                            <i class="fa fa-trash red"></i> Excluir
                                        </a>
                                      </td>
                                    </tr>
                                    
                                  </tbody>
                            </table>
                        </div>
                    </div>
       </div>
      </div>
    <div class="row col-lg-12">
        <div class="form-group col-lg-3">
          <label for="exampleInputEmail1">Complemento:</label>
          <input type="text" class="form-control" 
                      id="complemento"
                      name="complemento"
                      value="<?php //$registro['complemento']; ?>" >
      </div>
       
        <div class="form-group col-lg-3">
          <label for="exampleInputPassword1">Bairro:</label>
          <input type="text" class="form-control" 
                      id="bairro"
                      name="bairro" 
                      value="<?php //$registro['bairro']; ?>">
      </div>
        <div class="form-group col-lg-3">
          <label for="exampleInputPassword1">Cidade:</label>
          <input type="text" class="form-control" 
                      id="cidade"
                      name="cidade"
                      value="<?php //$registro['cidade']; ?>" >
      </div>
        <div class="form-group col-lg-3">
          <label for="exampleInputPassword1">CEP:</label>
          <input type="text" class="form-control" 
                      id="cep"
                      name="cep"
                      value="<?php //$registro['cep']; ?>" >
        </div>
    </div>
    <div class="row col-lg-12">
    <div class="form-group col-lg-4">
          <label for="exampleInputPassword1">Celular 01:</label>
          <input type="text" class="form-control" 
                      id="telefone_celular1"
                      name="telefone_celular1"
                      value="<?php //$registro['telefone_celular1']; ?>"
                      required >
      </div>
      
        <div class="form-group col-lg-4">
          <label for="exampleInputEmail1">Telefone_fixo:</label>
          <input type="text" class="form-control" 
                      id="telefone_fixo"
                      name="telefone_fixo"
                      value="<?php //$registro['telefone_fixo']; ?>"
                       >
      </div>
 
        <div class="form-group col-lg-4">
          <label for="exampleInputPassword1">Celular 02:</label>
          <input type="text" class="form-control" 
                      id="telefone_celular2"
                      name="telefone_celular2" 
                      value="<?php //$registro['telefone_celular2']; ?>">
      </div>
      
    </div>


    <div class="row col-lg-12">
        <div class="form-group col-lg-3">
          <label for="exampleInputEmail1">CNPJ:</label>
          <input type="text" class="form-control" 
                      id="cnpj"
                      name="cnpj"
                      value="<?php //$registro['cnpj']; ?>" >
      </div>
        <div class="form-group col-lg-3">
          <label for="exampleInputPassword1">RG:</label>
          <input type="text" class="form-control" 
                      id="rg"
                      name="rg" 
                      value="<?php //$registro['rg']; ?>">
      </div>
        <div class="form-group col-lg-3">
          <label for="exampleInputPassword1">CPF:</label>
          <input type="text" class="form-control" 
                      id="cpf"
                      name="cpf" 
                      value="<?php //$registro['cpf']; ?>">
      </div>
        <div class="form-group col-lg-3">
          <label for="exampleInputPassword1">Iscrição Estdual:</label>
          <input type="text" class="form-control" 
                      id="ie"
                      name="ie" 
                      value="<?php //$registro['ie']; ?>">
        </div>
    </div>
    <div class="row col-lg-12">
        <div class="form-group col-lg-7">
          <label for="exampleInputEmail1">*E-Mail:</label>
          <input type="text" class="form-control" 
                      id="email"
                      name="email"
                      value="<?php //$registro['email']; ?>"
                      required >

        </div>
        <div class="form-group col-lg-5">
          <label for="exampleInputEmail1">Serviço Contratado no inicio do contato:</label>
          <input type="text" class="form-control" 
                      id="servico_contratado"
                      name="servico_contratado" 
                      value="<?php //$registro['servico_contratado']; ?>">
                      >

          </div>
    </div>
    <div class="row col-lg-12">
        <div class="form-group col-lg-4">
          <label for="exampleInputEmail1">Contato na Empresa:</label>
          <input      
                      class="form-control" 
                      type="text" 
                      id="contato_empresa"
                      name="contato_empresa"
                      value="<?php //$registro['contato_empresa']; ?>"
                      >
                    
       </div>
        <div class="form-group col-lg-8">
        <label class="control-label" for="textarea">Observações</label>
                            
            <textarea class="form-control" 
                id="observacoes"
                name="observacoes"><?php //$registro['observacoes'];?></textarea>
            

          </div>
    </div>
  <!-- /.box-body -->
  <div class="row col-lg-12">
      <div class="box-footer mb-2 p-3">
         <button type="submit" class="btn btn-primary">Salvar</button>
      </div>
      <div class="box-footer mb-2 p-3 col-lg-5">
        <a href="<?php // echo site_url('geral/listadados')?>">Voltar</a>
      </div>
  </div>

<?php //// endforeach?>
</form>
</div>


