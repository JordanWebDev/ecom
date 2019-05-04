<?php
use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //BEER
        Product::create([
            'name' => 'Bud Light',
            'image' => 'https://ibb.co/grJy0qY',
            'details' => 'Region: Missouri - United States, ABV(alcoholByVolumne): 4.2% ',
            'price' => '509',
            'description' => 'Introduced in 1982, Bud Light is a premium light lager
                                with a superior drinkability that has made it the best-selling
                                and most popular beer in the United States. Bud Light is brewed
                                using a blend of premium aroma hop varieties, both American-grown
                                and imported, and a combination of barley malts and rice.
                                The light-bodied beer features a fresh, clean and subtle hop aroma,
                                delicate malt sweetness and a crisp finish that delivers the ultimate
                                refreshment. Brewed in the U.S.A. 4.2% alcohol by volume.',
        ]);

        Product::create([
            'name' => 'Corona Extra',
            'image' => 'https://ibb.co/0BmRmDM',
            'details' => 'Region: Mexico, ABV(alcoholByVolumne): 4.6%',
            'price' => '509',
            'description' => 'A staple at everything from summer beach parties to
                                everyday occasions, Corona Extra is a pilsner-type Mexican
                                beer with a slightly sweet taste and a dash of citrus. Hints
                                of lemon and ginger round out the flavor for a crisp and firm
                                taste. Corona Extra was first introduced in the U.S. in 1981,
                                and became the fastest growing imported beer in U.S. history.
                                Corona Extra has been brewed and bottled in Mexico since 1925,
                                and is the #1 selling imported beer in the U.S. For serving,
                                try adding a fresh wedge of lime to bring out the citrus flavors.
                                We recommend enjoying this simple brew from the bottle (or can),
                                and if possible on a beach somewhere.',
        ]);

        Product::create([
            'name' => 'Stella Artois',
            'image' => 'https://ibb.co/BnNqbzd',
            'details' => 'Region: Belgium, ABV(alcoholByVolumne): 5%',
            'price' => '504',
            'description' => 'Enjoy the European way with the #1 best-selling Belgian beer
                                in the world. With its wonderful floral aroma, well-balanced malt sweetness,
                                crisp hop bitterness and soft dry finish, Stella Artois is the perfect beer to
                                pair with food and friends. Serve in its signature glass chalice to enhance flavor
                                and aroma. Brewed in Belgium. Pairs well with steak, mussels, and chocolate desserts.
                                5% alcohol by volume.
',
        ]);
        //WINE
        Product::create([
            'name' => 'Apothic Red',
            'image' => 'https://ibb.co/NNpd8tS',
            'details' => 'Region: California - United States, ABV(alcoholByVolumne): 13.5%',
            'price' => '1894',
            'description' => 'Defy convention. Apothic Red is a masterful blend of intense flavors
                                and luscious texture creates a truly unique experience. Zinfandel lends notes of dark
                                fruit and subtle spice while Merlot and Syrah bring hints of black fruit and a smooth
                                mouthfeel. They are complemented by Cabernet Sauvignon that contributes a firm structure
                                and bold flavors. All of the varietals combine to offer layers of dark fruit that are enhanced
                                by soft vanilla and mocha tones leading to a soft, lasting finish.',
        ]);

        Product::create([
            'name' => 'Barefoot Pinot Grigio',
            'image' => 'https://ibb.co/QnScGtC',
            'details' => 'Region: California - United States, ABV(alcoholByVolumne): 12.4%',
            'price' => '1300',
            'description' => 'Tart green apple flavors get down with a white peach undertone.
                                Floral blossoms and citrus aromas do the tango. Barefoot’s Pinot
                                Grigio is light-bodied with a bright finish.',
        ]);

        Product::create([
            'name' => 'Veuve Clicquot Brut Yellow Label',
            'image' => 'https://ibb.co/R3gDnd8',
            'details' => 'Region: Champagne - France, ABV(alcoholByVolumne): 12%',
            'price' => '999',
            'description' => 'Veuve Clicquot Yellow Label Champagne is the signature champagne of the House.
                                Dominated by Pinot Noir, it offers a perfect balance of structure and finesse.
                                Grapes from as many as 50 to 60 different Crus go to the blending of Yellow Label.

                                Traditionally, the proportion of each grape variety used is 50 to 55% Pinot Noir,
                                15 to 20% Meunier and 28 to 33% Chardonnay. These figures vary slightly from year to
                                year according to conditions.

                                Cellar Master Dominique Demarville has to achieve the consistency that makes Yellow
                                Label so immediately recognizable, so utterly reliable both in terms of quality, color
                                and bouquet.

                                He will draw on priceless reserve wines for the blend: from 30 to 45% to ensure the continuity
                                of the House’s style. All wines are kept separately to preserve the unique qualities of their
                                vineyard and / or vintage.

                                This product may be available in a gift box depending upon retailer availability. Please contact
                                customer support with any questions. ',
        ]);
        //LIQUOR
        Product::create([
            'name' => 'Bulleit Bourbon',
            'image' => 'https://ibb.co/CbTsxQm',
            'details' => 'Region: Kentucky - United States, ABV(alcoholByVolumne): 45.6%',
            'price' => '1699',
            'description' => 'Bulleit Bourbon Whiskey allows you to savor the complex flavor and warm finish
                                inspired by the whiskey pioneered by Augustus Bulleit 150 years ago. With its
                                amber color and oaky aroma, our aged whiskey makes a good first impression before
                                its even opened. The flavor profile of our bourbon whiskey combines hints of maple,
                                oak and nutmeg for a dry, well-balanced finish that lingers long after the final sip.
                                Simply combine our bourbon whiskey with cloves, lemon juice, brown sugar and hot water
                                for a comforting Hot Toddy.

                                Bulleit Bourbon is still distilled and aged in the Bulleit family tradition. High rye
                                content gives it a bold, spicy character with a distinctively smooth, clean finish.
                                Kentucky limestone-filtered water provides a foundation for the bourbons character,
                                while charred American oak barrels lend a smoky backbone. Please drink responsibly.',
        ]);

        Product::create([
            'name' => 'Smirnoff No. 21 Vodka',
            'image' => 'https://ibb.co/RzvPNnj',
            'details' => 'Region: United States, ABV(alcoholByVolumne): 40%',
            'price' => '1499',
            'description' => 'Whether you sip it on the rocks or with soda and a twist, Smirnoff No. 21 is the
                                perfect addition to a cocktail party. Our award-winning, 80 proof vodka has robust
                                flavor with a dry finish for ultimate smoothness and clarity.

                                Triple distilled and 10 times filtered, our vodka traditionally can be taken alone or
                                added to your favorite mixed drink. Simply mix with ginger beer and lime juice for a
                                classic Moscow Mule.

                                Founded in 1864, the Smirnoff brand traveled from Russia to the rest of the world due
                                to our award-winning quality and smooth liquid. We pride ourselves on bringing our famous
                                beverage to connoisseurs and newcomers alike, assuring the consistently great taste and
                                quality expected from our traditionally distilled vodka. Please drink responsibly.',
        ]);

        Product::create([
            'name' => 'Don Julio Blanco',
            'image' => 'https://ibb.co/YpHT9fH',
            'details' => 'Region: Mexico, ABV(alcoholByVolumne): 40%',
            'price' => '3299',
            'description' => 'Using the finest blue agave plant and a time honored distillation process,
                                Don Julio Blanco is tequila in its truest form. Double-distilled agave to achieve a clean and
                                dry finish. Blanco is the base of all Don Julio aged tequilas. Gluten-free & Kosher.
                                Sip it neat or in a Don Julio Luxury margarita.',
        ]);
        //SODA
        Product::create([
            'name' => 'Diet Coke',
            'image' => 'https://ibb.co/QXS6n2Z',
            'details' => 'Region: United States',
            'price' => '229',
            'description' => 'Diet Coke® is a delicious, crisp tasting, no calorie sparkling cola
                                that gives you the refreshment you want throughout the day. It’s the
                                original sparkling beverage for those who want great flavor without
                                the calories - a drink for those with great taste.',
        ]);

        Product::create([
            'name' => 'Coca Cola',
            'image' => 'https://ibb.co/zx5svbg',
            'details' => 'Region: United States',
            'price' => '229',
            'description' => 'Bring home the refreshing taste of Coca-Cola. Serve ice cold for maximum refreshment.',
        ]);

        Product::create([
            'name' => 'Canada Dry Ginger Ale',
            'image' => 'https://ibb.co/JnFTv0d',
            'details' => 'Region: Canada',
            'price' => '229',
            'description' => 'Any time is a great time for the crisp goodness of Canada Dry Ginger Ale. Never skimping
                                on quality, Canada Dry Ginger Ale offers refreshingly real ginger taste thats made from
                                real ginger and is caffeine free. Enhance your favorite cocktails with a sparkling splash
                                of Canada Dry or enjoy by itself for crisp, clean refreshment. Creating quality beverages
                                and mixers since 1904, enjoy the best in refreshment with Canada Dry.',
        ]);
    }
}
