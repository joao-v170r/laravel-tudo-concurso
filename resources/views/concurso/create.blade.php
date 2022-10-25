<x-layout tituloPagina="Novo Concurso">
    <div>
        <div>
            <h1 class="display-4">
                Criar novo concurso
            </h1>
        </div>        
        <div class="card bg-dark text-white">
            <div class="card-body">                  
                <form>
                    <div class="row">                        
                        <h1 class="display-6">Concurso</h1>  
                        <div class="col-8">
                            <label for="" class="form-label">Nome Concuros</label>
                            <input class="form-control" type="text" name="nome" id="">
                        </div>
                        <div class="col-4">
                            <label for="" class="form-label">Status Concurso</label>
                            <input class="form-control" type="text" name="status_concurso" id="">
                        </div>
                        <div class="col-6">
                            <label for="" class="form-label">Sigla Estado do curso</label>
                            <input class="form-control" type="text" name="status_concurso" id="">                           
                        </div>   
                        <div class="col-6">
                            <label for="" class="form-label" >Custo de inscrição</label>
                            <input type="number" class="form-control" name="valor_prova">
                        </div>                        
                        <div class="col-6">
                            <label for="" class="form-label">Status da comissão</label>
                            <select class="form-select" aria-label="Default select example" name="comissao">
                                @foreach(['Formada', 'Em formação'] as $cont => $comissao)
                                    <option value="{{ $cont }}">{{ $comissao }}</option>
                                @endforeach
                            </select>
                        </div>
                        <h1 class="display-6" >Cargos do concurso</h1>
                        <div class="col-6">
                            <label for="" class="form-label">Perfl do Concurso</label>                     
                            <select class="form-select" aria-label="Default select example" name="perfil" >
                                @foreach(['Judiciario', 'Adminstrativo', 'Controle', 'Segurança', 'Fiscal', 'Lesgislativa', 'Alto Gestão', 'Magistério', 'Militar', 'Bancária'] as $perfilConcurso)
                                <option value="{{ $perfilConcurso }}">{{ $perfilConcurso }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-6">
                            <label for="" class="form-label">Salário cargo</label>
                            <input class="form-control" type="number" name="salario">
                        </div>  
                        <div class="col-6">
                            <label for="" class="form-label">Quantidade de vagas</label>
                            <input class="form-control" type="number" name="salario">
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
                        <div class="col-12">
                            <label for="" class="form-label">Descrição Cargo</label>
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