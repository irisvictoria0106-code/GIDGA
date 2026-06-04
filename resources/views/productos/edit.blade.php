@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-warning">
                <h4 class="mb-0">Editar Producto</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('productos.update', $producto->id) }}">
                    @csrf
                    @method('PUT')
                    
                    <div class="mb-3">
                        <label class="form-label">Nombre del producto</label>
                        <input type="text" name="nombre" value="{{ $producto->nombre }}" class="form-control" required>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Cantidad (Stock)</label>
                        <input type="number" name="cantidad" value="{{ $producto->stock }}" class="form-control" required>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Precio</label>
                        <input type="number" step="0.01" name="precio" value="{{ $producto->precio_venta }}" class="form-control" required>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Tipo de material</label>
                        <select name="tipo_material" class="form-control">
                            <option value="Vidrio" {{ $producto->tipo_material == 'Vidrio' ? 'selected' : '' }}>Vidrio</option>
                            <option value="Aluminio" {{ $producto->tipo_material == 'Aluminio' ? 'selected' : '' }}>Aluminio</option>
                            <option value="Accesorio" {{ $producto->tipo_material == 'Accesorio' ? 'selected' : '' }}>Accesorio</option>
                        </select>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                    <a href="{{ route('productos.index') }}" class="btn btn-secondary">Cancelar</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection