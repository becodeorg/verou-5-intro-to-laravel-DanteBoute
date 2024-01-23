@include('header')

<main>
    <section>
        <h2>Welcome to Your TV Series Homepage!</h2>
        <p>Discover and explore your favorite TV series here.</p>
        
        <h3>Featured TV series</h3>
        <div class="series-container">
            <!-- Example series card, you can duplicate and modify as needed -->
            <div class="series-card">
                <h4><a href="series/sherlock">Sherlock</a></h4>
                <img src="{{ asset('images/Sherlock.png') }}" alt="Sherlock Poster">
                
                <p>A modern adaptation of Sir Arthur Conan Doyle's classic detective stories, "Sherlock" 
                    follows the brilliant but eccentric detective 
                    Sherlock Holmes and his loyal friend Dr. John Watson as they solve complex 
                    crimes in contemporary London.</p>
            </div>
<hr>
            <div class="series-card">
                <h4><a href="series/got">Game of Thrones</a></h4>
                <img src="{{ asset('images/GOT.png') }}" alt="GOT poster">
                
                <p>Based on George R.R. Martin's "A Song of Ice and Fire" novels, "Game of Thrones" is an epic 
                    fantasy series set in the mythical land of Westeros. It explores the power struggles, 
                    political intrigue, and battles for the Iron Throne among noble families, 
                    with a backdrop of dragons, magic, and a looming threat from the North.</p>
            </div>

            <!-- Add more series cards as needed -->
        </div>
        <hr>
    </section>

    <section>
        <h3>About Your TV Series Website</h3>
        <p>
            Welcome to the ultimate destination for TV series enthusiasts! 
            Explore a curated collection of your favorite series and discover new ones.
            Our mission is to provide a delightful experience for all the binge-watchers out there.
        </p>
    </section>
</main>

@include('footer')