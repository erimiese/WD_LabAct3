@extends('Components.Layout')

@section('title', 'Home')

@section('content')
<header class="hero-section">
    <div class="content-wrapper">
        <h1>Delicious <span class="highlight">Dishes</span> for Food Lovers</h1>
        <p>A food page with hundreds of quick and easy dinner recipes.</p>
        <a href="#" class="explore-btn">Explore Recipes</a>
    </div>
    <div class="hero-images">
        <div class="hero-image-wrapper">
            <img src="{{ asset('images/food1.jpeg') }}" alt="Food Dish 1" class="hero-image">s
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
    <div class="search-section">
    <form action="#" method="GET" class="search-form">
        <div class="search-wrapper">
            <input type="text" placeholder="Search for recipes here..." class="search-input">
        </div>
    </form>
    </div>


         <!-- Categories Section -->
    <section class="categories-section">
        <div class="explore-categories">
         <h2>Explore Categories</h2>
        </div>
        <table class="categories-table">
            <tbody>
                <tr>
                    <td class="category-cell">
                        <a href="#"><img src="{{ asset('images/food1.jpeg') }}" alt="Category 1" class="category-image"></a>
                        <p><a href="#">Appetizers</a></p>
                    </td>
                    <td class="category-cell">
                        <a href="#"><img src="{{ asset('images/food1.jpeg') }}" alt="Category 2" class="category-image"></a>
                        <p><a href="#">Main Dishes</a></p>
                    </td>
                    <td class="category-cell">
                        <a href="#"><img src="{{ asset('images/food1.jpeg') }}" alt="Category 3" class="category-image"></a>
                        <p><a href="#">Desserts</a></p>
                    </td>
                    <td class="category-cell">
                        <a href="#"><img src="{{ asset('images/food1.jpeg') }}" alt="Category 4" class="category-image"></a>
                        <p><a href="#">Salads</a></p>
                    </td>
                </tr>
                <tr>
                    <td class="category-cell">
                        <a href="#"><img src="{{ asset('images/food1.jpeg') }}" alt="Category 5" class="category-image"></a>
                        <p><a href="#">Soups</a></p>
                    </td>
                    <td class="category-cell">
                        <a href="#"><img src="{{ asset('images/food1.jpeg') }}" alt="Category 6" class="category-image"></a>
                        <p><a href="#">Beverages</a></p>
                    </td>
                    <td class="category-cell">
                        <a href="#"><img src="{{ asset('images/food1.jpeg') }}" alt="Category 7" class="category-image"></a>
                        <p><a href="#">Snacks</a></p>
                    </td>
                    <td class="category-cell">
                        <a href="#"><img src="{{ asset('images/food1.jpeg') }}" alt="Category 8" class="category-image"></a>
                        <p><a href="#">Breakfast</a></p>
                    </td>
                </tr>
                <tr>
                    <td class="category-cell">
                        <a href="#"><img src="{{ asset('images/food1.jpeg') }}" alt="Category 9" class="category-image"></a>
                        <p><a href="#">Vegan</a></p>
                    </td>
                    <td class="category-cell">
                        <a href="#"><img src="{{ asset('images/food1.jpeg') }}" alt="Category 10" class="category-image"></a>
                        <p><a href="#">Gluten-Free</a></p>
                    </td>
                    <td class="category-cell">
                        <a href="#"><img src="{{ asset('images/food1.jpeg') }}" alt="Category 11" class="category-image"></a>
                        <p><a href="#">Quick Meals</a></p>
                    </td>
                    <td class="category-cell">
                        <a href="#"><img src="{{ asset('images/food1.jpeg') }}" alt="Category 12" class="category-image"></a>
                        <p><a href="#">Family Meals</a></p>
                    </td>
                </tr>
                <tr>
                    <td class="category-cell">
                        <a href="#"><img src="{{ asset('images/food1.jpeg') }}" alt="Category 13" class="category-image"></a>
                        <p><a href="#">Seafood</a></p>
                    </td>
                    <td class="category-cell">
                        <a href="#"><img src="{{ asset('images/food1.jpeg') }}" alt="Category 14" class="category-image"></a>
                        <p><a href="#">Grilling</a></p>
                    </td>
                    <td class="category-cell">
                        <a href="#"><img src="{{ asset('images/food1.jpeg') }}" alt="Category 15" class="category-image"></a>
                        <p><a href="#">Italian</a></p>
                    </td>
                    <td class="category-cell">
                        <a href="#"><img src="{{ asset('images/food1.jpeg') }}" alt="Category 16" class="category-image"></a>
                        <p><a href="#">Mexican</a></p>
                    </td>
                </tr>
            </tbody>
        </table>
    </section>

@endsection
