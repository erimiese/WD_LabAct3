@extends('Components.Layout')

@section('title', 'Recipe')

@section('header', 'Recipe')

@section('content')
    <section class="recipe-section">
        <!-- Recipe Header -->
        <div class="recipe-header">
            <h1>Spaghetti with Tomato Sauce</h1>
            <p>Spaghetti with a simple yet flavorful tomato sauce. Perfect for a quick meal!</p>
        </div>

        <!-- New Section: What is Spaghetti? -->
        <div class="recipe-description">
            <h2>What is <span class="highlight-title">Spaghetti</span>?</h2>
            <p>
                Spaghetti is a long, thin, cylindrical pasta of Italian origin. It is one of the most popular types of pasta 
                and is typically made from wheat flour and water. Served with a variety of sauces, it is a versatile dish 
                that can be enjoyed in numerous ways, from simple tomato sauces to complex seafood-based recipes. 
                Spaghetti is a staple in Italian cuisine and beloved worldwide for its simplicity and adaptability.
            </p>
        </div>

        <!-- Recipe Content -->
        <div class="recipe-content">
            <!-- Image of the Recipe -->
            <div class="recipe-image">
                <img src="/images/simple-spaghetti.jpeg" alt="Spaghetti with Tomato Sauce">
            </div>

            <!-- Recipe Details -->
            <div class="recipe-details">
                <h2><span class="highlight-title">Ingredients</span> :</h2>
                <ul>
                    <li>200g of spaghetti</li>
                    <li>2 tbsp olive oil</li>
                    <li>2 cloves garlic, minced</li>
                    <li>400g canned tomatoes</li>
                    <li>Salt and pepper to taste</li>
                    <li>Fresh basil leaves (optional)</li>
                    <li>Grated Parmesan (optional)</li>
                </ul>

                <h2><span class="highlight-title">How to make it</span> :</h2>
                <ol>
                    <li>Cook the spaghetti according to package instructions.</li>
                    <li>In a pan, heat the olive oil and sauté the garlic until fragrant.</li>
                    <li>Add the canned tomatoes, salt, and pepper. Simmer for 10 minutes.</li>
                    <li>Toss the cooked spaghetti in the sauce and serve with fresh basil and Parmesan.</li>
                </ol>
            </div>
        </div>

        <!-- Recipe Nutrition Info -->
        <div class="recipe-nutrition">
            <h2>Nutrition Info (per serving):</h2>
            <ul>
                <li>Calories: 400 kcal</li>
                <li>Carbohydrates: 60g</li>
                <li>Protein: 10g</li>
                <li>Fat: 10g</li>
                <li>Fiber: 4g</li>
                <li>Sodium: 300mg</li>
            </ul>
        </div>
    </section>
@endsection
