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
    <div class="alert alert-success text-center">
        <p>{{session('mensagem')}}</p>
    </div>
@endif


<div class="card w-25 container mt-5">
    <div class="card-body bg-warning text-center text-success font-weight-bold">
    <h3>Dados Cadastrados</h3>

            <div class="form-group">
                <label for="data">Data</label><br>
                <input class="form-control text-center" type="date" value="{{old('data')}}"  disabled    >
            </div>
            <div class="form-group">
                <label for="hora">Horário</label><br>
                <input class="form-control text-center" value="{{old('hora')}}"  disabled>
            </div>
            <div class="form-group">
                <label for="hora">Indentificador do Paciente</label><br>
                <input class="form-control text-center" value="{{old('idpaciente')}}"  disabled>
            </div>
            <div class="form-group">
                <label for="hora">Indentificador do Médico</label><br>
                <input class="form-control text-center" value="{{old('idmedico')}}"  disabled>
            </div>
             <div class="form-group">
                    <label for="motivo">Motivo</label><br>
                    <textarea class="form-control text-center" name="motivo" id="motivo" type="text" placeholder="Motivo" disabled>
                    {{old('motivo')}}</textarea>
            </div>
            <div class="form-group">
                <label for="historico">Histórico</label><br>
                <input class="form-control text-center" value="{{old('historico')}}" disabled>
            </div>

                    </form>

    </div>
</div>

<p>{{old('hora')}}</p>
