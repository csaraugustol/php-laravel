<?php
use App\Models\Medico;
use App\Models\Paciente;
?>

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
    <h3>Cadastro Consulta</h3>
    <form action="{{route('consulta.store')}}" method="post">
@csrf
            <div class="form-group">
                <label for="data">Data</label><br>
                <input class="form-control text-center" name="data" id="data" type="date" value="{{old('data')}}">
            </div>
            <div class="form-group">
                <label for="hora">Horário</label><br>
                <input class="form-control text-center" name="hora" id="hora" type="text" placeholder="00:00" value="{{old('hora')}}">
            </div>
            <div class="form-group">
                <label for="idpaciente">Paciente</label><br>
                <select name="idpaciente" id="idpaciente" class="w-100">
                <option></option>
                <?php
                    foreach(Paciente::all() as $p){
                ?>
                    <option value="<?= $p->id ?>" ><?= $p->nome ?></option>
                <?php
                    }
                ?>
                </select>
            </div>
            <div class="form-group">
                <label for="idmedico">Médico</label><br>
                <select name="idmedico" id="idmedico" class="w-100">
                <option></option>
                <?php
                    foreach(Medico::all() as $m){
                ?>
                    <option value="<?= $m->id ?>" ><?= $m->nome ?></option>
                <?php
                    }
                ?>
                </select>
            </div>
            <div class="form-group">
                    <label for="motivo">Motivo</label><br>
                    <textarea class="form-control text-center" name="motivo" id="motivo" type="text" placeholder="Motivo" value="{{old('motivo')}}"></textarea>
                </div>
            <div class="form-group">
                <label for="historico">Histórico</label><br>
                <input class="form-control text-center" name="historico" id="historico" type="text" placeholder="Informe o histórico do paciente" value="{{old('historico')}}">
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary text-center mt-4 col-md-4" value="Salvar" name="btnSalvarPaciente" id="btnSalvarPaciente" style="cursor: pointer">
            </div>

                    </form>

    </div>
</div>