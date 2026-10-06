<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products - StoreName</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        brand: {
                            50: '#eef2ff',
                            500: '#6366f1',
                            600: '#4f46e5',
                            700: '#4338ca',
                        }
                    }
                }
            }
        }
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="flex flex-col min-h-screen bg-gray-900 text-gray-100 antialiased selection:bg-indigo-500 selection:text-white">

    <header class="sticky top-0 z-50 bg-gray-800/90 backdrop-blur-md border-b border-gray-700">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-16 flex items-center justify-between gap-4">
            <!-- Brand / Logo -->
            <div class="flex items-center gap-3">
                <button id="mobile-menu-btn" class="md:hidden text-gray-400 hover:text-white focus:outline-none">
                    <i class="fa-solid fa-bars text-xl"></i>
                </button>
                <a href="#" class="flex items-center gap-2 text-xl font-bold tracking-tight text-white">
                    <span class="bg-indigo-600 text-white p-2 rounded-xl flex items-center justify-center w-9 h-9 shadow-lg shadow-indigo-500/30">
                        <i class="fa-solid fa-bag-shopping text-sm"></i>
                    </span>
                    <span>Store<span class="text-indigo-400">Name</span></span>
                </a>
            </div>

            <!-- Desktop Navigation Links -->
            <nav class="hidden md:flex items-center gap-6 text-sm font-medium text-gray-300">
                <a href="#" class="hover:text-indigo-400 transition-colors">Home</a>
                <a href="#" class="text-indigo-400 font-semibold border-b-2 border-indigo-500 pb-1">Products</a>
                <a href="#" class="hover:text-indigo-400 transition-colors">Categories</a>
                <a href="#" class="hover:text-indigo-400 transition-colors">Deals</a>
            </nav>

            <!-- Search Bar (Desktop) -->
            <div class="hidden lg:flex items-center flex-1 max-w-md mx-4">
                <div class="relative w-full">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none text-gray-400">
                        <i class="fa-solid fa-search text-sm"></i>
                    </span>
                    <input type="text" id="desktop-search" placeholder="Search 500+ products..." 
                           class="w-full pl-10 pr-4 py-2 bg-gray-900 border border-gray-700 rounded-xl text-sm text-gray-200 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all">
                </div>
            </div>

            <!-- Right Actions: Cart & Account -->
            <div class="flex items-center gap-4">
                <button id="cart-btn" class="relative p-2.5 text-gray-300 hover:text-white bg-gray-800 hover:bg-gray-700 border border-gray-700 rounded-xl transition-all flex items-center justify-center">
                    <i class="fa-solid fa-cart-shopping"></i>
                    <span id="cart-count" class="absolute -top-1.5 -right-1.5 bg-indigo-600 text-white text-xs font-bold w-5 h-5 rounded-full flex items-center justify-center shadow-md animate-bounce">3</span>
                </button>
                <div class="hidden sm:flex items-center gap-3 pl-2 border-l border-gray-700">
                    <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=100&auto=format&fit=crop&q=80" alt="Avatar" class="w-9 h-9 rounded-full object-cover border-2 border-indigo-500">
                    <div class="text-left">
                        <p class="text-xs font-semibold text-white">Sarah Jenkins</p>
                        <p class="text-[10px] text-gray-400">Pro Member</p>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main class="flex-1 max-w-7xl w-full mx-auto px-4 sm:px-6 lg:px-8 py-8">
        
        <!-- Breadcrumb & Header -->
        <div class="mb-6">
            <nav class="text-xs text-gray-400 flex items-center gap-2 mb-2">
                <a href="#" class="hover:text-indigo-400">Home</a>
                <i class="fa-solid fa-chevron-right text-[10px]"></i>
                <span class="text-gray-200 font-medium">All Products</span>
            </nav>
            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                <div>
                    <h1 class="text-2xl sm:text-3xl font-extrabold text-white tracking-tight">Explore All Products</h1>
                    <p class="text-sm text-gray-400 mt-1">Discover curated premium goods crafted for modern workflows and daily lifestyle.</p>
                </div>
                <!-- Sort Dropdown & Mobile Filter Trigger -->
                <div class="flex items-center gap-3">
                    <button id="mobile-filter-toggle" class="md:hidden flex items-center gap-2 px-4 py-2 bg-gray-800 border border-gray-700 rounded-xl text-sm font-medium text-gray-300 hover:bg-gray-700 transition-colors">
                        <i class="fa-solid fa-filter text-indigo-400"></i> Filters
                    </button>
                    <div class="relative">
                        <select id="sort-select" class="appearance-none bg-gray-800 border border-gray-700 text-gray-200 text-sm rounded-xl px-4 py-2 pr-10 focus:outline-none focus:ring-2 focus:ring-indigo-500 cursor-pointer">
                            <option value="popular">Sort by: Most Popular</option>
                            <option value="newest">Sort by: Newest Arrivals</option>
                            <option value="low-high">Price: Low to High</option>
                            <option value="high-low">Price: High to Low</option>
                        </select>
                        <span class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none text-gray-400">
                            <i class="fa-solid fa-chevron-down text-xs"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content Area: Sidebar Filter + Product Grid -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8 items-start">
            
            <aside id="filter-sidebar" class="fixed inset-y-0 left-0 z-50 w-80 bg-gray-800 p-6 shadow-2xl transform -translate-x-full md:translate-x-0 md:static md:w-auto md:bg-transparent md:p-0 md:shadow-none transition-transform duration-300 overflow-y-auto">
                <div class="flex items-center justify-between md:hidden mb-6 pb-4 border-b border-gray-700">
                    <h2 class="text-lg font-bold text-white flex items-center gap-2">
                        <i class="fa-solid fa-filter text-indigo-500"></i> Filter Products
                    </h2>
                    <button id="close-filter" class="text-gray-400 hover:text-white p-1">
                        <i class="fa-solid fa-xmark text-xl"></i>
                    </button>
                </div>

                <div class="space-y-6 bg-gray-800 md:bg-gray-800/60 p-5 rounded-2xl border border-gray-700/80 backdrop-blur-sm">
                    <!-- Categories -->
                    <div>
                        <h3 class="text-sm font-semibold text-white uppercase tracking-wider mb-3">Categories</h3>
                        <div class="space-y-2 text-sm text-gray-300">
                            <label class="flex items-center gap-3 cursor-pointer hover:text-white group">
                                <input type="checkbox" checked class="w-4 h-4 rounded bg-gray-900 border-gray-700 text-indigo-600 focus:ring-indigo-500">
                                <span class="group-hover:translate-x-0.5 transition-transform">All Categories <span class="text-gray-500 text-xs">(124)</span></span>
                            </label>
                            <label class="flex items-center gap-3 cursor-pointer hover:text-white group">
                                <input type="checkbox" class="w-4 h-4 rounded bg-gray-900 border-gray-700 text-indigo-600 focus:ring-indigo-500">
                                <span class="group-hover:translate-x-0.5 transition-transform">Audio & Wearables <span class="text-gray-500 text-xs">(38)</span></span>
                            </label>
                            <label class="flex items-center gap-3 cursor-pointer hover:text-white group">
                                <input type="checkbox" class="w-4 h-4 rounded bg-gray-900 border-gray-700 text-indigo-600 focus:ring-indigo-500">
                                <span class="group-hover:translate-x-0.5 transition-transform">Workspace & Desk <span class="text-gray-500 text-xs">(24)</span></span>
                            </label>
                            <label class="flex items-center gap-3 cursor-pointer hover:text-white group">
                                <input type="checkbox" class="w-4 h-4 rounded bg-gray-900 border-gray-700 text-indigo-600 focus:ring-indigo-500">
                                <span class="group-hover:translate-x-0.5 transition-transform">Travel & Bags <span class="text-gray-500 text-xs">(19)</span></span>
                            </label>
                            <label class="flex items-center gap-3 cursor-pointer hover:text-white group">
                                <input type="checkbox" class="w-4 h-4 rounded bg-gray-900 border-gray-700 text-indigo-600 focus:ring-indigo-500">
                                <span class="group-hover:translate-x-0.5 transition-transform">Footwear & Apparel <span class="text-gray-500 text-xs">(43)</span></span>
                            </label>
                        </div>
                    </div>

                    <hr class="border-gray-700">

                    <!-- Price Range Slider -->
                    <div>
                        <div class="flex items-center justify-between mb-2">
                            <h3 class="text-sm font-semibold text-white uppercase tracking-wider">Price Range</h3>
                            <span id="price-output" class="text-xs font-bold text-indigo-400 bg-indigo-950/80 px-2.5 py-1 rounded-lg border border-indigo-800/50">$0 - $500</span>
                        </div>
                        <input type="range" min="0" max="500" value="500" id="price-range" class="w-full accent-indigo-500 bg-gray-700 rounded-lg h-2 cursor-pointer">
                        <div class="flex justify-between text-[11px] text-gray-500 mt-1">
                            <span>$0</span>
                            <span>$250</span>
                            <span>$500+</span>
                        </div>
                    </div>

                    <hr class="border-gray-700">

                    <!-- Star Rating Filter -->
                    <div>
                        <h3 class="text-sm font-semibold text-white uppercase tracking-wider mb-3">Rating</h3>
                        <div class="space-y-2 text-sm">
                            <label class="flex items-center gap-3 cursor-pointer text-gray-300 hover:text-white">
                                <input type="radio" name="rating" class="text-indigo-600 focus:ring-indigo-500 bg-gray-900 border-gray-700">
                                <span class="text-amber-400 flex items-center gap-1 text-xs">
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                </span>
                                <span class="text-gray-400 text-xs">& Up</span>
                            </label>
                            <label class="flex items-center gap-3 cursor-pointer text-gray-300 hover:text-white">
                                <input type="radio" name="rating" class="text-indigo-600 focus:ring-indigo-500 bg-gray-900 border-gray-700">
                                <span class="text-amber-400 flex items-center gap-1 text-xs">
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i>
                                </span>
                                <span class="text-gray-400 text-xs">& Up</span>
                            </label>
                        </div>
                    </div>

                    <hr class="border-gray-700">

                    <!-- Stock Status -->
                    <div>
                        <h3 class="text-sm font-semibold text-white uppercase tracking-wider mb-3">Availability</h3>
                        <div class="space-y-2 text-sm text-gray-300">
                            <label class="flex items-center gap-3 cursor-pointer hover:text-white">
                                <input type="checkbox" checked class="w-4 h-4 rounded bg-gray-900 border-gray-700 text-indigo-600 focus:ring-indigo-500">
                                <span>In Stock Only</span>
                            </label>
                            <label class="flex items-center gap-3 cursor-pointer hover:text-white">
                                <input type="checkbox" class="w-4 h-4 rounded bg-gray-900 border-gray-700 text-indigo-600 focus:ring-indigo-500">
                                <span>On Sale / Discount</span>
                            </label>
                        </div>
                    </div>

                    <!-- Filter Action Buttons -->
                    <div class="pt-2 flex gap-3">
                        <button class="flex-1 bg-indigo-600 hover:bg-indigo-500 text-white font-medium py-2 rounded-xl text-sm transition-all shadow-lg shadow-indigo-600/30">Apply Filters</button>
                        <button class="px-4 py-2 bg-gray-700 hover:bg-gray-600 text-gray-300 text-sm rounded-xl transition-all">Reset</button>
                    </div>
                </div>
            </aside>

            <div class="md:col-span-3">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    
                    <!-- Product Card 1 -->
                    <div class="group bg-gray-800 border border-gray-700/80 rounded-2xl overflow-hidden hover:border-indigo-500/50 hover:shadow-2xl hover:shadow-indigo-500/10 transition-all duration-300 flex flex-col">
                        <div class="relative bg-gray-900 aspect-square overflow-hidden">
                            <span class="absolute top-3 left-3 z-10 bg-emerald-500/90 backdrop-blur-md text-white text-[11px] font-bold px-2.5 py-1 rounded-lg uppercase tracking-wider">Best Seller</span>
                            <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=500&auto=format&fit=crop&q=80" alt="Wireless Headphones" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            <button class="absolute bottom-3 right-3 bg-gray-800/80 hover:bg-indigo-600 text-white p-2.5 rounded-xl backdrop-blur-md transition-colors shadow-lg opacity-0 group-hover:opacity-100 duration-300 add-to-cart-btn" data-product="Pro Wireless Headphones" data-price="199.00">
                                <i class="fa-solid fa-cart-plus text-sm"></i>
                            </button>
                        </div>
                        <div class="p-5 flex-1 flex flex-col justify-between">
                            <div>
                                <div class="text-xs text-indigo-400 font-semibold uppercase tracking-wider mb-1">Audio & Wearables</div>
                                <h3 class="text-base font-bold text-white group-hover:text-indigo-300 transition-colors line-clamp-1">Pro Wireless Headphones</h3>
                                <div class="flex items-center gap-1.5 mt-2">
                                    <div class="text-amber-400 text-xs flex">
                                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i>
                                    </div>
                                    <span class="text-xs text-gray-400 font-medium">(142)</span>
                                </div>
                            </div>
                            <div class="mt-4 pt-4 border-t border-gray-700/60 flex items-center justify-between">
                                <div>
                                    <span class="text-lg font-extrabold text-white">$199.00</span>
                                    <span class="text-xs text-gray-500 line-through ml-1.5">$249.00</span>
                                </div>
                                <button class="add-to-cart-btn bg-indigo-600/20 hover:bg-indigo-600 text-indigo-400 hover:text-white px-3.5 py-2 rounded-xl text-xs font-semibold transition-all" data-product="Pro Wireless Headphones" data-price="199.00">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Product Card 2 -->
                    <div class="group bg-gray-800 border border-gray-700/80 rounded-2xl overflow-hidden hover:border-indigo-500/50 hover:shadow-2xl hover:shadow-indigo-500/10 transition-all duration-300 flex flex-col">
                        <div class="relative bg-gray-900 aspect-square overflow-hidden">
                            <span class="absolute top-3 left-3 z-10 bg-indigo-500/90 backdrop-blur-md text-white text-[11px] font-bold px-2.5 py-1 rounded-lg uppercase tracking-wider">New</span>
                            <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=500&auto=format&fit=crop&q=80" alt="Smartwatch" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            <button class="absolute bottom-3 right-3 bg-gray-800/80 hover:bg-indigo-600 text-white p-2.5 rounded-xl backdrop-blur-md transition-colors shadow-lg opacity-0 group-hover:opacity-100 duration-300 add-to-cart-btn" data-product="Apex Smartwatch Series 5" data-price="299.00">
                                <i class="fa-solid fa-cart-plus text-sm"></i>
                            </button>
                        </div>
                        <div class="p-5 flex-1 flex flex-col justify-between">
                            <div>
                                <div class="text-xs text-indigo-400 font-semibold uppercase tracking-wider mb-1">Audio & Wearables</div>
                                <h3 class="text-base font-bold text-white group-hover:text-indigo-300 transition-colors line-clamp-1">Apex Smartwatch Series 5</h3>
                                <div class="flex items-center gap-1.5 mt-2">
                                    <div class="text-amber-400 text-xs flex">
                                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                    </div>
                                    <span class="text-xs text-gray-400 font-medium">(89)</span>
                                </div>
                            </div>
                            <div class="mt-4 pt-4 border-t border-gray-700/60 flex items-center justify-between">
                                <div>
                                    <span class="text-lg font-extrabold text-white">$299.00</span>
                                </div>
                                <button class="add-to-cart-btn bg-indigo-600/20 hover:bg-indigo-600 text-indigo-400 hover:text-white px-3.5 py-2 rounded-xl text-xs font-semibold transition-all" data-product="Apex Smartwatch Series 5" data-price="299.00">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Product Card 3 -->
                    <div class="group bg-gray-800 border border-gray-700/80 rounded-2xl overflow-hidden hover:border-indigo-500/50 hover:shadow-2xl hover:shadow-indigo-500/10 transition-all duration-300 flex flex-col">
                        <div class="relative bg-gray-900 aspect-square overflow-hidden">
                            <span class="absolute top-3 left-3 z-10 bg-amber-500/90 backdrop-blur-md text-white text-[11px] font-bold px-2.5 py-1 rounded-lg uppercase tracking-wider">Sale</span>
                            <img src="https://images.unsplash.com/photo-1553062407-98eeb64c6a62?w=500&auto=format&fit=crop&q=80" alt="Minimalist Backpack" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            <button class="absolute bottom-3 right-3 bg-gray-800/80 hover:bg-indigo-600 text-white p-2.5 rounded-xl backdrop-blur-md transition-colors shadow-lg opacity-0 group-hover:opacity-100 duration-300 add-to-cart-btn" data-product="Urban Minimalist Backpack" data-price="89.00">
                                <i class="fa-solid fa-cart-plus text-sm"></i>
                            </button>
                        </div>
                        <div class="p-5 flex-1 flex flex-col justify-between">
                            <div>
                                <div class="text-xs text-indigo-400 font-semibold uppercase tracking-wider mb-1">Travel & Bags</div>
                                <h3 class="text-base font-bold text-white group-hover:text-indigo-300 transition-colors line-clamp-1">Urban Minimalist Backpack</h3>
                                <div class="flex items-center gap-1.5 mt-2">
                                    <div class="text-amber-400 text-xs flex">
                                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i>
                                    </div>
                                    <span class="text-xs text-gray-400 font-medium">(215)</span>
                                </div>
                            </div>
                            <div class="mt-4 pt-4 border-t border-gray-700/60 flex items-center justify-between">
                                <div>
                                    <span class="text-lg font-extrabold text-white">$89.00</span>
                                    <span class="text-xs text-gray-500 line-through ml-1.5">$120.00</span>
                                </div>
                                <button class="add-to-cart-btn bg-indigo-600/20 hover:bg-indigo-600 text-indigo-400 hover:text-white px-3.5 py-2 rounded-xl text-xs font-semibold transition-all" data-product="Urban Minimalist Backpack" data-price="89.00">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Product Card 4 -->
                    <div class="group bg-gray-800 border border-gray-700/80 rounded-2xl overflow-hidden hover:border-indigo-500/50 hover:shadow-2xl hover:shadow-indigo-500/10 transition-all duration-300 flex flex-col">
                        <div class="relative bg-gray-900 aspect-square overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?w=500&auto=format&fit=crop&q=80" alt="Ergonomic Chair" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            <button class="absolute bottom-3 right-3 bg-gray-800/80 hover:bg-indigo-600 text-white p-2.5 rounded-xl backdrop-blur-md transition-colors shadow-lg opacity-0 group-hover:opacity-100 duration-300 add-to-cart-btn" data-product="Ergonomic Executive Chair" data-price="349.00">
                                <i class="fa-solid fa-cart-plus text-sm"></i>
                            </button>
                        </div>
                        <div class="p-5 flex-1 flex flex-col justify-between">
                            <div>
                                <div class="text-xs text-indigo-400 font-semibold uppercase tracking-wider mb-1">Workspace & Desk</div>
                                <h3 class="text-base font-bold text-white group-hover:text-indigo-300 transition-colors line-clamp-1">Ergonomic Executive Chair</h3>
                                <div class="flex items-center gap-1.5 mt-2">
                                    <div class="text-amber-400 text-xs flex">
                                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                    </div>
                                    <span class="text-xs text-gray-400 font-medium">(64)</span>
                                </div>
                            </div>
                            <div class="mt-4 pt-4 border-t border-gray-700/60 flex items-center justify-between">
                                <div>
                                    <span class="text-lg font-extrabold text-white">$349.00</span>
                                </div>
                                <button class="add-to-cart-btn bg-indigo-600/20 hover:bg-indigo-600 text-indigo-400 hover:text-white px-3.5 py-2 rounded-xl text-xs font-semibold transition-all" data-product="Ergonomic Executive Chair" data-price="349.00">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Product Card 5 -->
                    <div class="group bg-gray-800 border border-gray-700/80 rounded-2xl overflow-hidden hover:border-indigo-500/50 hover:shadow-2xl hover:shadow-indigo-500/10 transition-all duration-300 flex flex-col">
                        <div class="relative bg-gray-900 aspect-square overflow-hidden">
                            <span class="absolute top-3 left-3 z-10 bg-emerald-500/90 backdrop-blur-md text-white text-[11px] font-bold px-2.5 py-1 rounded-lg uppercase tracking-wider">Popular</span>
                            <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=500&auto=format&fit=crop&q=80" alt="Running Shoes" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            <button class="absolute bottom-3 right-3 bg-gray-800/80 hover:bg-indigo-600 text-white p-2.5 rounded-xl backdrop-blur-md transition-colors shadow-lg opacity-0 group-hover:opacity-100 duration-300 add-to-cart-btn" data-product="Velocity Running Shoes" data-price="129.00">
                                <i class="fa-solid fa-cart-plus text-sm"></i>
                            </button>
                        </div>
                        <div class="p-5 flex-1 flex flex-col justify-between">
                            <div>
                                <div class="text-xs text-indigo-400 font-semibold uppercase tracking-wider mb-1">Footwear & Apparel</div>
                                <h3 class="text-base font-bold text-white group-hover:text-indigo-300 transition-colors line-clamp-1">Velocity Running Shoes</h3>
                                <div class="flex items-center gap-1.5 mt-2">
                                    <div class="text-amber-400 text-xs flex">
                                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i>
                                    </div>
                                    <span class="text-xs text-gray-400 font-medium">(310)</span>
                                </div>
                            </div>
                            <div class="mt-4 pt-4 border-t border-gray-700/60 flex items-center justify-between">
                                <div>
                                    <span class="text-lg font-extrabold text-white">$129.00</span>
                                </div>
                                <button class="add-to-cart-btn bg-indigo-600/20 hover:bg-indigo-600 text-indigo-400 hover:text-white px-3.5 py-2 rounded-xl text-xs font-semibold transition-all" data-product="Velocity Running Shoes" data-price="129.00">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Product Card 6 -->
                    <div class="group bg-gray-800 border border-gray-700/80 rounded-2xl overflow-hidden hover:border-indigo-500/50 hover:shadow-2xl hover:shadow-indigo-500/10 transition-all duration-300 flex flex-col">
                        <div class="relative bg-gray-900 aspect-square overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1526170375885-4d8ecf77b99f?w=500&auto=format&fit=crop&q=80" alt="Vintage Camera" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            <button class="absolute bottom-3 right-3 bg-gray-800/80 hover:bg-indigo-600 text-white p-2.5 rounded-xl backdrop-blur-md transition-colors shadow-lg opacity-0 group-hover:opacity-100 duration-300 add-to-cart-btn" data-product="Retro Mirrorless Camera" data-price="450.00">
                                <i class="fa-solid fa-cart-plus text-sm"></i>
                            </button>
                        </div>
                        <div class="p-5 flex-1 flex flex-col justify-between">
                            <div>
                                <div class="text-xs text-indigo-400 font-semibold uppercase tracking-wider mb-1">Electronics</div>
                                <h3 class="text-base font-bold text-white group-hover:text-indigo-300 transition-colors line-clamp-1">Retro Mirrorless Camera</h3>
                                <div class="flex items-center gap-1.5 mt-2">
                                    <div class="text-amber-400 text-xs flex">
                                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                    </div>
                                    <span class="text-xs text-gray-400 font-medium">(53)</span>
                                </div>
                            </div>
                            <div class="mt-4 pt-4 border-t border-gray-700/60 flex items-center justify-between">
                                <div>
                                    <span class="text-lg font-extrabold text-white">$450.00</span>
                                    <span class="text-xs text-gray-500 line-through ml-1.5">$499.00</span>
                                </div>
                                <button class="add-to-cart-btn bg-indigo-600/20 hover:bg-indigo-600 text-indigo-400 hover:text-white px-3.5 py-2 rounded-xl text-xs font-semibold transition-all" data-product="Retro Mirrorless Camera" data-price="450.00">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="mt-10 flex items-center justify-between border-t border-gray-800 pt-6">
                    <p class="text-xs text-gray-400">Showing <span class="font-semibold text-white">1</span> to <span class="font-semibold text-white">6</span> of <span class="font-semibold text-white">24</span> results</p>
                    <div class="flex items-center gap-1">
                        <button class="px-3 py-1.5 bg-gray-800 border border-gray-700 text-gray-400 rounded-lg text-xs font-medium cursor-not-allowed" disabled>Prev</button>
                        <button class="px-3 py-1.5 bg-indigo-600 text-white rounded-lg text-xs font-semibold shadow-md shadow-indigo-600/20">1</button>
                        <button class="px-3 py-1.5 bg-gray-800 border border-gray-700 hover:bg-gray-700 text-gray-300 rounded-lg text-xs font-semibold transition-colors">2</button>
                        <button class="px-3 py-1.5 bg-gray-800 border border-gray-700 hover:bg-gray-700 text-gray-300 rounded-lg text-xs font-semibold transition-colors">3</button>
                        <button class="px-3 py-1.5 bg-gray-800 border border-gray-700 hover:bg-gray-700 text-gray-300 rounded-lg text-xs font-semibold transition-colors">Next</button>
                    </div>
                </div>
            </div>

        </div>
    </main>

    <footer class="bg-gray-800 border-t border-gray-700 mt-16 py-8 text-sm text-gray-400">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col sm:flex-row items-center justify-between gap-4">
            <p>&copy; 2026 StoreName Inc. All rights reserved. Laravel Blade UI Template.</p>
            <div class="flex gap-6">
                <a href="#" class="hover:text-indigo-400 transition-colors">Privacy Policy</a>
                <a href="#" class="hover:text-indigo-400 transition-colors">Terms of Service</a>
                <a href="#" class="hover:text-indigo-400 transition-colors">Support</a>
            </div>
        </div>
    </footer>

    <div id="toast-container" class="fixed bottom-5 right-5 z-50 flex flex-col gap-2 pointer-events-none"></div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Price range slider live update
            const priceRange = document.getElementById('price-range');
            const priceOutput = document.getElementById('price-output');
            if(priceRange && priceOutput) {
                priceRange.addEventListener('input', (e) => {
                    priceOutput.textContent = `$0 - $${e.target.value}`;
                });
            }

            // Mobile filter sidebar toggle
            const mobileMenuBtn = document.getElementById('mobile-menu-btn');
            const mobileFilterToggle = document.getElementById('mobile-filter-toggle');
            const filterSidebar = document.getElementById('filter-sidebar');
            const closeFilter = document.getElementById('close-filter');

            function toggleSidebar() {
                filterSidebar.classList.toggle('-translate-x-full');
            }

            if(mobileMenuBtn) mobileMenuBtn.addEventListener('click', toggleSidebar);
            if(mobileFilterToggle) mobileFilterToggle.addEventListener('click', toggleSidebar);
            if(closeFilter) closeFilter.addEventListener('click', toggleSidebar);

            // Toast notification & cart counter simulation
            let cartCountEl = document.getElementById('cart-count');
            let cartCount = 3;
            const toastContainer = document.getElementById('toast-container');

            function showToast(productName, price) {
                cartCount++;
                cartCountEl.textContent = cartCount;
                cartCountEl.classList.add('scale-125');
                setTimeout(() => cartCountEl.classList.remove('scale-125'), 200);

                const toast = document.createElement('div');
                toast.className = 'pointer-events-auto bg-gray-800 border border-indigo-500/40 text-white px-4 py-3 rounded-2xl shadow-2xl shadow-indigo-500/20 flex items-center gap-3 transform translate-y-4 opacity-0 transition-all duration-300';
                toast.innerHTML = `
                    <div class="w-8 h-8 rounded-xl bg-indigo-600/20 text-indigo-400 flex items-center justify-center shrink-0">
                        <i class="fa-solid fa-check text-sm"></i>
                    </div>
                    <div class="text-xs">
                        <p class="font-bold">Added to cart!</p>
                        <p class="text-gray-400 truncate max-w-[180px]">${productName} - $${price}</p>
                    </div>
                `;
                toastContainer.appendChild(toast);

                requestAnimationFrame(() => {
                    toast.classList.remove('translate-y-4', 'opacity-0');
                });

                setTimeout(() => {
                    toast.classList.add('translate-y-4', 'opacity-0');
                    setTimeout(() => toast.remove(), 300);
                }, 3500);
            }

            document.querySelectorAll('.add-to-cart-btn').forEach(btn => {
                btn.addEventListener('click', (e) => {
                    e.preventDefault();
                    const name = btn.getAttribute('data-product');
                    const price = btn.getAttribute('data-price');
                    showToast(name, price);
                });
            });
        });
    </script>
</body>
</html>