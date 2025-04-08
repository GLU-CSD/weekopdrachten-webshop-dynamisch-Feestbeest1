<section id="home">
        <h2>Welcome to our webshop</h2>
        <section class="hero">  
            <a href="shop.html" class="all">Shop All</a>
        </section>
    </section>

    <div id="filterForm">  
    <div class="filter-group">
        <label for="category">Categorie:</label>
        <select id="category">
            <option value="all">Alle producten</option>
            <option value="Freeweight">Freeweight</option>
            <option value="gymmachines">Gym Machines</option>
        </select>
    </div>

    <div class="filter-group">
        <label for="min_price">Min. Prijs:</label>
        <input type="number" id="min_price" placeholder="€0">
    </div>

    <div class="filter-group">
        <label for="max_price">Max. Prijs:</label>
        <input type="number" id="max_price" placeholder="€1000">
    </div>

    <button type="button" id="resetFilters">Reset</button>
</div>


