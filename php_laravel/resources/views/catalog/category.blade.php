<!-- stores.blade.php -->

@include('layouts.header')

<!-- {{ $data }} -->

			<div class="store-header">
					<h1>Fullmoon Bubble Tea Store</h1>
			</div>
<<<<<<< HEAD
			<div class="menu-container main">
=======
			<div class="menu-container">
>>>>>>> 8d36a80... menu page done
				@foreach ($data as $cat)
					<ul>
						<li class="menu-category">
							<h1>Select Your {{ $cat->name }}</h1>
							<p>Example Descriptions are shown here: <br>
								{{$cat->description}}
							</p>
						</li>
						@foreach ($cat->products as $p)
							<li class="menu-product">
<<<<<<< HEAD
								<a href="{{Request::url() . '/' . $cat->id . '/product/' . $p->id }}"><div class="menu-product-div">
									<img class="menu-product-image" src="{{ asset('images/product-images/'. $p->image)}}"/>
									<h2> {{ $p->name }} </h2>
									<div class="menu-price"> ${{$p->price_t1}}</div>
								</div></a>
=======
								<div class="menu-product-div">
									<img class="menu-product-image" src="{{ asset('images/product-images/'. $p->image)}}"/>
									<h2> {{ $p->name }} </h2>
									<div class="menu-price"> ${{$p->price_t1}}</div>
								</div>
>>>>>>> 8d36a80... menu page done
							</li>
						@endforeach
					</ul>
				@endforeach
					
			</div>

@include('layouts.footer')