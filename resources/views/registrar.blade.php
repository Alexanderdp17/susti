<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Producto nuevo') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('registrar') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">DescripcionPrenda</label>
                                <input type="text" class="form-control" name="DescripcionPrenda" autocomplete="off">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Talla</label>
                                <input type="text" class="form-control" name="talla" autocomplete="off">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Precio</label>
                                <input type="text" class="form-control" name="precio" autocomplete="off">
                            </div>
                            <button type="submit" class="btn btn-success">Registrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>

