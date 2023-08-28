@extends('site.layout')
@section('title', 'Descarte aqui')
@section('body')
<div class="container mt-5 pt-5">
    <h1 style="display: flex; justify-content: center; font-weight: bolder">CADASTRO CATADOR</h1>
    <div class="row mt-4">
        <button class="btn btn-lg btn-block mb-4 me-2" style="width: 25%; background-color: #A2DF7D; font-weight: bold;" type="submit">Cívil</button>
        <button class="btn btn-lg btn-block mb-4 ms-2" style="width: 25%; background-color: #7BC92D; font-weight: bold;" type="submit">Catador</button>
    </div>
    <div class="row">
        <div class="col">
            <div class="col me-4" style="display: flex; justify-content: center">
                    <form class="form-signin"  style="width: 50%;">
                      <h1 class="text-center h1 mb-3" style="font-size: xx-large; font-weight: bold;">Seus Dados</h1>
                      <div class="row">
                        <div class="col">
                            <label for="inputNome" class="sr-only mt-3" style="font-size: 1rem">Nome Completo</label>
                            <input type="text" id="inputNome" class="form-control"  required>
                        </div>
                        <div class="col">
                            <label for="inputCPF" class="sr-only mt-3" style="font-size: 1rem">CPF</label>
                            <input type="text" id="inputCPF" class="form-control"  required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                            <label for="inputTelefone" class="sr-only mt-3" style="font-size: 1rem">Telefone</label>
                            <input type="number" id="inputTelefone" class="form-control"  required>
                        </div>
                        <div class="col">
                            <label for="inputEmail" class="sr-only mt-3" style="font-size: 1rem">E-mail</label>
                            <input type="email" id="inputEmail" class="form-control"  required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                            <label for="inputSenha" class="sr-only mt-3" style="font-size: 1rem">Senha</label>
                            <input type="password" id="inputSenha" class="form-control"  required>
                        </div>
                        <div class="col">
                            <label for="inputConfirmar" class="sr-only mt-3" style="font-size: 1rem">Confirmar senha</label>
                            <input type="password" id="inputConfirmar" class="form-control"  required>
                        </div>
                      </div>                         
                    </form>
                </div>
            </div>
        </div>

            </form>
        </div>
    </div>
    <div style="display: flex; justify-content: center">
        <div class="row text-center mt-3">
            <button class="btn btn-lg btn-block mt-4" style="width: 100%; background-color: #7BC92D; font-weight: bold; color: white" type="submit">Continuar</button>
            <a class="color-primary mt-1" href="#" style="text-decoration: none">Já tem cadastro? Entre na sua conta</a>        
        </div>
    </div>
</div>
@endsection