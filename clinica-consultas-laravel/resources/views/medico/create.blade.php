<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="icon" href="https://cdn3.iconfinder.com/data/icons/clinical-3/96/medical-kit-512.png" />
    <!-- <link href="/your-path-to-fontawesome/css/all.css" rel="stylesheet"> -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css" />

    <div class="d-flex flex-column bg-primary flex-md-row align-items-center p-3 px-md-4 mb-3 border-bottom box-shadow">
        <a class="my-0 mr-md-auto font-weight-normal text-light" href="http://prova-php.test">CAL Consultas</a>
        <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 text-light" href="http://prova-php.test">Home</a>
            <a class="p-2 text-light" href="http://prova-php.test/atendente/create">Novo Atendente</a>
            <a class="p-2 text-light" href="http://prova-php.test/medico/create">Novo Médico</a>
            <a class="p-2 text-light" href="http://prova-php.test/paciente/create">Novo Paciente</a>
            <a class="p-2 text-light" href="http://prova-php.test/consulta/create">Nova Consulta</a>
    </div>

    @if(session('mensagem'))
    <div class="alert alert-danger text-center">
        <p>{{session('mensagem')}}</p>
    </div>
    @endif

<div class="card w-50 container mt-5">
    <div class="card-body bg-warning text-center text-success font-weight-bold">
    <h3>Cadastro Médico</h3>
    <form action="{{route('medico.store')}}" method="post">
@csrf
            <div class="form-group">
                <label for="nome">Nome</label><br>
                <input class="form-control text-center" name="nome" id="nome" type="text" placeholder="Seu nome completo" value="{{old('nome')}}">
            </div>
            <div class="form-group">
                <label for="cpf">Cpf</label><br>
                <input class="form-control text-center" name="cpf" id="cpf" type="text" placeholder="Seu Cpf" value="{{old('cpf')}}">
            </div>
            <div class="form-group">
                <label for="nascimento">Data Nascimento</label><br>
                <input class="form-control text-center" name="nascimento" id="nascimento" type="date" placeholder="Data de nascimento" value="{{old('nascimento')}}">
            </div>
            <div class="form-group">
                <label for="telefone">Telefone</label><br>
                <input class="form-control text-center" name="telefone" id="telefone" type="text" placeholder="Seu telefone para contato" value="{{old('telefone')}}">
            </div>
            <div class="form-group">
                <label for="crm">CRM</label><br>
                <input class="form-control text-center" name="crm" id="crm" type="text" placeholder="CRM" value="{{old('crm')}}">
            </div>
            <div class="form-group">
                <label for="especialidade">Especialidade</label><br>
                <input class="form-control text-center" name="especialidade" id="especialidade" type="text" placeholder="Informe a especialidade" value="{{old('especialidade')}}">
            </div>
            <div class="form-group">
                <label for="senha">Senha</label><br>
                <input class="form-control text-center" name="senha" id="senha" type="password" placeholder="Informe a senha" value="{{old('senha')}}">
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary text-center mt-4 col-md-4" value="Salvar" name="btnSalvarPaciente" id="btnSalvarPaciente" style="cursor: pointer">
            </div>

        </form>

    </div>
</div>