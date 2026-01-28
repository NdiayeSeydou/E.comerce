@extends('layouts.app')
@section('title', 'Listes des boutiques')
@section('suite')

	<section class="my-lg-14 my-8">
			<div class="container">
				<div class="grid grid-cols-12 items-center mb-8">
					<!-- store -->
					<div class="md:col-span-8 col-span-12">
						<div class="flex">
							<div class="mt-1">
								<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"
									fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
									stroke-linejoin="round"
									class="icon icon-tabler icons-tabler-outline icon-tabler-building-store">
									<path stroke="none" d="M0 0h24v24H0z" fill="none" />
									<path d="M3 21l18 0" />
									<path
										d="M3 7v1a3 3 0 0 0 6 0v-1m0 1a3 3 0 0 0 6 0v-1m0 1a3 3 0 0 0 6 0v-1h-18l2 -4h14l2 4" />
									<path d="M5 21l0 -10.15" />
									<path d="M19 21l0 -10.15" />
									<path d="M9 21v-4a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v4" />
								</svg>
							</div>
							<div class="ms-3">
								<h3 class="items-center flex text-md lg:text-lg gap-2">Les meilleures boutiques</h3>
								<p>Réchercher un produit dans une boutique </p>
							</div>
							<div></div>
						</div>
					</div>
					<!-- all store -->
					<div class="md:col-span-4 text-right col-span-12 hidden md:block">
						<a href="#" class="text-green-600">
							Tous voir
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
								fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
								stroke-linejoin="round"
								class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-right inline-block">
								<path stroke="none" d="M0 0h24v24H0z" fill="none" />
								<path d="M9 6l6 6l-6 6" />
							</svg>
						</a>
					</div>
				</div>
				<!-- row -->
				<div class="grid md:grid-cols-3 gap-6">
					<!-- col -->

					<!-- card -->
					<div class="card p-6 card-product">
						<div>
							<!-- img -->
							<img src="{{ asset('fresh/assets/images/stores-logo/stores-logo-1.html') }}" alt=""
								class="rounded-full h-16 w-16" />
						</div>
						<div class="mt-4">
							<!-- content -->
							<h2 class="mb-1 text-md"><a href="#!" class="text-inherit">E-Grocery Super Market</a></h2>
							<div class="text-sm">
								<span class="mr-2">Organic</span>
								<span class="mr-2">Groceries</span>
								<span>Butcher Shop</span>
							</div>
							<div class="py-3">
								<ul class="text-sm">
									<li>Delivery</li>
									<li>Pickup available</li>
								</ul>
							</div>
							<div class="flex gap-2">
								<!-- badge -->
								<div
									class="inline-block p-2 text-sm align-baseline leading-none rounded bg-gray-200 text-gray-800 font-semibold border border-gray-300">
									7.5 mi away</div>
								<!-- badge -->
								<div
									class="inline-block p-2 text-sm align-baseline leading-none rounded bg-gray-200 text-gray-800 font-semibold border border-gray-300">
									In-store prices</div>
							</div>
						</div>
					</div>

					<!-- card -->
					<div class="card p-6 card-product">
						<div>
							<!-- img -->
							<img src="assets/images/stores-logo/stores-logo-2.html" alt=""
								class="rounded-full h-16 w-16" />
						</div>
						<div class="mt-4">
							<!-- content -->
							<h2 class="mb-1 text-md"><a href="#!" class="text-inherit">DealShare Mart</a></h2>
							<div class="text-sm text-gray-500">
								<span class="me-2">Alcohol</span>
								<span class="me-2">Groceries</span>
							</div>
							<div class="py-3">
								<ul class="text-sm">
									<li>Delivery</li>
									<li>Pickup available</li>
								</ul>
							</div>
							<div>
								<!-- badge -->
								<div
									class="inline-block p-2 text-sm align-baseline leading-none rounded bg-gray-200 text-gray-800 font-semibold border border-gray-300">
									7.2 mi away</div>
							</div>
						</div>
					</div>

					<!-- card -->
					<div class="card p-6 card-product">
						<div>
							<!-- img -->
							<img src="assets/images/stores-logo/stores-logo-3.html" alt=""
								class="rounded-full h-16 w-16" />
						</div>
						<div class="mt-4">
							<!-- content -->
							<h2 class="mb-1 text-md"><a href="#!" class="text-inherit">DMart</a></h2>
							<div class="text-sm text-gray-500">
								<span class="me-2">Groceries</span>
								<span class="me-2">Bakery</span>
								<span>Deli</span>
							</div>
							<div class="py-3">
								<ul class="text-sm">
									<li><span class="text-green-600">Delivery by 10:30pm</span></li>
									<li>Pickup available</li>
								</ul>
							</div>
							<div>
								<!-- badge -->
								<div
									class="inline-block p-2 text-sm align-baseline leading-none rounded bg-gray-200 text-gray-800 font-semibold border border-gray-300">
									9.3 mi away</div>
							</div>
						</div>
					</div>
				</div>

                <div class="mt-8">
                    </div>

                    <div class="grid md:grid-cols-3 gap-6">
					<!-- col -->

					<!-- card -->
					<div class="card p-6 card-product">
						<div>
							<!-- img -->
							<img src="{{ asset('fresh/assets/images/stores-logo/stores-logo-1.html') }}" alt=""
								class="rounded-full h-16 w-16" />
						</div>
						<div class="mt-4">
							<!-- content -->
							<h2 class="mb-1 text-md"><a href="#!" class="text-inherit">E-Grocery Super Market</a></h2>
							<div class="text-sm">
								<span class="mr-2">Organic</span>
								<span class="mr-2">Groceries</span>
								<span>Butcher Shop</span>
							</div>
							<div class="py-3">
								<ul class="text-sm">
									<li>Delivery</li>
									<li>Pickup available</li>
								</ul>
							</div>
							<div class="flex gap-2">
								<!-- badge -->
								<div
									class="inline-block p-2 text-sm align-baseline leading-none rounded bg-gray-200 text-gray-800 font-semibold border border-gray-300">
									7.5 mi away</div>
								<!-- badge -->
								<div
									class="inline-block p-2 text-sm align-baseline leading-none rounded bg-gray-200 text-gray-800 font-semibold border border-gray-300">
									In-store prices</div>
							</div>
						</div>
					</div>

					<!-- card -->
					<div class="card p-6 card-product">
						<div>
							<!-- img -->
							<img src="assets/images/stores-logo/stores-logo-2.html" alt=""
								class="rounded-full h-16 w-16" />
						</div>
						<div class="mt-4">
							<!-- content -->
							<h2 class="mb-1 text-md"><a href="#!" class="text-inherit">DealShare Mart</a></h2>
							<div class="text-sm text-gray-500">
								<span class="me-2">Alcohol</span>
								<span class="me-2">Groceries</span>
							</div>
							<div class="py-3">
								<ul class="text-sm">
									<li>Delivery</li>
									<li>Pickup available</li>
								</ul>
							</div>
							<div>
								<!-- badge -->
								<div
									class="inline-block p-2 text-sm align-baseline leading-none rounded bg-gray-200 text-gray-800 font-semibold border border-gray-300">
									7.2 mi away</div>
							</div>
						</div>
					</div>

					<!-- card -->
					<div class="card p-6 card-product">
						<div>
							<!-- img -->
							<img src="assets/images/stores-logo/stores-logo-3.html" alt=""
								class="rounded-full h-16 w-16" />
						</div>
						<div class="mt-4">
							<!-- content -->
							<h2 class="mb-1 text-md"><a href="#!" class="text-inherit">DMart</a></h2>
							<div class="text-sm text-gray-500">
								<span class="me-2">Groceries</span>
								<span class="me-2">Bakery</span>
								<span>Deli</span>
							</div>
							<div class="py-3">
								<ul class="text-sm">
									<li><span class="text-green-600">Delivery by 10:30pm</span></li>
									<li>Pickup available</li>
								</ul>
							</div>
							<div>
								<!-- badge -->
								<div
									class="inline-block p-2 text-sm align-baseline leading-none rounded bg-gray-200 text-gray-800 font-semibold border border-gray-300">
									9.3 mi away</div>
							</div>
						</div>
					</div>
				</div>


                      <div class="mt-8">
                    </div>

                    <div class="grid md:grid-cols-3 gap-6">
					<!-- col -->

					<!-- card -->
					<div class="card p-6 card-product">
						<div>
							<!-- img -->
							<img src="{{ asset('fresh/assets/images/stores-logo/stores-logo-1.html') }}" alt=""
								class="rounded-full h-16 w-16" />
						</div>
						<div class="mt-4">
							<!-- content -->
							<h2 class="mb-1 text-md"><a href="#!" class="text-inherit">E-Grocery Super Market</a></h2>
							<div class="text-sm">
								<span class="mr-2">Organic</span>
								<span class="mr-2">Groceries</span>
								<span>Butcher Shop</span>
							</div>
							<div class="py-3">
								<ul class="text-sm">
									<li>Delivery</li>
									<li>Pickup available</li>
								</ul>
							</div>
							<div class="flex gap-2">
								<!-- badge -->
								<div
									class="inline-block p-2 text-sm align-baseline leading-none rounded bg-gray-200 text-gray-800 font-semibold border border-gray-300">
									7.5 mi away</div>
								<!-- badge -->
								<div
									class="inline-block p-2 text-sm align-baseline leading-none rounded bg-gray-200 text-gray-800 font-semibold border border-gray-300">
									In-store prices</div>
							</div>
						</div>
					</div>

					<!-- card -->
					<div class="card p-6 card-product">
						<div>
							<!-- img -->
							<img src="assets/images/stores-logo/stores-logo-2.html" alt=""
								class="rounded-full h-16 w-16" />
						</div>
						<div class="mt-4">
							<!-- content -->
							<h2 class="mb-1 text-md"><a href="#!" class="text-inherit">DealShare Mart</a></h2>
							<div class="text-sm text-gray-500">
								<span class="me-2">Alcohol</span>
								<span class="me-2">Groceries</span>
							</div>
							<div class="py-3">
								<ul class="text-sm">
									<li>Delivery</li>
									<li>Pickup available</li>
								</ul>
							</div>
							<div>
								<!-- badge -->
								<div
									class="inline-block p-2 text-sm align-baseline leading-none rounded bg-gray-200 text-gray-800 font-semibold border border-gray-300">
									7.2 mi away</div>
							</div>
						</div>
					</div>

					<!-- card -->
					<div class="card p-6 card-product">
						<div>
							<!-- img -->
							<img src="assets/images/stores-logo/stores-logo-3.html" alt=""
								class="rounded-full h-16 w-16" />
						</div>
						<div class="mt-4">
							<!-- content -->
							<h2 class="mb-1 text-md"><a href="#!" class="text-inherit">DMart</a></h2>
							<div class="text-sm text-gray-500">
								<span class="me-2">Groceries</span>
								<span class="me-2">Bakery</span>
								<span>Deli</span>
							</div>
							<div class="py-3">
								<ul class="text-sm">
									<li><span class="text-green-600">Delivery by 10:30pm</span></li>
									<li>Pickup available</li>
								</ul>
							</div>
							<div>
								<!-- badge -->
								<div
									class="inline-block p-2 text-sm align-baseline leading-none rounded bg-gray-200 text-gray-800 font-semibold border border-gray-300">
									9.3 mi away</div>
							</div>
						</div>
					</div>
				</div>


                
			</div>
		</section>



@endsection