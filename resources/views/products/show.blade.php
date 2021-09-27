@extends('layouts.app')

@section('content')

	<div class="products">
			<div class="product-row no-link" href="{{ route('products.show', $product) }}">
				<img src="{{ url($product->image ?? 'img/placeholder.jpg') }}" alt="{{ $product->title }}" class="rounded">
				<div class="product-body">
					<form action="{{ route('products.order', $product) }}" method="POST" data-controller="size">
                        <div class="price-div">
                            <h5 class="product-title"><span>{{ $product->title }}</span></h5>
                            <h5 class="product-title"><em>&euro;{{ $product->getPriceAttribute($product->price) }}</em></h5>
                        </div>
						@unless(empty($product->description))
							<p>{{ $product->description }}</p>
						@endunless
                        @if ($product->discount > 0)
                            <span class="product-discount">Nu <strong>{{ $product->discount }}%</strong> kosting! Orginele prijs: €{{ $product->price }}</span>
                        @endif
						@if(count($product->types))
							<select name="type" id="type" class="form-control" data-action="change->size#update" data-target="size.type">
								@foreach($product->types as $type)
									<option value="{{ $type->id }}">{{ $type->title }}</option>
								@endforeach
							</select>
							<div data-target="size.sizes">
								@foreach($product->types as $type)
									<select class="form-control" data-type="{{ $type->id }}" style="display: none;">
										@foreach($type->sizes as $size)
											<option value="{{ $size->id }}">{{ $size->title }}</option>
										@endforeach
									</select>
								@endforeach
							</div>
							<button type="submit" class="btn btn-success form-control">Bestellen &gt;</button>
							{{ csrf_field() }}
						@endif
					</form>
				</div>
			</div>
	</div>

@endsection
