@csrf<!-- token de proteccion -->
<label for="talla">Talla</label>
<input name="talla" id="talla" type="number" class="form-control" value="{{ old('talla', $calzado->talla) }}">

<label for="marca">Marca</label>
<input name="marca" id="marca" type="text" class="form-control" value="{{ old('marca', $calzado->marca) }}">

<label for="precio">Precio</label>
<input name="precio" id="precio" type="number" class="form-control" value="{{ old('precio', $calzado->precio) }}">

<label for="color">Color</label>
<input name="color" id="color" type="text" class="form-control" value="{{ old('color', $calzado->color) }}">

