<section class="hero bg-gradient-to-r from-gray-200 to-blue-500 text-white py-16">
	<div class="container mx-auto text-center">
		<h1 class="text-4xl md:text-5xl font-semibold mb-4">Discover a World of Art</h1>
		<p class="text-lg md:text-xl mb-6">Explore our curated collection of exquisite art pieces.</p>
		<a href="/shop" class="bg-white text-blue-500 hover:bg-blue-500 hover:text-white py-2 px-6 rounded-full text-lg md:text-xl transition duration-300 ease-in-out transform hover:scale-105 inline-block">Explore More</a>
	</div>
</section>

<?php if(! empty($artpieces) && is_array($artpieces)): ?>
<section class="py-12" id="art-listings">
	<div class="container mx-auto">
		<h2 class="text-blue-500 text-3xl font-semibold mb-4">Explore Unique Art Pieces</h2>
		<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
		<?php foreach($artpieces as $art_item): ?>	
			<div class="bg-white p-4 rounded-lg shadow-md">
				<img src="<?php echo base_url('assets/images/'. $art_item['image_url']); ?>" alt="<?php echo $art_item['title']; ?>" class="w-full h-auto rounded">
				<h3 class="text-xl font-semi-bold mt-2"><?= $art_item['title'] ?></h3>
				<p class="text-gray-700 mt-2"><?= $art_item['description'] ?></p>
			</div>
		<?php endforeach ?>
		</div>
	</div>
</section>
<?php endif ?>

<section id="about-me" class="py-12">
	<div class="container mx-auto">
		<h2 class="text-blue-500 text-3xl font-semibold mb-4">About Me</h2>
		<p class="text-gray-700">Welcome to Creative Art Gallery! Hello! I'm [Your Name], an avid art enthusiast with a deep passion for both creating and trading art pieces. For as long as I can remember, the world of art has been my canvas of inspiration. I'm an artist at heart, channeling my creativity into various mediums, from vibrant paintings to intricate sculptures. Each piece I create is a reflection of my journey and emotions, capturing the essence of the human experience.</p>
<p class="text-gray-700">Beyond my artistic endeavors, I'm actively involved in the art trading community. My love for art extends to curating collections, discovering emerging talents, and engaging in vibrant discussions with fellow art lovers. Whether I'm exploring the latest exhibitions or curating my own collection, art is an integral part of my life. I invite you to join me in celebrating the transformative power of art, whether as a creator, collector, or fellow enthusiast. Explore my gallery and discover the world of creativity.</p>

	</div>
</section>

<section id="contact-me" class="bg-gray-200 py-12">
	<div class="container mx-auto">
		<h2 class="text-blue-500 text-3xl font-semibold mb-4">Contact Me</h2>
		<p class="text-gray-700">Have questions or want to discuss a custom art commission? Feel free to send me a message using the contact form below:</p>
		<form id="contact-form" action="/submit" method="post">
			<!-- Include form fields for name, email, message, etc. -->
		</form>
	</div>
</section>

<section id="testimonials" class="py-12">
	<div class="container mx-auto">
		<h2 class="text-blue-500 text-3xl font-semibold mb-4">What People Are Saying</h2>
		<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
			<div class="bg-white p-6 rounded-lg shadow-md ">
				<p class="text-gray-700">"I'm in awe of the talent and creativity exhibited in these artworks. Truly exceptional!"</p>
				<p class="text-gray-500 mt-4">- John Doe</p>
			</div>
			<div class="bg-white p-6 rounded-lg shadow-md">
				<p class="text-gray-700">"Each piece tells a story and evokes emotions. I'm a proud owner of several artworks from this gallery."</p>
				<p class="text-gray-500 mt-4">- Jane Smith</p>
			</div>
		</div>
	</div>
</section>

