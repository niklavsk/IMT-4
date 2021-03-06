@extends('master')
@push('title')
    Interesting places where you can find a lot of stray cats
@endpush

@push('description')
    Pack your bag and travel to the most interesting places where you can find a lot of stray cats and even pet them!
@endpush

@push('head')
<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "Items": [
      {
        "@type": "Movie",
        "name": "The Island of Cats",
        "dateCreated": "2019",
        "url": "https://kadikis.id.lv/interesting-places-to-see-stray-cats",
        "image": "https://kadikis.id.lv//images/the island of cats.jpg",
        "director": {
        	"@type": "Person",
            "name": "Mitsuaki Iwago"
        },
		"aggregateRating": {
             "@type": "AggregateRating",
             "ratingValue": "6.4",
             "bestRating": "10",
             "ratingCount": "240"
        }
		},
        {
        "@type": "Place",
        "name": "The Ernest Hemingway Home and Museum",
        "address": {
                  "@type": "PostalAddress",
                  "addressCountry": "USA",
                  "addressRegion": "Florida",
                  "postalCode": "FL 33040",
                  "streetAddress":"907 Whitehead St, Key West, FL 33040",
                  "contactOption": "+1 305-294-1136",
                  "contactType": "Phone",
                  "hoursAvailable": {
                      "@type": "OpeningHoursSpecification",
                      "opens": "09:00:00",
                      "closes": "17:00:00",
                      "dayOfWeek": "Monday Tuesday Wednesday Thursday Friday Saturday Sunday"
                  }
              },
          "geo": {
                  "@type": "GeoCoordinates",
                  "latitude": "25.551",
                  "longitude": "181.80"
              }
          }
         ]

   	}
</script>
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
          "itemListElement": [{
            "@type": "ListItem",
            "position": 1,
            "name": "Articles",
            "item": "https://kadikis.id.lv/articles"
          },{
            "@type": "ListItem",
            "position": 2,
            "name": "Destinations",
            "item": "https://kadikis.id.lv/articles/destinations"
          }]
    }
</script>
@endpush
@push('content')
<h1>Interesting places where you can find a lot of stray cats</h1>

<!-- wp:paragraph -->
<p>There are many places all around the world that are known to be populated by a lot of stray cats and people flock to these locations just to say hi to the little furry animals. Many places have a lot of stray cats due to their rich history like the fishing villages in Japan where stray cats are cared for. Other places like Hemingway's Home is known for having a lot of cats with unique traits - read more to find out!</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3><strong>Tashirojima, Japan</strong></h3>
<!-- /wp:heading -->

<!-- wp:image {"id":49,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="{{ url('/images/interesting-places-1.jpg') }}" alt="Stray Cats on the Tashirojima Cat Island in Japan" class="half-width"/><figcaption>Cats on a sunny day on the Tashirojima </figcaption></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p>Tashiro Island is a small rural island in Japan, known for its large stray cat population - several hundred! It is known as a "Cat Island" and attracts many tourists with its cat-themed camping site and a shrine dedicated to cats.</p>
<!-- /wp:paragraph -->

<!-- wp:gallery {"linkTo":"none"} -->
<figure class="wp-block-gallery has-nested-images columns-default is-cropped"><!-- wp:image {"id":51,"sizeSlug":"large","linkDestination":"none"} -->
    <figure class="wp-block-image size-large"><img src="{{ url('/images/interesting-places-2.jpg') }}" alt="A cat next to the cat shrine on the Tashirojima Island" class="half-width"/></figure>
    <!-- /wp:image --><figcaption class="blocks-gallery-caption">Cat sitting near the cat shrine on the Tashirojima</figcaption></figure>
<!-- /wp:gallery -->

<!-- wp:paragraph -->
<p>Cats are well cared-for since the locals believe that caring for them brings good luck and fortune. Tashirojima is the most well-known "cat island" even though Japan has several other little islands that are known for its large amount of cats, outnumbering the human population. Other islands include Aoshima, Manabeshima, Enoshima and others with 11 islands in total. The cat islands are such a staple there are many movies - both documental and fictional - made about them like <a href="https://www.imdb.com/title/tt8845988/"> the heartwarming The Island of Cats movie</a></p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":49,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="{{ url('/images/the island of cats.jpg') }}" alt="The Island of Cats movie poster" class="half-width"/></figure>
<!-- /wp:image -->
<!-- wp:paragraph -->
<p>The movie takes place on a small island that is populated with many cats. The main character is a seventy-year-old widowed man named Daikichi lives on a small island with his beloved pet cat.</a></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3>The Ernest Hemingway Home and Museum in Key West, Florida</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>The Ernest Hemingway home and museum is a home for a lots of six-toed cats that are all descendants of the one - Snow White, that was a gift to the writer from the captain of a ship. All of the cats living there are named after some famous people.</p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":106,"sizeSlug":"large","linkDestination":"custom"} -->
<figure class="wp-block-image size-large"><a href="https://www.nytimes.com/2017/09/11/us/hemingway-cats-irma.html"><img src="{{ url('/images/interesting-places-3.jpg') }}" alt="Six-toed cats near the Hemingway home-museum" class="half-width"/></a><figcaption>Cats near the Hemingway home</figcaption></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3} -->
<h3>Torre Argentina Cat Sanctuary In Rome, Italy</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>This is a famous cat shelter in Rome. Here you can meet a lot of (more than 100) feral cats. </p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>A lot of voluneers are currently working there, but the help is always necessary!</p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":107,"sizeSlug":"large","linkDestination":"custom"} -->
<figure class="wp-block-image size-large"><a href="https://www.tickitaly.com/blog/2021/02/meet-the-torre-argentina-cat-sanctuary/"><img src="{{ url('/images/interesting-places-4.jpg') }}" alt="Feral cats in a cat sanctuary in the center of Rome, Italy" class="half-width"/></a><figcaption>Rome Cats - Torre Argentina Cat Sanctuary</figcaption></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p>You can visit these locatitons with friends and family a lot of times throughout the year. Stray cats will almost always be happy to see you, but remember that you have to be respectful.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3>The former mining town of Houtong, Taiwan</h3>
<!-- /wp:heading -->

<!-- wp:image {"id":125,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="{{ url('/images/interesting-places-5.jpg') }}" alt="Cats eating in the streets of Houtong" class="half-width"/><figcaption>Cats here are used to amateur paparazzi</figcaption></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p>The riverside town of Houtong, Taiwan, fell into feline celebrity by accident. Houtong once sat on top of Taiwan's largest coal mine. When the mine closed in the 1990s, the town's population dwindled. Then some new, furry residents arrived.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>The Houtong Coal Mine Ecological Park (<em>Houtong Road, Ruifang District, New Taipei City; +886 2 2497 4143</em>) was established to showcase the mining heritage of the town and surrounding hills. But visitors mostly come to photograph the 120 or so playful stray cats, who laze around the Cat Village and soak up the fuss - and inevitable treats.</p>
<!-- /wp:paragraph -->
@endpush
