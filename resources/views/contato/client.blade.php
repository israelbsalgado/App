@extends ('layout.main')

@section('title', 'Seu aplicativo de pagamento')

@section('content')
    <div class="container mb-5">
        <div class="zona-azul-redonda pb-4 pt-4">
            <div class="branco">
                <h2>Envie suas Dúvidas</h2>
            </div>
            <div class="branco mt-3">    
                <form action="/contato" methodo = "POST" class="container" >
                    @csrf
                    <div class="form-group text-left">
                        <div class="mt-3 mb-3">
                                <div>
                                    <input type="name" class="form-control " id="name" name="name" placeholder="Nome" >
                                </div>
                                <div class="mt-3 mb-3">
                                    <input type="sobrenome" class="form-control " id="sobrenome" name="sobrenome" placeholder="Sobrenome">
                                </div>
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" id="email" name="email"placeholder="name@example.com">
                            </div>
                        <div class="mb-3">
                            <textarea class="form-control" id="textarea" name="textarea" rows="5"></textarea>
                        </div>
                        <button type="submit" class="btn btn-payapp-corpo">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection