<table class="table">
    <thead>
    <th>Id</th>
			<th>Cod Product</th>
			<th>Product Brand Id</th>
			<th>Descripcion</th>
			<th>Product Id</th>
			<th>Rule Sale Id</th>
			<th>Precio Compra</th>
			<th>Precio Venta</th>
			<th>Precio Promocion</th>
			<th>Cantidad</th>
			<th>Imagen</th>
			<th>Created At</th>
			<th>Updated At</th>
			<th>Id Usuario Cre</th>
			<th>Id Usuario Mod</th>
    <th width="50px">Action</th>
    </thead>
    <tbody>
    @foreach($productDetails as $productDetail)
        <tr>
            <td>{!! $productDetail->id !!}</td>
			<td>{!! $productDetail->cod_product !!}</td>
			<td>{!! $productDetail->product_brand_id !!}</td>
			<td>{!! $productDetail->descripcion !!}</td>
			<td>{!! $productDetail->product_id !!}</td>
			<td>{!! $productDetail->rule_sale_id !!}</td>
			<td>{!! $productDetail->precio_compra !!}</td>
			<td>{!! $productDetail->precio_venta !!}</td>
			<td>{!! $productDetail->precio_promocion !!}</td>
			<td>{!! $productDetail->cantidad !!}</td>
			<td>{!! $productDetail->imagen !!}</td>
			<td>{!! $productDetail->created_at !!}</td>
			<td>{!! $productDetail->updated_at !!}</td>
			<td>{!! $productDetail->id_usuario_cre !!}</td>
			<td>{!! $productDetail->id_usuario_mod !!}</td>
            <td>
                <a href="{!! route('productDetails.edit', [$productDetail->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                <a href="{!! route('productDetails.delete', [$productDetail->id]) !!}" onclick="return confirm('Are you sure wants to delete this ProductDetail?')"><i class="glyphicon glyphicon-remove"></i></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
