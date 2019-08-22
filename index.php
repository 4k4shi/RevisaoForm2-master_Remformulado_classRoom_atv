<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Delivery</title>
    <link href="css/pedidos.css" rel="stylesheet" type="text/css" />
    <meta charset="utf-8" />
    <style type="text/css" media="screen">
        label {padding: 3px 0px;}
    </style>
</head>
<body >
    <div id="wrap">
        <form method="post" action='pedido/mostrar.php' id="delivery-form" >
            <div>
                <div class="cont_order">
                   <fieldset>
                    <legend>Monte sua refeição</legend>
                    <div class='field_container'>
                    <label >Acompanhamento</label>
                        <label class='radiolabel' for='arroz'><input type="radio"  name="acompanhamento" id="arroz" value="Arroz"/>Arroz branco</label><br/>
                        <label class='radiolabel' for='macarrao'><input type="radio"  name="acompanhamento" id="macarrao" value="Macarrao"/>Macarrão alho-e-óleo</label><br/>
                        <label class='radiolabel' for='farofa'><input type="radio"  name="acompanhamento" id="farofa" value="Farofa"/>Farofa de calabreza</label><br/>
                        <label class='radiolabel' for='salada'><input type="radio"  name="acompanhamento" id="salada" value="Salada"/>Salada de folhas</label><br/>
                    </div>
                    
                    <div class='field_container'>
                        <label for="flavor">Prato principal:</label >
                        <select id="flavor" name='prato_principal' >
                            <option value="">Escolha uma opção</option>
                            <option value="bife">Bife à parmegiana</option>
                            <option value="frango">Frango à parmegiana</option>
                            <option value="lasanha">Lasanha de brócolis</option>
                            <option value="peixe">Peixe frito</option>
                        </select>
                    </div>
                    <div class='field_container'>
                        <label >Adicionais:</label>
                        <label for="batata-frita"><input type="checkbox" name="adicional[1]" id="batata-frita" value="Batata-frita" />Batata-frita</label>
                        <label for="batata-palha"><input type="checkbox" name="adicional[2]" id="batata-palha" value="Batata-palha" />Batata-palha</label>
                        <label for="oregano"><input type="checkbox" name="adicional[3]" id="oregano" value="Oregano" />Orégano</label>
                        <label for="vinagrete"><input type="checkbox" name="adicional[4]" id="vinagrete" value="Vinagrete" />Vinagrete</label>
                        <label for="tomate"><input type="checkbox" name="adicional[5]" id="tomate" value="Tomate" />Tomate</label>
                        <label for="cebola"><input type="checkbox" name="adicional[6]" id="cebola" value="Cebola" />Cebola</label>
                   </div>
                   <div class='field_container'>
                       <label class="inlinelabel" for="confirmar"><input type="checkbox" id="confirmar" name="confirmar" /> Confirmo que as opções são verdadeiras e que está de acordo com o meu pedido.</label>
                   </div>
                  </fieldset>
                </div>
                
            	<div class="cont_details">
                	<fieldset>
                    <legend>Informações do cliente</legend>
                    <label for='name'>Nome completo</label>
                    <input type="text" id="name" name="nome"/>
                    <br/>
                    <label for='address'>Endereço de entrega</label>
                    <input type="text" id="address" name="endereco"/>
                    <br/>
                    <label for='phonenumber'>Telefone</label>
                    <input type="text"  id="phonenumber" name="telefone"/>
                    <br/>
                    </fieldset>
                </div>
                <input type='submit' id='submit' value='Realizar pedido'/>
                <input type='reset' id='submit'  value='Limpar'/>
            </div>
       </form>
	</div>

</body>
</html>