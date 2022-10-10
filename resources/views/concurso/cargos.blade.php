<x-layout tituloPagina="Novo Concurso">
    <div>
        <div>
            <h1 class="display-6">
                Criar novo concurso
            </h1>
        </div>        
        <div class="card bg-dark text-white">
            <div class="card-body">
                <h5 class="card-title">Novo Cargo</h5>                    
                <form >
                    <div class="row">
                        <div class="col-12">
                            <label for="" class="form-label">Nome Cargo</label>
                            <input class="form-control" type="text" name="nome" id="">
                        </div>                        
                        <div class="col-12">
                            <label for="" class="form-label">Nivel</label>
                            <select class="form-select" aria-label="Default select example" name="ensino" >
                                @foreach(['Superior', 'Ensino médio', 'Ensino fundamental'] as $escolaridade)
                                    @foreach(['C' => 'completo', 'I' => 'incompleto'] as $sigla => $nivel)
                                        <option value="{{ $escolaridade . $sigla }}">{{ "$escolaridade-$nivel" }}</option>
                                    @endforeach
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <h1 class="display-6">
                                Vincular cargo ao concurso
                            </h1>
                        </div>
                        <div class="col-6">
                            <label for="" class="form-label">Concursos Cadastrados</label>
                            <select class="form-select" aria-label="Default select example" name="comissao">
                                @foreach($concursos as $concurso)
                                    <option value="{{ $concurso->id }}">{{ $concurso->nome . " - " . $concurso->sigla_estado }}</option>
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