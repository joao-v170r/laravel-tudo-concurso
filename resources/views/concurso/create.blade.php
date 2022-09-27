<x-layout tituloPagina="Novo Concurso">
    <div>
        <div>
            <h1 class="display-6">
                Criar novo concurso
            </h1>
        </div>        
        <div class="card bg-dark text-white">
            <div class="card-body">
                <h5 class="card-title">Novo Concurso</h5>                    
                <form >
                    <div class="row">
                        <div class="col-8">
                            <label for="" class="form-label">Nome Concuros</label>
                            <input class="form-control" type="text" name="nome" id="">
                        </div>
                        <div class="col-4">
                            <label for="" class="form-label">Data da Prova</label>
                            <input class="form-control" type="date" name="dt_prova" id="">
                        </div>
                        <div class="col-6">
                            <label for="" class="form-label">Perfl do Concurso</label>                        
                            <select class="form-select" aria-label="Default select example" name="perfil" >
                                @foreach(['Judiciario', 'Adminstrativo', 'Controle', 'Segurança', 'Fiscal', 'Lesgislativa', 'Alto Gestão', 'Magistério', 'Militar', 'Bancária'] as $perfilConcurso)
                                <option value="{{ $perfilConcurso }}">{{ $perfilConcurso }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-6">
                            <label for="" class="form-label">Perfl do Concurso</label>
                            <select class="form-select" aria-label="Default select example" name="tipo" >
                                @foreach(['distrital', 'municipal', 'estadual', 'federal'] as $tipoConcurso)
                                    <option value="{{ $tipoConcurso }}">{{ $tipoConcurso }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-4">
                            <label for="" class="form-label">Salário do cargo do concurso</label>
                            <input class="form-control" type="number" name="salario">
                        </div>  
                        <div class="col-4">
                            <label for="" class="form-label">Quantidade de vagas</label>
                            <input class="form-control" type="number" name="salario">
                        </div>  
                        <div class="col-4">
                            <label for="" class="form-label" >Custo de inscrição</label>
                            <input type="number" class="form-control" name="valor_prova">
                        </div>   
                        <div class="col-6">
                            <label for="" class="form-label">Escolaridade</label>
                            <select class="form-select" aria-label="Default select example" name="ensino" >
                                @foreach(['Superior', 'Ensino médio', 'Ensino fundamental'] as $escolaridade)
                                    @foreach(['C' => 'completo', 'I' => 'incompleto'] as $sigla => $nivel)
                                        <option value="{{ $escolaridade . $sigla }}">{{ "$escolaridade-$nivel" }}</option>
                                    @endforeach
                                @endforeach
                            </select>
                        </div>
                        <div class="col-6">
                            <label for="" class="form-label">Estado da comissão</label>
                            <select class="form-select" aria-label="Default select example" name="comissao">
                                @foreach(['Formada', 'Em formação'] as $cont => $comissao)
                                    <option value="{{ $cont }}">{{ $comissao }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label for="" class="form-label">Descrição Concuros</label>
                            <textarea name="descricao" class="form-control" id="" cols="30" rows="10"></textarea>
                        </div>
                        <div>
                            <input type="submit" class="btn btn-light form-control mt-2" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>