@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header" style="background-color: #6b4f3a; color: white;">
                <h4 class="mb-0">Registrar Producto</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('productos.store') }}">
                    @csrf
                    
                    <div class="mb-3">
                        <label class="form-label">Nombre del producto</label>
                        <input type="text" name="nombre" class="form-control" required>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Cantidad (Stock)</label>
                        <input type="number" name="cantidad" class="form-control" required>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Precio</label>
                        <input type="number" step="0.01" name="precio" class="form-control" required>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Tipo de material</label>
                        <select name="tipo_material" class="form-control">
                            <option value="Vidrio">Vidrio</option>
                            <option value="Aluminio">Aluminio</option>
                            <option value="Accesorio">Accesorio</option>
                        </select>
                    </div>
                    
                    <button type="submit" class="btn" style="background-color: #6b4f3a; color: white;">Guardar</button>
                    <a href="{{ route('productos.index') }}" class="btn" style="background-color: #b59a7a; color: white;">Cancelar</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection