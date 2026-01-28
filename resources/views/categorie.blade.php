@extends('layouts.app')
@section('title', 'Nos catégories')
@section('suite')


	<section class="my-6">
			<!-- category -->
			<div class="container">
				<!-- row -->
				<div class="grid grid-cols-1">
					<div class="mb-6">
						<!-- heading -->
						<h3 class="text-lg">Les differentes catégories</h3>
					</div>
				</div>
				<!-- row -->
				<div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4 lg:gap-6">
					<!-- col -->
					<div>
						<a href="shop-grid.html" class="text-decoration-none text-inherit">
							<!-- card -->
							<div class="card card-product">
								<div class="card-body text-center py-8">
									<div class="flex justify-center">
										<!-- img -->
										<img src="{{ asset('fresh/assets/images/category/category-dairy-bread-eggs.jpg') }}"
											alt="Grocery Ecommerce Template" class="mb-3" />
									</div>
									<!-- text -->
									<div class="truncate">Dairy, Bread & Eggs</div>
								</div>
							</div>
						</a>
					</div>
					<!-- col -->
					<div>
						<a href="shop-grid.html" class="text-decoration-none text-inherit">
							<!-- card -->
							<div class="card card-product">
								<div class="card-body text-center py-8">
									<div class="flex justify-center">
										<!-- img -->
										<img src="{{ asset('fresh/assets/images/category/category-snack-munchies.jpg') }}"
											alt="Grocery Ecommerce Template" class="mb-3" />
									</div>
									<!-- text -->
									<div class="truncate">Snack & Munchies</div>
								</div>
							</div>
						</a>
					</div>
					<!-- col -->
					<div>
						<a href="shop-grid.html" class="text-decoration-none text-inherit">
							<!-- card -->
							<div class="card card-product">
								<div class="card-body text-center py-8">
									<div class="flex justify-center">
										<!-- img -->
										<img src="{{ asset('fresh/assets/images/category/category-bakery-biscuits.jpg') }}"
											alt="Grocery Ecommerce Template" class="mb-3" />
									</div>
									<!-- text -->
									<div class="truncate">Bakery & Biscuits</div>
								</div>
							</div>
						</a>
					</div>
					<!-- col -->
					<div>
						<a href="shop-grid.html" class="text-decoration-none text-inherit">
							<!-- card -->
							<div class="card card-product">
								<div class="card-body text-center py-8">
									<div class="flex justify-center">
										<!-- img -->
										<img src="{{ asset('fresh/assets/images/category/category-instant-food.jpg') }}"
											alt="Grocery Ecommerce Template" class="mb-3" />
									</div>
									<div class="truncate">Instant Food</div>
								</div>
							</div>
						</a>
					</div>
					<!-- col -->
					<div>
						<a href="shop-grid.html" class="text-decoration-none text-inherit">
							<!-- card -->
							<div class="card card-product">
								<div class="card-body text-center py-8">
									<div class="flex justify-center">
										<!-- img -->
										<img src="{{ asset('fresh/assets/images/category/category-tea-coffee-drinks.jpg') }}"
											alt="Grocery Ecommerce Template" class="mb-3" />
									</div>
									<div class="truncate">Tea, Coffee & Drinks</div>
								</div>
							</div>
						</a>
					</div>
					<div>
						<a href="shop-grid.html" class="text-decoration-none text-inherit">
							<div class="card card-product">
								<div class="card-body text-center py-8">
									<div class="flex justify-center">
										<img src="{{ asset('fresh/assets/images/category/category-fruits-vegetables.jpg') }}"
											alt="Grocery Ecommerce Template" class="mb-3" />
									</div>
									<div class="truncate">Fruits & Vegetables</div>
								</div>
							</div>
						</a>
					</div>
					<!-- col -->
					<div>
						<a href="shop-grid.html" class="text-decoration-none text-inherit">
							<!-- card -->
							<div class="card card-product">
								<div class="card-body text-center py-8">
									<div class="flex justify-center">
										<!-- img -->
										<img src="{{ asset('fresh/assets/images/category/category-cold-drinks-juices.jpg') }}"
											alt="Grocery Ecommerce Template" class="mb-3" />
									</div>
									<!-- text -->
									<div class="truncate">Cold Drinks & Juices</div>
								</div>
							</div>
						</a>
					</div>
					<!-- col -->
					<div>
						<a href="shop-grid.html" class="text-decoration-none text-inherit">
							<!-- card -->
							<div class="card card-product">
								<div class="card-body text-center py-8">
									<div class="flex justify-center">
										<!-- img -->
										<img src="{{ asset('fresh/assets/images/category/category-chicken-meat-fish.jpg') }}"
											alt="Grocery Ecommerce Template" class="mb-3" />
									</div>
									<div class="truncate">Chicken, Meat & Fish</div>
								</div>
							</div>
						</a>
					</div>
					<!-- col -->
					<div>
						<a href="shop-grid.html" class="text-decoration-none text-inherit">
							<!-- card -->
							<div class="card card-product">
								<div class="card-body text-center py-8">
									<div class="flex justify-center">
										<!-- img -->
										<img src="{{ asset('fresh/assets/images/category/category-baby-care.jpg') }}"
											alt="Grocery Ecommerce Template" class="mb-3" />
									</div>
									<!-- text -->
									<div class="truncate">Baby Care</div>
								</div>
							</div>
						</a>
					</div>
					<!-- text -->
					<div>
						<a href="shop-grid.html" class="text-decoration-none text-inherit">
							<!-- card -->
							<div class="card card-product">
								<div class="card-body text-center py-8">
									<div class="flex justify-center">
										<!-- img -->
										<img src="{{ asset('fresh/assets/images/category/category-cleaning-essentials.jpg') }}"
											alt="Grocery Ecommerce Template" class="mb-3" />
									</div>
									<!-- text -->
									<div class="truncate">Cleaning Essentials</div>
								</div>
							</div>
						</a>
					</div>
					<!-- col -->
					<div>
						<a href="shop-grid.html" class="text-decoration-none text-inherit">
							<!-- card -->
							<div class="card card-product">
								<div class="card-body text-center py-8">
									<div class="flex justify-center">
										<!-- img -->
										<img src="{{ asset('fresh/assets/images/category/category-pet-care.jpg') }}"
											alt="Grocery Ecommerce Template" class="mb-3" />
									</div>
									<!-- text -->
									<div class="truncate">Pet Care</div>
								</div>
							</div>
						</a>
					</div>
					<!-- col -->
					<div>
						<a href="shop-grid.html" class="text-decoration-none text-inherit">
							<!-- card -->
							<div class="card card-product">
								<div class="card-body text-center py-8">
									<div class="flex justify-center">
										<!-- img -->
										<img src="{{ asset('fresh/assets/images/category/category-atta-rice-dal.jpg') }}"
											alt="Grocery Ecommerce Template" class="mb-3" />
									</div>
									<!-- text -->
									<div class="truncate">Atta, Rice & Dal</div>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</section>

@endsection
