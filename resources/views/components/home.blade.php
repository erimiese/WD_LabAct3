@extends('Components.Layout')

@section('title', 'Home')

@section('content')
<header class="hero-section">
    <div class="content-wrapper">
        <h1>Delicious <span class="highlight">Dishes</span> for Food Lovers</h1>
        <p>A food blog with hundreds of quick and easy dinner recipes.</p>
        <a href="#" class="explore-btn">Explore Recipes</a>
    </div>
    <div class="hero-images">
        <div class="hero-image-wrapper">
            <img src="{{ asset('images/food1.jpeg') }}" alt="Food Dish 1" class="hero-image">
        </div>
        <div class="hero-image-wrapper">
            <img src="{{ asset('images/food2.jpeg') }}" alt="Food Dish 2" class="hero-image">
        </div>
        <div class="hero-image-wrapper">
            <img src="{{ asset('images/food3.jpeg') }}" alt="Food Dish 3" class="hero-image">
        </div>
    </div>
</header>

        
    <!-- Search Section -->
    <section class="search-section">
        <input type="text" placeholder="Search for recipes here">
        <button>Search</button>
    </section>

    <!-- Categories Section -->
    <section class="categories">
        <h2>Categories</h2>
        <div class="category-list">
            <!-- Add category items -->
            <div class="category-item">
                <img src="{{ asset('images/seafood.jpg') }}" alt="Seafood">
                <p>Seafood</p>
            </div>
            <div class="category-item">
                <img src="{{ asset('images/soup.jpg') }}" alt="Soup">
                <p>Soup</p>
            </div>
            <!-- Continue with other categories -->
        </div>
    </section>

    <!-- Latest Recipes Section -->
    <section class="latest-recipes">
        <h2>Latest Recipes</h2>
        <div class="recipe-grid">
            <div class="recipe-card">
                <img src="{{ asset('images/recipe1.jpg') }}" alt="Recipe 1">
                <h3>Lactose-Free Homemade Cheese</h3>
            </div>
            <div class="recipe-card">
                <img src="{{ asset('images/recipe2.jpg') }}" alt="Recipe 2">
                <h3>Tiny Apple Pies with Cinnamon</h3>
            </div>
            <!-- Continue with other recipes -->
        </div>
        <div class="pagination">
            <span>1</span>
            <span>2</span>
            <span>3</span>
        </div>
    </section>

    <!-- Trending Recipes Section -->
    <section class="trending-recipes">
        <h2>Trending Recipes</h2>
        <ul>
            <li>Gluten-Free Almond Cake with Berries</li>
            <li>Enjoy My Favorite Molten Chocolate Cake</li>
            <!-- Add other trending recipes -->
        </ul>
    </section>
@endsection
